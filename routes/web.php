<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


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

/* Route::get('/users', function () {
    return view('users');
}); */

Route::controller(PostController::class)->prefix('posts')->group(function () {
    Route::get('/', 'index')->name('posts.index');
    Route::get('/create', 'create')->name('posts.create');
    Route::post('/store', 'store')->name('post.store');
    Route::get('/show/{id}', 'show')->name('posts.show');
    Route::get('/edit/{id}', 'edit')->name('posts.edit');
    Route::post('/update/{id}', 'update')->name('post.update');
    Route::get('/delete/{id}', 'delete')->name('posts.delete');
    Route::get('/delete', 'deleteAll')->name('posts.delete.all');
    Route::get('/softdelete', 'softDelete')->name('posts.softDelete');
    Route::get('/restore/{id}', 'restore')->name('posts.restore');
    Route::get('/forceDelete/{id}', 'forceDelete')->name('posts.forceDelete');

});



Route::controller( UserController::class)->prefix('users')->group(function(){
    Route::get('/','index')->name('users.index');
    Route::get('/delete/{id}', 'delete')->name('users.delete');

});





#
