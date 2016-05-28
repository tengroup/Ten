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
<?php echo $__env->make("commonality.head", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

<!-- banner1 -->
	<div class="banner1">
		<div class="container">
		</div>
	</div>
<!-- //banner1 -->
<!--typography-page -->
	<div class="typo">
		<div class="container">
			<div class="grid_3 grid_5 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<h3>我的信息</h3>
				<div class="col-md-6">
					<p>我的个人详细信息：<a href="<?php echo e(URL('perEdit')); ?>" style="float:right">编辑</a></p>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>账号：</th>
								<th><span class="badge badge-success"><?php echo e($user->u_name); ?></span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>昵称：</td>
								<td><span class="badge"><?php echo e($user->pet_name); ?></span></td>
							</tr>
							<tr>
								<td>真实姓名：</td>
								<td><span class="badge badge-primary"><?php echo e($user->real_name); ?></span></td>
							</tr>
							<tr>
								<td>邮箱：</td>
								<td><span class="badge badge-success"><?php echo e($user->u_email); ?></span></td>
							</tr>
							<tr>
								<td>手机号：</td>
								<td><span class="badge badge-info"><?php echo e($user->u_tel); ?></span></td>
							</tr>
							<tr>
								<td>身份证号：</td>
								<td><span class="badge badge-warning"><?php echo e($user->id_card); ?></span></td>
							</tr>
							<tr>
								<td>上次登陆时间：</td>
								<td><span class="badge badge-danger"><?php echo e($user->last_login); ?></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			   <div class="clearfix"> </div>
			</div>
			
		
			<h2 class="typoh2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">我的预约</h2>
			
			<p class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">预约列表信息</p>
			<div class="bs-docs-example wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<table class="table table-bordered" id="replace">
					<thead>
						<tr>
							<th>房屋地址</th>
							<th>面积,人数,价格</th>
							<th>入住时间</th>
							<th>退房时间</th>
							<th>房东审核</th>
							<th>联系人</th>
						</tr>
					</thead>
					<?php foreach($pre as $list): ?>
					<tbody>
						<tr>
							<td id="load"><a href="<?php echo e(URL('perLook?id')); ?>=<?php echo e($list->h_id); ?>"><?php echo e($list->h_address); ?></a></td>
							<td><?php echo e($list->h_area); ?>方/.\<?php echo e($list->number); ?>人/.\<?php echo e($list->pay); ?>￥</td>
							<td><?php echo e($list->in_time); ?></td>
							<td><?php echo e($list->out_time); ?></td>
							<td>
								<?php if($list->statr==0): ?>
									未审核
								<?php elseif($list->statr==1): ?>
									通过
								<?php else: ?>
									未通过
								<?php endif; ?>
							</td>
							<td><?php echo e($list->linkman); ?>:<?php echo e($list->u_tel); ?></td>
						</tr>
					</tbody>
					<?php endforeach; ?>
				</table>
				<center><?php echo $pre->render(); ?></center>
			</div>
		</div>
		<script>
		window.onload=function(){
			var load=$("#load").val();
			if(load!=""){
				if(confirm("列表空空！去找房？")){
					location.href="<?php echo e('index'); ?>";
				}else{
					$("#replace").html("<center><h2>空空无一！</h2></center>");
				}
			}
		}
		</script>
	</div>
<!-- //typography-page -->

<!--引用底部公用信息-->
<?php echo $__env->make('commonality.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;v



<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
