<?php

namespace App\Http\Controllers\admin;
use Crypt;
use App\User;
use App\Models\Article;
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
        $article = Article::where('id',$id)->first();
        return view('admin.backend_article')->withArticles($article);
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
        return view('articles')->withArticles(Article::where('id',$request->input('id'))->first());
    }
    //刪除文件
    public function destroy($id)
    {
        $article = new Article;
        $article -> del($id);
        return redirect()->route('backend');
    }



    //確定更新文件 (update)
    public function update(Request $request)
    {
    if($request->input('id') != null)
        {
            //更新
            $article = new Article;
            $article->upda($request->input('id'),$request->input('title'),$request->input('article'),$request->input('detail'));
            return redirect()->route('backend');
        }
    else
        {
            //新增文件
            $article = new Article;
            $article  ->ins($request->input('title'),$request->input('article'),$request->input('detail'));
            return redirect()->route('backend');

        }
    }

}