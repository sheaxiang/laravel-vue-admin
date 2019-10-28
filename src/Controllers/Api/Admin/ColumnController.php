<?php

namespace SheaXiang\LaravelVueAdmin\Controllers\Api\Admin;

use Illuminate\Http\Request;
use SheaXiang\LaravelVueAdmin\Models\Column;
use SheaXiang\LaravelVueAdmin\Models\Image;

class ColumnController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return succeed(Column::orderBy('order', 'desc')->get()->toTree());
    }

	public function default_list()
	{
        return succeed(Column::orderBy('order', 'desc')->get()->toTree());
		//return succeed(Column::where(['parent_id'=>null])->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //todo  加路由
        $info = Column::create($request->all());

        if($request->image_ids) {//如果有图片,则绑定
            Image::whereIn('id', $request->image_ids)->update(['master_id'=>$info->id]);
        }

		return succeed('添加栏目成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		return succeed(Column::with('image')->findOrFail($id));
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
		$info = Column::findOrFail($id);

		$info->update($request->all());

        if($request->image_ids) {//如果有图片,则绑定
            Image::whereIn('id', $request->image_ids)->update(['master_id'=>$info->id]);
        }

		return succeed('修改栏目成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$info = Column::findOrFail($id);

		$info->delete();

		return succeed('删除栏目成功');
    }
}
