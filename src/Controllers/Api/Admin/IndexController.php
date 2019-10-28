<?php

namespace SheaXiang\LaravelVueAdmin\Controllers\Api\Admin;

use SheaXiang\LaravelVueAdmin\Models\AdminUser;

class IndexController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return succeed([
            'admin_user_count' => AdminUser::count()
        ]);
    }
}
