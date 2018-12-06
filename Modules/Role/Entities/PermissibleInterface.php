<?php

namespace Modules\Role\Entities;

interface PermissibleInterface
{
    /**
     * Returns the permissions instance.
     *
     * @return \Cartalyst\Sentinel\Permissions\PermissionsInterface
     */
    public function getPermissionsInstance();

    /**
     * Adds a permission.
     *
     * @param  string  $permission
     * @param  bool  $value
     * @return \Cartalyst\Sentinel\Permissions\PermissibleInterface
     */
    public function addPermission($permission, $value = true);

    /**
     * Updates a permission.
     *
     * @param  string  $permission
     * @param  bool  $value
     * @param  bool  $create
     * @return \Cartalyst\Sentinel\Permissions\PermissibleInterface
     */
    public function updatePermission($permission, $value = true, $create = false);

    /**
     * Removes a permission.
     *
     * @param  string  $permission
     * @return \Cartalyst\Sentinel\Permissions\PermissibleInterface
     */
    public function removePermission($permission);
}
