<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
     /** @test */

     function usuarios_con_nickname(){

     	$this->get('/saludo/manu/manufx7')
     	->assertStatus(200)
     	->assertSee("Hola manu con nick manufx7");
     }


     /** @test */

     function usuarios_sin_nickname(){

     	$this->get('/saludo/manu')
     	->assertStatus(200)
     	->assertSee("Hola nombre manu no tienes apodo");

     }
}
