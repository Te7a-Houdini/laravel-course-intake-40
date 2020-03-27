<?php

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

Route::get('/posts', 'PostController@index')->name('posts.index');

//route for rendering form
Route::get('/posts/create', 'PostController@create')->name('posts.create');


//route for taking the submition and storing the data in db
Route::post('/posts', 'PostController@store')->name('posts.store');


Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
