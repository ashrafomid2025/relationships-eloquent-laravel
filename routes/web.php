<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('users',[UserController::class, 'index']);
Route::get('students',[StudentController::class, 'index']);
Route::get('teacher',[TeachersController::class, 'index']);
Route::get('classes',[ClassesController::class, 'index']);
Route::get('addteacher', [TeachersController::class, 'showAddForm']);