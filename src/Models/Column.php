<?php

namespace SheaXiang\LaravelVueAdmin\Models;

use Kalnoy\Nestedset\NodeTrait;

class Column extends BaseModel
{
	use NodeTrait;
    protected $fillable = [
    	'_lft',
		'_rgt',
		'parent_id',
		'content',
		'name',
		'hidden',
        'redirect_url',
        'order',
        'is_index'
	];

    protected $casts = [
        'hidden' => 'boolean',
        'is_index' => 'boolean',
    ];

    public function image()
    {
        return $this->hasone('App\Models\Image','master_id','id')->where('type', 'column')->orderBy('created_at', 'desc');
    }

    public function article()
    {
        return $this->hasMany('App\Models\Article');
    }
}
