<?php

namespace Modules\Module\Entities;

use Illuminate\Database\Eloquent\Model;

class ModuleMenuItem extends Model
{   
    protected $table = 'modules';

    protected $fillable = [
        'module_id',
        'menu_item_id'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
