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
Route::get('shortCodes','ShortController@index');
//mail
Route::get('mail','MailController@index');
//services
Route::get('services','ServicesController@index');