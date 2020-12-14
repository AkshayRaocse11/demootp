<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

        public function logInUser($args = [])
        {
        $user = User::factory()->create($args);
        $this->actingAs($user);
        return $user;
        }
}
