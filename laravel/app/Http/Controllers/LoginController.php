<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB,Input,Redirect,url,Validator,Request;
use Builder;

/*
 *
 * $Author:孙辉
 * $Id:LoginController.php
 * 2016-05-21 8:26
 */


class LoginController extends Controller
{
    /*显示服务条款*/
    public function fuwutiaokuan()
    {
        //echo 132;die;
        return view("login/fuwutiaokuan");
    }

    //显示到用户登录页面
    public function login()
    {
        return view("login/login");
    }

    //显示到会员注册页面
    public function register()
    {
        //echo 132;die;
        return view("login/register");
    }

    //注册页面接值进行入库
    public function registerPro(){

        $tel=Request::get('Mobile');
        $u_name=Request::get('u_name');
        $id_card=Request::get('id_card');
        $pet_name=Request::get('pet_name');
        $real_name=Request::get('real_name');
        $password=Request::get('Password');
        $radio=Request::get('radio');
        $email=Request::get('Email');

        $reg_time=date("Y-m-d H:i:s",time());
        if($radio==0){
            $id=DB::table("users")->insertGetId(
                array('u_name'=>$u_name,'u_pwd'=>$password,'u_tel'=>$tel,'id_card'=>$id_card,
                    'pet_name'=>$pet_name,'real_name'=>$real_name,'u_email'=>$email,'reg_time'=>$reg_time)
            );
            DB::table('users')->where('u_id','=',$id)->update(array('u_points'=>100));
            setcookie('username',$u_name);
            setcookie('u_id',$id);
            setcookie('status',10);
            return redirect('/');
        }else{
            $id=DB::table("f_users")->insertGetId(
                array('u_name'=>$u_name,'u_pwd'=>$password,'u_tel'=>$tel,'u_card'=>$id_card,
                    'pet_name'=>$pet_name,'real_name'=>$real_name,'u_email'=>$email,'reg_time'=>$reg_time)
            );
            setcookie('username',$u_name);
            setcookie('u_id',$id);
            setcookie('status',1);
            return redirect('/');
        }
    }


    /*登录页面获取动态密码*/
    public function dynamic(){
        $tel=Request::get("tel");
        //echo $tel;die;
        $pwd=rand(1000,9999);       //将随机4位密码发送手机
        //session(["$tel"=>"$pwd"]);
        //echo session("$tel");
        $url="http://api.k780.com:88/?app=sms.send&tempid=50520&param=code%3d{$pwd}&phone={$tel}&appkey=18375&sign=5e4c47f9509cdd656a52bee9d8bdac14&format=json";
        $str=file_get_contents($url);
        echo $pwd;
    }

    /*会员登录处理*/
    public function loginPro1(){
        //session_start();
        date_default_timezone_set('Asia/Shanghai');
        $username=Request::get('username');
        $pwd=Request::get('pwd');
        $status=Request::get('status');
        //session(["status"=>$status]);
        setcookie("status",$status);
        //echo date("Y-m-d H:i:s",time());die;
        //session::put('lala','xiaogou');
        //echo session::get('lala');die;
       /*$arr=DB::table("users")
                ->where(array('u_name'=>$username,'u_pwd'=>$pwd))
                ->orWhere(array('u_email'=>$username,'u_pwd'=>$pwd))
                ->orWhere(array('u_tel'=>$username,'u_pwd'=>$pwd))
                ->first();*/
        if($status==1){
            $arr=DB::table('f_users')
                ->where('u_name',$username)
                ->first();
        }else{
            $arr=DB::table('users')
                ->where('u_name',$username)
                ->orwhere('u_email',$username)
                ->orwhere('u_tel',$username)
                ->first();
        }

        //var_dump($arr);die;
        if($arr){
            //echo $arr->u_id;die;
            if($arr->u_pwd==$pwd){
                //判断登录人是房东还是客户  将登陆时间入库
                if($status==1){
                    //echo 123;die;
                    //判断账号是否锁定
                    if($arr->u_status==1){
                        DB::table("f_users")->where("u_id",$arr->u_id)->update(['last_login'=>date("Y-m-d H:i:s")]);
                        setcookie("username",$username);
                        setcookie("u_id",$arr->u_id);
                       // Session::put("name",$username);
                        //echo Session::get('name');die;
                        //echo Session::get("name");die;
                        //$_SESSION['name']=$username;
                       // echo $_SESSION['name'];die;
                        //echo $_COOKIE['status'];die;
                        return redirect('/');
                    }else{
                        echo "<script>alert('您的账号已锁定');location.href='login'</script>";
                    }

                }else{
                    if($arr->u_status==1){
                        DB::table("users")->where("u_id",$arr->u_id)->update(['last_login'=>date("Y-m-d H:i:s")]);
                        setcookie("username",$username);
                        setcookie("u_id",$arr->u_id);
                        //echo $_COOKIE['status'];die;
                        return redirect('/');
                    }else{
                        echo "<script>alert('您的账号已锁定');location.href='login'</script>";
                    }
                }

            }else{
                echo "<script>alert('您输入的密码不正确');location.href='login'</script>";
            }
        }else{
            echo "<script>alert('您输入的账号不正确');location.href='login'</script>";
            //return redirect('/login/login')->with( 'Update Success! 成功！ :)');
        }
    }

    /*手机登录进行验证*/
    public function loginPro2(){
        //session(['status'=>0]);
        setcookie("status",1);
        echo 1;
    }

    //用户退出
    public function loginOut(){
        //session_start();
        setcookie('username','',time()-1,'/');
        setcookie('u_id','',time()-1,'/');
        setcookie('status','',time()-1,'/');
        //echo $_SESSION['name'];die;
        //print_r($_COOKIE['username']);die;
        return redirect('/');
    }

    //第三方登录
    public function qq(){
        return view('login/demo');
    }

}
