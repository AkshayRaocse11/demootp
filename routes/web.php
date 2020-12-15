<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerifyOTPController;
use App\Http\Controllers\ResendOTPController;
use App\Http\Controllers\UsermgmtController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post(
'/verifyOTP',
[VerifyOTPController::class, 'verify']
);
Route::get(
'/verifyOTP',
[VerifyOTPController::class, 'showVerifyForm']
);



Route::post('/resend_OTP',[ResendOTPController::class, 'resend']
);


Route::middleware(['TwoFA'])->group(function () {
    Route::get('/admin/revenue', [App\Http\Controllers\HomeController::class, 'rev_index']);
    Route::get('/admin/revenue/download', [App\Http\Controllers\HomeController::class, 'export']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::prefix('admin')->name('admin.')->group(function () {
          Route::resource('user', UsermgmtController::class);
    });
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('product', ProductController::class);
        });
        
});



