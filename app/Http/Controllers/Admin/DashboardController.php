<?php

namespace App\Http\Controllers\admin;
use Crypt;
use App\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use session;

class DashboardController extends MasterController
{

    //新增文件畫面
    public function article()
    {
        return view ('admin.backend_article');
    }

    //進到更新文件的view
    public function edit($id)
    {
        $message = Message::where('id',$id)->first();
        return view('admin.backend_article')->withArticles($message);
    }

    public function backend()
    {
        return view ('admin.backend');
    }

    //登出,清空session
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
    //刪除文件
    public function destroy($id)
    {
        $article = new Message;
        $article -> del($id);
        return redirect()->route('backend');
    }



    //確定更新文件 (update)
    public function update(Request $request)
    {
        $request->input('id',null);
        if(empty($id))
        {
        return 123;}
        else
            return $id;
    }

}