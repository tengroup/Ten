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
    <link href='http://fonts.useso.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!-- animation-effect -->
    <link href="css/animate.min.css" rel="stylesheet">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->

    <link rel="stylesheet" type="text/css" href="cz/css/common.min.css"/>
    <link rel="stylesheet" type="text/css" href="http://www.ziroom.com/static/2015/css/list.min.css?20160323"/>
    </head>

<body>

<!--引用公用头部信息-->
@include ("commonality.head");


<!-- banner1 -->
<div class="banner1">
    <div class="container">
    </div>
</div>
<!-- //banner1 -->
<!-- services -->
<div class="services">
    <div class="container">
        <h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">短租房屋信息</h1>
        <div class="service-grids">


            <div class="area">
                <div class="title">
                    <span class="line"></span>
                    <h2 class="cn"><span class="s"></span><span class="t" id="recommendation">短租房屋信息</span><span class="y2">●</span><span class="y">●</span></h2>
                    
                </div>

                <!--推荐房源-->
                <ul class="imgInfo_list clearfix" id="imgInfo_list_1">
                    @foreach($list as $k=>$v)
                        <li class="no_note " style="margin-left: 80px;">
                            <div class="imgInfo_show">
                                <a href="{{URL("perLook?id=$v->h_id")}}" class="hvr-curl-bottom-right">
                                    <img src="houst_img/{{$v->photo}}" alt=" " class="img-responsive" />
                                 </a>
                            </div>
                            <div class="clearfix info_sction">
                                <span class="text_r">￥<i><span style="color: red;font-size: 25px">{{$v->pay}}</span></i>/月 </span>
                            </div>
                            <div class="clearfix gray-6">
                                <!--<span class="text_l">[丰台马家堡] 10号线角门西</span>-->
                                <span class="text_l">
                                    @if($v->status==1)
                                        审核 通过
                                    @elseif($v->status==2)
                                        审核 未通过
                                    @else
                                        未审核
                                    @endif
                                 </span>
                            </div>
                            <div class="more m2">
                                <a href="{{URL("fyAdd?h_id")}}={{$v->h_id}}" class="hvr-curl-bottom-right">修改</a>
                                <a href="{{URL("perLook?id=$v->h_id")}}" class="hvr-curl-bottom-right">详情</a>
                            </div>

                        </li>
                    @endforeach
                </ul>

            </div>








        </div>
        <?php echo $list->render(); ?>
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