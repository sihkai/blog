<?php

namespace App\Http\Controllers\admin;
use Crypt;
use App\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //判斷註冊的帳號是否有註冊過
    public function registe_check(Request $request)
    {
        $admin = DB::table('admin')->where('account',$request->input('account'))->count();
        if($admin>=1)
        {
            return '此帳號已經有人註冊過囉!';
        }
        else
        {
            $article = new Admin;
            $article->ins($request->input('account'),Crypt::encrypt($request->input('password')));

            return '成功'.redirect('/');
        }
    }
    public function edit(Request $request)
    {
        return view('admin.edit');
    }
}