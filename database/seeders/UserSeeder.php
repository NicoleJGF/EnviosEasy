<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //
        User::create([
            'name' => 'Nicole',
            'acceso' => 'adminT',
            'password' => bcrypt('123456789'),
            'email' => 'gfnicole969@gmail.com',
        ]);

        User::create([
            'name' => 'Admin',
            'acceso' => 'adminT',
            'password' => bcrypt('77889901'),
            'email' => 'admin@gmail.com',
        ]);

        User::create([
            'name' => 'user',
            'password' => bcrypt('88990011'),
            'email' => 'user@gmail.com',
        ]);

       
    }
}
