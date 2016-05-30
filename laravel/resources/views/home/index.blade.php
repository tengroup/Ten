<!DOCTYPE HTML>
<html>
<head>
    <title>U+</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //animation-effect -->
    <link href='http://fonts.useso.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="sel_css/css/mains.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet">


    <link href="bankuai/css/index.css" rel="stylesheet">
    <link href="bankuai/css/public_element.css" rel="stylesheet">
    <link href="bankuai/css/new_calendar.css" rel="stylesheet" type="text/css">

    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!-- animation-effect -->

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    {{--<script type="text/javascript" src="sel_css/js/jquery.js"></script>--}}
    <script type="text/javascript" src="sel_css/js/hhDrop.js"></script>
    <script>
      $(function(){
        $('#hhDrop00').hhDrop({});
      })
    </script>
</head>

<body>

@include ("commonality.head");


<!-- 横幅 -->
<div class="banner">
    <div class="container">
        <div class="banner-info">
            <h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">“U+”，U家的温馨、U家的感觉 <span>16年  为更好的家而努力</span></h1>
            <div class="banner-info1 animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <ul id="flexiselDemo1">
                    <li>
                        <div class="banner-info1-grid">
                            <img src="houst_img/1.jpg" alt=" " class="img-responsive" />
                            <h3>最美房子1</h3>
                            <p>房屋是住人或存放东西的建筑物。房屋是家庭的基体，房屋是人类生存的寄托，在这里人们可以避自在的生活。</p>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info1-grid">
                            <img src="houst_img/2.jpg" alt=" " class="img-responsive" />
                            <h3>最美房子2</h3>
                            <p>房屋是住人或存放东西的建筑物。房屋是家庭的基体，房屋是人类生存的寄托，在这里人们可以避开自在的生活。</p>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info1-grid">
                            <img src="houst_img/3.jpg" alt=" " class="img-responsive" />
                            <h3>最美房子3</h3>
                            <p>房屋是住人或存放东西的建筑物。房屋是家庭的基体，房屋是人类生存的寄托，在这里人们可以避由自在的生活。</p>
                        </div>
                    </li>
                </ul>
                <script type="text/javascript">
                    $(window).load(function() {
                        $("#flexiselDemo1").flexisel({
                            visibleItems: 3,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint:480,
                                    visibleItems: 1
                                },
                                landscape: {
                                    changePoint:640,
                                    visibleItems:2
                                },
                                tablet: {
                                    changePoint:768,
                                    visibleItems: 2
                                }
                            }
                        });

                    });
                </script>
                <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                <div class="more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <a href="{{URL('perLook')}}" class="hvr-curl-bottom-right">阅读更多</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //横幅 -->
<!-- 旗下 -->
<!--<div class="banner-bottom">
    <div class="container">
        <div class="banner-bottom-grids">
            <div class="col-md-5 banner-bottom-grid wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h2>热销房</h2>
                <p>地址:{{$selling->h_address}}</p>
                <p>面积:{{$selling->h_area}}平方米</p>
                <p>可住:{{$selling->number}}人</p>
                <p>租金:{{$selling->pay}}</p>
                <p>{!!$selling->content!!}</p>
                <div class="more">
                    <a href="{{URL('perLook?id')}}={{$selling->h_id}}" class="hvr-curl-bottom-right">阅读更多</a>
                </div>
            </div>
            <div class="col-md-7 banner-bottom-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="banner-bottom-grid1">
                    <img src="houst_img/4.jpg" alt=" " class="img-responsive" />
                    <div class="banner-bottom-grid-pos">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                <span class="sr-only">30% Complete</span>
                            </div>
                        </div>
                        <div class="progress progress1">
                            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                        <div class="progress progress2">
                            <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                <span class="sr-only">30% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="newsletter-bottom-grids">
            <div class="col-md-6 newsletter-bottom-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                <img src="houst_img/5.jpg" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-6 newsletter-bottom-grid  wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h3>特价房</h3>
                <p>地址:{{$Specialoffer[1]->h_address}}</p>
                <p>面积:{{$Specialoffer[1]->h_area}}平方米</p>
                <p>可住:{{$Specialoffer[1]->number}}人</p>
                <p>可住:{{$Specialoffer[1]->pay}}</p>
                <p>{!!$Specialoffer[1]->content!!}</p>
                <div class="more">
                    <a href="{{URL('perLook?id')}}={{$Specialoffer[0]->h_id}}" class="hvr-curl-bottom-right">阅读更多</a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>-->
<!-- //旗下 -->

<!--板块-->

<div class="index-box">
    <div class="index-box-tit t-center">
        <h1 class="mb5">热门短租城市</h1>
        <span class="f18">和你在另一个地方遇见美好</span>
    </div>
    <ul class="city">
        <li><img src="bankuai/picture/beijing.jpg"><a href="{{URL('act_place?value=北京')}}" target="_blank">北京</a></li>
        <li><img src="bankuai/picture/shanghai.jpg"><a href="{{URL('act_place?value=上海')}}" target="_blank">上海</a></li>
        <li><img src="bankuai/picture/chengdu.jpg"><a href="{{URL('act_place?value=成都')}}" target="_blank">成都</a></li>
        <li><img src="bankuai/picture/qingdao.jpg"><a href="{{URL('act_place?value=青岛')}}" target="_blank">青岛</a></li>
        <li><img src="bankuai/picture/chongqing.jpg"><a href="{{URL('act_place?value=重庆')}}" target="_blank">重庆</a></li>
        <li><img src="bankuai/picture/xian.jpg"><a href="{{URL('act_place?value=西安')}}" target="_blank">西安</a></li>
        <li><img src="bankuai/picture/hangzhou.jpg"><a href="{{URL('act_place?value=杭州')}}" target="_blank">杭州</a></li>
        <li><img src="bankuai/picture/xiamen.jpg"><a href="{{URL('act_place?value=厦门')}}" target="_blank">厦门</a></li>
    </ul>
</div>


<!-- 根据城市查询 -->
<div class="newsletter">
    <div class="container">
        <div class="newsletter-info">
            <h3 class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">U+</h3>
            <center>
            <div class="lineSearch" style="background:white;width:320px;">
            <ul>
                <li class="thRelative" id="hhDrop00">
                    <div class="boxSearch">
                      <span class="key_word">
                        <b class="size_14"></b>
                        点击搜索城市
                      </span>
                      <em class="ico thLeft ico_shBlue"></em>
                      <a class="thRight ico btn_search" href="javascript:void(0)"></a>
                    </div>
                    <div class="search_form_suggest" style="display:none;">
                      <h3><a class="ico btn_close thRight" item="close">关闭</a>热门城市</h3>
                      <dl class="search_hotList">
                        <dd class="clr_after">
                          <a href="{{URL('act_place?value=北京')}}">北京</a>
                          <a href="{{URL('act_place?value=上海')}}">上海</a>
                          <a href="{{URL('act_place?value=广州')}}">广州</a>
                          <a href="{{URL('act_place?value=成都')}}">成都</a>
                          <a href="{{URL('act_place?value=杭州')}}">杭州</a>
                          <a href="{{URL('act_place?value=南京')}}">南京</a>
                          <a href="{{URL('act_place?value=深圳')}}">深圳</a>
                          <a href="{{URL('act_place?value=济南')}}">济南</a>
                          <a href="{{URL('act_place?value=石家庄')}}">石家庄</a>
                          <a href="{{URL('act_place?value=武汉')}}">武汉</a>
                          <a href="{{URL('act_place?value=郑州')}}">郑州</a>
                          <a href="{{URL('act_place?value=重庆')}}">重庆</a>
                          <a href="{{URL('act_place?value=福州')}}">福州</a>
                          <a href="{{URL('act_place?value=西安')}}">西安</a>
                          <a href="{{URL('act_place?value=长沙')}}">长沙</a>
                          <a href="{{URL('act_place?value=沈阳')}}">沈阳</a>
                          <a href="{{URL('act_place?value=天津')}}">天津</a>
                          <a href="{{URL('act_place?value=哈尔滨')}}">哈尔滨</a>
                          <a href="{{URL('act_place?value=苏州')}}">苏州</a>
                          <a href="{{URL('act_place?value=南宁')}}">南宁</a>
                        </dd>
                      </dl>

                      <div class="clear"></div>

                      <div class="thLeft thPadT5 tab_select">
                        <dl class="clrfix">
                          <dt>A-G</dt>
                          <dd class="clr_after">
                            <a href="{{URL('act_place?value=北京')}}">北京</a>
                            <a href="{{URL('act_place?value=长沙')}}">长沙</a>
                            <a href="{{URL('act_place?value=成都')}}">成都</a>
                            <a href="{{URL('act_place?value=重庆')}}">重庆</a>
                            <a href="{{URL('act_place?value=福州')}}">福州</a>
                            <a href="{{URL('act_place?value=广州')}}">广州</a>
                            <a href="{{URL('act_place?value=贵阳')}}">贵阳</a>
                          </dd>
                        </dl>
                        <dl class="clrfix">
                          <dt>H-L</dt>
                          <dd class="clr_after">
                            <a href="{{URL('act_place?value=哈尔滨')}}">哈尔滨</a>
                            <a href="{{URL('act_place?value=杭州')}}">杭州</a>
                            <a href="{{URL('act_place?value=合肥')}}">合肥</a>
                            <a href="{{URL('act_place?value=济南')}}">济南</a>
                            <a href="{{URL('act_place?value=昆明')}}">昆明</a>
                          </dd>
                        </dl>
                        <dl class="clrfix">
                          <dt>M-T</dt>
                          <dd class="clr_after">
                            <a href="{{URL('act_place?value=南昌')}}">南昌</a>
                            <a href="{{URL('act_place?value=南京')}}">南京</a>
                            <a href="{{URL('act_place?value=南宁')}}">南宁</a>
                            <a href="{{URL('act_place?value=宁波')}}">宁波</a>
                            <a href="{{URL('act_place?value=青岛')}}">青岛</a>
                            <a href="{{URL('act_place?value=三亚')}}">三亚</a>
                            <a href="{{URL('act_place?value=上海')}}">上海</a>
                            <a href="{{URL('act_place?value=沈阳')}}">沈阳</a>
                            <a href="{{URL('act_place?value=深圳')}}">深圳</a>
                            <a href="{{URL('act_place?value=石家庄')}}">石家庄</a>
                            <a href="{{URL('act_place?value=苏州')}}">苏州</a>
                            <a href="{{URL('act_place?value=太原')}}">太原</a>
                            <a href="{{URL('act_place?value=天津')}}">天津</a>
                          </dd>
                        </dl>
                        <dl class="clrfix">
                          <dt>W-Z</dt>
                          <dd class="clr_after">
                            <a href="{{URL('act_place?value=武汉')}}">武汉</a>
                            <a href="{{URL('act_place?value=厦门')}}">厦门</a>
                            <a href="{{URL('act_place?value=西安')}}">西安</a>
                            <a href="{{URL('act_place?value=郑州')}}">郑州</a>
                            <a href="{{URL('act_place?value=中山')}}">中山</a>
                          </dd>
                        </dl>
                      </div>
                    </div>
                </li>
            </ul>
            </div>

            </center>
        </div>
    </div>
</div>
<!-- //根据城市查询 -->
<!-- 通讯底层 -->
<div class="newsletter-bottom">
    <div class="container">
        <div class="newsletter-bottom-grids">
            <div class="col-md-6 newsletter-bottom-grid wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h3>特价房</h3>
                <p>地址:{{$Special->h_address}}</p>
                <p>面积:{{$Special->h_area}}平方米</p>
                <p>可住:{{$Special->number}}人</p>
                <p>租金:{{$Special->pay}}</p>
                <p>{!!$Special->content!!}</p>
                <div class="more">
                    <a href="{{URL('perLook?id')}}={{$Special->h_id}}" class="hvr-curl-bottom-right">阅读更多</a>
                </div>
            </div>
            <div class="col-md-6 newsletter-bottom-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                <img src="houst_img/4.jpg" alt=" " class="img-responsive" />
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="newsletter-bottom-grids">
            <div class="col-md-6 newsletter-bottom-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                <img src="houst_img/5.jpg" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-6 newsletter-bottom-grid  wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h3>特价房</h3>
                <p>地址:{{$Specialoffer[0]->h_address}}</p>
                <p>面积:{{$Specialoffer[0]->h_area}}平方米</p>
                <p>可住:{{$Specialoffer[0]->number}}人</p>
                <p>可住:{{$Specialoffer[0]->pay}}</p>
                <p>{!!$Specialoffer[0]->content!!}</p>
                <div class="more">
                    <a href="{{URL('perLook?id')}}={{$Specialoffer[0]->h_id}}" class="hvr-curl-bottom-right">阅读更多</a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //通讯底层 -->

<!--引用底部公用信息-->
@include('commonality.foot')

<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>