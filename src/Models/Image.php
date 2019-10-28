<?php

namespace SheaXiang\LaravelVueAdmin\Models;


class Image extends BaseModel
{
    protected $fillable = ['name', 'type', 'master_id', 'url', 'root_url'];

	public function getUrlAttribute($value)
	{
		return asset($value);
    }
}
