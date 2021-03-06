<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   public function test_admin_login(){
       $user = factory(User::class)->make();
       $response = $this->actingAs($user)->get('/admin');
       $response->assertSee('Dashboard');
   }
    public function test_admin_ProductList(){
        $user = factory(User::class)->make();
        $response = $this->actingAs($user)->get('/admin/products');
        $response->assertSee('Products');
    }

    public function test_admin_orderlist(){
        $user = factory(User::class)->make();
        $response = $this->actingAs($user)->get('/admin/orders');
        $response->assertSee('Orders');

    }
}
