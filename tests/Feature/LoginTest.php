<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{

    use DatabaseMigrations;

    public function verfied_until(){
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->get('/home')->assertRedirect('/verifyOTP');
    }
    public function verified(){
        $user = User::factory()->create(['isVerified'=>1]);
        $this->actingAs($user);
        $this->get('/home')->assertStatus(200);
    }

}
