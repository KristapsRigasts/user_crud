<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [UserController::class, 'index']);
Route::get('users/create', [UserController::class, 'create']);
Route::put('users/store', [UserController::class, 'store'])->name('store');
Route::get('users/{user:id}/edit', [UserController::class, 'edit']);
Route::patch('users/{user:id}/update', [UserController::class, 'update']);
Route::delete('users/{user:id}/delete', [UserController::class, 'destroy']);
