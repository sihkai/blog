<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Admin extends model
{
    protected $table = 'admin';

    public function  ins($account , $password)
    {
        DB::table('admin')->insert(
            ['account' => $account, 'password'=>$password ]
        );
    }



}