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

Route::get('/', function () {
    return view('page.home');
});
Route::get('/about', function () {
    return view('page.about');
});
Route::get('/service', function () {
    return view('page.service');
});
Route::get('/blog', function () {
    return view('page.blog');
});
Route::get('/contact', function () {
    return view('page.contact');
});
Route::get('/menu', function () {
    return view('page.pizza');
});
Route::get('/admin/users/add_users', function () {
    return view('admin.users.add_users');
});


Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

