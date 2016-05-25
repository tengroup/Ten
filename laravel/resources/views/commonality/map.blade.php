
    <title>根据地址查询经纬度</title>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>

<div style="width:730px;margin:auto;">
    要查询的地址：<input id="text_" type="text" value="" style="margin-right:100px;"/>
                <input id="result_x" type="hidden"  name="x_postion"/>
                <input id="result_y" type="hidden"  name="y_postion"/>
    <input type="button" value="添加" onclick="searchByStationName();"/>
    <input type="button" value="确定" onclick="queding();" style="display: none" id="sub"/>
    <div id="container"
         style="position: absolute;
                margin-top:30px;
                width: 730px;
                height: 590px;
                top: 50px;
                border: 1px solid gray;
                overflow:hidden;">
    </div>
</div>

<script type="text/javascript">
    var map = new BMap.Map("container");
    map.centerAndZoom("北京", 15);
    map.enableScrollWheelZoom();    //启用滚轮放大缩小，默认禁用
    map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用

    map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
    map.addControl(new BMap.OverviewMapControl()); //添加默认缩略地图控件
    map.addControl(new BMap.OverviewMapControl({ isOpen: true, anchor: BMAP_ANCHOR_BOTTOM_RIGHT }));   //右下角，打开

    var localSearch = new BMap.LocalSearch(map);
    localSearch.enableAutoViewport(); //允许自动调节窗体大小
    function searchByStationName() {
        map.clearOverlays();//清空原来的标注
        var keyword = document.getElementById("text_").value;
        localSearch.setSearchCompleteCallback(function (searchResult) {
            var poi = searchResult.getPoi(0);

            map.centerAndZoom(poi.point, 13);
            var marker = new BMap.Marker(new BMap.Point(poi.point.lng, poi.point.lat));  // 创建标注，为要查询的地方对应的经纬度
            map.addOverlay(marker);
            var content = document.getElementById("text_").value + "<br/><br/>经度：" + poi.point.lng + "<br/>纬度：" + poi.point.lat;
            document.getElementById("result_x").value = poi.point.lng ;
            document.getElementById("result_y").value =  poi.point.lat;
            document.getElementById('h_address').value=keyword;

            var infoWindow = new BMap.InfoWindow("<p style='font-size:14px;'>" + content + "</p>");
            marker.addEventListener("click", function () { this.openInfoWindow(infoWindow); });
            // marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
        });
        localSearch.search(keyword);
        document.getElementById('sub').style.display='block';
    }
    function queding(){
        document.getElementById('h_address').type='text';
        document.getElementById('map').style.display='none';
        document.getElementById('shadow').style.display='none';
    }
</script>
