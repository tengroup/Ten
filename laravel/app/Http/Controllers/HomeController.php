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

class HomeController extends Controller
{
    public function index()
    {
    	//热销信息
    	$selling = DB::table('house')
    	->join('house_type','house.t_id','=','house_type.t_id')
    	->orderBy('h_id')
    	->where('house.is_hot','=','1')
		->first();
    	//热销图片
    	$sellingImg = DB::table('images')
		->where('images.h_id','=',$selling->h_id)
		->first();

		//精品信息
    	$boutique = DB::table('house')
    	->join('house_type','house.t_id','=','house_type.t_id')
    	->orderBy('h_id')
    	->where('house.is_hot','=','1')
		->first();
    	//精品图片
    	$boutiqueImg = DB::table('images')
		->where('images.h_id','=',$boutique->h_id)
		->first();

		//特价信息
    	$Special = DB::table('house')
    	->join('house_type','house.t_id','=','house_type.t_id')
    	->orderBy('h_id')
    	->where('house.is_cheap','=','1')
		->first();

    	//特价图片
    	$SpecialImg = DB::table('images')
		->where('images.h_id','=',$Special->h_id)
		->first();
        
		//特价信息
    	$Specialoffer = DB::table('house')
    	->join('house_type','house.t_id','=','house_type.t_id')
    	->orderBy('h_id')
    	->limit(1,2)
    	->where('house.is_cheap','=','1')
		->get();
		
    	//特价图片
    	$SpecialofferImg = DB::table('images')
		->where('images.h_id','=',$Specialoffer[0]->h_id)
		->get();
    	return view("home/index",array('selling'=>$selling,'sellingImg'=>$sellingImg,'boutique'=>$boutique,'boutiqueImg'=>$boutiqueImg,'Special'=>$Special,'SpecialImg'=>$SpecialImg,'Specialoffer'=>$Specialoffer,'SpecialofferImg'=>$SpecialofferImg));
    }
    
    
}
