<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        /* Peticion a la url / */
        $response = $this->get('/');

        /* Comprueba si devuelve 200 todo ok */
        $response->assertStatus(200);
    }
}
