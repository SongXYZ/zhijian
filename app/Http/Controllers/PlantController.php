<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PlantController extends Controller
{
    /**
     * 返回用户信息
     */
    public function userInfo()
    {
        $users = DB::table('userinfo')->paginate(5);

        return view('plant.user', ['users' => $users]);
    }

    /**
     * 返回植物百科信息
     */
    public function plantInfo()
    {
        $plants = DB::table('plantinfo')->paginate(5);
        return view('plant.plant', ['plants' => $plants]);
    }

    /**
     * 返回景点信息
     */
    public function viewSpotInfo()
    {
        $viewspots = DB::table('viewspot')->paginate(5);
        return view('plant.viewspot', ['viewspots' => $viewspots]);
    }

    /**
     * 返回用户评论
     */
    public function discussInfo()
    {
        $discuss = DB::table('discuss')->paginate(5);
        return view('plant.discuss', ['discuss' => $discuss]);
    }

    /**
     * 扩展植物图库信息
     */
    public function expandPlantInfo()
    {
        return view('plant.expand');
    }
}