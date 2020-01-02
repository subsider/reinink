<?php

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

use App\Http\Controllers\FavouriteBooksController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\StatsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users/{user}/favourite-books', [FavouriteBooksController::class, 'index']);
Route::get('users/{user}/friends', [FriendsController::class, 'index']);
Route::get('stats', [StatsController::class, 'index']);
