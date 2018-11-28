<?php

namespace Modules\Module\Entities;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{   
    protected $table = 'modules';

    protected $fillable = [
        'title',
        'type',
        'position',
        'module',
        'order',
        'parameters'
    ];

    public function allModuleMenuItems()
    {
    	return $this->hasMany(ModuleMenuItem::class);
    }

    public function moduleMenuItems()
    {
    	return $this->allModuleMenuItems();
    }
}
