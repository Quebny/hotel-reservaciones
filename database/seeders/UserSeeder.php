<?php

namespace Database\Seeders;

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
        $user = new User();
        $user -> name = 'Kevin';
        $user -> lastname = 'Lizárraga';
        $user -> email = 'example@gmail.com';
        $user -> password = 'password';

        $user -> save();
    }
}
