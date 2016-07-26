<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\HomeController;
use App\User;
use App\Models\Admin;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //進入後台首頁
    public function backend()
    {
        return view('admin.backend')
            ->withArticles(Article::all());
    }
    public function LoginCheck(Request $request)
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

            session()->put('account', $user->account);
            return redirect('backend');
        }
        //輸入的帳在資料庫存在但密碼不符合
        else if($request->input('account')==$user->account && $request->input('password')!=$user->password)
        {
            return '密碼錯誤失敗';
        }
    }

}