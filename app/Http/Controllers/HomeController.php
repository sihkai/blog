<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;

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
    public function home()
    {
      return view('home')->withArticles(Message::all());
    }

    /**
     * 進入前台登入畫面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view('login');
    }
    //判斷前台登入後台的帳密
    public function homelogin(Request $request)
    {
        //檢查使用者是否存在
        $user=DB::table('admin')->where('account',$request->input('account'))->first();
        if($user ==null)
        {
            return '您所輸入的使用者不存在';
        }

        //輸入的帳號密碼與資料庫帳號密碼相符登入
        else if($request->input('account')==$user->account && $request->input('password')==$user->password)
        {
            session(
                [
                    'user' => $user,
                ]);

            dd(session('user'));

           return redirect()->route('loginlogin')
               ->withArticles(Message::all())
               ->withOneadmin($user);
              // ->withOneadmin(Admin::where('account',$user ->account)-first());
        }
        //輸入的帳在資料庫存在但密碼不符合
        else if($request->input('account')==$user->account && $request->input('password')!=$user->password)
        {
            return '密碼錯誤失敗';
        }
    }

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
        return view('articles')->withArticles(Message::where('id',$request->input('id'))->first());
    }

}