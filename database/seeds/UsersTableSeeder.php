<?php

use Illuminate\Database\Seeder;
use Modules\User\Entities\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'          => 'chojisan',
            'first_name'        => 'John',
            'middle_name'       => 'John',
            'last_name'         => 'Doe',
            'email'             => 'admin@admin.com',
            'password'          => Hash::make('password'),
            'remember_token'    => str_random(10),
            'permissions'       => 'administrator',
            'birthdate'         => '1989-09-23'
        ]);

    }
}
