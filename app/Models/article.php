<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Article extends model
{
    protected $table = 'article';


    public function  ins($title , $article, $detail)
    {

        DB::table('article')
            ->insert(['title' => $title, 'article' => $article, 'detail' => $detail]);
    }

    public function upda($id,$title , $message, $detail)
        {
           DB::table('article')
                ->where('id',$id)
               ->update(['title' => $title, 'article'=>$article,'detail'=>$detail]);
        }


    public function  del($id)
    {
        DB::table('article')->where('id', '=', $id)->delete();
    }


}
