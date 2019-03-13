<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
 public function test_get_orderpage(){

     $user = factory(User::class)->make();
     $response = $this->actingAs($user)->get('/order');
     $response->assertSuccessful();
     $response->assertViewIs('StorePage.order');
 }

    public function test_get_cartpage(){

        $user = factory(User::class)->make();
        $response = $this->actingAs($user)->get('/cart');
        $response->assertSuccessful();
        $response->assertViewIs('StorePage.ShoopingCart');
    }

   
}
