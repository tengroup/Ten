<!DOCTYPE HTML>
<html>
<head>
<title>详情页面</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
    <script src="js/jquery-1.11.1.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->

<!-- //js -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

<link rel="stylesheet" type="text/css" href="css/common.min.css"/>
<link rel="stylesheet" type="text/css" href="css/detail_new.css"/>
    <link href='http://fonts.useso.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>


<script type="text/javascript" src="js/z-common.min.js"></script>
<script type="text/javascript" src="js/detail.js"></script>
<script  type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/cea6b8fffcbf412bba56464a5408f59c.js"></script>
<script type="text/javascript" src="js/wdatepicker.js"></script>

<script>
    myTongji('www','detail');
</script>
</head>

<body>

<!--引用公用头部信息-->
@include ("commonality.head")
@include ("commonality.qq")
    <div class="area clearfix" style="margin-top:50px ">

        <!--焦点图开始-->
         <div class="room_detail_left">
             <div id="lofslidecontent45" class="lof-slidecontent current_lof">
                 <div class="lof-main-outer" id="cao">
                     <div onclick="return false" href="javascript:;" class="lof-previous icon icon-prev"></div><!--lof-previous -->
                     {{--大的轮播图--}}
                     <ul class="lof-main-wapper">
                         @foreach($img as $k=>$v)
                        <li>
                        	<span class="woshi"></span>
                        	<a href=" " class="pirobox_t6">
                            <img src="houst_img/{{$v->img}}" class="loadImgError" width="620" height="470"/>
	                        </a>
	                    </li>
                        @endforeach
                    </ul>
                <div onclick="return false" href="javascript:;" class="lof-next icon icon-next"></div><!--lof-next -->
            </div><!--lof-main-outer -->
                <div class="lof-navigator-wapper">
					<div onclick="return false" href="javascript:;" class="lof-previous icon icon-prev"></div><!--lof-previous -->
                    {{--小的轮播图--}}
                    <div class="lof-navigator-outer" >
                  		<ul class="lof-navigator">
                        @foreach($img as $k=>$v)
                            <li>
                                <div class="lidiv">
                                    <img src="houst_img/{{$v->img}}" onerror="this.src='http://www.ziroom.com/static/images/slist_1207/yuanwei-up.jpg'" />
                                    <div class="bor_act"></div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div><!--lof-navigator-outer -->
                    <div onclick="return false" href="javascript:;" class="lof-next icon icon-next"></div><!--lof-next -->
                </div>
             </div><!--焦点图结束-->

	<div class="title titleFirst">
		<span class="line"></span>
		<h2 class="cn"><span class="s"></span>关于此房源<span class="y">●</span></h2>
		<p class="en">About The Room<span class="y">●</span></p>
	</div>
	<div class="aboutRoom gray-6">
	        @foreach($resd as $key=>$val)
			<h3 class="fb"><strong>编号：</strong>{{$val->h_id}}</h3>
			<p><strong>描述：</strong>{{$val->content}}
			</p>
	        @endforeach
	</div><!--/aboutRoom-->
	{{--<div class="title">--}}
		{{--<span class="line"></span>--}}
		{{--<h2 class="cn"><span class="s"></span>房屋配置<span class="y">●</span></h2>--}}
		{{--<p class="en">Room Allocation<span class="y">●</span></p>--}}
	{{--</div>--}}

	{{--<ul class="configuration clearfix">--}}
		{{--<li class="have"><span class="bed"></span>床</li>--}}
		{{--<li class="have"><span class="chest"></span>衣柜</li>--}}
		{{--<li class="have"><span class="desk"></span>书桌</li>--}}
		{{--<li class="have"><span class="wifi"></span>Wi-Fi</li>--}}
		{{--<li class="have"><span class="washing"></span>洗衣机</li>--}}
		{{--<li class="have"><span class="calorifier"></span>热水器</li>--}}
		{{--<li class="have"><span class="air-condition"></span>空调</li>--}}
		{{--<li class="have"><span class="microwave"></span>微波炉</li>--}}
		{{--<li class="last"><span class="lock"></span>智能锁</li>--}}
	{{--</ul>--}}
	<!--/greatRoommate-->


	<div class="title">
		<span class="line"></span>
		<h2 class="cn"><span class="s"></span>交通周边<span class="y">●</span></h2>
		<p class="en">Traffic<span class="y">●</span></p>
	</div>
	<!--交通周边-->
      <div class="pr">
	      <ul class="mapTab clarfix" id="mapTab">
	        <li class="active" title="交通" id="bus">交通<span></span></li>
	        <li title="餐饮" id="eat">餐饮<span></span></li>
	        <li title="购物" id="shopping">购物<span></span></li>
	        <li title="银行" id="bank">银行<span></span></li>
	        <li title="景点" id="scenic">景点<span></span></li>
	        <li title="超市" id="supermarket">超市<span></span></li>
	        <li title="电影院" id="movie">电影院<span></span></li>
	        <li title="火车站" id="ticket">火车站<span></span></li>
	      </ul>
	      <p class="toLocation" id="toLocation"><span><b></b>定位当前房源</span></p>
      </div>

	<div class="map_plug" id="mainmap"></div>
		<div class="mapSearch">
		<div class="msTab" id="msTab">
		<p class="active"><span class="red"></span>到这里去</p>
		<p class=""><span class="green"></span>从这里出发</p>
	</div>

	<div class="msCon clearfix">
		<input id="mapsearchText" class="text" type="text" placeholder="请输入有效的地址名称" data-title="朝阳立水桥5号线,13号线立水桥立城苑3居室"  data-lng="116.42221" data-lat="40.058586" name="" value="">
		<input id="toBus" class="btn" type="button" value="公交">
		<input id="toWalk" class="btn" type="button" value="步行">
		<input id="toDriver" class="btn" type="button" value="驾车">
	</div>

	<div id="reasultbox" class="reasultbox"></div>
		<p class="closeReasult" id="closeReasult"><a href="javascript:;">收起</a></p>
	</div><!--/mapSearch-->

 
	<!--/交通周边-->
	<div class="title">
		<span class="line"></span>
		<h2 class="cn"><span class="s"></span>付款方式<span class="y">●</span></h2>
		<p class="en">Payment<span class="y">●</span></p>
	</div>

	<div class="payCon">
	<table>
		<tr>
			<th>方式</th>
			<th>租金</th>
			<th>押金</th>
			<th>服务费</th>
		</tr>
		<tr class="bg">
			<td><span class="txt">月付</span></td>
            @foreach($resd as $k)
			<td>￥{{$k->pay}}/月</td>
			<td>￥{{$k->deposit}}/月</td>

			<td>----</td>
		</tr>
            @endforeach

	</table>
	{{--<p class="mt10 fs14"><span class="gray-6">●</span> 请<a href="/static/201401/androidapp.html" class="org" target="_blank">下载</a>U+App签约并使用银联、京东支付、U+白条完成支付。</p>--}}
	</div>
	<div class="title">
		<span class="line"></span>
		<h2 class="cn"><span class="s"></span>类似房源<span class="y">●</span></h2>
		<p class="en">Recommend Room<span class="y">●</span></p>
	</div>


	<!--推荐房源-->
	<ul class="imgInfo_list clearfix">
        @foreach($data as $v)
		 <li class="no_note ">
			<div class="imgInfo_show">
				<a href="javascript:void(0)" target="_blank"><img class="" alt="" src="picture/v460x300_20160413104002961_f.jpg"/></a>
			</div>
			<div class="clearfix info_sction">
				<span class="text_l limit_w"><a href="{{URL('perLook?id=')}}{{$v->h_id}}" target="_blank">{{$v->h_address}}</a></span>
				<span class="text_r">￥<i>{{$v->pay}}</i>/月</span>
			</div>
			<div class="clearfix gray-6">
				<span class="text_l">{{$v->h_address}}</span>
			</div>
		</li>
    @endforeach
	</ul>
	<!--推荐房源-->
         </div><!--room_detail_left-->
         <div class="room_detail_right">
            <div class="room_name">
            	<h2>{{$list->h_address}}</h2>
            	<p class="pr">
                    {{$list->h_address}}
            		<span class="price">
	            		<b></b>
	            		<span class="room_price">￥{{$list->pay}}</span>
	            		<span class="gray-6">(每月)</span>
                    </span>
                </p>
            </div>
            <p class="room_tags clearfix">
           		{{--<span class="subway">地铁10分钟</span>--}}

           		<span class="balcony">独立阳台</span>
           		<span class="style">风格1.0 原味</span>
            </p>
            <ul class="detail_room">
            	<li><b></b>面积： {{$list->h_area}}㎡</li>
                {{--<li><b></b>朝向： 南</li>--}}
            	<li><b></b>户型：{{$list->t_name}}</li>
            	{{--<li><b></b>楼层： 7/13层</li>--}}
                <li><b></b>居住人数：{{$list->number}}人</li>
                <li><b></b>押金：{{$list->deposit}}元</li>
                {{--<li class="last">--}}
                 	{{--<b></b>交通：--}}
            		{{--<span class="lineList" id="lineList">距5号线立水桥279米--}}
            			{{--<span class="box">--}}
                         {{--<p>距13号线立水桥279米</p>--}}
                         {{--<p>距5号线立水桥南1149米</p>--}}
                         {{--<p class="last">距5号线天通苑南1529米</p>--}}
                    	{{--</span>--}}
                    {{--</span>--}}
            	{{--</li>--}}
            <script>
                if($('#lineList .box').size()==0){
                    $('#lineList').addClass('lineListnone');
                }
            </script>
            </ul><!--/detail_room-->
         	<div class="room_btns clearfix">
         		<a href="javascript:;" class="btn view" id="zreserve">
         			<span class="icon"></span>立即预定
         		</a>
             	<a class="btn collect"  id="toCollect">
             		<span class="icon">收藏</span>
             	</a>   
             	<script>
             		//预定
             		$("#zreserve").click(function(){
             			var url="{{'appointAdd'}}";
             			var id={{$list->h_id}};
             			var data={id:id};
             			$.get(url,data,function(msg){
             				if(msg==0){
             					alert("您已经预约过该房源了！");
             				}else if(msg==1){
             					alert("您预约了该房源！");
             				}else if(msg==5){
             					alert("对不起！房东不能预约！");
             				}else{
             					alert("抱歉，您预约失败！");
             				}
						});
             		})
             		//收藏
             		$("#toCollect").click(function(){
             			var url="{{'appointmentAdd'}}";
             			var id={{$list->h_id}};
             			var data={id:id};
             			$.get(url,data,function(msg){
             				if(msg==0){
             					alert("您已经收藏过该房源了！");
             				}else if(msg==1){
             					alert("您收藏了该房源！");
             				}else if(msg==5){
             					alert("对不起！房东不能收藏！");
             				}else{
             					alert("抱歉，您收藏失败！");
             				}
						});
             		})
             	</script>                                             
	         	<div class="sharebtn pr"><a class="btn "><span class="icon">分享</span></a>
					<span class="shareCon pa">
						<b></b>
						<span class="weixin" title="微信"></span>
						<span class="qweibo" title="腾讯微博" onclick="jiathis_sendto('tqq');"></span>
						<span class=" kongjian" title="空间" onclick="jiathis_sendto('qzone');"></span>
						<span class=" renren" title="人人" onclick="jiathis_sendto('renren');"></span>
						<span class=" sina" title="新浪微博" onclick="jiathis_sendto('tsina');"></span>
					</span>
				</div>
			</div>

	<script type="text/javascript" src="js/jia.js" charset="utf-8"></script>

<!--从接口中获取管家信息-->
	<div class="r_fixed" id="r_fixed">
	    <div class="tel"><span class="icon"></span> {{$list->phone}}</div>
			<div class="con">
				<div class="zoInfo clearfix ">
					<div class="img">
			              <img src="picture/20170342.png" onerror="$('.noImg').show();">
			              <span class="noImg"></span>
			         </div>
					<div class="txt">
						<span class="icon yinLeft"></span>
						<p>我是U+管家：{{$list->real_name}}，{{$list->u_lang}}</p>
						<p class="org pr">U家(U+管家)：{{$list->real_name}} <span class="icon yinRight"></span></p>
					</div>
				</div>
				<dl class="chengnuo">
		            <dt class="pr"><span class="t_zindex0 icon icon-line"></span> <span class="t_zindex1">U+承诺</span></dt>
		            <dd>
			            <ul class="top_list clearfix">
			                  <li><a href="#" target="_blank">100%真房源<b></b></a></li>
			                  <li><a href="#" target="_blank">3天不满意全额退款</a></li>
			                  <li><a href="#" target="_blank">房屋质量问题无责换租<b></b></a></li>
			                  <li><a href="#" target="_blank">退租押金三个工作日返还</a></li>
			            </ul>
			            <!-- <ul class="bottom_list clearfix">
			              <li class="fuwu">
			                <p class="in">
			                  <a href="/zhuanti/azcn/index.html#11" target="_blank">双周保洁</a>
			                  <a href="/zhuanti/azcn/index.html#10" target="_blank">及时维修</a>
			                  <a href="/zhuanti/azcn/index.html#6" target="_blank">房租分期</a>
			                  <a href="/zhuanti/azcn/index.html#8" target="_blank">移动交租</a>
			                </p>
			                <p class="out">
			                  <span class="icon"></span>
			                  服务
			                </p>
			              </li>
			              <li class="pinzhi">
			                <p class="in">
			                  <a href="/zhuanti/azcn/index.html#7" target="_blank">WIFI覆盖</a>
			                  <a href="/zhuanti/azcn/index.html#4" target="_blank">时尚装修</a>
			                  <a href="/zhuanti/azcn/index.html#5" target="_blank">品牌家电</a>
			                  <a href="/zhuanti/azcn/index.html#12" target="_blank">智能家居</a>
			                </p>
			                <p class="out">
			                  <span class="icon icon_pinzhi"></span>
			                  品质
			                </p>
			              </li>
			              <li class="anquan">
			                <p class="in">
			                  <a href="/zhuanti/azcn/index.html#13" target="_blank">信用体系</a>
			                  <a href="/zhuanti/azcn/index.html#9" target="_blank">租客保险</a>
			                </p>
			                <p class="out">
			                  <span class="icon"></span>
			                  安全
			                </p>
			              </li>
			            </ul> -->
		            </dd>
		        </dl>
	        </div><!--/con-->
	    </div><!--/r_fixed-->

	    </div><!--/room_detail_right-->
	 </div><!--/area-->

	<div class="hide">
        <div class="dialog_bor" id="dialog_form">
        <div class="dialog_info">
            <div class="dialog_con">
            <input type="hidden" id="room_code" name="room_code" value="BJCP84231043_01" />
            <input type="hidden" id="steward_code" name="steward_code" value="20170342" />

                <div class="clearfix pr">
                    <span class="tips" id="name_tips"><em></em><i></i></span>
                    <p>
                        <span class="dia_title">姓名<em>*</em></span>
                        <span class="limit_tips"><em>*</em>必填</span>
                    </p>
                    <span class="input_text">
                        <input type="text" name="name" id="name" maxlength="20"  onblur="checkFormName();"/>
                    </span>
                </div>
                <div class="clearfix pr">
                    <span class="tips" id="tel_tips"><em></em><i></i></span>
                    <p>
                        <span class="dia_title">手机号码<em>*</em></span>
                    </p>
                    <span class="input_text">
                        <input type="text" name="phone" id="phone"  onblur="checkFormPhone();"/>
                    </span>
                </div>
                <div class="clearfix">
                    <p>
                        <span class="dia_title">入住日期</span>
                    </p>
                    <span class="input_date">
                        <input type="text" onFocus="WdatePicker({isShowClear:false,readOnly:true,position:{left:117}})" align="absmiddle" name="date" id="date"/>
                        <em></em>
                    </span>
                </div>
                <div class="clearfix">
                    <p>
                        <span class="dia_title">其他信息</span>
                    </p>
                    <span class="input_text">
                        <textarea id="extra" style="width:302px;height:38px;" onKeyUp="if(this.value.length > 280) this.value=this.value.substr(0,280)"></textarea>
                    </span>
                </div>
                <p class="groom_check groom_check_t">我希望管家打电话推荐我适合的房源信息。</p>

                <div class="s_or_c clearfix">
                    <a href="javascript:;" onclick="checkSubForm();" class="btn_sure">确定</a>
                    <a href="javascript:;" class="btn_cancle close">取消</a>
                </div>

            </div>
        </div>
    </div>

      <div class="dialog_bor" id="dialog_form_yuyue">
        <div class="dialog_info">
            <div class="dialog_con">
                <input type="hidden" value="480043aa2dfcf30a0a597427c13ab312" id="hide_key" />
                <input type="hidden" value="" id="user_sex" />
                <input type="hidden" value="" id="user_uid" />
                <input type="hidden" value="24432" id="room_id" />
                <input type="hidden" value="1791" id="house_id" />
                <input type="hidden" value="110000" id="current_city_code" />
                <input type="hidden" value="" id="ly_name" />
                <input type="hidden" value="" id="ly_phone" />
                <input type="hidden" value="1" id="house_type" />
                <input type="hidden" id="resblock_id" value="1111027377774"/>

                <div class="modal-content-detail">

                    <div class="control-group">
                        <span class="m_icon user"></span>
                        <input type="text" name="y_name" id="y_name" maxlength="20" value="" class="inp_txt" tabindex="1"/>
                        <p for="y_name" class="invalid"></p>
                    </div>

                    <div class="control-group">
                        <span class="m_icon tel_icon"></span>
                        <input type="text" name="y_phone" id="y_phone" value="" class="inp_txt" tabindex="2"/>
                        <p for="y_phone" class="invalid"></p>
                    </div>

                     <div class="control-group clearfix">
                        <input type="button" value="确 定" class="org_btn"  id="toYuyue" onclick="checkSubFormYuyue(this);" class="btn_sure">

                    </div><!--/control-group-->

                </div><!--/modal-content-->

            </div>
        </div>
      </div><!--/预约看房-->
      <script>
var mapType = $.cookie('mapType');
if(mapType=='areas'){
   $('#toYuyue').attr({'id':'toYuyue_areas'}); 
   $('#zreserve').attr({'id':'zreserve_areas'}); 
}
if(mapType=='office'){
    $('#toYuyue').attr({'id':'toYuyue_office'});
    $('#zreserve').attr({'id':'zreserve_office'}); 
}
if(mapType=='lovers'){
    $('#toYuyue').attr({'id':'toYuyue_lovers'}); 
    $('#zreserve').attr({'id':'zreserve_lovers'}); 
}
var oYname=$('#y_name'),
oYtel=$('#y_phone'),
oYnameTips=$('#y_name_tips'),
oYtelTips=$('#y_tel_tips');

oYname.focus(function(){
    foucsInput(this);
});
oYtel.focus(function(){
   foucsInput(this);
});

function checkSubFormYuyue(obj){

        var hide_key = $("#hide_key").val();
        var user_sex = $("#user_sex").val();
        var user_uid = $("#user_uid").val();
        var y_name = $("#y_name").val();
        var y_phone = $("#y_phone").val();
        var house_id = $("#house_id").val();
        var house_code = $("#room_id").val();
        var house_type = $("#house_type").val();
        var villageId = $("#resblock_id").val();
        var current_city_code = $("#current_city_code").val();



       if(!checkEmpty(oYname.val())){
    $('p[for="y_name"]').html('请输入姓名').show();
    return;
  }


       if(!checkMobile(oYtel.val())){
    $('p[for="y_phone"]').html('请输入正确的手机号').show();
    return;
  }


       var _this = $(obj);
       _this.val('提交中……').addClass('loading_btn').attr('disabled','disabled');
       var newstr = '';    
        $.ajax({
               type:'POST',
               url:"/index.php?_p=api_mobile&_a=user_to_look_web",
               data:'hide_key='+hide_key+'&user_sex='+user_sex+'&uid='+user_uid+'&user_name='+y_name+'&user_phone='+y_phone+'&house_id='+house_id+'&house_code='+house_code+'&house_type='+house_type+'&villageId='+villageId+'&current_city_code='+current_city_code,
               success: function(msg){
					$.cookie('mapType',' ',{ expires: 1, path: '/' });
                      var obj = eval( "(" + msg + ")" );
                      if(obj.status=="success"){
                        newstr = '<h3>房源约看信息提交成功！</h3><p>看房时，还可以找管家领取搬家专属优惠码!</p>';

                      }else{
                          if(obj.error_code=="504209"){
                              newstr = '<h3>您已成功约看该房源，无需重复提交！</h3><p>看房时，还可以找管家领取搬家专属优惠码!</p>';

                          }
                          if(obj.error_code=="200004"){
                              newstr = '<h3>验证失败，请稍后再试！</h3>';

                          }
                          if(obj.error_code=="200002"){
                              newstr = '<h3>请填写完全再次提交！</h3>';

                          }
                          if(obj.error_code=="500000"){
                              newstr = '<h3>已发起管家未反馈！</h3>';

                          }

                      }
                       _this.val('确 定').removeClass('loading_btn').removeAttr('disabled');
                      $('#collected').html(newstr);
                          
                      closeboxy();
                      new Boxy('#collected', {title: "提示"});

                   }
            });

}
</script>

<div id="dialog_form_zixun" class="zixun_form">
  <textarea name="zxMsg" id="zxMsg" rows="" cols="" placeholder="请输入您要发送的内容" maxlength="200"></textarea>
  <p class="tips  mt10" id="z_msg_tips"><em></em><i></i></p>
    <div class="tc mt20">
        <input type="button" onclick="checkSubFormZixun(this);" class="org_btn" value="给我留言"/>
    </div>
</div><!--/留言咨询-->
<script>
       var oZxMsg=$('#zxMsg'),
oZtips=$('#z_msg_tips');

oZxMsg.focus(function(){
    $(this).parents('.pr').find('.tips').hide();
});

function checkSubFormZixun(obj){
if(checkFormMsg()){
    //如果信息都填写完全
    var hide_key = $("#hide_key").val();
    var messageContent = oZxMsg.val();
    var user_uid = $("#user_uid").val();
    var y_name = $("#ly_name").val();
    var y_phone = $("#ly_phone").val();
    var house_address = "昌平区立城苑七单元701";
    var steward_code = "20170342";
    var house_code = "BJCP84231043_01";
    
    var _this = $(obj);
    var newstr = '';
    _this.val('提交中……').addClass('loading_btn').attr('disabled','disabled'); 

		$.ajax({
            type:'POST',
            url:"/index.php?_p=api_mobile&_a=leave_message_web",
            data:'hide_key='+hide_key+'&messageContent='+messageContent+'&uid='+user_uid+'&user_name='+y_name+'&user_phone='+y_phone+"&house_code="+house_code+'&house_address='+house_address+"&steward_code="+steward_code,
            success: function(msg){
                
                closeboxy();
                   var obj = eval( "(" + msg + ")" );
                   if(obj.status=="success"){
                     newstr = '<p>留言信息提交成功！</p>';
                     $('#collected').html(newstr);

                        new Boxy('#collected', {title: "提示"});
                   }else{
                       if(obj.error_code=="500000"){
                           newstr = '<p>您已对该房源进行过留言，无需重复提交！</p>';
                       }
                       if(obj.error_code=="200004"){
                           newstr = '<p>验证失败，请稍后再试！</p>';
                       }
                       if(obj.error_code=="200002"){
                           newstr = '<p>请填写完全再次提交！</p>';
                       }
                       if(obj.error_code=="300002"){
                           newstr = '<p>网络错误，请稍后再试！</p>';
                       }
                        _this.val('给我留言').removeClass('loading_btn').removeAttr('disabled');
                        $('.collected').html(newstr);
                        new Boxy('.collected', {title: "提示"});
                   }

                }
         });
	}
}

function checkFormMsg(){
    var val = oZxMsg.val();

    if(val=='' || val=='请输入您要发送的内容'){

        oZtips.show().find('em').html('请输入您要发送的内容');
        return false;
    }else{
       oZtips.find('em').html('').hide();
        return true;
    }
      return true;
}
</script>


    <div id="QR_code" class="QR_code">
            <div class="QR_close">
                <a href="javascript:;" class="close"></a>
            </div>
            <div id="wechat"><img width="200" height="200" src="picture/qrcode.php'"/></div>
    </div>

    <div class="collect_success" id="collect_success" >
        <p>您已经收藏了10个房源。<a href="javascript:;" class="see_room org">查看收藏的房源&gt;&gt;</a></p>
        <div class="cl_close"></div>
    </div>
    <div class="collected" id="collected"></div>


</div><!--/hide-->
<!--预定，订阅-->
<div class="hide">
    <div id="successdy">
            <p class="fs18">我们将在上线当天以短信的方式通知您:</p>
            <div class="t1"><span class="ztip">手机号</span><span class="ztelnumber" id="ztelnumber"></span></div>
            <p class="fs16">修改手机号，请拨打客服电话：400-100-1111</p>
            <p class="t2 fs14" id="has">您已经收藏<span id="zhnumber"></span>个房源，<a href="http://i.ziroom.com/?uri=collect" id="lookhouse">查看收藏的房源</a></p>
            <a href="javascript:;" class="zquren" onclick="closeboxy()">确定</a>
    </div>
</div>


<script type="text/javascript">


//可租提醒
function remind(remind_id,house_id,hire_commissioner_phone,assistant_name,phone)
{
    if($.trim($("#kezutixing").html())=="可租提醒"){
        var remind_id = remind_id;
        var house_id = house_id;
        var hire_commissioner_phone = hire_commissioner_phone;
        var assistant_name = assistant_name;
        var room_name = room_name;
        var phone = phone;
        $.ajax({
               type:'POST',
               url:"/index.php?_p=view&_a=remind",
               data:'remind_id='+remind_id+'&house_id='+house_id+'&hire_commissioner_phone='+hire_commissioner_phone+'&assistant_name='+assistant_name,
               success: function(msg){
                                   var url = "http://i.ziroom.com/?uri=collect";
                                   var len = 'success';
                                   var num = msg.substr(len.length+1);
                                   $("#ztelnumber").html(phone);
                                   $("#zhnumber").html(num);
                                   var dialog = new Boxy('#successdy', {title: " "});
                             $(".lj_wakeuping").addClass('lj_wakeuping_disabled').html('已订阅')

                       }
            });
    }

}

 // 可租提醒未登录
 //可租提醒，未登录
function ZiroomRemind(collect_id,is_whole)
{

var access_bkey = "d4327db47963d78202be832af842da3a";
        var ac_error_nums = "0";
if((access_bkey=='' || ac_error_nums>2) || show_code)
        {
$('.is_captcha').val(1);
$('#VerifyCode').css({'display':'block'});
click_img();
}
else
{
            $('.is_captcha').val(2);
}
//new Boxy('#ziroomlogin', {title: " "});

showModal('logins');
countModalHeight();

$("#type").val('tixing');
}



/*--清楚最近浏览的房源js start--------------------------------------------------------- */
//为了删除指定名称的cookie，可以将其过期时间设定为一个过去的时间
function delCookie(name)
{
    var date = new Date();
    date.setTime(date.getTime() - 10000);
    document.cookie = name + "=a; expires=" + date.toGMTString() + "; path=/";
    $("#history").html('');
    $("#history").html('<li">暂无浏览记录</li>');
}
/*--清楚最近浏览的房源js start--------------------------------------------------------- */



/*--意向房源form表单提交js start--------------------------------------------------------- */
function getRealLength(str) {
    var realLength = 0, len = str.length, charCode = -1;
    for (var i = 0; i < len; i++) {
        charCode = str.charCodeAt(i);
        if (charCode >= 0 && charCode <= 128) realLength += 1;
        else realLength += 2;
    }
    return realLength;
}

function checkFormPhone(){
    var phone = $('#phone').val();
    if(!phone){

        $('#tel_tips').show().find('em').html('手机号不能为空').show();
        return false;
    }else if( !(/^[1][3-8]\d{9}$/.test(phone)) ){
         $('#tel_tips').show().find('em').html('手机号码不正确').show();
        return false;
    }
    return true;
}

$('#name').focus(function(){
    $(this).parents('.pr').find('.tips').hide();
});
$('#phone').focus(function(){
    $(this).parents('.pr').find('.tips').hide();
});


function checkFormName(){
    var name = $.trim($('#name').val());
    var realLength = getRealLength(name);
    if(!name){
        $('#name_tips').show().find('em').html('姓名不能为空').show();
        return false;
    }

    if(realLength>40){
        $('#name_tips').show().find('em').html('姓名长度不大于20个汉字（40个字符）').show();

        return false;
    }
    return true;
}

function checkSubForm(){
    var name = $('#name').val();
    var phone = $('#phone').val();
    var indate = $('#date').val();
    var extra = $('#extra').val();
    var room_code = $('#room_code').val();
    var steward_code = $('#steward_code').val();

    var flag1=checkFormName();
    var flag2=checkFormPhone();
    if(flag1==false || flag2==false){
        return false;
    }
    $.ajax({
        type:'POST',
        dataType:"text",
        url:"/index.php?_p=detailshow&_a=intention",
        data:{name:name,phone:phone,indate:indate,extra:extra,room_code:room_code,steward_code:steward_code},
        success: function(ret){
            if(ret==1){
                $('#name_tips').html('姓名参数错误').show();
                $('#name').val();
                $('#phone').val();
                $('#date').val();
                $('#extra').val();
            }else if(ret==2){
                $('#name').val();
                $('#phone').val();
                $('#date').val();
                $('#extra').val();
                $('#tel_tips').html('手机号参数错误').show();
            }else if(ret==3){
                alert('数据操作错误');
                $('#name').val();
                $('#phone').val();
                $('#date').val();
                $('#extra').val();
                closeboxy();
            }else{
                alert('提交成功！');
                $('#name').val();
                $('#phone').val();
                $('#date').val();
                $('#extra').val();
                closeboxy();
            }
        }
    });
}
/*--意向房源form表单提交js end--------------------------------------------------------- */

/*--收藏房源js start--------------------------------------------------------- */
function collect(collect_id,is_whole,duanzu)
{
    if($('.people').size()==0){
         $('#topRightList').append('<li class="people"><a href="http://i.ziroom.com/"></a></li>');
                                         $('#ziroom_login').remove();
                                         $('#ziroom_reg').remove();
    }

$.ajax({
   type:'POST',
   url:"/index.php?_p=view&_a=collect",
   data:'id='+collect_id+'&type='+duanzu+'&is_whole='+is_whole,
   success: function(msg){
                var str1 = '';
var str2 = '';
var url = "http://i.ziroom.com/?uri=collect";
var sClass1 = 'collected';
        if(msg=='no_login') window.location = ""+'/g/login.html';
if(msg=='error_params') str1 = '参数错误!';
if(msg=='has_in')
{
str1 = '您已经收藏过该房源了';
str2 = '<a class="see_room org" href="'+url+'" target="_blank">查看收藏的房源&gt;&gt;</a>';
}
if(msg.indexOf('success')==0)
{
    var len = 'success';
    var num = msg.substr(len.length+1);
    str1='该房源收藏成功' ;
    str2='您已经收藏了'+num+'个房源。';
    str2+='<a target="_blank" href="'+url+'" class="see_room org">查看收藏的房源&gt;&gt;</a>';
    sClass1 = 'collect_success';
    $('#collectTxt').parents('a').addClass("collectEnd");
    $('#collectTxt').html('已收藏');
}
var newstr = '';
newstr += '<h3>'+str1+'</h3>';
newstr += '<p>'+str2+'</p>';

$('.'+sClass1).html(newstr);
closeboxy();
new Boxy('.'+sClass1, {title: '提示'});
   }
});
}

var show_code = 0;
//登陆
function ZiroomLogin(yuding_id,room_code)
{
    var access_bkey = "";
    var ac_error_nums = "0";


    $('#yuding_id').val(yuding_id);
    $('#room_code').val(room_code);
    $('#type').val('login');
    if($('#people').size()==0){
        showModal('logins');
  countModalHeight();
    }

}


//未登录时点击收藏触发事件
function ZiroomCollect(collect_id,is_whole)
{
    var access_bkey = "";
    var ac_error_nums = "0";
    if((access_bkey=='' || ac_error_nums>2) || show_code){

        $('.is_captcha').val(1);
        $('#VerifyCode').css({'display':'block'});
    }else{
        $('.is_captcha').val(2);
    }


    if($('#people').size()!=0){
        collect(collect_id,is_whole);
    }else{
        showModal('logins');
  countModalHeight();
        $("#type").val('collect');
    }




}

//留言咨询
function leaveMessage(collect_id,is_whole){
    var user_uid = $("#user_uid").val();
    if($('#people').size()==0){
        showModal('logins');
  countModalHeight();

        $("#type").val('leaveMessage');
    }else{
        new Boxy('#dialog_form_zixun',{'title':'留言咨询'});
    }

}

/*--收藏房源js end--------------------------------------------------------- */
</script>

<div id="bigPhotShow" class="modal">
        <a href="javascript:;" class="close"></a>
        <div id="lofslidecontent46" class="lof-slidecontent current_lof">

                 <div class="lof-main-outer">
                     <div onclick="return false" href="javascript:;" class="lof-previous icon icon-prev"></div><!--lof-previous -->
                     <ul class="lof-main-wapper">
                         @foreach($img as $k=>$v)
                            <li>
                                <a href="house_img/{{$v->img}}"  class="pirobox_t6">
                                   <img src="house_img/{{$v->img}}" onerror="this.src='http://www.ziroom.com/static/images/slist_1207/yuanwei-loading.jpg'" />
                                </a>
                            </li>
                          @endforeach
                     </ul>
                    <div onclick="return false" href="javascript:;" class="lof-next icon icon-next"></div><!--lof-next -->
                 </div><!--lof-main-outer -->

             </div><!--大焦点图结束-->

</div><!--/bigPhotoShow-->
<script type="text/javascript" src="js/boomerang.js"></script>
<script type="text/javascript">
    BOOMR.init({
        beacon_url: "http://catcher.ziroom.com/beacon",
        beacon_type: "POST",
        page_key: "www_detail"
    });
</script>


<input type="hidden" value="login" id="type">



<div id="slideBar">
    <ul>
        <input type="hidden" id="login_flag" value=""/>
        <li class="u first" id="slideLogin">
            <a href="javascript:;">
                <i class="tab-tip"></i>
                <i class="tab-ico"></i>
                <em class="tab-text">登录注册</em>
            </a>
        </li><!--/登录注册-->
        <li class="w" id="slideWeixiu">
            <a href="javascript:;">
                <i class="tab-tip"></i>
                <i class="tab-ico"></i>
                <em class="tab-text">在线报修</em>
            </a>
        </li><!--/维修-->
        <li class="k" id="slideKefu">
            <a href="javascript:;" onclick="easemobIM()">
                <i class="tab-tip"></i>
                <i class="tab-ico"></i>
                <em class="tab-text">在线客服</em>
            </a>
        </li><!--/客服-->
        <script src='js/easemob.js' async='async'></script>

        <li class="y" id="slidePay">
            <a href="javascript:;">
                <i class="tab-tip"></i>
                <i class="tab-ico"></i>
                <em class="tab-text">在线交租</em>
            </a>
        </li><!--/交租-->

        <li class="x" id="fankui">
            <a href="javascript:;">
                <i class="tab-tip"></i>
                <i class="tab-ico"></i>
                <em class="tab-text">意见反馈</em>
            </a>
        </li><!--/反馈-->
        <li class="m">
         <a href="javascript:;">
            <i class="tab-tip"></i>
            <i class="tab-ico"></i>
            <em class="tab-text"><img src="picture/ewm_1.png"></em>
        </a>
        </li><!--/二维码-->
        <li class="t" id="goTop">
            <a href="javascript:;">
                <i class="tab-tip"></i>
                <i class="tab-ico"></i>
                <em class="tab-text">返回顶部</em>
            </a>
        </li><!--/top-->
    </ul>
</div>

<div class="hide">
    <div class="feedbackBox" id="feedbackBox">

        <textarea id="feedbackTextatea" placeholder="请输入您要发送的内容"  maxlength="200"></textarea>
        <p class="invalid" id="feedTips">反馈意见不能为空！</p>
        <div class="tc mb10">
            <input type="button" onclick="sub_feedback(this);" class="org_btn" value="提 交">
        </div>

    </div>


    <div id="feedbackBox2" class="feedbackBox tc">

        <p class='org mt10'>感谢对U+的建议和意见，我们会认真听取</p>
        <p class='org mt10'>也请您继续关注我们。</p>
        <p class='org mt10'>为您提供优质的服务我们责无旁贷。</p>


    </div>


</div>

<script type="text/javascript" src="js/login2015.js"></script>


<!--引用底部公用信息-->
@include('commonality.foot')



<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>

<script>
    $(function(){


        var $mapSearchText=$("#mapsearchText");
        var $mapTitle = $mapSearchText.attr('data-title');
        var $toBus=$("#toBus");
        var to;
        var $reasultbox=$("#reasultbox");

        var map1 = new BMap.Map("mainmap");
        map1.addControl(new BMap.NavigationControl());
        map1.addControl(new BMap.ScaleControl());
        map1.enableScrollWheelZoom();
        var lng =$mapSearchText.attr('data-lng');
        var lat =$mapSearchText.attr('data-lat');


        //alert({{$list->x_postion}})
        var point=new BMap.Point({{$list->x_postion}},{{$list->y_postion}});
    var marker=new BMap.Marker(point);
    map1.centerAndZoom(point,14);
    map1.addOverlay(marker);
    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    var keyFlag = 0;
    var keyVal = '';

    var ac = new BMap.Autocomplete(    //建立一个自动完成的对象
            {"input" : "mapsearchText"
                ,"location" : map1
            });


    $('#toLocation').click(function(){
        map1.centerAndZoom(point,14);
        map1.addOverlay(marker);
        marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    });

    $('#msTab p').click(function(){
        $(this).addClass('active').siblings().removeClass();
        keyFlag = $(this).index();

    });

    var local = new BMap.LocalSearch(map1, {
        renderOptions:{map: map1}
    });

    var $mapTabLi=$("#mapTab li");
    $mapTabLi.click(function(){
        var txt=$(this).attr('title');
        $mapTabLi.removeClass("active");
        $(this).addClass('active');
        local.searchInBounds(txt, map1.getBounds());
    });




    var routePolicy = [BMAP_TRANSIT_POLICY_LEAST_TIME,BMAP_TRANSIT_POLICY_LEAST_TRANSFER,BMAP_TRANSIT_POLICY_LEAST_WALKING,BMAP_TRANSIT_POLICY_AVOID_SUBWAYS];
    var transit = new BMap.TransitRoute(map1, {
        renderOptions: {map: map1},
        policy: 0,
        onSearchComplete:function(e){
            var plan=e.getPlan(0);
            var title="";
            if(plan.getNumLines() > 0){
                title=plan.getLine(0).title;
                if(title.indexOf("(") > 0){
                    title=title.substring(0,title.indexOf("("));
                }
            }
            s=plan.getDescription().replace(/\，(\<b\>步行\<\/b\>)/g,'@$1').replace(/\，(乘坐)/g,'@$1').split("@");


            var adds="";
            for(var j in s){
                if(j%2===0){
                    adds +='<div class="t_buxing"><i></i>'+s[j]+'</div>';
                }else{
                    adds +='<div class="t_chengzuo"><i></i>'+s[j]+'</div>';
                }
            }




            var t1='',
                    t2='';

            if(keyFlag){
                t1 = $mapTitle;
                t2 = to;
            }else{
                t2 = $mapTitle;
                t1 = to;
            }



            var string='<div class="reasultsmallbox"><div class="reasultsmallbox_h">'
                    +'<p class="numicon">1</p>'
                    +'<font size="3">'+title+'</font>&nbsp;&nbsp;&nbsp;&nbsp;全程约'+plan.getDuration()
                    +'</div>'
                    +'<div style="display: block;" class="reasultsmallbox_c tt_show">'
                    +'<div class="map_starticon">'
                    +'  <p class="t_qidian">起</p>'
                    +'    <span class="t_zhongdianbg">'+t1+'</span>'
                    +'</div>'
                    + adds
                    +'<div class="map_starticon zhong">'
                    +' <p class="t_zhongdian">终</p>'
                    +' <span class="t_zhongdianbg">'+t2+'</span></div>'
                    +'</div></div>';

            $reasultbox.show().html(string);
        }
    });
    var transitSearch=function(){
        var i=0;
        to=$mapSearchText.val();

        if(to.length===0){return;}



        search(point,to,routePolicy[i]);


        function search(start,end,route){
            transit.setPolicy(route);

            if(keyFlag){
                transit.search(point,end);
                $('#reasultbox').show();
                $('#closeReasult').show();
            }else{
                transit.search(end,point);
                $('#reasultbox').show();
                $('#closeReasult').show();
            }




        }
    }
    $toBus.click(function(){
        keyVal = $mapSearchText.val();
        checkVal(keyVal);
        transitSearch();


    });
    //公交结束


    //驾车开始
    //地址解析  坐标点解析为汉字
    var geoc = new BMap.Geocoder();
    var curDress = '';
    geoc.getLocation(point,function(rs){
        var addComp = rs.addressComponents;
        curDress = addComp.province+addComp.city+addComp.district+addComp.street+addComp.streetNumber;
    });

    var driving = new BMap.DrivingRoute(map1, {renderOptions: {map: map1, panel: "reasultbox", autoViewport: true}});
    $('#toDriver').click(function(){



        keyVal = $mapSearchText.val();
        checkVal(keyVal);

        point=new BMap.Point($mapSearchText.attr('data-lng'),$mapSearchText.attr('data-lat'));

        if(keyFlag){
            driving.search(curDress, keyVal);
            $('#reasultbox').show();
            $('#closeReasult').show();
        }else{
            driving.search(keyVal,curDress);
            $('#reasultbox').show();
            $('#closeReasult').show();
        }
    });
    //驾车结束



    //步行
    var walking = new BMap.WalkingRoute(map1, {renderOptions: {map: map1, panel: "reasultbox", autoViewport: true}});
    $('#toWalk').click(function(){

        //$(this).addClass('active').siblings('.btn').removeClass('active');



        keyVal = $mapSearchText.val();
        checkVal(keyVal);
        point=new BMap.Point($mapSearchText.attr('data-lng'),$mapSearchText.attr('data-lat'));
        if(keyFlag){
            walking.search(curDress, keyVal);
            $('#reasultbox').show();
            $('#closeReasult').show();
        }else{
            walking.search(keyVal,curDress);
            $('#reasultbox').show();
            $('#closeReasult').show();
        }

    });


    //步行结束


    function checkVal(val){

        var num=0;
        if(val==''){
            $mapSearchText.removeClass('textFocus');
            var timer = setInterval(function(){
                num++;
                if(num%2==0){
                    $mapSearchText.addClass('textError')
                }else{
                    $mapSearchText.removeClass('textError')
                }

                if(num>= 4){
                    clearInterval(timer);
                    $mapSearchText.focus();
                }

            },100);
            $mapSearchText.addClass('textError').removeClass('textFocus');
        }
    }


    $mapSearchText.focus(function(){
        $(this).addClass('textFocus').removeClass('textError');
    }).blur(function(){
        $(this).removeClass('textFocus textError');
    });



    /*
     $mapSearchText.keyup(function(e){
     var searchText=$(this).val().trim();
     if(searchText==""){
     map1.removeOverlay();
     return false;
     }
     if(e.which==13 || e.which==1){
     if($('#toBus').hasClass('active')){
     transitSearch();
     }



     }
     return false;
     })
     */


    $('#closeReasult').click(function(){
        $(this).hide();
        $('#reasultbox').hide();
    });



    });




</script>

