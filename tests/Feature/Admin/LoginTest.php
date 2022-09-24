<?php

namespace Tests\Admin\LoginTest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_table_users()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'admin@admin.com'
        ]);
    }

    public function test_login_page()
    {
        $response = $this->get('/');

        $response->assertSeeText('Username');
        $response->assertSeeText('Password');
        $response->assertSee('login');
        $response->assertStatus(200);
    }

    public function test_user_must_fill_valid_username()
    {
        $response = $this->followingRedirects()->post('/', [
            'username' => '',
            'password' => '11223344',
        ]);

        $response->assertSee("Please fill out this field.");
    }
}
