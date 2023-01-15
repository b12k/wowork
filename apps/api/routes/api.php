<?php

use App\Http\Controllers\Auth\CompanyAuthController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\{
    UserController,
};
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/**
 * Public routes
 */
Route::get('/health', function () {
    return response()->json([
        'status' => 'OK',
        'time' => Carbon::now(),
        'lang' => app()->getLocale(),
    ]);
});

Route::prefix('auth')->group(function () {
    Route::post('user', [UserAuthController::class, 'store']);
    Route::post('company', [CompanyAuthController::class, 'store']);
});

Route::post('users', [UserController::class, 'store']);
// Route::get('users', [UserController::class, 'index']);

/**
 * Protected Routes
 */
Route::middleware(['auth:sanctum', 'access.user'])->group(function () {
    Route::delete('auth/user', [UserAuthController::class, 'destroy']);

    Route::get('users/{user:sid}', [UserController::class, 'show']);
    Route::put('users/{user:sid}', [UserController::class, 'update']);
    Route::delete('users/{user:sid}', [UserController::class, 'destroy']);
});

Route::middleware(['auth:sanctum', 'access.company'])->group(function () {
    Route::delete('auth/company', [UserAuthController::class, 'destroy']);

    Route::get('companies/{company:sid}', [UserController::class, 'show']);
    Route::put('companies/{company:sid}', [UserController::class, 'update']);
    Route::delete('companies/{company:sid}', [UserController::class, 'destroy']);
});
