<?php

namespace SheaXiang\LaravelVueAdmin\Controllers\Api\Admin;

use App\Models\Role;
use Illuminate\Http\Request;
use SheaXiang\LaravelVueAdmin\Requests\StoreRole;

class RoleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$query = Role::orderBy('created_at', 'desc');

    	if($request->title) {
			$query->where('name', 'like', '%'.$request->title.'%');
		}

		return succeed($request->page_size ? $query->paginate((int)$request->page_size) : $query->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRole $request)
    {
		Role::create($request->except('menus'))->menus()->sync($request->menus ? : []);

		return succeed('添加角色成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		return succeed(Role::with(['menus' => function($query) {
            $query->select('name', 'id');
        }])->findOrFail($id));
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
    public function update(StoreRole $request, $id)
    {
		$info = Role::findOrFail($id);

		$info->update($request->except('menus'));
		$info->menus()->sync($request->menus ? : []);

		return succeed('修改角色成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$info = Role::findOrFail($id);

		$info->menus()->detach();
		$info->users()->detach();
		$info->delete();

		return succeed('删除角色成功');
    }
}
