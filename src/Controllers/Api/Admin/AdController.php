<?php

namespace SheaXiang\LaravelVueAdmin\Controllers\Api\Admin;


use SheaXiang\LaravelVueAdmin\Models\Ad;
use SheaXiang\LaravelVueAdmin\Traits\CrudTraits;

class AdController extends BaseController
{
    use CrudTraits;

    protected $model = Ad::class;
    protected $name = "广告";

    public function show($id)
    {
        return dingoSucceed($this->model::with('image')->findOrFail($id));
    }
}
