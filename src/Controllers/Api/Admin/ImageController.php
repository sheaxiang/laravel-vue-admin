<?php

namespace SheaXiang\LaravelAdmin\Controllers\Api\Admin;

use Illuminate\Http\Request;
use SheaXiang\LaravelAdmin\Handles\ImageUploadHandles;
use SheaXiang\LaravelAdmin\Models\Image;

class ImageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return succeed(Image::OrderBy('created_at','desc')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ImageUploadHandles $imageUploadHandles)
    {
		$imageInfo = $imageUploadHandles->save($request->file('image'),$request->type, $request->max_width ?: '', $request->max_height ?: '');

		$info = Image::create([
			'name' => $imageInfo['name'],
			'type' => $request->type,
			'url' => $imageInfo['url'],
			'root_url' => $imageInfo['root_url'],
			'master_id' => $request->master_id ?? null
		]);

		return succeed($info);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		return succeed(Image::findOrFail($id));
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

		return succeed('修改图片成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		Image::destroy($id);

		return succeed('删除图片成功');
    }

	public function upload(Request $request, ImageUploadHandles $imageUploadHandles)
	{
		$imageInfo = $imageUploadHandles->save(array_values($request->file())[0],'wangEditor');

		return ['data' => [asset($imageInfo['url'])], 'errno' => 0];
    }
}
