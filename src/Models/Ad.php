<?php

namespace SheaXiang\LaravelAdmin\Models;

class Ad extends BaseModel
{
    protected $fillable = [
		'name',
		'link',
        'order',
        'ad_class_id'
	];

    public function image()
    {
        return $this->hasone('SheaXiang\LaravelAdmin\Models\Image','master_id','id')->where('type', 'ad')->orderBy('created_at', 'desc');
    }
}
