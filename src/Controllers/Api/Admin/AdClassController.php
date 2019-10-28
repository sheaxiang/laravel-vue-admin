<?php

namespace SheaXiang\LaravelVueAdmin\Controllers\Api\Admin;

use SheaXiang\LaravelVueAdmin\Models\AdClass;
use SheaXiang\LaravelVueAdmin\Traits\CrudTraits;

class AdClassController extends BaseController
{
    use CrudTraits;

    protected $model = AdClass::class;
    protected $name = "广告分类";
}
