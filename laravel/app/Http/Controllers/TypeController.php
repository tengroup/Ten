<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Session;
use Illuminate\Contracts\Cookie;
use DB;
header('Content-type:text/html;charset=utf-8');
class TypeController extends Controller
{
	//短租
    public function short()
    {
        //地区传值
        $value=isset($_REQUEST['value'])?$_REQUEST['value']:'';
       //查询
        //$data=DB::table("house")->join("house_type","house.t_id","=","house_type.t_id")->where('h_address','like',"%$value%")->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
         $data=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where status=1 ORDER by h_id limit 15");
        //var_dump($data);die;
         //$number=$num[0]->count;
        // $data=DB::select("select * from house where h_address like '%$value%' ORDER by h_id limit 15");
        $hot=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_hot=1 and status=1 ORDER by h_id limit 3");
        $best=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_best=1 and status=1 ORDER by h_id limit 3");
        $cheap=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_cheap=1  and status=1 ORDER by h_id limit 3");
        return view("type/short",['data'=>$data,'hot'=>$hot,'best'=>$best,'cheap'=>$cheap]);
    }

    public function check_time()
    {
        //接收时间和 关键字查询
        $time=isset($_REQUEST['dates'])?$_REQUEST['dates']:'';
        $check_name=isset($_REQUEST['gjz'])?$_REQUEST['gjz']:'';
        //分割字符串取时间段
        $start_time=substr($time,0,10)?substr($time,0,10):'2080-01-01';
        $end_time=substr($time,17,11)?substr($time,17,11):'2016-01-01';
       //echo $start_time;die;
//        $value=isset($_REQUEST['value'])?$_REQUEST['value']:'';
//        // $start_time=isset($_REQUEST['start_time'])?$_REQUEST['start_time']:'';
//        //$end_time=isset($_REQUEST['end_time'])?$_REQUEST['end_time']:'';
//
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
       //$data=DB::table("house")->join("house_type","house.t_id","=","house_type.t_id")->where('in_time','<=',"$start_time")->where('out_time','>=',"$end_time")->where('h_address','like',"%$check_name%")->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
        $data=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where in_time<='$start_time' and out_time>= '$end_time' and h_address like '%$check_name%' ORDER  by h_id limit 15");
     // var_dump($data);die;
        $hot=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_hot=1 ORDER by h_id limit 3");
        $best=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_best=1 ORDER by h_id limit 3");
        $cheap=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_cheap=1 ORDER by h_id limit 3");

        return view("type/short",['data'=>$data,'hot'=>$hot,'best'=>$best,'cheap'=>$cheap]);
    }

    public function all_sel(){
        //查询价格 和类型
        $price=isset($_REQUEST['radio2'])?$_REQUEST['radio2']:'';
        $s_price=isset($_REQUEST['s_price'])?$_REQUEST['s_price']:'';
        $b_price=isset($_REQUEST['b_price'])?$_REQUEST['b_price']:'';
        $mon=isset($_REQUEST['num'])?$_REQUEST['num']:'';
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
        $where='';
        if(!empty($s_price) && !empty($b_price)){
           // $data=DB::table("house")->join("house_type","h_id","=","h_id")->whereBetween('h_address',[1,800])->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
             $where.=" and pay between $s_price and $b_price";
        }
        if(!empty($lx)){
            for($i=0;$i<count($lx);$i++){
               $res[]=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where status=1 and t_name like '%$lx[$i]%' $where");
            }
            foreach($res as $v){
                foreach($v as $vv){
                    $data[]=$vv;
                }
            }
        }else{
            $data=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where status=1  $where");
        }
        //var_dump($data);die;
       //die;
        $hot=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_hot=1 and status=1 ORDER by h_id limit 3");
        $best=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_best=1 and status=1 ORDER by h_id limit 3");
        $cheap=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_cheap=1 and status=1 ORDER by h_id limit 3");

        //dd($data);

        return view("type/short",['data'=>$data,'hot'=>$hot,'best'=>$best,'cheap'=>$cheap]);
        //return redirect('act_place');
    }

    public function check_more(){
      echo   $_GET['id'];
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
