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

// Registration Routes
Route::prefix('registration')->as('registration.')->group(function () {

  // States
  Route::prefix('states')->as('states.')->where(['id' => '[0-9]+'])->group(function () {
    Route::any('/',             [App\Http\Controllers\Registration\StatesController::class, 'index'])->name('index');
    Route::get('/create',       [App\Http\Controllers\Registration\StatesController::class, 'create'])->name('create');
    Route::post('/store',       [App\Http\Controllers\Registration\StatesController::class, 'store'])->name('store');
    Route::get('/{id}/destroy', [App\Http\Controllers\Registration\StatesController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/edit',    [App\Http\Controllers\Registration\StatesController::class, 'edit'])->name('edit');
    Route::put('/{id}/update',  [App\Http\Controllers\Registration\StatesController::class, 'update'])->name('update');
  });

  // Cities
  Route::prefix('cities')->as('cities.')->where(['id' => '[0-9]+'])->group(function () {
    Route::any('/',             [App\Http\Controllers\Registration\CitiesController::class, 'index'])->name('index');
    Route::get('/create',       [App\Http\Controllers\Registration\CitiesController::class, 'create'])->name('create');
    Route::post('/store',       [App\Http\Controllers\Registration\CitiesController::class, 'store'])->name('store');
    Route::get('/{id}/destroy', [App\Http\Controllers\Registration\CitiesController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/edit',    [App\Http\Controllers\Registration\CitiesController::class, 'edit'])->name('edit');
    Route::put('/{id}/update',  [App\Http\Controllers\Registration\CitiesController::class, 'update'])->name('update');
  });

  // Institution Members
  Route::prefix('institution_members')->as('institution_members.')->where(['id' => '[0-9]+'])->group(function () {
    Route::any('/',             [App\Http\Controllers\Registration\InstitutionMembersController::class, 'index'])->name('index');
    Route::get('/create',       [App\Http\Controllers\Registration\InstitutionMembersController::class, 'create'])->name('create');
    Route::post('/store',       [App\Http\Controllers\Registration\InstitutionMembersController::class, 'store'])->name('store');
    Route::get('/{id}/destroy', [App\Http\Controllers\Registration\InstitutionMembersController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/edit',    [App\Http\Controllers\Registration\InstitutionMembersController::class, 'edit'])->name('edit');
    Route::put('/{id}/update',  [App\Http\Controllers\Registration\InstitutionMembersController::class, 'update'])->name('update');
  });

  // Graduations
  Route::prefix('graduations')->as('graduations.')->where(['id' => '[0-9]+'])->group(function () {
    Route::any('/',             [App\Http\Controllers\Registration\GraduationsController::class, 'index'])->name('index');
    Route::get('/create',       [App\Http\Controllers\Registration\GraduationsController::class, 'create'])->name('create');
    Route::post('/store',       [App\Http\Controllers\Registration\GraduationsController::class, 'store'])->name('store');
    Route::get('/{id}/destroy', [App\Http\Controllers\Registration\GraduationsController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/edit',    [App\Http\Controllers\Registration\GraduationsController::class, 'edit'])->name('edit');
    Route::put('/{id}/update',  [App\Http\Controllers\Registration\GraduationsController::class, 'update'])->name('update');
  });

  // Courses
  Route::prefix('courses')->as('courses.')->where(['id' => '[0-9]+'])->group(function () {
    Route::any('/',             [App\Http\Controllers\Registration\CoursesController::class, 'index'])->name('index');
    Route::get('/create',       [App\Http\Controllers\Registration\CoursesController::class, 'create'])->name('create');
    Route::post('/store',       [App\Http\Controllers\Registration\CoursesController::class, 'store'])->name('store');
    Route::get('/{id}/destroy', [App\Http\Controllers\Registration\CoursesController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/edit',    [App\Http\Controllers\Registration\CoursesController::class, 'edit'])->name('edit');
    Route::put('/{id}/update',  [App\Http\Controllers\Registration\CoursesController::class, 'update'])->name('update');
  });
});
