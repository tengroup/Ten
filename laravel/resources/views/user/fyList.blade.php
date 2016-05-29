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
            @foreach($list as $k=>$v)
                <div class="col-md-4 service-grid">
                    <div class="service-grd wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <img src="houst_img/{{$v->photo}}" alt=" " class="img-responsive" />
                        <div class="service-grd-pos">
                            <h4>Click on View Details</h4>
                            <div class="more m2">
                                <a href="{{URL("fyAdd?h_id")}}={{$v->h_id}}" class="hvr-curl-bottom-right">修改</a>
                                <a href="{{URL("perLook?id=$v->h_id")}}" class="hvr-curl-bottom-right">详情</a>
                            </div>
                            @if($v->status==1)
                               审核 通过
                             @elseif($v->status==2)
                                审核 未通过
                             @else
                                 未审核
                            @endif
                        </div>
                        <div class="service-grd-pos2">
                            <p style="font-size: 18px;">${{$v->pay}}/-</p>
                        </div>

                    </div>
                </div>
           @endforeach
                <div class="clearfix"> </div>
        </div>
        <?php echo $list->render(); ?>
    </div>
</div>
<!-- //services -->

<!--引用底部公用信息-->
@include('commonality.foot');



<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>