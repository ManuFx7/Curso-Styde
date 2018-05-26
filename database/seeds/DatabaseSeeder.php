<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $this->truncateTables(['professions','users']);
        $this->call(ProfesionSeeder::class);
        $this->call(UserSeeder::class);
    }



    /* Metodo que elimina las relaciones foraneas y elimina la tabla */
    
      public function truncateTables($tables){

      	foreach($tables as $table){

    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

    	DB::table($table)->truncate();

    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

       }
    }
}

