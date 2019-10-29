<?php

namespace  SheaXiang\LaravelAdmin\Traits;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait CrudTraits
{
    /**
     * 需定义字段  model  name
     * CrudTraits constructor.
     */
    public function __construct()
    {
        if (!isset($this->model) || ! new $this->model instanceof Model) {
            throw new NotFoundHttpException("model not find");
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = $this->model::orderBy('created_at', 'desc');

        $query = $this->index_before($request,$query);

        //todo  优化这
        $query->orderBy('created_at', 'desc');

        return succeed($request->page_size ? $query->paginate((int)$request->page_size) : $query->get());
    }

    public function index_before($request, $query)
    {
        return $query;
    }

    public function default_list()
    {
        return succeed($this->model::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = $this->model::create($request->all());

        if($request->image_ids) {//如果有图片,则绑定
            Image::whereIn('id', $request->image_ids)->update(['master_id'=>$info->id]);
        }

        return succeed("添加{$this->name}成功");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //todo  读取model依赖
        return succeed($this->model::findOrFail($id));
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
        $info = $this->model::findOrFail($id);

        $info->update($request->all());

        if($request->image_ids) {//如果有图片,则绑定
            Image::whereIn('id', $request->image_ids)->update(['master_id'=>$info->id]);
        }

        return succeed('修改成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = $this->model::findOrFail($id);

        $info->delete();

        return succeed('删除成功');
    }
}
