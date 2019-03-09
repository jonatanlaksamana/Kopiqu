<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserInterfaceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFetchIndexPage()
    {
        $response = $this->get('/');
        $response->assertSee("About us");

    }
    public function testFetchRegisterPage(){
        $response = $this->get('/register');
        $response->assertSee('register');

    }
    public function testFetchLoginPage(){
        $response = $this->get('/login');
        $response->assertSee('login');
    }

}
