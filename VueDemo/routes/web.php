<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
        return ('welcome');
    });

// Auth::routes();

Route::get('/login', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/reg', function () {
    return view('reg');
});
    
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login')->name('login'); 
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/vue', function () {
//     return view('vue');
// });


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
