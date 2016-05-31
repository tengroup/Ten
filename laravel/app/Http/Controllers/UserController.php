<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB,Input,Redirect,url,Validator,Request;
use Illuminate\View\View;

/*
 *
 * $Author:孙辉
 * $Id:UserController.php
 * 2016-05-21 8:26
 */
class UserController extends Controller
{
    public function index()
    {
    	return view("user/shortCodes");
    }
    //个人信息
    public function personal()
    {
        //$type=1;
        $uId=$_COOKIE['u_id'];
        $type=$_COOKIE['status'];
        //echo $type;die;
        /**
         *     判断登陆人，查询不同
         */
        if($type==10){
            $user = DB::table('users')->where('u_id', "$uId")->first();
            $pre = DB::table('preplot')
                ->join("house","preplot.h_id","=","house.h_id")
                ->join("f_users","f_users.u_id","=","house.u_id")
                ->where('preplot.u_id', "$uId")
                ->paginate($perPage = 3, $columns = ['*'], $pageName = 'page', $page = null);
            return view("user/personal",["user"=>$user,'pre'=>$pre]);
        }else{
            $user = DB::table('f_users')->where('u_id', "$uId")->first();
            $pre = DB::table('preplot')
                ->join("house","preplot.h_id","=","house.h_id")
                ->join("users","users.u_id","=","preplot.u_id")
                ->where('house.u_id', "$uId")->paginate($perPage = 3, $columns = ['*'], $pageName = 'page', $page = null);
            return view("user/fang-personal",["user"=>$user,'pre'=>$pre]);
        }
    }
    //编辑个人信息页面
    public function perEdit()
    {
        //$type=1;
        $uId=$_COOKIE['u_id'];
        $type=$_COOKIE['status'];
        /**
         *     判断登陆人，查询不同
         */
        if($type==10){
            $user = DB::table('users')->where('u_id', "$uId")->first();
            $pre = DB::table('preplot')->join("house","preplot.h_id","=","house.h_id")->join("f_users","f_users.u_id","=","house.u_id")->where('preplot.u_id', "$uId")->paginate($perPage = 3, $columns = ['*'], $pageName = 'page', $page = null);
            return view("user/per-edit",array("user"=>$user,'pre'=>$pre));
        }else{
            $user = DB::table('f_users')->where('u_id', "$uId")->first();
            $pre = DB::table('preplot')->join("house","preplot.h_id","=","house.h_id")->join("users","users.u_id","=","preplot.u_id")->where('house.u_id', "$uId")->paginate($perPage = 3, $columns = ['*'], $pageName = 'page', $page = null);
            return view("user/fangper-edit",["user"=>$user,'pre'=>$pre]);
        }
    }
    //修改个人信息
    public function perEditSubmit()
    {
        //$type=1;
        $type=$_COOKIE['status'];
        $uId=Request::input('u_id');
        $name=Request::input('u_name');
        $petName=Request::input("pet_name");
        $realName=Request::input("real_name");
        $email=Request::input("u_email");
        $tel=Request::input("u_tel");
        /**
         *     判断登陆人，修改不同
         */
        if($type==10){
            $idCard=Request::input("id_card");
            $upd=DB::table("users")->where("u_id",'=',"$uId")->update(
                array(
                    'u_name' => "$name",
                    'pet_name' => "$petName",
                    'real_name' => "$realName",
                    'u_email' => "$email",
                    'u_tel' => "$tel",
                    'id_card' => "$idCard"
                    )
                );
        }else{
            $idCard=Request::input("u_card");
            $upd=DB::table("f_users")->where("u_id",'=',"$uId")->update(
                array(
                    'u_name' => "$name",
                    'pet_name' => "$petName",
                    'real_name' => "$realName",
                    'u_email' => "$email",
                    'u_tel' => "$tel",
                    'u_card' => "$idCard"
                    )
                );
        }
        
        if($upd){
            return Redirect::to("personal");
        }else{
            return Redirect::to("personal");
        }
    }
    //查看详情页面
    public function perLook()
    {
        $hId=Request::get('id');
		//echo $_COOKIE['username'];die;
        /*$oneMess=DB::table('preplot')->join("house","preplot.h_id","=","house.h_id")->join("f_users","f_users.u_id","=","house.u_id")->where('house.h_id', "$uId")->first();*/

        $filename= base_path("resources/static/").'2001006_'.$hId.'.blade.php';
        //echo $filename;die;
        if(file_exists($filename) ){
            echo file_get_contents($filename);
            exit;
        }

        $oneMess=DB::table('house')
            ->join("f_users","f_users.u_id","=","house.u_id")
            ->where('house.h_id', $hId)
            ->first();

        //$hId=Request::get('id');


        //$oneMess=DB::table('house')->join("f_users","f_users.u_id","=","house.u_id")->where('house.h_id', "$hId")->first();


        /*$oneMess=DB::table('preplot')
            ->join("house","preplot.h_id","=","house.h_id")
            ->join("f_users","f_users.u_id","=","house.u_id")
            ->where('house.h_id', "$hId")
            ->first();*/

        /*$oneMess=DB::table('preplot')
            ->join("house","preplot.h_id","=","house.h_id")
            ->join("f_users","f_users.u_id","=","house.u_id")
            ->where('house.h_id', "$hId")->first();*/


        //var_dump($oneMess);die;
        $img=DB::table("images")->where("h_id",$oneMess->h_id)->get();
        //var_dump($img);die;

        //房屋信息
        $res= DB :: table('house')->where("h_id",$oneMess->h_id)->get();

        $arr=DB::table('house')->where("h_id",$oneMess->h_id)->first();
        $t_id=$arr->t_id;
        //$sql="select * from house inner join house_type on house.t_id=house_type.t_id where status=1 and house.t_id=$t_id  and h_id!=$hId limit 3";
        $data=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where status=1 and house.t_id=$t_id  and h_id!=$hId limit 3");


        //生成静态页面
        $htmlStrings = view("home/single",['list'=>$oneMess,'img'=>$img,'resd'=>$res,'data'=>$data])->__toString();
        file_put_contents($filename,$htmlStrings);


        
        return  view("home/single",['list'=>$oneMess,'img'=>$img,'resd'=>$res,'data'=>$data]);

        //var_dump($oneMess);die;
        //return  view("home/single",['list'=>$oneMess,'img'=>$img]);


    }
    //添加收藏
    public function appointmentAdd()
    {
        $hId=Request::get('id');
        $uId=$_COOKIE['u_id'];
        $data = DB::table('collect')->where('u_id', $uId)->where('h_id', $hId)->get();
        if($data){
            echo 0;
        }else{
            $time=date("Y-m-d",time());
            $type = DB::table('collect')->insert(array(
                'h_id' => $hId,
                'u_id' => $uId,
                'addtime' => $time
                ));
            if($type==1){
                echo 1;
            }else{
                echo 2;
            }
        }
    }
    //添加预约
    public function appointAdd()
    {
        $hId=Request::get('id');
        $uId=$_COOKIE['u_id'];
        $data = DB::table('preplot')->where('u_id', $uId)->where('h_id', $hId)->get();
        if($data){
            echo 0;
        }else{
            $time=date("Y-m-d",time());
            $type = DB::table('preplot')->insert(array(
                'h_id' => $hId,
                'u_id' => $uId
                ));
            if($type==1){
                echo 1;
            }else{
                echo 2;
            }
        }
    }
    //查看收藏列表
    public function appointment()
    {
        $uId=$_COOKIE['u_id'];
        $list=DB::table('users')
            ->join("collect","collect.u_id","=","users.u_id")
            ->join("house","house.h_id","=","collect.h_id")
            ->where('users.u_id', "$uId")
            ->paginate($perPage = 3, $columns = ['*'], $pageName = 'page', $page = null);
        return view("user/collect",['app'=>$list]);
    }
    //房东修改状态
    public function editStatr()
    {
        $hId=Request::get('id');
        $statr=Request::get('statr');
        $data=DB::table("preplot")->where("h_id",'=',"$hId")->update(array('statr'=>"$statr"));
        return $data;
    }
	   //房源添加
    public function fyAdd()
    {
        if(empty(Request::get("h_id"))){
            $arr['type']=DB::table("house_type")->get();
            //return view('user/fyAdd', ['list' => $arr]);

        }else{
           $arr['list'] = DB::table('house')
               ->join("house_type",'house_type.t_id','=','house.t_id')
               ->where('h_id','=',Request::get("h_id"))
               ->first();
           $arr['type']=DB::table("house_type")->get();
        }
        return view("user/fyAdd",$arr);
    }
    /**
     * 房源添加入库
     */
    public function addHoust(){

        date_default_timezone_set('Asia/Shanghai');
        $arr=Request::all();

        $file =Request::file('files');
        //var_dump($arr );die;
        unset($arr['video']);
        unset($arr['files']);
        $arr['is_hot']=Request::get("is_hot");
        $arr['is_best']=Request::get("is_best");
        $arr['is_cheap']=Request::get("is_cheap");
        $arr['h_time']=date("Y-m-d");
        //echo $arr['h_time'];die;
        $arr['u_id']=$_COOKIE['u_id'];
       //var_dump($arr);die;
        $h_id=DB::table("house")->insertGetId($arr);
        //die;
        if($h_id){
            //图片进行入库
            for($i=0;$i<count($file);$i++){
                //var_dump($file);die;
                $clientName = $file[$i]  ->  getClientOriginalName();
                $extension = $file[$i]->getClientOriginalExtension();
                $newName = md5(date('ymdhis').$clientName).".".$extension;
                //var_dump(public_path());
                $dir=public_path().'/houst_img/'.date('Y-m-d');
                $file[$i]->move($dir,$newName);
                $newName=date('Y-m-d').'/'.$newName;
               DB::table("images")->insert(["h_id"=>$h_id,"img"=>$newName]);
            }
            DB::table("house")->where('h_id','=',$h_id)->update(['photo'=>$newName]);


            return redirect("fyAdd");
        }else{
            echo "<script>alert('添加失败哦');location.href='fyAdd'</script>";
        }

    }

    //房源列表
    public function fyList(){
        $u_id=$_COOKIE['u_id'];
        $arr['list'] = DB::table('house')
            ->join('house_type', 'house.t_id', '=', 'house_type.t_id')
            ->where('u_id','=',$u_id)
            ->orderBy('h_time', 'desc')
            ->paginate(6);

        return view("user/fyList",$arr);
    }


}
