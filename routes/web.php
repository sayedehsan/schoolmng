<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssignSubjectController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
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

Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'loginCheck']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/list', [AdminController::class, 'list']);
    Route::get('admin/add', [AdminController::class, 'add']);
    Route::post('admin/add', [AdminController::class, 'insert']);
    Route::get('admin/edit/{id}', [AdminController::class, 'edit']);
    Route::post('admin/edit/{id}', [AdminController::class, 'update']);
    Route::get('admin/delete/{id}', [AdminController::class, 'delete']);

    Route::get('class/list', [ClassController::class, 'list']);
    Route::get('class/add', [ClassController::class, 'add']);
    Route::post('class/add', [ClassController::class, 'insert']);
    Route::get('class/edit/{id}', [ClassController::class, 'edit']);
    Route::post('class/edit/{id}', [ClassController::class, 'update']);
    Route::get('class/delete/{id}', [ClassController::class, 'delete']);

    Route::get('subject/list', [SubjectController::class, 'list']);
    Route::get('subject/add', [SubjectController::class, 'add']);
    Route::post('subject/add', [SubjectController::class, 'insert']);
    Route::get('subject/edit/{id}', [SubjectController::class, 'edit']);
    Route::post('subject/edit/{id}', [SubjectController::class, 'update']);
    Route::get('subject/delete/{id}', [SubjectController::class, 'delete']);

    Route::get('assgsub/list', [AssignSubjectController::class, 'list']);
    Route::get('assgsub/add', [AssignSubjectController::class, 'add']);
    Route::post('assgsub/add', [AssignSubjectController::class, 'insert']);
    Route::get('assgsub/edit/{id}', [AssignSubjectController::class, 'edit']);
    Route::post('assgsub/edit/{id}', [AssignSubjectController::class, 'update']);
    Route::get('assgsub/delete/{id}', [AssignSubjectController::class, 'delete']);

    Route::get('student/list', [StudentController::class, 'list']);
    Route::get('student/add', [StudentController::class, 'add']);
    Route::post('student/add', [StudentController::class, 'insert']);
    Route::get('student/edit/{id}', [StudentController::class, 'edit']);
    Route::post('student/edit/{id}', [StudentController::class, 'update']);
    Route::get('student/delete/{id}', [StudentController::class, 'delete']);

    Route::get('parent/list', [ParentController::class, 'list']);
    Route::get('parent/add', [ParentController::class, 'add']);
    Route::post('parent/add', [ParentController::class, 'insert']);
    Route::get('parent/edit/{id}', [ParentController::class, 'edit']);
    Route::post('parent/edit/{id}', [ParentController::class, 'update']);
    Route::get('parent/delete/{id}', [ParentController::class, 'delete']);

});

Route::group(['middleware' => 'office'], function () {
    Route::get('office/dashboard', [DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'parent'], function () {
    Route::get('parent/dashboard', [DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'student'], function () {
    Route::get('student/dashboard', [DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'teacher'], function () {
    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard']);
});
