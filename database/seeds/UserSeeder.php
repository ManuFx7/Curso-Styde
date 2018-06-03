<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Profession;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$professionId = Profession::where('title','BackDeveloper')->value('id');

    	factory(User::class)->create([
    		'profession_id' => $professionId
    	]);

    	factory(User::class,40)->create();

    	User::create([
    		'name' => 'Manu Paez',
    		'email' => 'manuelpaez@expacioweb.com',
    		'password' => bcrypt('laravel'),
    		'profession_id' => $professionId,
    		'is_admin' => true
    	]);


    	/*User::create([
    		'name' => 'Noelia Paez',
    		'email' => 'noelia@expacioweb.com',
    		'password' => bcrypt('laravel'),
    		'profession_id' => $professionId
    	]);


    	User::create([
    		'name' => 'Pepe Paez',
    		'email' => 'pepe@expacioweb.com',
    		'password' => bcrypt('laravel'),
    		'profession_id' => 1
    	]);*/


    }
}
