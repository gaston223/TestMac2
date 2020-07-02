<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHome()
    {
        $response = $this->call('GET', 'admin');

        $response->assertRedirect('/login');
    }

    public function testShow()
    {
        $response = $this->call('GET', 'admin/show/2');

        $response->assertRedirect('/login');
    }

    public function testEdit()
    {
        $response = $this->call('GET', 'admin/edit/2');

        $response->assertRedirect('/login');
    }


}
