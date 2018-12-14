<?php

namespace Modules\Menu\Entities;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'title',
        'type',
        'description',
        'parameters',
        'active'
    ];

    public function menuItems()
    {
    	return $this->hasMany(MenuItem::class);
    }

    public function addMenuItem($menuItem)
    {
        $this->menuItems()->create($menuItem);
    }
}
