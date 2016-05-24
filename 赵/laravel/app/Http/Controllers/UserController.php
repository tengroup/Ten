<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
    	return view("user/shortCodes");
    }
    //个人信息
    public function personal()
    {
    	return view("user/personal");
    }
    //房源添加
    public function fyAdd()
    {
    	return view("user/fyAdd");
    }
    //预约列表
    public function appointment()
    {
    	return view("user/appointment");
    }
}
