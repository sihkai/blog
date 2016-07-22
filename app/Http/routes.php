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
//進入前台首頁(view)
Route::get('/', 'HomeController@index')->name('index');

Route::get('/logout', 'Admin\DashboardController@logout');

//進入會員登入畫面(view)
Route::get('/login', 'HomeController@login');

//登入註冊會員畫面(view)
Route::get('/register', 'HomeController@register');

//選取前台文件後看到整篇文章的詳情
Route::get('/articles/detail','HomeController@articles');

//進入後台首頁
Route::get('backend', 'admin\LoginController@backend')->name('backend');

//在登入介面輸入帳密後做判斷
Route::post('/login/LoginCheck', 'Admin\LoginController@LoginCheck');

//新增文件的畫面(view)
Route::get('backend/insert','Admin\DashboardController@article');

//後台選取編輯文章跳到那篇文章的畫面
Route::post('backend/edit/{id}', 'Admin\DashboardController@edit');

//後台確定新增/編輯新文件
Route::post('backend/insert/check','Admin\DashboardController@update');

//註冊帳號密碼做是否有被註冊過的判斷
Route::post('register/check','Admin\AdminController@registe_check');




//後台點編輯文章也確定要更新
Route::post('backend/edit/update/{id}', 'Admin\DashboardController@update');

//後台刪除文章
Route::post('backend/del/{id}', 'Admin\DashboardController@destroy');






