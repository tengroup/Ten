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
 *  @Home：       首页
 *  @Author:      张龙
 *  @Time         2016-05-17
 */
header("Content-type:text/html;charset=utf8");
class HomeController extends Controller
{
    public function index()
    {
    	//热销信息
    	$selling = DB::table('house')
    	->join('house_type','house.t_id','=','house_type.t_id')
    	->orderBy('h_id','desc')
    	->where('house.is_hot','=','1')
		->first();
    	//热销图片
    	$sellingImg = DB::table('images')
		->where('images.h_id','=',$selling->h_id)
		->first();

		//精品信息
    	$boutique = DB::table('house')
    	->join('house_type','house.t_id','=','house_type.t_id')
    	->orderBy('h_id','desc')
    	->where('house.is_best','=','1')
		->first();
    	//精品图片
    	$boutiqueImg = DB::table('images')
		->where('images.h_id','=',$boutique->h_id)
		->first();

		//特价信息
    	$Special = DB::table('house')
    	->join('house_type','house.t_id','=','house_type.t_id')
    	->orderBy('h_id','desc')
    	->where('house.is_cheap','=','1')
		->first();
		// var_dump($Special);die;
    	//特价图片
    	$SpecialImg = DB::table('images')
		->where('images.h_id','=',$Special->h_id)
		->first();

		//特价信息
    	$Specialoffer = DB::table('house')
    	->join('house_type','house.t_id','=','house_type.t_id')
    	->orderBy('h_id','desc')
    	->limit(2,2)
    	->where('house.is_cheap','=','1')
		->get();

		//var_dump($Specialoffer);die;

		// var_dump($Specialoffer);die;


		// var_dump($Specialoffer);die;

<<<<<<< HEAD
=======
		
>>>>>>> 68f40d43800b256b493819ac1e0d27afbd726ef7

    	//特价图片
    	$SpecialofferImg = DB::table('images')
		->where('images.h_id','=',$Specialoffer[1]->h_id)
		->get();
		$selling->content = substr($selling->content,0,95).'<a href="{{URL(perLook?id)}}={{$selling->h_id}}">...</a>';
		$boutique->content = substr($boutique->content,0,95).'<a href="{{URL(perLook?id)}}={{$boutique->h_id}}">...</a>';
		$Special->content = substr($Special->content,0,95).'<a href="{{URL(perLook?id)}}={{$Special->h_id}}">...</a>';
		$Specialoffer[1]->content = substr($Specialoffer[1]->content,0,95).'<a href="{{URL(perLook?id)}}={{$Specialoffer->h_id}}">...</a>';
    	return view("home/index",array('selling'=>$selling,'sellingImg'=>$sellingImg,'boutique'=>$boutique,'boutiqueImg'=>$boutiqueImg,'Special'=>$Special,'SpecialImg'=>$SpecialImg,'Specialoffer'=>$Specialoffer,'SpecialofferImg'=>$SpecialofferImg));
    }
    
    
}
