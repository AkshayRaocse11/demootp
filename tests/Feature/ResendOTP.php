<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class LoginTest extends TestCase
{
use DatabaseMigrations;

/**
* @test
*/
public function a_user_can_request_for_new_otp()
{
    $user = $this->logInUser();
    $this->get('/verifyOTP');
    $response = $this->post('/resend_otp', ['via' => 'email']);
    $response->assertRedirect('/verifyOTP');
}

public function a_otp_notification_is_send_when_user_request_new_otp()
{
    Notification::fake();
    $user = $this->logInUser();
    $response = $this->post('/resend_otp', ['via' => 'email']);
    Notification::assertSentTo([$user], OTPNotification::class);
}

}
