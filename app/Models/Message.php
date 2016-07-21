<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Message extends model
{
    protected $table = 'message';


    public function  insupdate($id,$title , $message, $detail)
    {
        if($id!=null)
        {
            DB::table('message')
                ->where('id',$id)
                ->update(['title' => $title, 'message'=>$message, 'detail'=>$detail]);

        }
        else
        {
           DB::table('message')
                ->where('id',$id)
                ->insert(['title' => $title, 'message'=>$message,'detail'=>$detail]);
        }

    }


    public function  del($id)
    {
        DB::table('message')->where('id', '=', $id)->delete();
    }


}
