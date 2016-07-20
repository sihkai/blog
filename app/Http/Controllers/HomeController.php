<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function home()
    {
      return view('home')->withArticles(Message::all());
    }
    public function login()
    {
        return view('login');
    }
    public function homelogin(Request $request)
    {
        //檢查使用者是否存在
        $user=DB::table('admin')->where('userac',$request->input('userac'))->first();
        if($user ==null)
        {
            return '您所輸入的使用者不存在';
        }

        //輸入的帳號密碼與資料庫帳號密碼相符登入
        else if($request->input('userac')==$user->userac && $request->input('passwd')==$user->passwd)
        {

           return redirect()->route('loginlogin')
               ->withArticles(Message::all())
               ->withOneadmin($user);
              // ->withOneadmin(Admin::where('userac',$user ->userac)-first());
        }
        //輸入的帳在資料庫存在但密碼不符合
        else if($request->input('userac')==$user->userac && $request->input('passwd')!=$user->passwd)
        {

            return '密碼錯誤失敗';

        }



    }
    public function register()
    {
        return view('register');
    }
    public function articles(Request $request)
    {
        return view('articles')->withArticles(Message::where('id',$request->input('id'))->first());
    }

}