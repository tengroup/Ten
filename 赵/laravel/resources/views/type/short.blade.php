<!DOCTYPE HTML>
<html>
<head>
<title>Services</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" type="text/css" href="sel_css/css/main.css"/>
    <script type="text/javascript" src="sel_css/js/jquery.js"></script>
    <script type="text/javascript" src="sel_css/js/hhDrop.js"></script>
    <script type="text/javascript" src="sel_css/js/shaixuan.js"></script>
    <!--多条件-->
    <link rel="stylesheet" type="text/css" href="sel_css/css/list.css"/>

    <!--时间搜索-->

    <!--时间搜索-->
   <!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
 $(function(){
     $('#hhDrop00').hhDrop({});
     $('#hhDrop01').hhDrop({});
 })
</script>
<!-- //animation-effect -->
<link href='http://fonts.useso.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
</head>

<body>

<!--引用公用头部信息-->
@include ("commonality.head")<br/>

<!-- banner1 -->
	{{--<div class="banner1">--}}
		{{--<div class="container">--}}
		{{--</div>--}}
	{{--</div>--}}

{{--<span>房屋位置<input type="text" class="ju-adress"  />--}}

<div class="w1200">

    <div class="list-screen">
        <div class="screen-top" style="position:relative;">
            <div class="lineSearch">
                <ul>
                    <li class="thRelative" id="hhDrop00">
                        <div class="boxSearch">
          <span class="key_word" style="display:block;border: 1px solid #b8b8b8;margin-top: 28px;margin-left: 20px;">
            <b class="size_14"></b>
          点击可切换城市
          </span>
                            <em class="ico thLeft ico_shBlue"></em>
                            <a class="thRight ico btn_search" href="javascript:void(0)"></a>
                        </div>
                        <div class="search_form_suggest" style="display:none;">
                            <h3><a class="ico btn_close thRight" item="close">关闭</a>热门城市</h3>
                            <dl class="search_hotList">
                                <dd class="clr_after">
                                    <a href="{{URL('act_place')}}">全部</a>
                                    <a href="{{URL('act_place?value=北京')}}">北京</a>
                                    <a href="{{URL('act_place?value=上海')}}">上海</a>
                                    <a href="{{URL('act_place?value=广州')}}">广州</a>
                                    <a href="{{URL('act_place?value=成都')}}">成都</a>
                                    <a href="{{URL('act_place?value=杭州')}}">杭州</a>
                                    <a href="{{URL('act_place?value=南京')}}">南京</a>
                                    <a href="{{URL('act_place?value=深圳')}}">深圳</a>
                                    <a href="{{URL('act_place?value=石家庄')}}">石家庄</a>
                                    <a href="{{URL('act_place?value=武汉')}}">武汉</a>
                                    <a href="{{URL('act_place?value=郑州')}}">郑州</a>
                                    <a href="{{URL('act_place?value=重庆')}}">重庆</a>
                                    <a href="{{URL('act_place?value=西安')}}">西安</a>
                                    <a href="{{URL('act_place?value=苏州')}}">苏州</a>
                                </dd>
                            </dl>

                            <div class="clear"></div>
                            <div class="select_city_box" item="dep-search">
                                <span>输入热门城市</span>
                                <input type="text" class="input_city" item="key">
                                <button class="btn" type="button" item="commit"></button>
                                <div class="search_city_result" item="result" style="display:;">
                                    <a href="{{URL('act_place?value=广州')}}">广州</a> 没有匹配城市
                                </div>
                            </div>

                            <div class="thLeft thPadT5 tab_select">
                                <dl class="clrfix">
                                    <dt>A-G</dt>
                                    <dd class="clr_after">
                                        <a href="{{URL('act_place?value=北京')}}">北京</a>
                                        <a href="{{URL('act_place?value=长沙')}}">长沙</a>
                                        <a href="{{URL('act_place?value=成都')}}">成都</a>
                                        <a href="{{URL('act_place?value=重庆')}}">重庆</a>
                                        <a href="{{URL('act_place?value=广州')}}">广州</a>
                                    </dd>
                                </dl>
                                <dl class="clrfix">
                                    <dt>H-L</dt>
                                    <dd class="clr_after">
                                        <a href="{{URL('act_place?value=杭州')}}">杭州</a>
                                        <a href="{{URL('act_place?value=济南')}}">济南</a>
                                        <a href="{{URL('act_place?value=昆明')}}">昆明</a>
                                    </dd>
                                </dl>
                                <dl class="clrfix">
                                    <dt>M-T</dt>
                                    <dd class="clr_after">
                                        <a href="{{URL('act_place?value=南京')}}">南京</a>
                                        <a href="{{URL('act_place?value=宁波')}}">宁波</a>
                                        <a href="{{URL('act_place?value=青岛')}}">青岛</a>
                                        <a href="{{URL('act_place?value=三亚')}}">三亚</a>
                                        <a href="{{URL('act_place?value=上海')}}">上海</a>
                                        <a href="{{URL('act_place?value=深圳')}}">深圳</a>
                                        <a href="{{URL('act_place?value=苏州')}}">苏州</a>
                                        <a href="{{URL('act_place?value=太原')}}">太原</a>
                                    </dd>
                                </dl>
                                <dl class="clrfix">
                                    <dt>W-Z</dt>
                                    <dd class="clr_after">
                                        <a href="{{URL('act_place?value=武汉')}}">武汉</a>
                                        <a href="{{URL('act_place?value=厦门')}}">厦门</a>
                                        <a href="{{URL('act_place?value=西安')}}">西安</a>
                                        <a href="{{URL('act_place?value=郑州')}}">郑州</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <script type="text/javascript" src="sel_css/js/dateRange.js"></script>
            <link rel="stylesheet" type="text/css" href="sel_css/css/dateRange.css"/>
            <form action="{{URL("check_time")}}" method="get">
            <div style="width:500px;margin:0 auto;">
                <div class="ta_date" id="div_date1" style="margin-left: -100px;">
                    <input type="text" class="date_title" id="date1" name="dates" placeholder="可选择时间段"  style="height:26px;" size="30px"/>
                </div>
                <script type="text/javascript">
                    var d = new Date();
                    var str = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
                    //			var STATS_START_TIME = '4329148800';
                    var dateRange1 = new pickerDateRange('date1', {
                        aRecent90Days : 'aRecent90Days', //最近90天
//				isTodayValid : true,
                        needCompare : false,
                        defaultText : ' 离开 ',
                        autoSubmit : false,
                        inputTrigger : 'input_trigger1',
                        theme : 'ta'
                    });
                </script>

                <span style="float: right;margin-top:-25px"><div class="clearfix"></div></span><input id="submit-btn" value="搜索"  type="submit"style="margin-top: 50px;"/></div>
                请输入关键字:<input type="text" class="ju-name" style="height:26px;" size="25px" id="check_name" name="gjz"/>
            </form>
        <div style="padding:10px 30px 10px 10px;"><div class="screen-address">
                <div class="list-tab">
                        </div>
                </div>
            </div>
    </div>
            <div class="screen-term">
                <div class="selectNumberScreen">
                    <div id="selectList" class="screenBox screenBackground">
                        <form action="{{URL('all_sel')}}" method="post">
                         <dl class="listIndex" attr="价格范围">
                            <dt>房屋价格</dt>
                            <dd>
                                <label><a href="javascript:;"  attrval="不限">不限</a></label>
                                <label>
                                    <input name="radio2" type="radio" value="800以下" />
                                    <a href="javascript:;" attrval="800以下">800元以下</a></label>
                                <label>
                                    <input name="radio2" type="radio" value="800-1200" />
                                    <a href="javascript:;"  attrval="800-1200">800-1200元 </a></label>
                                <label>
                                    <input name="radio2" type="radio" value="1200-2000" />
                                    <a href="javascript:;"  attrval="1200-2000">1200-2000元</a></label>
                                <label>
                                    <input name="radio2" type="radio" value="2000以上" />
                                    <a href="javascript:;"  attrval="2000以上">2000元以上</a></label>
                                <div class="custom"><span>自定义</span>&nbsp;
                                    <input name="jiage1" type="text" id="custext1"/>
                                    &nbsp;-&nbsp;
                                    <input name="jiage2" type="text" id="custext2"/>
                                    <input  type="button" id="cusbtn" />
                                </div>
                            </dd>
                        </dl>
                        <dl class=" listIndex" attr="terminal_os_s">
                            <dt>房屋星级</dt>
                            <dd>
                                <label><a href="javascript:;"  attrval="不限">不限</a> </label>
                                <label>
                                    <input name="xx[]" type="checkbox" value="五星" autocomplete="off"/>
                                    <a href="javascript:;"  attrval="五星-豪华"> 五星-豪华</a> </label>
                                <label>
                                    <input name="xx[]" type="checkbox" value="四星" autocomplete="off"/>
                                    <a href="javascript:;"  attrval="四星-高档">四星-高档</a></label>
                                <label>
                                    <input name="xx[]" type="checkbox" value="三星" autocomplete="off"/>
                                    <a href="javascript:;"  attrval="三星-舒适">三星-舒适</a></label>
                                <label>
                                    <input name="xx[]" type="checkbox" value="二星" autocomplete="off"/>
                                    <a href="javascript:;"  attrval="二星-温馨">二星-温馨</a></label>
                            </dd>
                        </dl>
                        <dl class="listIndex" attr="terminal_brand_s">
                            <dt>主题风格</dt>
                            <dd data-more=true>
                                <label><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>
                                <label>
                                    <input name="h_type[]" type="checkbox" value="一室一厅" autocomplete="off"/>
                                    <a href="javascript:;"  attrval="一室一厅">一室一厅</a></label>
                                <label>
                                    <input name="h_type[]" type="checkbox" value="两室两厅" autocomplete="off"/>
                                    <a href="javascript:;"  attrval="两室两厅">两室两厅</a> </label>
                                <label>
                                    <input name="h_type[]" type="checkbox" value="三室两厅" autocomplete="off"/>
                                    <a href="javascript:;"  attrval="三室两厅">三室两厅</a> </label>
                                <label>
                                    <input name="h_type[]" type="checkbox" value="四室三厅" autocomplete="off"/>
                                    <a href="javascript:;"  attrval="四室三厅">四室三厅</a></label>
                                <span class="more"><em class="open"></em>更多</span>
                            </dd>
                        </dl>
                        <dl class="listIndex more-none" attr="terminal_brand_s"  style="display:none;border:none">
                            <dt style='visibility:hidden'>主题风格</dt>
                            <dd >
                                <label style='visibility:hidden'><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>

                                    <label><input name="fg[]" type="checkbox" value="简约大气" /><a href="javascript:;"  attrval="简约大气">简约大气</a></label>
                                    <label><input name="fg[]" type="checkbox" value="精装豪华" /><a href="javascript:;"  attrval="精装豪华">精装豪华</a> </label>
                                    <label><input name="fg[]" type="checkbox" value="个性温馨" /><a href="javascript:;"  attrval="个性温馨">个性温馨</a> </label>

                        </dl>
                          </div>
                </div>
            </div>

        </div>

        <div class="hasBeenSelected clearfix"><span id="time-num"><font>208</font>家房屋</span>
            <div style="float:right;margin-right: 200px;" class="eliminateCriteria">【清空】 </div>
          <dl>
                <dt>已选条件：</dt>
                <dd style="DISPLAY: none" class=clearDd>
                    <div class=clearList></div>
            </dl>
        </div>
    <input type="submit" style="padding-left: 920px" id="eliminateCriteria"/>
    <script type="text/javascript" src="sel_css/js/shaixuan.js"></script>
    </div>
</div></form>
<!-- //banner1 -->
<!-- services -->
	<div class="services" >
		<div class="container">
            <h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms" style="margin-bottom:-30px;">身在U+ 如在家</h1>
            <div class="service-grids" style="width:1140px;" id="content">
            @if(!empty($data))
                @foreach($data as $v )
				<div class="col-md-4 service-grid" style="width:350px;float:left; margin-top:80px;" >
					<div class="service-grd wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<img src="houst_img/{{$v->photo}}" alt=" " class="img-responsive" style="width:300px; height:200px;"/>
						<div class="service-grd-pos">
							<h4>{{$v->h_address}}</h4>
							<div class="more m2">
								<a href="single.html" class="hvr-curl-bottom-right">查看详情</a>
							</div>
						</div>
						<div class="service-grd-pos2">
							<p style="font-size: 20px;">@if($v->is_hot==1)
                                    热销
                                @elseif($v->is_best==1)
                                    精品
                                @elseif($v->is_cheap==1)
                                    特价
                                @else
                                    ${{$v->pay}}
                                @endif
                              </p>
						</div>
					</div>
				</div>
                @endforeach
                @else
                    <h1>该地区还未开放;敬请期待</h1>
                @endif
                <div class="clearfix"> </div>
			</div>

			<div class="services-grids">
				<h2 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms"Aut officiis debitis>Offered Services</h2>
                <div  class="col-md-4 services-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-xs-2 services-grid-left">
						<span class="glyphicon glyphicon-save" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 services-grid-right">
						<h4>手机端</h4>
						<p>全新手机端 U+即将上线;下载app送代金券抢红包</p>
					</div>
					<div class="clearfix" > </div>
				</div>
				<div  class="col-md-4 services-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-xs-2 services-grid-left">
						<span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 services-grid-right">
						<h4>安全线上交易</h4>
						<p>灵活方便的第三方担保支付系统，支持多种付款和收款方式。入住完成后才支付给房东</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="col-xs-2 services-grid-left">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 services-grid-right">
						<h4>全新地图定位</h4>
						<p>地图锁定位置</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			    </div>
                <div class="sevices-list-grids">
				<div class="col-md-4 sevices-list-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
					<ul>
						<li><a href="#">关于我们</a></li>
						<li><a href="#">关于U+</a></li>
						<li><a href="#">网站帮助</a></li>
						<li><a href="#">客房指南</a></li>
						<li><a href="#">房东指南</a></li>
						<li><a href="#">帮助中心</a></li>
					</ul>
				</div>
				<div class="col-md-4 sevices-list-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
					<ul>
						<li><a href="#">服务条款</a></li>
						<li><a href="#">隐私权条款</a></li>
						<li><a href="#">免责声明</a></li>
						<li><a href="#">住宿意外险通知</a></li>
					</ul>
				</div>
				<div class="col-md-4 sevices-list-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
					<ul>
						<li><a href="#">网站协议</a></li>
						<li><a href="#">房源上线标准</a></li>
						<li><a href="#">点评发布规则</a></li>
						<li><a href="#">网站地图</a></li>
						<li><a href="#">友情链接</a></li>
						<li><a href="#"> 版权声明</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->

<!--引用底部公用信息-->
@include('commonality.foot')
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
{{--<script type="text/javascript">--}}
    {{--function sub(){--}}
        {{--var js=$('#date1').val();--}}
        {{--var start_time=js.substr(0,10);--}}
        {{--var end_time=js.substr(13,11);--}}
        {{--var check_name=$('#check_name').val();--}}
        {{--var url="{{URL('check_time')}}";--}}
        {{--var data={"start_time":start_time,"end_time":end_time,'check_name':check_name};--}}
        {{--var str='';--}}
        {{--$.get(url,data,function(msg){--}}
            {{--for (var i = 0; i < msg.length; i++) {--}}
                {{--str += '<div class="col-md-4 service-grid" style="width:350px;float:left;display:block; margin-top:60px;" id="content">';--}}
                {{--str += '<div class="service-grd wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">';--}}
                {{--str += '<img src="houst_img/'+msg[i]['photo']+'" alt=" " class="img-responsive" style="width:300px; height:200px;"/>';--}}
                {{--str += '<div class="service-grd-pos">';--}}
                {{--str += '<h4>' + msg[i]["h_address"] + '</h4>';--}}
                {{--str += '<div class="more m2">';--}}
                {{--str += '<a href="single.html" class="hvr-curl-bottom-right">查看详情</a>';--}}
                {{--str += '</div></div> <div class="service-grd-pos2">';--}}
                {{--str += '<p style="font-size: 20px;">';--}}
                {{--if (msg[i]["is_hot"] == 1) {--}}
                    {{--str+='热销';--}}
                {{--} else if (msg[i]["is_best"] == 1){--}}
                    {{--str+='精品';--}}
                {{--} else if (msg[i]["is_cheap"] == 1) {--}}
                    {{--str+='特价';--}}
                {{--} else{--}}
                    {{--str+'msg[i]["pay"]';--}}
                {{--}--}}
                {{--str+='</p></div></div></div><div class="clearfix"> </div>';--}}
            {{--}--}}
            {{--$('#content').html(str);--}}
        {{--},'json')--}}
    {{--}--}}


</script>