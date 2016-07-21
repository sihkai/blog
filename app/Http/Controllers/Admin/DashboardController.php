<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use session;

class DashboardController extends MasterController
{
    public function EnterDashboard()
    {
        return view ('admin.adminhome');
    }


    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    //透過id知道選擇哪一篇，把資料撈到前台articles的view (index)
    public function index(Request $request)
    {

        return view('articles')->withArticles(Message::where('id',$request->input('id'))->first());
    }

    //確定新增文件
    public function addarticle(Request $request)
    {
        $article = new Message;
        $article->ins($request->input('title'),$request->input('message'),$request->input('detail'));
        return redirect()->route('loginlogin');
    }

    //刪除文件
    public function destroy($id)
    {
       // DB::table('message')->where('id', '=', $id)->delete();
        return redirect()->route('loginlogin');
    }

    //進到更新文件的view
    public function edit($id)
    {
        $message = Message::where('id',$id)->first();
        return view('admin.adminupdata')->withArticles($message);
    }

    //確定更新文件 (update)
    public function update(Request $request,$id)
    {

        $article = new Message;
        $article->where('id',$id);
        $article->updata($request->input('title'),$request->input('message'),$request->input('detail'),$id);
        return redirect('login/login');
    }
}