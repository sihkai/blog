<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{

    public function article()
    {
      return view('admin.admincreat');
    }


    public function articles(Request $request)
    {
        return view('articles')->withArticles(Message::where('id',$request->input('id'))->first());
    }

    public function addarticle(Request $request)
    {

        $article = new Message;
        $article->ins($request->input('title'),$request->input('message'),$request->input('detail'));
        return redirect()->back();
    }

    public function destroy($id)
    {

        DB::table('message')->where('id', '=', $id)->delete();
        return redirect()->route('abc');
    }

    public function up($id)
    {
        $message = Message::where('id',$id)->first();
        return view('admin.adminupdata')->withArticles($message);
    }

    public function upcheck(Request $request,$id)
    {

        $article = new Message;
        $article->where('id',$id);
        $article->updata($request->input('title'),$request->input('message'),$request->input('detail'),$id);
        return redirect('login/rr');
    }
}