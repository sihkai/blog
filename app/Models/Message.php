<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Message extends model
{
    protected $table = 'message';


    public function  ins($title , $message, $detail)
    {
        DB::table('message')->insert(
            ['title' => $title, 'message'=>$message, 'detail'=>$detail]
        );
    }

}
