<?php

namespace SheaXiang\LaravelAdmin\Controllers\Api\Admin;


use SheaXiang\LaravelAdmin\Models\Ad;
use SheaXiang\LaravelAdmin\Traits\CrudTraits;

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
