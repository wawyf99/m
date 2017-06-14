<?php


namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    public function shows(){
        echo 44444;
        return view('Admin/index');
    }
}