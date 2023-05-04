<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HelloController;
use  App\Http\Controllers\AuthController;
use  App\Http\Controllers\PostController;
use  App\Http\Controllers\FoodController;

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

Route::get('/', function(){
    return view ('index');
});

// Login / Register //

// Route::get('login', [AuthController::class, 'login']);
// Route::post('login', [AuthController::class, 'authenticate']);

// Route::get('logout', [AuthController::class, 'logout']);

// Route::get('register', [AuthController::class,'register_form'])->name('register');
// Route::post('register', [AuthController::class,'register']);

// Route Content //

Route::get('posts', [PostController::class, 'index']) ->middleware('is_admin');

Route::get('posts/create', [PostController::class, 'create']);
Route::get('posts/trash', [PostController::class, 'trash']);
Route::get('posts/{slug}', [PostController::class, 'show']);

// Untuk menghandle apa yang diinputkan di dalam create //
Route::post('posts', [PostController::class, 'store']);

// Untuk Mengedit //
Route::get('posts/{slug}/edit', [PostController::class, 'edit']);
Route::patch('posts/{slug}', [PostController::class, 'update']);

// Untuk Menghapus Blog //
Route::delete('posts/{id}', [PostController::class, 'destroy']);


