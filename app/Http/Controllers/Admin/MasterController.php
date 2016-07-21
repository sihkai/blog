<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use session;

class MasterController extends Controller
{

    public function __construct()
    {
        $this->article();
    }

    //顯示文章
    public function article()
    {
        if (session()->has('account'))
      {
          view()->share('account',session('account'));
      }
      else
      {
          header('Location: '.url('login'));
      }
    }

}