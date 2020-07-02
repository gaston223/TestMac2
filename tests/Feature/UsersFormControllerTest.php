<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersFormControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     * Verification de l'update du profil par l'utilisateur connecté
     *
     * @return void
     */
    public function testEditProfileByLoginUser()
    {
        $response = $this->call('GET', 'admin/edit/2');

        $response->assertStatus(302);
    }
}
