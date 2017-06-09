<?php


namespace App\Http\Controllers\Home;

use App\Home;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    public function shows(){
        echo 44444;
        return view('Home/index');
    }
}