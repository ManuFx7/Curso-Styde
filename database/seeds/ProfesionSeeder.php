<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('professions')->insert([
        	'title'=>'BackDeveloper'
        ]);

        DB::table('professions')->insert([
        	'title'=>'FrontDeveloper'
        ]);

        DB::table('professions')->insert([
        	'title'=>'Diseñador Web'
        ]);
    }

}
