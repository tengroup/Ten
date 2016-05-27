<?php

namespace App\Http\Controllers;
use DB;
use Request;
use Illuminate\Session;
use Guzzle\Parser\Cookie;

/*
 * 列表控制器
 * name：赵文杰
 * time:2016-5-16
 * 版权所有 2015-2016 北京用友信息技术有限公司，并保留所有权利。
 * 网站地址: http://localhost；
 * */

class TypeController extends Controller
{
	//短租
    public function short()
    {
        //地区传值
        $value=isset($_REQUEST['value'])?$_REQUEST['value']:'';
        //$check_name=isset($_REQUEST['gjz'])?$_REQUEST['gjz']:'';
         // $data = DB::table('house')->where('h_address','like',"%$value%")->Paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
        //分页查询
        $data=DB::table("house")->join("house_type","house.t_id","=","house_type.t_id")->where('h_address','like',"%$value%")->where("status",'=','1')->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
         $num=DB::select("select count(h_id) as count from house");
         $number=$num[0]->count;
        // $data=DB::select("select * from house where h_address like '%$value%' ORDER by h_id limit 15");
        $hot=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_hot=1 and status=1 ORDER by h_id limit 3");
        $best=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_best=1  and status=1 ORDER by h_id limit 3");
        $cheap=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_cheap=1  and status=1 ORDER by h_id limit 3");
        return view("type/short",['data'=>$data,'hot'=>$hot,'best'=>$best,'cheap'=>$cheap,'number'=>$number]);
    }

    public function check_time()
    {
        //接收时间和 关键字查询
        $time=isset($_REQUEST['dates'])?$_REQUEST['dates']:'';
        $check_name=isset($_REQUEST['gjz'])?$_REQUEST['gjz']:'';
        //分割字符串取时间段
        $start_time=substr($time,0,10)?substr($time,0,10):'2080-01-01';
        $end_time=substr($time,17,11)?substr($time,17,11):'2016-01-01';
        //echo $end_time;die;
//        $value=isset($_REQUEST['value'])?$_REQUEST['value']:'';
//        // $start_time=isset($_REQUEST['start_time'])?$_REQUEST['start_time']:'';
//        //$end_time=isset($_REQUEST['end_time'])?$_REQUEST['end_time']:'';
//
//            //echo $end_time;die;
//       // $check_name=isset($_REQUEST['check_name'])?$_REQUEST['check_name']:'';

//        if(!empty($start_time) &&!empty($end_time) ){
//            $s_time=" and in_time<='$start_time' and out_time>='$end_time'";
//        }
//        if(!empty($end_time) ){
//            $e_time=" and out_time>='$end_time'";
//        }
//        if(!empty($check_name)){
//            $name="$check_name";
//        }
        //$sql="select * from house where 1=1 ".$where." ORDER by h_id limit 15";
            //echo $check_name;die;
       $data=DB::table("house")->join("house_type","house.t_id","=","house_type.t_id")->where('in_time','<=',"$start_time")->where('out_time','>=',"$end_time")->where('h_address','like',"%$check_name%")->where("status",'=','1')->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
        //$data=DB::select("select * from house where 1=1 ".$where." ORDER by h_id limit 15");
      //var_dump($data);die;
        $hot=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_hot=1 and status=1 ORDER by h_id limit 3");
        $best=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_best=1 and status=1 ORDER by h_id limit 3");
        $cheap=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_cheap=1 and status=1 ORDER by h_id limit 3");
        return view("type/short",['data'=>$data,'hot'=>$hot,'best'=>$best,'cheap'=>$cheap   ]);
    }

    public function all_sel(){
        //查询价格 和类型
        $price=isset($_REQUEST['radio2'])?$_REQUEST['radio2']:'';
        $s_price=isset($_REQUEST['s_price'])?$_REQUEST['s_price']:'';
        $b_price=isset($_REQUEST['b_price'])?$_REQUEST['b_price']:'';
        $number=isset($_REQUEST['num'])?$_REQUEST['num']:'';
        $lx=isset($_REQUEST['h_type'])?$_REQUEST['h_type']:'';
        //文本如果为空  则赋值
        if(empty($s_price) &&empty($b_price)){
            if(!empty($price)){
                $ks=explode('-',$price);
                $s_price=$ks[0];
                $b_price=$ks[1];
            }else{
                $s_price='';
                $b_price='';
            }
        }

        //echo  $b_price;die;
        if(!empty($s_price) && !empty($b_price)){
           // $data=DB::table("house")->join("house_type","h_id","=","h_id")->whereBetween('h_address',[1,800])->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
                if(!empty($lx)){
                    for($i=0;$i<count($lx);$i++){
                        $data=DB::table("house")->join("house_type","house.t_id","=","house_type.t_id")->where('t_name','like',"%$lx[$i]%")->whereBetween('pay',[$s_price,$b_price])->where('status','=','1')->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
                    //echo $sql;
                    }
                //var_dump($data);
                 }else{
                    $data=DB::table("house")->join("house_type","house.t_id","=","house_type.t_id")->whereBetween('pay',[$s_price,$b_price])->where('status','=','1')->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
                }
        }else{
            if(!empty($lx)){
                //echo 3;die;
                for($i=0;$i<count($lx);$i++){
                    //var_dump($lx);
                    $data[]=DB::table("house")->join("house_type","house.t_id","=","house_type.t_id")->where('t_name','like',"%$lx[$i]%")->where('status','=','1')->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');

                } //var_dump($data);die;
                //$data[]=paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
                //var_dump($data);  die;

            }else{
                //echo 4;die;
                $data=DB::table("house")->join("house_type","house.t_id","=","house_type.t_id")->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
            }
        }


        $hot=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_hot=1 and status=1 ORDER by h_id limit 3");
        $best=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_best=1 and status=1  ORDER by h_id limit 3");
        $cheap=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_cheap=1 and status=1  ORDER by h_id limit 3");
       //var_dump($data);di
       // var_dump($data); die;
        return view("type/short",['data'=>$data,'hot'=>$hot,'best'=>$best,'cheap'=>$cheap]);
        //return redirect('act_place');
    }

    public function check_more(){
        $h_id=Request::get('id');
        $oneMess=DB::table('preplot')->join("house","preplot.h_id","=","house.h_id")->join("f_users","f_users.u_id","=","house.u_id")->where('status','=','1')->where('house.h_id', "$h_id")->first();
        //var_dump($oneMess);die;
        $img=DB::table("images")->where("h_id",$oneMess->h_id)->get();
        //var_dump($img);die;
        return view("home/single",['list'=>$oneMess,'img'=>$img]);

    }


//    public function long()
//    {
//        $where='';
//        if(!empty($value)){
//            $where.=" and h_address like '%$value%'";
//        }
//
//        $data=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id");
//        return view("type/long",['data'=>$data]);
//    }




}
