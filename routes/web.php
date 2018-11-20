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

Route::get('/', 'WelController@index');

Route::get('/services', 'ServiceController@index');

Route::get('/blog', 'BlogController@index');

// Route::get('/blogpost', 'BPostController@index');  

Route::get('/blogpost/{id}','BPostController@article');

Route::get('/contact', function () {
    return view('contact');
});


Route::post('/news','NewsletterControler@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

