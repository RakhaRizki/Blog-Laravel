<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HelloController;
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

// Fyi (For Your Informations)
// Host = facebook.com , instagram.com , twitter.com ;
// Enpoint = Facebook.com/Beranda , instagram.com/pencarian , Twitter.com/profile ;
// URI / Enpoint / Alamat = '/' ; 
// Static = Data yang Beraturan , Dynamic = Tidak Beraturan ;
// di blade synatx ini artinya {{Code}} sama seperti echo ;
// @php() 
// DD = Dump & Die DDD = Dump & Die & Debug
// ' = Hanya String saja , " = Bisa berbeda tipe data misalnya sting + variabel 
// CSRF = Untuk menindentifikasi Request yang ingin masuk ke server // 
// My Project Client - CSRF - My Project Server (My project client akan di accept soalnya ada tokennya yaitu CSRF) 

Route::get('/', function () {
    return view('welcome');
});

// Route::get('tes', function() {
//     echo "Kamu Berhasil";
// });

// Route::get('ikan', function(){
//     echo "kamu berhasil";
// });

// Route::get('sapi','App\Http\Controllers\HelloController@index');

// Route::get('datang', [HelloController::class,'Welcome']);

// Route::resource('posts', PostController::class);

// Main Project "Posts //

Route::get('posts', [PostController::class, 'index']);
Route::get('posts/create', [PostController::class, 'create']);
Route::get('posts/{id}', [PostController::class, 'show']);

// Untuk menghandle apa yang diinputkan di dalam create //
Route::post('posts', [PostController::class, 'store']);



// latihan //

Route::get('food', [FoodController::class, 'index']);



