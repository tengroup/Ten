<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Request;
use Symfony\Component\Console\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Session;
use Cookie;

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
    //预约列表
    public function appointment()
    {
    	return view("user/appointment");
    }

    //房源添加
    public function fyAdd()
    {

        $u_id=Session::get("username");
        $arr['type']=DB::table("house_type")->get();
        $arr['list'] = DB::table('house')
            ->join('house_type', 'house.t_id', '=', 'house_type.t_id')
            ->where('u_id','=',1)
            ->orderBy('h_time', 'desc')
            ->paginate(5);
        //return view('user/fyAdd', ['list' => $arr]);
        return view("user/fyAdd",$arr);
    }
    /**
     * 房源添加入库
     */
    public function addHoust(){

        date_default_timezone_set('Asia/Shanghai');
        $arr=Request::all();
        //var_dump($arr);die;
        $arr['is_hot']=Request::get("is_hot");
        $arr['is_best']=Request::get("is_best");
        $arr['is_cheap']=Request::get("is_cheap");
        $arr['h_time']=date("Y-m-d H:i:s",time());
        $arr['u_id']=Session("username");

        $re=DB::table("house")->insertGetId($arr);
        if($re){

            //$arr['type']=DB::table("house_type")->get();
           // $arr['list'] = DB::table('house')->paginate(5);
            //return view('user/fyAdd', $arr);
            return redirect("fyAdd");
        }else{
            echo "<script>alert('添加失败哦');location.href='fyAdd'</script>";
        }

    }
}
