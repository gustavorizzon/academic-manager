<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Registering authentication routes
Auth::routes(['register' => false, 'verify' => false]);

// Admin Routes
Route::prefix('admin')->as('admin.')->group(function () {
  Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'home'])->name('home');
});

// Coordinator Routes
Route::prefix('coordinator')->as('coordinator.')->group(function () {
  Route::get('/', [App\Http\Controllers\Coordinator\HomeController::class, 'home'])->name('home');
});

// Professor Routes
Route::prefix('professor')->as('professor.')->group(function () {
  Route::get('/', [App\Http\Controllers\Professor\HomeController::class, 'home'])->name('home');
});

// Student Routes
Route::prefix('student')->as('student.')->group(function () {
  Route::get('/', [App\Http\Controllers\Student\HomeController::class, 'home'])->name('home');
});
