<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * 進入前台首頁
     * @return mixed
     */
    public function index()
    {

        $articles = DB::table('article')->paginate(5);

        return view('index', ['articles' => $articles]);
    }

    //進入前台登入畫面
    public function login()
    {
        return view('login');
    }
    //判斷前台登入後台的帳密


    //進入註冊畫面
    public function register()
    {
        return view('register');
    }

    /**
     * 前台顯示文章詳情
     * @param Request $request
     * @return mixed
     */
    public function articles(Request $request)
    {

        return view('articles')->withArticles(Article::where('id',$request->id)->first());
    }

}