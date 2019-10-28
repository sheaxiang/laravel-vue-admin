<?php

namespace SheaXiang\LaravelVueAdmin\Controllers\Api\Admin;

use Illuminate\Http\Request;
use SheaXiang\LaravelVueAdmin\Models\Article;
use SheaXiang\LaravelVueAdmin\Models\Image;

class ArticleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Article::with( 'column')->OrderBy('created_at','desc');

        if($request->title) {
            $query->where('title', 'like', '%'.$request->title.'%');
        }

        return succeed($request->page_size ? $query->paginate((int)$request->page_size) : $query->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if (!isset($data['release_date'])) {
            $data['release_date'] = date('Y-m-d H:i:s');
        }

        $info = Article::create($data);

        if($request->image_ids) {//如果有图片,则绑定
            Image::whereIn('id', $request->image_ids)->update(['master_id'=>$info->id]);
        }

		return succeed('添加文章成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		return succeed(Article::with('image', 'column')->findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$info = Article::findOrFail($id);

        $data = $request->all();

        if (!isset($data['release_date'])) {
            $data['release_date'] = date('Y-m-d H:i:s');
        }

		$info->update($data);

        if($request->image_ids) {//如果有图片,则绑定
            Image::whereIn('id', $request->image_ids)->update(['master_id'=>$info->id]);
        }

		return succeed('修改文章成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$info = Article::findOrFail($id);

		$info->delete();

		return succeed('删除文章成功');
    }
}
