<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;


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
    return view('welcome');
});



// Admin panel

Route::get('dashboard', [AdminController::class, 'index']);

// User pannel

Route::get('dashboard/user', [UserController::class, 'index']);
Route::get('dashboard/user/add', [UserController::class, 'add']);
Route::get('dashboard/user/edit', [UserController::class, 'edit']);
Route::get('dashboard/user/view', [UserController::class, 'view']);
Route::get('dashboard/user/update', [UserController::class, 'update']);
Route::get('dashboard/user/delete', [UserController::class, 'delete']);
Route::get('dashboard/user/restore', [UserController::class, 'restore']);

// Todo pannel

Route::get('dashboard/todo', [TodoController::class, 'index']);
Route::get('dashboard/todo/add', [TodoController::class, 'add']);
Route::get('dashboard/todo/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::post('dashboard/todo/insert', [TodoController::class, 'insert'])->name('todo.insert');
Route::get('dashboard/todo/view', [TodoController::class, 'view']);
Route::post('dashboard/todo/update', [TodoController::class, 'update']);
Route::get('dashboard/todo/delete', [TodoController::class, 'delete']);
Route::get('dashboard/todo/restore', [TodoController::class, 'restore']);

require __DIR__.'/auth.php';
