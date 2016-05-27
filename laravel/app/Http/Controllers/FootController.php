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
}