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


Route::get('/blogpost/{id}','BPostController@article');
Route::post('/createcomment/{id}','BPostController@create');

Route::get('/contact', function () {
    return view('contact');
});


Route::post('/news','NewsletterControler@index');

Route::post('/mail','MailController@create');



        /* Admin */

    // HomePage
Route::get('/admin/logo', 'AdminhomeController@logo');
Route::post('/create/logo', 'AdminhomeController@createlogo');
Route::post('/delete/logo/{id}', 'AdminhomeController@deletelogo');

Route::get('/admin/carousel', 'AdminhomeController@carousel');
Route::post('/create/img', 'AdminhomeController@storeimg');
Route::post('/delete/img/{id}', 'AdminhomeController@deleteimg');


Route::get('/admin/video','AdminhomeController@video');
Route::post('/newvideo','AdminhomeController@newvideo');
Route::post('/delete/video/{id}','AdminhomeController@deletevideo');

Route::get('/admin/testimonial','AdminhomeController@testimonial');
Route::post('/newtestimonial','AdminhomeController@newtestimonial');
Route::post('/delete/testimonial/{id}','AdminhomeController@deletetestimonial');

Route::get('/admin/10services','AdminhomeController@service');
Route::post('/newservice','AdminhomeController@newservice');
Route::post('/delete/service/{id}','AdminhomeController@deleteservice');

Route::get('/admin/team','AdminhomeController@team');
Route::post('/newteam','AdminhomeController@newteam');
Route::post('/delete/team/{id}','AdminhomeController@deleteteam');

    // Services Page

Route::get('/admin/services','AdminserviceController@services');
Route::post('/newservices','AdminserviceController@newservices');
Route::post('/delete/services/{id}','AdminserviceController@deleteservices');

Route::get('/admin/projects','AdminserviceController@projects');
Route::post('/newprojects','AdminserviceController@newprojects');
Route::post('/delete/projects/{id}','AdminserviceController@deleteprojects');

Route::get('/admin/3project','AdminserviceController@project');
Route::post('/new3project','AdminserviceController@new3project');
Route::post('/delete/3project/{id}','AdminserviceController@delete3project');


Route::get('/admin/posts','AdminblogController@posts');
Route::get('/admin/editpost/{id}','AdminblogController@editpost');
Route::post('/admin/deletepost/{id}','AdminblogController@deletepost');

Route::post('/admin/deletecomment/{id}','AdminblogController@deletecomment');




Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();