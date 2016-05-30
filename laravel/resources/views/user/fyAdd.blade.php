<!DOCTYPE HTML>
<html>
<head>
<title>Short Codes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--图片上传-->
    <link rel="stylesheet" type="text/css" href="jiaoben/css/jquery.filer.css">
    <link rel="stylesheet" type="text/css" href="jiaoben/css/jquery.filer-dragdropbox-theme.css">
    <link href='http://fonts.useso.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>




<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/laydate/laydate.js"></script>
<!-- //js -->

    <!--图片上传-->

    <!--<script src="jiaoben/js/bootstrap.min.js" type="text/javascript"></script>-->
    <script src="jiaoben/js/jquery.filer.min.js" type="text/javascript"></script>
    <script src="jiaoben/js/prettify.js" type="text/javascript"></script>
    <script src="jiaoben/js/scripts.js" type="text/javascript"></script>
    <script src="jiaoben/js/custom.js" type="text/javascript"></script>


<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<!--<link href='http://fonts.useso.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
-->
</head>
<style>
#map{
    position: absolute;
    z-index: 3;
    width: 1530px;
    top:500px;
}
    .container{
        z-index: 1;
        //opacity:0.2;
    }
    #shadow{
        z-index: 2;
        left:0;
        top:0;
        width:100%;
        height:2500px;
        background:#ccc;
        position:absolute;
        opacity:0.8;
        display:none;
    }
</style>
<body>

<!--引用公用头部信息-->
@include ("commonality.head")

<!-- banner1 -->
	<div class="banner1">
		<div class="container">
		</div>
	</div>
<!-- //banner1 -->





<!--typography-page -->
	<div class="typo">

		<div class="container">
            <form action="{{URL('addhoust')}}" method="post" enctype="multipart/form-data">
			<h3 class="bars wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">房源发布</h3>
			<div class="input-group wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<span class="input-group-addon" id="basic-addon1">address</span>
                @if(!empty($list->h_address))
				<input type="text" class="form-control" id="h_address" placeholder="房源地址" aria-describedby="basic-addon1" name="h_address" value='{{$list->h_address}}'>
                @else
                <input type="hidden" class="form-control" id="h_address" placeholder="房源地址" aria-describedby="basic-addon1" name="h_address" value=''>
                @endif
                <input type="button" id="tj_address" value="+添加地址">
			</div>

            <div id="shadow">
            </div>
            <!--地图地理位置-->
            <div id="map" style="display:none;">
                @include("commonality.map")
            </div>

            <div class="input-group wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <span class="input-group-addon" id="basic-addon1">area</span>
                @if(!empty($list->h_area))
                    <input type="text" placeholder="房屋面积" name="h_area" value="{{$list->h_area}}"/>
                @else
                    <input type="text" placeholder="房屋面积" name="h_area" value=""/>
                @endif

                <span class="input-group-addon" id="basic-addon1">number</span>
                @if(!empty($list->number))
                    <input type="text" placeholder="可住人数" name="number" value="{{$list->number}}">
                @else
                    <input type="text" placeholder="可住人数" name="number" value="">
                @endif
            </div>

            <!--接待时间、押金-->
			<div class="input-group wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <span class="input-group-addon" id="basic-addon1">Receive_Time</span>
                @if(!empty($list->receive_time))
                    <input placeholder="接待时间" class="laydate-icon" onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" name="Receive_Time" value="{{$list->receive_time}}">
                @else
                    <input placeholder="接待时间" class="laydate-icon" onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" name="Receive_Time" value="">
                @endif
                <span class="input-group-addon" id="basic-addon1">￥</span>
                @if(!empty($list->deposit))
                    <input type="text" placeholder="压金" name="deposit"  value="{{$list->deposit}}">
                @else
                    <input type="text" placeholder="压金" name="deposit" >
                @endif
			</div>

                <!--入住时间、、退房时间-->
                <div class="input-group wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <span class="input-group-addon" id="basic-addon1">in_Time</span>
                    @if(!empty($list->in_time))
                        <input placeholder="可住时间" class="inline laydate-icon" id="start" name="in_time"style="width:200px; margin-right:10px;" value="{{$list->in_time}}">
                    @else
                        <input placeholder="可住时间" class="inline laydate-icon" id="start" name="in_time"style="width:200px; margin-right:10px;" >
                    @endif
                    <span class="input-group-addon" id="basic-addon1">Out_time</span>
                    @if(!empty($list->out_time))
                    <input placeholder="可离开时间" class="inline laydate-icon" id="end" style="width:200px;" name="out_time" value="{{$list->out_time}}">
                    @else
                        <input placeholder="可离开时间" class="inline laydate-icon" id="end" style="width:200px;" name="out_time" >
                    @endif
                </div>

            <!--租金"-->
			<div class="input-group wow fadeInUp" data-wow-duration="1000ms"  data-wow-delay="300ms">
				<span class="input-group-addon">$</span>
                @if(!empty($list->pay))
					<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="租金" name="pay" value="{{$list->pay}}">
                @else
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="租金" name="pay" value="">
                @endif
				<span class="input-group-addon">.00</span>
			</div>


            <!--联系人-->
            <div class="input-group wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <span class="input-group-addon" id="sizing-addon2">Linkman</span>
                @if(!empty($list->linkman))
                    <input type="text" class="form-control" placeholder="联系人" aria-describedby="sizing-addon2" name="linkman" value="{{$list->linkman}}">
                @else
                    <input type="text" class="form-control" placeholder="联系人" aria-describedby="sizing-addon2" name="linkman" value="">
                @endif
            </div>

            <!--联系电话-->
            <div class="input-group input-group-sm wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <span class="input-group-addon" id="sizing-addon3">Tel</span>
                @if(!empty($list->phone))
                    <input type="text" class="form-control" placeholder="联系电话" aria-describedby="sizing-addon3" name="phone" value="{{$list->phone}}">
                @else
                    <input type="text" class="form-control" placeholder="联系电话" aria-describedby="sizing-addon3" name="phone" value="">
                @endif
            </div>


			<div class="row wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">

                <!--热销、精品、特价房-->
				<div class="col-lg-6 in-gp-tb">
					<div class="input-group">
						<!--<span class="input-group-addon">
							热销房：<input type="checkbox" aria-label="..." value="1"  name="is_hot">
                        </span>-->
                        <span class="input-group-addon">
                            精品房：<input type="checkbox" aria-label="..." value="1" name="is_best" @if(!empty($list->is_best)) checked @endif >
                        </span>
                        <span class="input-group-addon">
                             特价房：<input type="checkbox" aria-label="..." value="1" name="is_cheap" @if(!empty($list->is_cheap)) checked @endif>
                        </span>
					</div>
				</div>
			</div>

            <!--房屋的类型-->
            <div class="input-group wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <span class="input-group-addon" id="basic-addon1">Type</span>

                @if(empty($list))
                    <select name="t_id" id="" aria-describedby="sizing-addon2">
                        @foreach($type as $k=>$v)
                            <option value="{{$v->t_id}}">{{$v->t_name}}</option>
                        @endforeach
                    </select>
                 @else
                    <select name="t_id" id="" aria-describedby="sizing-addon2">
                        @foreach($type as $k=>$v)
                            <option value="{{$v->t_id}}" @if($list->t_id==$v->t_id)selected @endif>{{$v->t_name}}</option>
                        @endforeach
                    </select>
                @endif
            </div>

            <!-- 房屋描述-->
            <div class="input-group input-group-lg wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <span class="input-group-addon" id="sizing-addon1">content</span>
                <textarea   aria-describedby="sizing-addon1" cols="130" placeholder="这里填写您对房屋的描述" rows="10" name="content">
                    @if(!empty($list->content))
                        {{$list->content}}
                    @endif
                </textarea>
            </div>

            <!--图片上传-->
            <input type="file" name="files[]" multiple="multiple" id="demo-fileInput-5"/>

                <!--视频上传-->



            @if(!empty($list))
                <input type="submit" value="更新房源信息"/>
             @else
                <input type="submit" value="发布房源信息"/>
             @endif
            </form>



        </div>
    </div>
<!-- //typography-page -->

<!--引用底部公用信息-->
@include('commonality.foot')


<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>

<!-- //for bootstrap working -->
</body>

</html>
<script>
    $("#tj_address").click(function(){
        $("#map").attr("style","display:black");
        document.getElementById('shadow').style.display='block';
    })




    //日历插件
    !function(){
        laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
        laydate({elem: '#demo'});//绑定元素
    }();
    //日期范围限制
    var start = {
        elem: '#start',
        format: 'YYYY-MM-DD',
        min: laydate.now(), //设定最小日期为当前日期
        max: '2099-06-16', //最大日期
        istime: true,
        istoday: false,
        choose: function(datas){
            end.min = datas; //开始日选好后，重置结束日的最小日期
            end.start = datas //将结束日的初始值设定为开始日
        }
    };
    var end = {
        elem: '#end',
        format: 'YYYY-MM-DD',
        min: laydate.now(),
        max: '2099-06-16',
        istime: true,
        istoday: false,
        choose: function(datas){
            start.max = datas; //结束日选好后，充值开始日的最大日期
        }
    };
    laydate(start);
    laydate(end);
    //自定义日期格式
    laydate({
        elem: '#test1',
        format: 'YYYY年MM月DD日',
        festival: true, //显示节日
        choose: function(datas){ //选择日期完毕的回调
            alert('得到：'+datas);
        }
    });
    //日期范围限定在昨天到明天
    laydate({
        elem: '#hello3',
        min: laydate.now(-1), //-1代表昨天，-2代表前天，以此类推
        max: laydate.now(+1) //+1代表明天，+2代表后天，以此类推
    });


</script>