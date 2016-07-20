<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Admin extends model
{
    protected $table = 'admin';

    public function  ins($userac , $passwd)
    {
        DB::table('admin')->insert(
            ['userac' => $userac, 'passwd'=>$passwd ]
        );
    }



}