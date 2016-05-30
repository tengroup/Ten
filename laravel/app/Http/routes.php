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
/*Route::get('/', function () {
    return view('welcome');
});*/
//index 首页
Route::get('index','HomeController@index');
Route::get('/','HomeController@index');





//events
Route::get('events','EventsController@index');
// 更新
//Route::get('events','EventsController@lists');


//personal  个人信息
Route::get('personal','UserController@personal');
//editStatr 房东修改状态
Route::get('editStatr','UserController@editStatr');
//per_edit  编辑个人信息
Route::get('perEdit','UserController@perEdit');
//perEditSubmit  提交修改个人信息
Route::post('perEditSubmit','UserController@perEditSubmit');

//fyAdd  房源添加
Route::any('fyAdd','UserController@fyAdd');
Route::any('addhoust','UserController@addHoust');
Route::any('video','UserController@videoDo');
Route::get('fyList','UserController@fyList');

//appointment  预约列表
Route::get('appointment','UserController@appointment');

//perLook  查看预约信息
//appointment  收藏列表
Route::any('appointmentAdd','UserController@appointmentAdd');
Route::get('appointment','UserController@appointment');

//perLook  查看详情页面
Route::get('perLook','UserController@perLook');


//Message
Route::get('message','MessageController@index');
Route::any('messageInsert','MessageController@aduser');


Route::get('long','TypeController@long');
//short  短租
Route::get('short','TypeController@short');
//传地址
Route::get('act_place','TypeController@short');
//传时间判断
Route::any('check_time','TypeController@short');
Route::post('all_sel','TypeController@short');
Route::get('more','TypeController@check_more');


//register
Route::get('register','LoginController@register');
Route::get('fuwutiaokuan','LoginController@fuwutiaokuan');
Route::any('registerpro','LoginController@registerPro');


//login
Route::get('login','LoginController@login');
Route::get('login/loginout','LoginController@loginOut');
Route::get('dynamic','LoginController@dynamic');        //ajax获取动态密码
Route::any('login_pro1','LoginController@loginPro1');    //账号登录
Route::any('loginpro2','LoginController@loginPro2');    //手机登录
Route::any('qq','LoginController@qq');    //第三方登录




//底部关于我们
Route::any('foot/guanyu','FootController@guanyu');
//我是房客
Route::any('foot/myfk','FootController@myfk');
//加入u+
Route::any('foot/jiaru','FootController@jiaru');
//服务条款
Route::any('foot/fuwu','FootController@fw');
//隐私权条款
Route::any('foot/yinsi','FootController@yinsi');
