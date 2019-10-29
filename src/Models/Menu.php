<?php

namespace SheaXiang\LaravelAdmin\Models;

use Kalnoy\Nestedset\NodeTrait;

class Menu extends BaseModel
{
	use NodeTrait;
    protected $fillable = [
    	'_lft',
		'_rgt',
		'parent_id',
		'path',
		'redirect',
		'alwaysShow',
		'name',
		'meta',
		'component',
		'remark',
		'hidden',
        'order',
        'parameter'
	];

	protected $casts = [
		'meta' => 'array',
		'alwaysShow' => 'boolean',
		'hidden' => 'boolean',
		'meta.noCache' => 'boolean',
		'noCache' => 'boolean',
        'props' => 'boolean'
	];

	public function roles()
	{
		return $this->belongsToMany('Spatie\Permission\Models\Role');
	}
}
