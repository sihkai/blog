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
Route::get('/admin/creat','Admin\ArticlesController@creat');
Route::post('register/rr','Admin\AdminController@registerrr');
Route::post('admin/article','Admin\ArticlesController@addarticle');
Route::post('admin/article/up/{id}', 'Admin\ArticlesController@up');
Route::post('admin/article/up/check/{id}', 'Admin\ArticlesController@upcheck');
Route::DELETE('admin/article/del/{id}', 'Admin\ArticlesController@destroy');






