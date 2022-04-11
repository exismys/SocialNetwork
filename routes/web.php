<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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
})->name('home');

Route::controller(UserController::class)->group(function () {
    Route::post('/signup', 'postSignUp')->name('signup');
    Route::post('/signin', 'postSignIn')->name('signin');
    Route::get('/logout', 'getLogout')->name('logout');
    
});

Route::controller(PostController::class)->group(function() {
    Route::post('/createPost', 'postCreatePost')->name('post.create');
    Route::get('/dashboard', 'getDashboard')->name('dashboard')->middleware('auth');
    Route::get('/delete-post/{post-id}', 'getDeletePost')->name('post.delete')->middleware('auth');
    Route::post('/edit', 'postEditPost')->name('edit');
});
