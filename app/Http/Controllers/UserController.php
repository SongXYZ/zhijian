<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Storage;

class UserController extends BaseController{

    //登录
    public function login(Request $request){
        $username = $request->get('XH');
        $password = $request->get('MM');
//        dd($username,$password);
        if(!$username){
            return ['code' => 'noUser'];
        }
        elseif(!$password){
            return ['code' => 'errP'];
        }
        else{
            $user = DB::connection('mysql_li')
            ->table('user')
            ->where('XH', '=', $username)
            ->select('MM', 'XM')
            ->get();
            return $user;
        }
    }

    public function pk(Request $request){
        $id = $request->get('xx');
//        dd($username,$password);
        if(!$id){
            return ['code' => 'noUser'];
        }
        else{
            $user = DB::connection('mysql_pk')
            ->table('tanqin')
            ->where('id', '=', $id)
            ->select('*')
            ->get();
            return $user;
        }
    }
}

























