<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
// use Yajra\Oci8\Eloquent\OracleEloquent as Eloquent;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
//    protected $table = 'xsjbxxb';
//    public $timestamps = false;
//    protected $fillable = [
//        'XH',  //
//        'XM',  //姓名
//        'XB',  //性别
//        'CSRQ',//生日
//        'MZ',  //民族
//        'XY',  //学院
//        'ZYMC',//专业
//        'CC',  //学历
//        'ZZMM',//政治面貌
//        'LYDQ' //来源地区
//    ];

    //登录验证
    public function login($username, $password){
        $user = DB::connection('mysql_li')
            ->table('user')
            ->where('XH', '=', $username)
            ->select('MM', 'XM')
            ->get();
        if(!$user) {
            return '11';
        }
        elseif($password != $user[0]->MM){
            return ['code' => 'errP'];
        }
        else{
            session()->put('username', $username);
            return ['XH' => $username, 'XM' => $user[0]->XM];
        }
    }
}

