<?php

namespace Modules\Menu\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Menu\Entities\Menu;

class MenusTableSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'title'         => 'Administrator Menu',
            'type'          => 'backend',
            'description'   => 'Administrator Default Main Menu'
        ]);
    }
}
