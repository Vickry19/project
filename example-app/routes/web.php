<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/book', [BookController::class, 'index']);
Route::post('/book', [BookController::class, 'store']);

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/package', function () {
    return view('package');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/signup', function () {
    return view('signup');
});
