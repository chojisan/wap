<?php

namespace Modules\Menu\Entities;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'menu_id',
        'title',
        'slug',
        'url',
        'level',
        'order',
        'parent_id',
        'type',
        'component_id',
        'icon',
        'img',
        'lft',
        'rgt',
        'parameters',
        'status'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
