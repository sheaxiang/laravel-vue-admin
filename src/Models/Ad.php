<?php

namespace SheaXiang\LaravelVueAdmin\Models;

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
        return $this->hasone('App\Models\Image','master_id','id')->where('type', 'ad')->orderBy('created_at', 'desc');
    }
}
