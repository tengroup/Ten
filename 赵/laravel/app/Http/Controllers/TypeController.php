<?php

namespace App\Http\Controllers;
use DB;
use yii\console\Request;
header('Content-type:text/html;charset=utf-8');
class TypeController extends Controller
{
	//短租
    public function short()
    {
        $value=isset($_REQUEST['value'])?$_REQUEST['value']:'';
       // $start_time=isset($_REQUEST['start_time'])?$_REQUEST['start_time']:'';
        //$end_time=isset($_REQUEST['end_time'])?$_REQUEST['end_time']:'';
        $where='';
        if(!empty($value)){
            $where.=" and h_address like '%$value%'";
        }
        $sql="select * from house where 1=1 ".$where." ORDER by h_id limit 15";
        //echo $sql;
        $data=DB::select("select * from house where 1=1 ".$where." ORDER by h_id limit 15");
       // $data=DB::select("select * from house where h_address like '%$value%' ORDER by h_id limit 15");
    	return view("type/short",['data'=>$data]);
    }

    public function check_time()
    {
        $time=isset($_REQUEST['dates'])?$_REQUEST['dates']:'';
        $check_name=isset($_REQUEST['gjz'])?$_REQUEST['gjz']:'';
        $start_time=substr($time,0,10);
        $end_time=substr($time,17,11);
            //echo $end_time;die;
       // $check_name=isset($_REQUEST['check_name'])?$_REQUEST['check_name']:'';
        $where='';
        if(!empty($start_time) &&!empty($end_time) ){
            $where.=" and in_time<='$start_time' and out_time>='$end_time'";
        }
        if(!empty($check_name)){
            $where.=" and h_address like '%$check_name%'";
        }
        $sql="select * from house where 1=1 ".$where." ORDER by h_id limit 15";
       // echo $sql;die;
        $data=DB::select("select * from house where 1=1 ".$where." ORDER by h_id limit 15");
       // var_dump($data);die;
        return view("type/short",['data'=>$data]);
    }

    public function all_sel(){

        $price=isset($_REQUEST['radio2'])?$_REQUEST['radio2']:'';
        $jiage1=isset($_REQUEST['jiage1'])?$_REQUEST['jiage1']:'';
        $jiage2=isset($_REQUEST['jiage2'])?$_REQUEST['jiage2']:'';
        $x=isset($_REQUEST['xx'])?$_REQUEST['xx']:'';
        $lx=isset($_REQUEST['h_type'])?$_REQUEST['h_type']:'';

        $where='';
        if(!empty($price)){
            if($price=='800以下'){
                $where.=" and pay<800";
            }else if($price=='800-1200'){
                $where.=" and pay between 800 and 1200";
            }else if($price=='1200-2000'){
                $where.=" and pay between 1200 and 2000";
            }else if($price=='2000以上'){
                $where.=" and pay >2000";
            }
        }else{
            if(!empty($jiage1 && $jiage2)){
                $where.=" and pay between '$jiage1' and '$jiage2'";
            }
        }
        if(!empty($lx)){
            for($i=0;$i<count($lx);$i++){
                $sql="select * from house inner join house_type on house.t_id=house_type.t_id where t_name like '%$lx[$i]%' $where " ;
                $data[]=DB::select($sql);
               //echo $sql;
            }
            //var_dump($data);
        }else{
            $sql="  select * from house inner join house_type on house.t_id=house_type.t_id where 1=1 $where" ;
          // echo $sql;
            $data[]=DB::select($sql);
        }
       // die;
        foreach($data as $v){
            foreach($v as $vv){
                $res[]=$vv;
            }
        };
        //var_dump($res);die;
        return view("type/short",['data'=>$res]);
        //return redirect('act_place');
    }

}
