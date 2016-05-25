<div>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7GfsoRpcVxZTy68akvNMfSuE8XXsNsee"></script>
	<div id="allmap" style="width:530px;height:330px;"></div>
	<script type="text/javascript">
		// 百度地图API功能
		var map = new BMap.Map("allmap");
		var point = new BMap.Point(<?php echo e($list->x_postion); ?>, <?php echo e($list->y_postion); ?>);
		map.centerAndZoom(point, 15);
		var marker = new BMap.Marker(point);  // 创建标注
		map.addOverlay(marker);               // 将标注添加到地图中
		marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
	</script>
</div>