<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB,Input,Redirect,url,Validator,Request;
use App\User;
use App\Task;

/**
 *  @U+           处理程序文件
 *  @Fdong：       留言
 *  @Author:      张龙
 *  @Time         2016-05-17
 */


class MessageController extends Controller
{
	// 首页
    public function index()
    {
    	
    	$u_id = $_COOKIE['u_id'];
		$username = $_COOKIE['username'];

    	

          $users = DB::table('message')
                ->join("users","message.u_id","=","users.u_id")
                ->orderBy('m_id','desc')
                ->limit(4)
                ->get();

    	// $uer = [
    	// 	'm_id' =>$users['m_id'],
    	// 	'u_id' =>$users['u_id'],
    	// 	'm_content' =>$users['m_content'],
    	// 	'm_img' =>$users['m_img'],
    	// 	'm_time' =>$users['m_time']
    	// ]

		// var_dump($users);die;

    	return view("message/message",array('users'=>$users,'username'=>$username,'u_id'=>$u_id));
    }
    // 添加
    public function aduser()
    {

    	// $oUserName=Request::get('oUserName');
    	$oConBox=htmlspecialchars(Request::get('oConBox')) ;
        //echo $oConBox;die;

    	$oUserImg=Request::get('oUserImg');
    	$oUserId=Request::get('oUserId');
    	$data = date('Y-m-d H:i:s',time());
    	DB::table('message')->insert(array('m_content'=> $oConBox,'m_img'=> $oUserImg,'m_time'=> $data,'u_id'=> $oUserId));

    	$users = DB::table('message')->orderBy('m_id','desc')->limit(5)->join("users","message.u_id","=","users.u_id")->get();

            $users = DB::table('message')
                ->orderBy('m_id','desc')
                ->limit(3)
                ->join("users","message.u_id","=","users.u_id")
                ->get();


    	return view("message/messageerplace",array('users'=>$users));
    }
}
