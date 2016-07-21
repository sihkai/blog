<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Message extends model
{
    protected $table = 'message';


    public function  ins($title , $message, $detail)
    {
        DB::table('message')->insert(
            ['title' => $title, 'message'=>$message, 'detail'=>$detail]
        );
    }

    /*public function  update($title , $message, $detail,$id)
    {
        DB::table('message')
            ->where('id',$id)
            ->update(['title' => $title, 'message'=>$message, 'detail'=>$detail]);
    }
    public function  load($id)
    {

        DB::table('message')
            ->where('id',$id)
            ->first();
    }

    public function  del($title , $message, $detail,$id)
    {
        DB::table('message')
            ->where('id',$id)
            ->update(['title' => $title, 'message'=>$message, 'detail'=>$detail]);
    }*/


}
