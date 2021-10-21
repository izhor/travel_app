<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PostController;
use App\http\Controllers\UserController;
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
    return view('welcome-menu/home-menu');
});

Route::get('/about', function () {
    return view('welcome-menu/about');
});

Route::get('/flight', function () {
    return view('user/flight');
});

Route::get('/hotel', function () {
    return view('user/hotel');
});
Route::get('/myflight',UserController::class.'@displayFlight');
Route::get('/myBook',UserController::class.'@displayBook');
Route::get('/myBook/{id}',UserController::class.'@detailBook');
Route::post('/getFlight',UserController::class.'@addNewFlight');
Route::post('/getHotel',UserController::class.'@addHotel');
Route::get('/posts',PostController::class.'@show_post');
Route::get('/comments/{id}',PostController::Class.'@comments');
Route::get('/myFlight/{id}',UserController::class.'@detailFlight');
Route::get('/deleteBook/{id}',UserController::class.'@deleteBook');
Route::get('/deleteFlight/{id}',UserController::class.'@deleteFlight');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
