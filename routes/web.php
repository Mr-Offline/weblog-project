<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    \App\Models\Manager::create([
        'firstname' => 'ارسلان',
        'lastname' => 'احدیان',
        'username' => 'admin',
        'password' => 'admin',
        'is_super_admin' => true,
    ]);
    return view('welcome');
});

Route::prefix('/manager')->name('manager.')->group(function () {
    Route::middleware(['guest:manager'])->prefix('/login')->group(function () {
        Route::get('/', [\App\Http\Controllers\Manager\AuthenticationController::class, 'index'])->name('login');
        Route::post('/', [\App\Http\Controllers\Manager\AuthenticationController::class, 'login']);
    });
    Route::middleware(['auth:manager'])->prefix('/dashboard')->name('dashboard.')->group(function () {
        Route::get('/', function () {
            echo "Logged in";
            die();
        })->name('index');
    });
});
