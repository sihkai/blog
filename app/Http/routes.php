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
Route::get('dashboard', 'admin\LoginController@EnterDashboard')->name('EnterDashboard');

//在登入介面輸入帳密後做判斷
Route::post('/login/LoginCheck', 'HomeController@LoginCheck');

//在登入介面輸入帳密後做判斷
Route::post('/login/check', 'HomeController@homelogin');

//新增文件的畫面(view)
Route::get('/admin/article','Admin\ArticlesController@article');

//後台確定新增新文件
Route::post('admin/article/addarticle','Admin\ArticlesController@addarticle');

//註冊帳號密碼做是否有被註冊過的判斷
Route::post('register/check','Admin\AdminController@registecheck');



//後台選取編輯文章跳到那篇文章的畫面
Route::post('admin/article/up/{id}', 'Admin\ArticlesController@up');

//後台點編輯文章也確定要更新
Route::post('admin/article/up/check/{id}', 'Admin\ArticlesController@upcheck');

//後台刪除文章
Route::post('admin/article/del/{id}', 'Admin\ArticlesController@destroy');






