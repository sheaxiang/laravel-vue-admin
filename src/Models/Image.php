<?php

namespace SheaXiang\LaravelAdmin\Models;


class Image extends BaseModel
{
    protected $fillable = ['name', 'type', 'master_id', 'url', 'root_url'];

	public function getUrlAttribute($value)
	{
		return asset($value);
    }
}
