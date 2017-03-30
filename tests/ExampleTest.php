<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $name='Silvina Troncoso';
        $user =factory(\App\User::class)->create([
            'name' => $name,

        ]);//creamos un usuario
        
        $this -> actingAs($user,'api')
              -> visit('api/user')
              -> see($name);
    }
}
