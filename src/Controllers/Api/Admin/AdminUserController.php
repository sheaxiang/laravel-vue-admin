<?php

namespace SheaXiang\LaravelVueAdmin\Controllers\Api\Admin;

use Illuminate\Http\Request;
use SheaXiang\LaravelVueAdmin\Models\AdminUser;
use SheaXiang\LaravelVueAdmin\Models\Image;
use SheaXiang\LaravelVueAdmin\Requests\StoreAdminUser;

class AdminUserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$query = AdminUser::OrderBy('created_at','desc');

    	if($request->title) {
			$query->where('name', 'like', '%'.$request->title.'%');
		}

        if($request->is_prohibit) {
            $query->where('is_prohibit', $request->is_prohibit);
        }

		return succeed($request->page_size ? $query->paginate((int)$request->page_size) : $query->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminUser $request)
    {
		$data = $request->except('roles');

		$data['password'] = bcrypt($data['password']);

		$info = AdminUser::create($data);

		$info->syncRoles($request->roles ? : []);

		if($request->image_ids) {//如果有图片,则绑定
			Image::whereIn('id', $request->image_ids)->update(['master_id'=>$info->id]);
		}

		return succeed('添加管理员成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		return succeed(AdminUser::with('roles', 'image')->findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAdminUser $request, $id)
    {
		$data = $request->except('roles');

		if (!$data['password']) {
			unset($data['password']);
		} else {
			$data['password'] = bcrypt($data['password']);
		}

		$admin_user = AdminUser::findOrFail($id);

		if($request->image_ids) {//如果有图片,则绑定
			Image::whereIn('id', $request->image_ids)->update(['master_id'=>$admin_user->id]);
		}

		$admin_user->update($data);
		$admin_user->syncRoles($request->roles ? : []);

		return succeed('修改管理员成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$info = AdminUser::findOrFail($id);

		$info->roles()->detach();
		$info->delete();

		return succeed('删除管理员成功');
    }
}
