<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB,Request;


/*
 * $Author:huigege
 * $Id:EventsController.php 2016-05-27 8:26 dongmengtao
 */

class FootController extends Controller
{
    //指向渲染页面关于我们
    public function guanyu(){
        return view('commonality/foot/guanyu');
    }

    //指向渲染页面我是房客
    public function myfk(){
        return view('commonality/foot/myfk');
    }

    //指向渲染页面加入u+
    public function jiaru(){
        return view('commonality/foot/jiaru');
    }

    //指向渲染页面服务条款
    public function fw(){
        return view('commonality/foot/fw');
    }

    //指向渲染页面隐私权条款
    public function yinsi(){
        return view('commonality/foot/yinsi');
    }

}