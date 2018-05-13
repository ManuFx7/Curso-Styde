<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
   
    
    /** @test */ 

    public function test_acceso_ruta_usuarios()
    {
    	$this->get('/usuarios')
    	->assertStatus(200)
    	->assertSee('Usuarios');
    }

    /** @test */

    public function test_acceso_ruta_de_usuario(){

    	$this->get('/usuarios/5')
    	->assertStatus(200)
    	->assertSee('Usuario 5');
    }

    /** @test */

    public function test_acceso_ruta_edit_usuario(){

    	$this->get('/usuarios/2/edit')
    	->assertStatus(200)
    	->assertSee('Editando usuario 2');
    }

}
