<?php

namespace SheaXiang\LaravelAdmin\Controllers\Api\Admin;

use SheaXiang\LaravelAdmin\Models\AdminUser;

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
