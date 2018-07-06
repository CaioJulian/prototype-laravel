<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegister()
    {
        {
            $response = $this->json('POST', '/api/register',
             [
                'name' => 'Bia',
                'email' => 'bia@mail.com',
                'password' => '123456',
                'c_password' => '123456',
                'roles' => 'visit'
                ]);
    
            $response->assertStatus(200);
        }
    }

   
}
