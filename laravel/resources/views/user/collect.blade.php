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
	<link href='http://fonts.useso.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
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
<!--typography-page -->
	<div class="typo">
		<div class="container">

			<h2 class="typoh2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">我的收藏</h2>
			
			<p class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">收藏列表信息</p>
			<div class="bs-docs-example wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<table class="table table-bordered" id="replace">
					<thead>
						<tr>
							<th>房屋地址</th>
							<th>面积,人数,价格</th>
							<th>入住时间</th>
							<th>退房时间</th>
							<th>房屋描述</th>
							<th>联系人</th>
						</tr>
					</thead>
					@foreach($app as $list)
					<tbody>
						<tr>
							<td id="load"><a href="{{URL('perLook?id')}}={{$list->h_id}}">{{$list->h_address}}</a></td>
							<td>{{$list->h_area}}方/.\{{$list->number}}人/.\{{$list->pay}}￥</td>
							<td>{{$list->in_time}}</td>
							<td>{{$list->out_time}}</td>
							<td>{{$list->content}}</td>
							<td>{{$list->linkman}}:{{$list->u_tel}}</td>
						</tr>
					</tbody>
					@endforeach
				</table>
				<center>{!! $app->render() !!}</center>
			</div>
		</div>
		<script>
		window.onload=function(){
			var load=$("#load").val();
			if(load!=""){
				if(confirm("收藏空空！去找房？")){
					location.href="{{'index'}}";
				}else{
					$("#replace").html("<center><h2>空空无一！</h2></center>");
				}
			}
		}
		</script>
	</div>
<!-- //typography-page -->

<!--引用底部公用信息-->
@include('commonality.foot');v



<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
