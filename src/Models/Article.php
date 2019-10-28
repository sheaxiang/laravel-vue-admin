<?php

namespace SheaXiang\LaravelVueAdmin\Models;

use Carbon\Carbon;

class Article extends BaseModel
{
    //todo  加删除
    protected $fillable = [
        'column_id',
        'title',
        'subtitle',
        'view_number',
        'release_date',
        'link',
        'content',
        'is_index',
        'introduction'
    ];
    protected $casts = [
        'is_index' => 'boolean',
    ];

    protected $appends = [
        'release_date_to_date'
    ];

	/*public function getCreatedAtAttribute($date)
	{
		if (Carbon::now() > Carbon::parse($date)->addDays(10)) {
			return Carbon::parse($date)->toDateString();
		}
		return Carbon::parse($date)->diffForHumans();
	}*/

    public function getReleaseDateToDateAttribute()
    {
        return Carbon::parse($this->release_date)->toDateString();
    }

    public function image()
    {
        return $this->hasone('App\Models\Image','master_id','id')->where('type', 'article')->orderBy('created_at', 'desc');
    }

    public function column()
    {
        return $this->belongsTo('App\Models\Column');
    }
}
