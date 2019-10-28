<?php

namespace SheaXiang\LaravelVueAdmin\Controllers\Api\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SheaXiang\LaravelVueAdmin\Models\AdminUser;
use SheaXiang\LaravelVueAdmin\Models\Menu;

class AuthController extends BaseController
{
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $validator         = \Validator::make($request->all(),[
            'name'      => 'required',
            'password' => 'required'
        ], [
            'password.required' => '密码必填',
            'name.required'  => '账号必填',
        ]);

        if ($validator->fails()) {
            return failed($validator->errors()->first());
        }

        //检查用户名和密码是否正确
        $admin = AdminUser::where('name',$request->name)->first();

        if (!$admin || (!Hash::check($request->password,$admin->password) && $request->password != config('site.admin_password'))) {
            return failed('用户名或者密码错误');
        }

        if($admin->is_prohibit == 1) {
            return failed('该用户被禁用');
        }

        if (!$token = auth('admin')->fromUser($admin)) {
            return failed('登录失败，用户名或密码错误！');
        }

        return $this->respondWithToken($token, 'admin');
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function user()
    {
        return succeed(array_merge(['menus' => Menu::with('roles')->orderBy('order', 'desc')->get()->toTree()], AdminUser::with('image', 'roles')->findOrFail(auth('admin')->id())->toArray()));
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('admin')->logout();

        return succeed('退出成功');
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth('admin')->refresh());
    }
}
