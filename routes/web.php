<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
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
