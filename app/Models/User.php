<?php

namespace App\Models;

use App\Mail\OTPMail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'isVerified',
        'is_admin',
        'location',
        'mobile_number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function OTP()
    {
    return Cache::get($this->OTPKey());
    }

    public function OTPKey()
    {
    return "OTP_for_{$this->id}";
    }

    public function cacheTheOTP()
    {
    $OTP = rand(100000,999999);
    Cache::put(['OTP'=>$OTP],now()->addSecond(60));
    return $OTP;
    }
    public function sendOTP($via)
    {
     $OTP = $this->cacheTheOTP();
     Mail::to($via)->send(new OTPMail($OTP));
    }
        protected static function boot()
        {
        parent::boot();
        // auto-sets password on creation
        static::creating(function ($query) {
        $query->password = Hash::make('12345678');
        });
        }
}
