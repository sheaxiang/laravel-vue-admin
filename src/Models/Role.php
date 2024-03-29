<?php

namespace SheaXiang\LaravelAdmin\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends \Spatie\Permission\Models\Role
{
    public function menus(): BelongsToMany
    {
        return $this->belongsToMany('SheaXiang\LaravelAdmin\Models\Menu');
    }
}
