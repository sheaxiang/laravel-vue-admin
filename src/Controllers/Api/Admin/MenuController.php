<?php

namespace SheaXiang\LaravelAdmin\Controllers\Api\Admin;

use Illuminate\Http\Request;
use SheaXiang\LaravelAdmin\Models\Menu;
use Spatie\Permission\Models\Role;

class MenuController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return succeed(Menu::orderBy('order', 'desc')->get()->toTree());
    }

	public function default_list()
	{
		return succeed(Menu::where('parent_id', null)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		Menu::create($this->formatData($request))->roles()->sync($request->roles ? : []);

		return succeed('添加菜单成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		return succeed(Menu::with('roles')->findOrFail($id));
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
		$info = Menu::findOrFail($id);

		$info->update($this->formatData($request));

		$info->roles()->sync($request->roles ? : []);

		return succeed('修改菜单成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$info = Menu::findOrFail($id);

		$info->delete();

		return succeed('删除菜单成功');
    }

	public function formatData($request)
	{
		$data = $request->except('roles');
		$roles = $request->roles ? array_column(Role::whereIn('id', $request->roles)->get()->toArray(), 'name') : [];

		$data['meta'] = ['title' => $request->title,'icon' => $request->icon, 'noCache' => $request->noCache, 'roles' => $roles];

		return $data;
    }
}
