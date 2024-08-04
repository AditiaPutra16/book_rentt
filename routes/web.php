<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RentLogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicController::class, 'index']);


Route::middleware('only_guest')->group(function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function() {
    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('profile', [UserController::class, 'profile'])->middleware('only_client');


    Route::get('users', [UserController::class, 'index']);
    Route::get('registered-users', [UserController::class, 'registeredUser']);
    Route::get('user-detail/{slug}', [UserController::class, 'show']);
    Route::get('user-approve/{slug}', [UserController::class, 'approve']);
    Route::get('user-ban/{slug}', [UserController::class, 'delete']);
    Route::get('user-destroy/{slug}', [UserController::class, 'destroy']);
    Route::get('user-banned', [UserController::class, 'bannedUser']);
    
    Route::get('rent-logs', [RentLogController::class, 'index']);
});
