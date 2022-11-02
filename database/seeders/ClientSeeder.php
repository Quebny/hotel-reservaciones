<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients') -> insert([
            'name' => 'Kevin',
            'lastname' => 'Lizárraga',
            'email' => 'email@example.com',
            'phone_number' => '6121078202'
        ]);
    }
}
