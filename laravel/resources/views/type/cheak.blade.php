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
    <!--多条件-->
    <link rel="stylesheet" type="text/css" href="sel_css/css/list.css"/>
    <link href="css/animate.min.css" rel="stylesheet">
    <!--时间搜索-->
    <link href='http://fonts.useso.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="sel_css/css/main.css"/>
    <script type="text/javascript" src="sel_css/js/jquery.js"></script>
    <script type="text/javascript" src="sel_css/js/hhDrop.js"></script>
    <script type="text/javascript" src="sel_css/js/shaixuan.js"></script>


    <!--时间搜索-->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!-- animation-effect -->

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
        $(function(){
            $('#hhDrop00').hhDrop({});
            $('#hhDrop01').hhDrop({});
        })
    </script>
    <!-- //animation-effect -->
</head>

<body>

<!--引用公用头部信息-->
@include ("commonality.head")<br/>
@include ("commonality.qq")
<!-- banner1 -->
{{--<div class="banner1">--}}
{{--<div class="container">--}}
{{--</div>--}}
{{--</div>--}}


<!-- //banner1 -->
<!-- services -->
<link rel="stylesheet" type="text/css" href="cz/css/common.min.css"/>
<link rel="stylesheet" type="text/css" href="http://www.ziroom.com/static/2015/css/list.min.css?20160323"/>


<div class="t_myarea t_mainbox clearfix mt15 t_zindex0">
    <div class="t_newlistbox" >

        <div class="t_shuaichoose_order">

            <ul class="clearfix" id="order_ul">
                <li  class="grayarr1">
                <li  class="grayarr1">
                    <a href="javascript:void(0)">
                        @if(!empty($is_hot) && $is_hot==1)
                            热销
                        @elseif(!empty($is_best) && $is_best==1)
                            精品
                        @elseif(!empty($is_cheap) && $is_cheap==1)
                            特价
                        @endif
                    </a>
                </li>


                <!--<li class="grayarr">
   <a title="点击按距离从近到远排序" href="javascript:javascript_a('/z/nl/o5-z3-r2-u4.html');">距离<i></i></a>
</li>-->
                <!-- <li style="background:none;margin-left:20px;" class="grayarr">
<input type="checkbox"   style="float:left; margin:12px 8px 0 0;" id="duanz"><label for="duanz">只显示月租房源</label>
</li>-->
            </ul>

            <div style="float:right;margin-top:-20px;margin-right: -10px;">
            </div>
            <!--t_shuaichoose_order_page -->
        </div><!--t_shuaichoose_order -->

        <ul id="houseList">
            <div class="container">
                @if(!empty($list))
                    @foreach($list as $v)
                        <li  class="clearfix">
                            <div class="img">
                                <a target="_blank" href="{{URL("perLook?id=$v->h_id")}}    ">
                                    <img src="houst_img/{{$v->photo}}" onError="this.src='/static/images/slist_1207/munian-loading.jpg'" width="288" height="180" alt="{{$v->h_address}}"/>
                                </a>
                            </div>
                            <div class="txt">
                                <h3><a target="_blank" href="{{URL("perLook?id=$v->h_id")}}" class="t1">{{$v->h_address}}</a></h3>
                                <h4><a target="_blank" href="{{URL("perLook?id=$v->h_id")}}">
                                        {{$v->h_address}}
                                    </a></h4>
                                <div class="detail">
                                    <p><span><span class="icons">U+ </span>    {{$v->t_name}}</span></p>
                                </div>
                                <p class="room_tags clearfix">
                                    <span class="subway">{{$v->h_area}}㎡</span>
                                    <span class="balcony">可住人数 : {{$v->number}}人</span>
                                    <span class="style">押金：{{$v->deposit}}元</span>
                                </p>
                            </div><!--/txt-->
                            <div class="priceDetail">
                                <p class="price">￥                       {{$v->pay}}                     <span class="gray-6">(每月)</span></p>
                                <p class="gray-6 checkBox vam">
                                    <input type="checkbox" class="" name="" value="" id="c_84641" onclick="addZiRoomCompare('84641','2290','海淀清河8号线永泰庄永泰园3居室-南卧');">

                                </p>
                                <a href="javascript:void(0)"  style="line-height: 20px; "  class="toCollect" name="{{$v->h_id}}"><font color="red">❤ </font> 加入收藏</a>
                                <p class="more"><a href="{{URL("perLook?id")}}={{$v->h_id}}" target="_blank" style="line-height: 20px;">查看更多</a></p>

                            </div><!--/priceDetail-->
                        </li>
                    @endforeach
                @else
                    <span style="font-size: 20px;">sorry,没有找到符合条件的房源</span>
                @endif
            </div>
        </ul>

        <!--t_newlistbox -->
    </div><!--t_newlistbox -->

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
<script type="text/javascript">
    //收藏
    $(".toCollect").click(function(){
        var url="{{'appointmentAdd'}}";
        var id=$(this).attr("name")


        var data={id:id};
        $.get(url,data,function(msg){
            if(msg==0){
                alert("您已经收藏过该房源了！");
            }else if(msg==1){
                alert("您收藏了该房源！");
            }else{
                alert("抱歉，您收藏失败！");
            }
        });
    })


</script>