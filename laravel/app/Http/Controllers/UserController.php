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
        $u_id=$_COOKIE['u_id'];
        $arr['type']=DB::table("house_type")->get();
        $arr['list'] = DB::table('house')
            ->join('house_type', 'house.t_id', '=', 'house_type.t_id')
            ->where('u_id','=',$u_id)
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

        $file =Request::file('files');
        ///var_dump($file );die;
        unset($arr['video']);
        unset($arr['files']);
        $arr['is_hot']=Request::get("is_hot");
        $arr['is_best']=Request::get("is_best");
        $arr['is_cheap']=Request::get("is_cheap");
        $arr['h_time']=date("Y-m-d H:i:s",time());
        $arr['u_id']=$_COOKIE['u_id'];


        $h_id=DB::table("house")->insertGetId($arr);
        if($h_id){
            //图片进行入库
            for($i=0;$i<count($file);$i++){
                $clientName = $file[$i]  ->  getClientOriginalName();
                $extension = $file[$i]->getClientOriginalExtension();
                $newName = md5(date('ymdhis').$clientName).".".$extension;
                //var_dump(public_path());
                $dir=public_path().'/houst_img/'.date('Y-m-d');
                $file[$i]->move($dir,$newName);
                $newName=date('Y-m-d').'/'.$newName;
               DB::table("images")->insert(["h_id"=>$h_id,"img"=>$newName]);
            }
            return redirect("fyAdd");
        }else{
            echo "<script>alert('添加失败哦');location.href='fyAdd'</script>";
        }

    }


}
