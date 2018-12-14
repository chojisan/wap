<?php

namespace Modules\Auth\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\User\Entities\User;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'slug',
        'name',
        'permissions'
    ];

    protected $casts = [
        'permissions' => 'array',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users');
    }

    public function hasAccess(array $permissions) : bool
    {
        foreach ($permissions as $permission) {
            if ($this->hasPermission($permission))
                return true;
        }
        return false;
    }

    private function hasPermission(string $permission) : bool
    {
        return $this->permissions[$permission] ?? false;
    }
}
