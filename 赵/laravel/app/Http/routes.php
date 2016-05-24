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
//appointment  预约列表
Route::get('appointment','UserController@appointment');


//Message
Route::get('message','MessageController@index');


//short  短租
Route::get('short','TypeController@short');
//传地址
Route::get('act_place','TypeController@short');
//传时间判断
Route::get('check_time','TypeController@check_time');
Route::post('all_sel','TypeController@all_sel');
////long  长租
//Route::get('long','TypeController@long');


//register
Route::get('register','LoginController@register');

//login
Route::get('login','LoginController@login');

