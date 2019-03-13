<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use UsersTableSeeder;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */



    public function test_user_can_view_a_login_form()
    {
        //
        $response = $this->get('/login');
        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }
    public function test_user_cannot_view_a_login_form_when_authenticated()
    {
        $user = factory(User::class)->make();
        $response = $this->actingAs($user)->get('/login');
        $response->assertRedirect('/home');

    }
    public function test_user_can_login_with_correct_credentials()

    {
        $user = new User([
            'id' => 1,
            'name' => 'yish'
        ]);

        $this->be($user);

        $this->assertAuthenticatedAs($user);
    }
}
