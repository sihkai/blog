<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function registerrr(Request $request)
    {
        $admin = DB::table('admin')->where('userac',$request->input('userac'))->count();

        if($admin>=1)
        {
            return '失敗中的失敗';
        }

        else
        {
            $article = new Admin;
            $article->ins($request->input('userac'),$request->input('passwd'));
            return '成功'.redirect('/');

        }

    }
}