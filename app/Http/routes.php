<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@home');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');
Route::get('/articles/detail','HomeController@articles');
Route::get('/admin/creat','Admin\AdminController@creat');
Route::post('admin/article','Admin\AdminController@addarticle');
Route::post('admin/article/del', 'Admin\AdminController@destroy');




