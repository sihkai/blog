<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\HomeController;
use App\User;
use App\Models\Admin;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends HomeController
{
    //進入後台首頁
    public function loginlist()
    {
        return view('admin.adminhome')
            ->withArticles(Message::all());
    }


}