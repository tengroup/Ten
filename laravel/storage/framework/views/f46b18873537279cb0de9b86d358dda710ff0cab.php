<!DOCTYPE HTML>
<html>
<head>
<title>Events</title>
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
<?php echo $__env->make("commonality.head", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- banner1 -->
	<div class="banner1">
		<div class="container">
		</div>
	</div>
<!-- //banner1 -->
<!-- events -->
	<div class="events">
		<div class="container">
			<h2 class="wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">今日更新</h2>
			<div class="event-grids">
            <?php foreach($arr as $v): ?>
                <div class="col-md-4 event-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <p class="dte"><?php echo e($v->h_time); ?></p>
                    <a href="<?php echo e(URL('perLook?id')); ?>=<?php echo e($v->h_id); ?>" class="hvr-curl-bottom-right"><img src="houst_img/<?php echo e($v->photo); ?>" alt="" class="img-responsive" style="height: 180px; width: 370px;"/></a>

                    <p class="quod"></p>
                    <div class="more">
                        <a href="<?php echo e(URL('perLook?id')); ?>=<?php echo e($v->h_id); ?>" class="hvr-curl-bottom-right">更多</a>
                    </div>
                </div>
             <?php endforeach; ?>
				<div class="clearfix"> </div>
			</div><?php echo $arr->render(); ?><br><br>


            <h2 class="wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">三日更新</h2>
            <div class="event-grids">
                <?php foreach($arr1 as $v1): ?>
                    <div class="col-md-4 event-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <p class="dte"><?php echo e($v1->h_time); ?></p>
                        <a href="<?php echo e(URL('perLook?id')); ?>=<?php echo e($v1->h_id); ?>" class="hvr-curl-bottom-right"><img src="houst_img/<?php echo e($v1->photo); ?>" alt="" class="img-responsive" style="height: 180px; width: 370px;"/></a>

                        <p class="quod"></p>
                        <div class="more">
                            <a href="<?php echo e(URL('perLook?id')); ?>=<?php echo e($v1->h_id); ?>" class="hvr-curl-bottom-right">更多</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="clearfix"> </div>
            </div><?php echo $arr1->render(); ?><br><br>


            <h2 class="wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">本周更新</h2>
            <div class="event-grids">
                <?php foreach($arr2 as $v2): ?>
                    <div class="col-md-4 event-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <p class="dte"><?php echo e($v2->h_time); ?></p>
                        <a href="<?php echo e(URL('perLook?id')); ?>=<?php echo e($v2->h_id); ?>" class="hvr-curl-bottom-right"><img src="houst_img/<?php echo e($v2->photo); ?>" alt="" class="img-responsive" style="height: 180px; width: 370px;"/></a>

                        <p class="quod"></p>
                        <div class="more">
                            <a href="<?php echo e(URL('perLook?id')); ?>=<?php echo e($v2->h_id); ?>" class="hvr-curl-bottom-right">更多</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="clearfix"> </div>
            </div><?php echo $arr2->render(); ?>




		</div>
	</div>
<!-- //events -->

<!--引用底部公用信息-->
<?php echo $__env->make('commonality.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
<script>
    function fun(){

    }
</script>