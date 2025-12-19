<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;

// Registration
Route::post('/register', [RegisteredUserController::class, 'apiStore']);

// Login / Logout
Route::post('/login', [AuthenticatedSessionController::class, 'apiLogin']);
Route::post('/logout', [AuthenticatedSessionController::class, 'apiLogout'])
    ->middleware('auth:sanctum');

// Password confirmation
Route::post('/confirm-password', [ConfirmablePasswordController::class, 'apiConfirm'])
    ->middleware('auth:sanctum');

// Email verification
Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'apiStore'])
    ->middleware('auth:sanctum');

Route::post('/email/verify', [VerifyEmailController::class, 'apiVerify'])
    ->middleware('auth:sanctum');

// Password reset
Route::post('/password/reset', [NewPasswordController::class, 'apiStore']);
Route::put('/password/update', [PasswordController::class, 'apiUpdate'])
    ->middleware('auth:sanctum');
