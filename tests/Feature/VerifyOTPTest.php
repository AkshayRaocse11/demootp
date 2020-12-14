<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class VerifyOTPTest extends TestCase
{

    use DatabaseMigrations;


            public function a_user_can_submit_otp_and_Get_verified()
            {
            $OTP = auth()->user()->cacheTheOTP();
            $this->post('/verifyOTP', ['OTP' => $OTP])->assertStatus(302);
            $this->assertDatabaseHas('users', ['isVerified' => 1]);
            }

            /**
             * @test
            */
            public function user_can_see_otp_verify_page()
            {
            $this->get('/verifyOTP')
            ->assertStatus(200)
            ->assertSee('Enter OTP');
            }

}
