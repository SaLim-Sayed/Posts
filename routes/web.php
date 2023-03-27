<?php

use App\Mail\TestMail;
use App\Mail\TestsMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;




Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return redirect()->route('posts.index');
    });



    Route::controller(PostController::class)->prefix('posts')->middleware('checkUser')->group(function () {
        Route::get('/','index')->name('posts.index');
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

});

#
/* Route::get('/send', function () {
    Mail::to('salimcse981@yahoo.com')->send(new TestsMail());
    return response('sending');
}) ;*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




#
