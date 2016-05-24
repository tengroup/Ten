<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// index 首页
Route::get('/', function () {
    return view('welcome');
});
//index 首页
Route::get('index','HomeController@index');


//single  详情页
Route::get('single','HomeController@single');


//events
Route::get('events','EventsController@index');


//shortCodes
Route::get('shortCodes','UserController@index');


//personal  个人信息
Route::get('personal','UserController@personal');


//fyAdd  房源添加
Route::get('fyAdd','UserController@fyAdd');
Route::any('addhoust','UserController@addHoust');

//appointment  预约列表
Route::get('appointment','UserController@appointment');


//Message
Route::get('message','MessageController@index');


//short  短租
Route::get('short','TypeController@short');
//long  长租
Route::get('long','TypeController@long');


//register
Route::get('register','LoginController@register');
Route::get('fuwutiaokuan','LoginController@fuwutiaokuan');
Route::any('registerpro','LoginController@registerPro');

//login
Route::get('login','LoginController@login');
Route::get('dynamic','LoginController@dynamic');        //ajax获取动态密码
Route::any('login_pro1','LoginController@loginPro1');    //账号登录
Route::any('loginpro2','LoginController@loginPro2');    //手机登录
