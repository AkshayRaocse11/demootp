<?php

namespace Tests\Feature;

use App\Mail\OTPMail;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class EmailTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function otp_send_login_correct()
    {
        Mail::fake();

        $user = User::factory()->create();
        $res= $this->post('/login',['email'=>$user->email,'password'=>'secert']);
         Mail::assertSent(OTPMail::class);
    }
    public function not_otp_send_login_incorrect()
    {
    Mail::fake();

    $user = User::factory()->create();
    $res= $this->post('/login',['email'=>$user->email,'password'=>'asdfge']);
    Mail::assertNotSent(OTPMail::class);
    }
    public function cache_the_otp()
    {
        Mail::fake();
        $user = User::factory()->create();
        $this->post('/login',['email'=>$user->email,'password'=>'secert']);
        $this->assertNotNull($user->OTP());
    }

}
