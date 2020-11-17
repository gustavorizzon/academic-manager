<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
Route::middleware(['auth', App\Http\Middleware\Coordinator::class])->prefix('coordinator')->as('coordinator.')->group(function () {
  Route::get('/', [App\Http\Controllers\Coordinator\HomeController::class, 'home'])->name('home');

  // Enrollments
  Route::prefix('enrollments')->as('enrollments.')->where(['id' => '[0-9]+'])->group(function () {
    Route::any('/',             [App\Http\Controllers\Coordinator\EnrollmentsController::class, 'index'])->name('index');
    Route::get('/create',       [App\Http\Controllers\Coordinator\EnrollmentsController::class, 'create'])->name('create');
    Route::post('/store',       [App\Http\Controllers\Coordinator\EnrollmentsController::class, 'store'])->name('store');
    Route::get('/{id}/destroy', [App\Http\Controllers\Coordinator\EnrollmentsController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/edit',    [App\Http\Controllers\Coordinator\EnrollmentsController::class, 'edit'])->name('edit');
    Route::put('/{id}/update',  [App\Http\Controllers\Coordinator\EnrollmentsController::class, 'update'])->name('update');
  });
});

// Professor Routes
Route::middleware(['auth', App\Http\Middleware\Professor::class])->prefix('professor')->as('professor.')->group(function () {
  // Home (Dashboard)
  Route::get('/', [App\Http\Controllers\Professor\HomeController::class, 'home'])->name('home');

  // Boards Routes
  Route::prefix('boards')->as('boards.')->where(['id' => '[0-9]+'])->group(function() {
    Route::get('/', [App\Http\Controllers\Professor\BoardsController::class, 'index'])->name('index');
    Route::get('/{id}', [App\Http\Controllers\Professor\BoardsController::class, 'show'])->name('show');

    // Frequency Routes
    Route::prefix('{id}/frequencies')->as('frequencies.')->where([
      'date' => '[0-9]{4}-[0-9]{2}-[0-9]{2}',
      'frequencyId' => '[0-9]+'
    ])->group(function() {
      Route::get('/{frequencyId}', [\App\Http\Controllers\Professor\FrequenciesController::class, 'show'])->name('show');
      Route::put('/{frequencyId}', [\App\Http\Controllers\Professor\FrequenciesController::class, 'update'])->name('update');
    });

    // Tasks Routes
    Route::prefix('{id}/tasks')->as('tasks.')->where([
      'date' => '[0-9]{4}-[0-9]{2}-[0-9]{2}',
      'taskId' => '[0-9]+'
    ])->group(function() {
      Route::post('/', [\App\Http\Controllers\Professor\TasksController::class, 'create'])->name('create');
      Route::get('/{taskId}', [\App\Http\Controllers\Professor\TasksController::class, 'show'])->name('show');
      Route::put('/{taskId}', [\App\Http\Controllers\Professor\TasksController::class, 'update'])->name('update');
      Route::delete('/{taskId}', [\App\Http\Controllers\Professor\TasksController::class, 'destroy'])->name('destroy');
    });

    // Members Routes
    Route::prefix('{id}/members')->as('members.')->group(function() {
      Route::get('/', [\App\Http\Controllers\Professor\BoardMembersController::class, 'index'])->name('index');
    });
  });

  // Documents route
  Route::prefix('documents')->as('documents.')->group(function() {
    Route::get('/', [App\Http\Controllers\Professor\DocumentsController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\Professor\DocumentsController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\Professor\DocumentsController::class, 'store'])->name('store');
    Route::get('/{id}/destroy', [App\Http\Controllers\Professor\DocumentsController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/edit', [App\Http\Controllers\Professor\DocumentsController::class, 'edit'])->name('edit');
    Route::put('/{id}/update',  [App\Http\Controllers\Professor\DocumentsController::class, 'update'])->name('update');
  });

  // Students route
  Route::prefix('students')->as('students.')->group(function() {
    Route::get('/', [App\Http\Controllers\Professor\StudentsController::class, 'index'])->name('index');
  });
});

// Student Routes
Route::middleware(['auth', App\Http\Middleware\Student::class])->prefix('student')->as('student.')->group(function () {
  // Home
  Route::get('/', [App\Http\Controllers\Student\HomeController::class, 'home'])->name('home');

  // Boards Routes
  Route::prefix('boards')->as('boards.')->where(['id' => '[0-9]+'])->group(function() {
    Route::any('/', [App\Http\Controllers\Student\BoardsController::class, 'index'])->name('index');
    Route::get('/show/{id}', [App\Http\Controllers\Student\BoardsController::class, 'show'])->name('show');
  });

  // Documents Routes
  Route::prefix('documents')->as('documents.')->group(function() {
    Route::any('/', [App\Http\Controllers\Student\DocumentsController::class, 'index'])->name('index');
  });

  // Tasks Routes
  Route::prefix('tasks')->as('tasks.')->group(function() {
    Route::any('/', [App\Http\Controllers\Student\TasksController::class, 'index'])->name('index');
    Route::any('/pending', [App\Http\Controllers\Student\TasksController::class, 'pending'])->name('pending');
  });

  // Frequency Routes
  Route::prefix('frequency')->as('frequency.')->group(function() {
    Route::any('/', [App\Http\Controllers\Student\FrequencyController::class, 'index'])->name('index');
    Route::any('/fouls', [App\Http\Controllers\Student\FrequencyController::class, 'fouls'])->name('fouls');
  });
});

// Standalone routes
Route::middleware(['auth'])->group(function () {
  Route::prefix('faculty')->as('faculty.')->group(function () {
    Route::get('/', [App\Http\Controllers\Reports\FacultyReportController::class, 'view'])->name('view');
  });
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

    // Course Disciplines
    Route::prefix('{id}/disciplines')->as('disciplines.')->where(['idcd' => '[0-9]+'])->group(function () {
      Route::any('/',               [App\Http\Controllers\Registration\CourseDisciplinesController::class, 'index'])->name('index');
      Route::get('/create',         [App\Http\Controllers\Registration\CourseDisciplinesController::class, 'create'])->name('create');
      Route::post('/store',         [App\Http\Controllers\Registration\CourseDisciplinesController::class, 'store'])->name('store');
      Route::get('/{idcd}/destroy', [App\Http\Controllers\Registration\CourseDisciplinesController::class, 'destroy'])->name('destroy');
      Route::get('/{idcd}/edit',    [App\Http\Controllers\Registration\CourseDisciplinesController::class, 'edit'])->name('edit');
      Route::put('/{idcd}/update',  [App\Http\Controllers\Registration\CourseDisciplinesController::class, 'update'])->name('update');
    });
  });

  // Disciplines
  Route::prefix('disciplines')->as('disciplines.')->where(['id' => '[0-9]+'])->group(function () {
    Route::any('/',             [App\Http\Controllers\Registration\DisciplinesController::class, 'index'])->name('index');
    Route::get('/create',       [App\Http\Controllers\Registration\DisciplinesController::class, 'create'])->name('create');
    Route::post('/store',       [App\Http\Controllers\Registration\DisciplinesController::class, 'store'])->name('store');
    Route::get('/{id}/destroy', [App\Http\Controllers\Registration\DisciplinesController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/edit',    [App\Http\Controllers\Registration\DisciplinesController::class, 'edit'])->name('edit');
    Route::put('/{id}/update',  [App\Http\Controllers\Registration\DisciplinesController::class, 'update'])->name('update');
  });
});
