<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Profession as Profesion;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Profesion::create([
           'title' => 'TesterDeveloper'
    	]);

    	Profesion::create([
           'title' => 'BackDeveloper'
    	]);

    	Profesion::create([
           'title' => 'FrontDeveloper'
    	]);

    	Profesion::create([
           'title' => 'Diseñador Web'
    	]);

    	//factory(Profesion::class,15)->create();

    }

}
