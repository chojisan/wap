<?php

namespace Modules\Menu\Entities;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'title',
        'type',
        'description',
        'parameters'
    ];

    public function allMenuItems()
    {
    	return $this->hasMany(MenuItem::class);
    }

    public function menuItems()
    {
    	return $this->allMenuItems();
    }
}
