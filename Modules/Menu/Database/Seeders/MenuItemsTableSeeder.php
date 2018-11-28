<?php

namespace Modules\Menu\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Menu\Entities\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menuItems = [
            [
                'menu_id' => 1,
                'title' => 'Dashboard',
                'slug' => 'dashboard',
                'url' => '',
                'level' => 1,
                'order' => 1,
                'parent_id' => 1,
                'icon' => 'feather icon-home'
            ],
            [
                'menu_id' => 1,
                'title' => 'Media Manager',
                'slug' => 'media-manager',
                'url' => '',
                'level' => 1,
                'order' => 2,
                'parent_id' => 1,
                'icon' => 'feather icon-image'
            ],
            [
                'menu_id' => 1,
                'title' => 'Menu Manager',
                'slug' => 'menu',
                'url' => '',
                'level' => 1,
                'order' => 3,
                'parent_id' => 1,
                'icon' => 'feather icon-menu'
            ],
            [
                'menu_id' => 1,
                'title' => 'Application Builder',
                'slug' => 'application-builder',
                'url' => '',
                'level' => 1,
                'order' => 4,
                'parent_id' => 1,
                'icon' => 'feather icon-box'
            ],
            [
                'menu_id' => 1,
                'title' => 'Template Manager',
                'slug' => 'template-manager',
                'url' => '',
                'level' => 1,
                'order' => 5,
                'parent_id' => 1,
                'icon' => 'feather icon-sidebar'
            ],
            [
                'menu_id' => 1,
                'title' => 'Module Manager',
                'slug' => 'module-manager',
                'url' => '',
                'level' => 1,
                'order' => 6,
                'parent_id' => 1,
                'icon' => 'feather icon-layers'
            ],
            [
                'menu_id' => 1,
                'title' => 'User Accounts',
                'slug' => 'user',
                'url' => '',
                'level' => 1,
                'order' => 7,
                'parent_id' => 1,
                'icon' => 'feather icon-users'
            ],
                [
                    'menu_id' => 1,
                    'title' => 'User Lists',
                    'slug' => 'user',
                    'url' => '',
                    'level' => 2,
                    'order' => 1,
                    'parent_id' => 7,
                    'icon' => ''
                ],
                [
                    'menu_id' => 1,
                    'title' => 'Roles',
                    'slug' => 'role',
                    'url' => '',
                    'level' => 2,
                    'order' => 2,
                    'parent_id' => 7,
                    'icon' => ''
                ],
                [
                    'menu_id' => 1,
                    'title' => 'Groups',
                    'slug' => 'groups',
                    'url' => '',
                    'level' => 2,
                    'order' => 3,
                    'parent_id' => 7,
                    'icon' => 'feather icon-users'
                ],
                [
                    'menu_id' => 1,
                    'title' => 'Permissions',
                    'slug' => 'permissions',
                    'url' => '',
                    'level' => 2,
                    'order' => 4,
                    'parent_id' => 7,
                    'icon' => ''
                ],
            [
                'menu_id' => 1,
                'title' => 'Plugins',
                'slug' => 'plugins',
                'url' => '',
                'level' => 1,
                'order' => 8,
                'parent_id' => 1,
                'icon' => 'feather icon-paperclip'
            ],
            [
                'menu_id' => 1,
                'title' => 'Settings',
                'slug' => 'settings',
                'url' => '',
                'level' => 1,
                'order' => 9,
                'parent_id' => 1,
                'icon' => 'feather icon-settings'
            ]
            ];
        
        foreach( $menuItems as $item)
        {
            MenuItem::create($item);
        }
        
    }
}
