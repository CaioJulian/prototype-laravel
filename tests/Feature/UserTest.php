<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
   
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateUser()
    {
        //$this->assertTrue(true);
        $dados = [
            'name' => 'Caio',
            'email' => 'caio1@mail.com',
            'password' => '123456',
            'c_password' => '123456',
            'roles' => 'super-admin'
        ];
        $response = $this->post('/api/register', $dados);
        
        $response->assertSuccessful();

        

        
    }
}
