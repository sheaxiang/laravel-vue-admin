<?php

namespace SheaXiang\LaravelAdmin\Controllers\Api\Admin;

use SheaXiang\LaravelAdmin\Models\AdClass;
use SheaXiang\LaravelAdmin\Traits\CrudTraits;

class AdClassController extends BaseController
{
    use CrudTraits;

    protected $model = AdClass::class;
    protected $name = "广告分类";
}
