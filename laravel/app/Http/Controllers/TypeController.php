<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Session;
use Illuminate\Contracts\Cookie;
use DB;
/*
 * $Author:赵文杰
 * $Id:TypeController.php
 * 2016-05-21 8:26
 */

class TypeController extends Controller
{
    //公共方法
    public function pub_all(){
        //查询最热
        $hot=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_hot=1 and status=1 ORDER by h_id limit 3");
        //var_dump($hot);die;
        //查询精品
        $best=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_best=1 and status=1 ORDER by h_id limit 3");
        //查询特价
        $cheap=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where is_cheap=1  and status=1 ORDER by h_id limit 3");
        //查询房屋数量
        $num=DB::select(" select count(*) as count from house inner join house_type on house.t_id=house_type.t_id where status=1");
       //类型
        $type=DB::select(" select * from  house_type");
        return ['hot'=>$hot,'best'=>$best,'cheap'=>$cheap,'num'=>$num[0]->count,'type'=>$type];
    }
	//短租
    public function short()
    {


        //地区传值
        $value=Request::get('value')?Request::get('value'):'';
        //查询 时间和 关键字
        $time=Request::get('dates')?Request::get('dates'):'';
        $check_name=Request::get('gjz')?Request::get('gjz'):'';
        //分割字符串取时间段
        $start_time=substr($time,0,10)?substr($time,0,10):'2080-01-01';
        $end_time=substr($time,17,11)?substr($time,17,11):'2016-01-01';

        //查询价格 和类型
        $price=Request::get('radio2')?Request::get('radio2'):'';
        $s_price=Request::get('s_price')?Request::get('s_price'):'';
        $b_price=Request::get('b_price')?Request::get('b_price'):'';
        $num=Request::get('num')?Request::get('num'):'';
        $lx=Request::get('h_type')?Request::get('h_type'):'';
        //文本如果为空  则赋值
        //var_dump($num);die;
        if(empty($s_price) &&empty($b_price)){
            if(!empty($price)){
                $ks=explode('-',$price);
                $s_price=$ks[0];
                $b_price=$ks[1];
            }else{
                $s_price='';
                $b_price='';
            }
        }  $where='';
        if(!empty($s_price) && !empty($b_price)){
            // $data=DB::table("house")->join("house_type","h_id","=","h_id")->whereBetween('h_address',[1,800])->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
            $where.=" and pay between $s_price and $b_price";
        }
        if(!empty($num)){
            $where.=" and number =$num";
        }
        if(!empty($lx)){
            for($i=0;$i<count($lx);$i++){
                $res[]=DB::select(" select * from house inner join house_type on house.t_id=house_type.t_id where status=1 and t_name like '%$lx[$i]%' and h_address like '%$value%' and in_time<='$start_time' and out_time>= '$end_time' and h_address like '%$check_name%' $where");
            }
            //var_dump($data);die;
            if(!empty($res[0])){
                foreach($res as $v){
                    foreach($v as $vv){
                        $data[]=$vv;
                    }
                }
            }else{
                $data='';
            }
        }else{
            $data=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where status=1 and h_address like '%$value%' and in_time<='$start_time' and out_time>= '$end_time' and h_address like '%$check_name%' $where");
        }
       //查询
        //  $data=DB::table("house")->join("house_type","house.t_id","=","house_type.t_id")->where('h_address','like',"%$value%")->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
        //  $sql="select * from house inner join house_type on house.t_id=house_type.t_id where status=1 and h_address like '%$value%' and in_time<='$start_time' and out_time>= '$end_time' and h_address like '%$check_name%' ORDER by h_id limit 15";
     //   $data=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where status=1 and h_address like '%$value%' and in_time<='$start_time' and out_time>= '$end_time' and h_address like '%$check_name%' ORDER by h_id limit 15");

        $arr=$this->pub_all();
       return view("type/short",['data'=>$data,'hot'=>$arr['hot'],'best'=>$arr['best'],'cheap'=>$arr['cheap'],'num'=>$arr['num'],'type'=>$arr['type']]);
   
    }


    //查询热销
    public function hot(){
        $is_hot=Request::get("is_hot");
        $arr=DB::table('house')
            ->join("house_type",'house.t_id','=','house_type.t_id')
            ->where('is_hot','=','1')
            ->where("status",'=','1')
            ->orderBy('receive_time', 'desc')
            ->paginate(6);
        return view('type/cheak',['list'=>$arr,'is_hot'=>$is_hot]);
    }

    //查询精品
    public function best(){
        $is_best=Request::get("is_best");
        $arr=DB::table('house')
            ->join("house_type",'house.t_id','=','house_type.t_id')
            ->where('is_best','=','1')
            ->where("status",'=','1')
            ->orderBy('receive_time', 'desc')
            ->paginate(6);
        return view('type/cheak',['list'=>$arr,'is_best'=>$is_best]);
    }


    //查询特价
    public function cheap(){
        $is_cheap=Request::get("is_cheap");
        $arr=DB::table('house')
            ->join("house_type",'house.t_id','=','house_type.t_id')
            ->where('is_cheap','=','1')
            ->where("status",'=','1')
            ->orderBy('receive_time', 'desc')
            ->paginate(6);
        return view('type/cheak',['list'=>$arr,'is_cheap'=>$is_cheap]);
    }


    //    public function check_time()
//    {
//       //接收时间和 关键字查询
//      // $time=Request::get('dates');
//        $time=Request::get('dates')?Request::get('dates'):'';
//        $check_name=Request::get('gjz')?Request::get('gjz'):'';
//        //分割字符串取时间段
//        $start_time=substr($time,0,10)?substr($time,0,10):'2080-01-01';
//        $end_time=substr($time,17,11)?substr($time,17,11):'2016-01-01';
//       //$data=DB::table("house")->join("house_type","house.t_id","=","house_type.t_id")->where('in_time','<=',"$start_time")->where('out_time','>=',"$end_time")->where('h_address','like',"%$check_name%")->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
//        $data=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where in_time<='$start_time' and out_time>= '$end_time' and h_address like '%$check_name%' ORDER  by h_id limit 15");
//        $arr=$this->pub_all();
//        return view("type/short",['data'=>$data,'hot'=>$arr['hot'],'best'=>$arr['best'],'cheap'=>$arr['cheap']]);
//    }

//    public function all_sel(){
//      //查询价格 和类型
//        $price=Request::get('radio2')?Request::get('radio2'):'';
//        $s_price=Request::get('s_price')?Request::get('s_price'):'';
//        $b_price=Request::get('b_price')?Request::get('b_price'):'';
//        $num=Request::get('num')?Request::get('num'):'';
//        $lx=Request::get('h_type')?Request::get('h_type'):'';
//        //文本如果为空  则赋值
//        //var_dump($num);die;
//        if(empty($s_price) &&empty($b_price)){
//            if(!empty($price)){
//                $ks=explode('-',$price);
//                $s_price=$ks[0];
//                $b_price=$ks[1];
//            }else{
//                $s_price='';
//                $b_price='';
//            }
//        }
//        //echo  $b_price;die;
//        $where='';
//        if(!empty($s_price) && !empty($b_price)){
//           // $data=DB::table("house")->join("house_type","h_id","=","h_id")->whereBetween('h_address',[1,800])->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
//             $where.=" and pay between $s_price and $b_price";
//        }
//        if(!empty($num)){
//            $where.=" and number =$num";
//        }
//        if(!empty($lx)){
//            for($i=0;$i<count($lx);$i++){
//               $res[]=DB::select(" select * from house inner join house_type on house.t_id=house_type.t_id where status=1 and t_name like '%$lx[$i]%' $where");
//            }
//            //var_dump($data);die;
//            if(!empty($res[0])){
//                foreach($res as $v){
//                    foreach($v as $vv){
//                        $data[]=$vv;
//                    }
//                }
//            }else{
//                $data='';
//            }
//        }else{
//            $data=DB::select("select * from house inner join house_type on house.t_id=house_type.t_id where status=1  $where");
//        }
//        $arr=$this->pub_all();
//        return view("type/short",['data'=>$data,'hot'=>$arr['hot'],'best'=>$arr['best'],'cheap'=>$arr['cheap']]);
//    }


}
