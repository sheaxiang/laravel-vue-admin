<?php

namespace SheaXiang\LaravelAdmin\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Line extends BaseModel
{
    use SoftDeletes;

    protected $fillable = [
		'name',
        'event_id',
        'content',
        'money',
        'is_distribution'
	];

    protected $dates = ['deleted_at'];

    public function image()
    {
        return $this->hasone('App\Models\Image','master_id','id')->where('type', 'line')->orderBy('created_at', 'desc');
    }

    public function clock()
    {
        return $this->hasMany('App\Models\Clock','line_id','id')->orderBy('order');
    }

    public function user()
    {
        return $this->hasMany('App\Models\EventUser');
    }

    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }

    public function integralRecord()
    {
        return $this->hasMany('App\Models\IntegralRecord')->orderByDesc('created_at');
    }
}
