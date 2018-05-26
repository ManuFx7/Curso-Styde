<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Manu Paez',
        	'email' => 'manuelpaez@expacioweb.com',
        	'password' => bcrypt('laravel'),
        	'profession_id' => 1
        ]);
    }
}