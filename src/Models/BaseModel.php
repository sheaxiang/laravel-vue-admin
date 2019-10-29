<?php

namespace SheaXiang\LaravelAdmin\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
	public function scopeWithOnly($query, $relation, Array $columns)
	{
		return $query->with([$relation => function ($query) use ($columns){
			$query->select(array_merge(['id'], $columns));
		}]);
	}
}
