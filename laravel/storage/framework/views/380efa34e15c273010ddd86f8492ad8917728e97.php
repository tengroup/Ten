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
<?php echo $__env->make("commonality.head", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?><br/>
<?php echo $__env->make("commonality.qq", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- banner1 -->
<?php /*<div class="banner1">*/ ?>
<?php /*<div class="container">*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>

<?php /*<span>房屋位置<input type="text" class="ju-adress"  />*/ ?>
<div class="w1200">
    <link rel="stylesheet" type="text/css" href="sel_css/css/112dfe40cf7844c3afbaa63ab46f4f8e.css" />
    <div class="list-screen">
        <div class="screen-top" style="position:relative;">
            <div class="lineSearch">
                <ul>
                    <li class="thRelative" id="hhDrop00">
                        <div class="boxSearch">
          <span class="key_word" style="display:block;border: 1px solid #b8b8b8;margin-top: 28px;margin-left: 20px;">
            <b class="size_14"></b>
          点击可切换城市
          </span>
                            <em class="ico thLeft ico_shBlue"></em>
                            <a class="thRight ico btn_search" href="javascript:void(0)"></a>
                        </div>
                        <div class="search_form_suggest" style="display:none;">
                            <h3><a class="ico btn_close thRight" item="close">关闭</a>热门城市</h3>
                            <dl class="search_hotList">
                                <dd class="clr_after">
                                    <a href="<?php echo e(URL('act_place')); ?>">全部</a>
                                    <a href="<?php echo e(URL('act_place?value=北京')); ?>">北京</a>
                                    <a href="<?php echo e(URL('act_place?value=上海')); ?>">上海</a>
                                    <a href="<?php echo e(URL('act_place?value=广州')); ?>">广州</a>
                                    <a href="<?php echo e(URL('act_place?value=成都')); ?>">成都</a>
                                    <a href="<?php echo e(URL('act_place?value=杭州')); ?>">杭州</a>
                                    <a href="<?php echo e(URL('act_place?value=南京')); ?>">南京</a>
                                    <a href="<?php echo e(URL('act_place?value=深圳')); ?>">深圳</a>
                                    <a href="<?php echo e(URL('act_place?value=青岛')); ?>">青岛</a>
                                    <a href="<?php echo e(URL('act_place?value=武汉')); ?>">武汉</a>
                                    <a href="<?php echo e(URL('act_place?value=郑州')); ?>">郑州</a>
                                    <a href="<?php echo e(URL('act_place?value=重庆')); ?>">重庆</a>
                                    <a href="<?php echo e(URL('act_place?value=西安')); ?>">西安</a>
                                    <a href="<?php echo e(URL('act_place?value=苏州')); ?>">苏州</a>
                                </dd>
                            </dl>

                            <div class="clear"></div>
                            <div class="select_city_box" item="dep-search">
                                <span>输入热门城市</span>
                                <input type="text" class="input_city" item="key">
                                <button class="btn" type="button" item="commit"></button>
                                <div class="search_city_result" item="result" style="display:;">
                                    <a href="<?php echo e(URL('act_place?value=广州')); ?>">广州</a> 匹配城市
                                </div>
                            </div>

                            <div class="thLeft thPadT5 tab_select">
                                <dl class="clrfix">
                                    <dt>A-G</dt>
                                    <dd class="clr_after">
                                        <a href="<?php echo e(URL('act_place?value=北京')); ?>">北京</a>
                                        <a href="<?php echo e(URL('act_place?value=长沙')); ?>">长沙</a>
                                        <a href="<?php echo e(URL('act_place?value=成都')); ?>">成都</a>
                                        <a href="<?php echo e(URL('act_place?value=重庆')); ?>">重庆</a>
                                        <a href="<?php echo e(URL('act_place?value=广州')); ?>">广州</a>
                                    </dd>
                                </dl>
                                <dl class="clrfix">
                                    <dt>H-L</dt>
                                    <dd class="clr_after">
                                        <a href="<?php echo e(URL('act_place?value=杭州')); ?>">杭州</a>
                                        <a href="<?php echo e(URL('act_place?value=济南')); ?>">济南</a>
                                        <a href="<?php echo e(URL('act_place?value=昆明')); ?>">昆明</a>
                                    </dd>
                                </dl>
                                <dl class="clrfix">
                                    <dt>M-T</dt>
                                    <dd class="clr_after">
                                        <a href="<?php echo e(URL('act_place?value=南京')); ?>">南京</a>
                                        <a href="<?php echo e(URL('act_place?value=宁波')); ?>">宁波</a>
                                        <a href="<?php echo e(URL('act_place?value=青岛')); ?>">青岛</a>
                                        <a href="<?php echo e(URL('act_place?value=三亚')); ?>">三亚</a>
                                        <a href="<?php echo e(URL('act_place?value=上海')); ?>">上海</a>
                                        <a href="<?php echo e(URL('act_place?value=深圳')); ?>">深圳</a>
                                        <a href="<?php echo e(URL('act_place?value=苏州')); ?>">苏州</a>
                                        <a href="<?php echo e(URL('act_place?value=太原')); ?>">太原</a>
                                    </dd>
                                </dl>
                                <dl class="clrfix">
                                    <dt>W-Z</dt>
                                    <dd class="clr_after">
                                        <a href="<?php echo e(URL('act_place?value=武汉')); ?>">武汉</a>
                                        <a href="<?php echo e(URL('act_place?value=厦门')); ?>">厦门</a>
                                        <a href="<?php echo e(URL('act_place?value=西安')); ?>">西安</a>
                                        <a href="<?php echo e(URL('act_place?value=郑州')); ?>">郑州</a>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <script type="text/javascript" src="sel_css/js/dateRange.js"></script>
            <link rel="stylesheet" type="text/css" href="sel_css/css/dateRange.css"/>
            <form action="<?php echo e(URL("check_time")); ?>" method="post">
                <div style="width:500px;margin:0 auto;">
                    <div class="ta_date" id="div_date1" style="margin-left: -100px;">
                        <input type="text" class="date_title" id="date1" name="dates" placeholder="可选择时间段"  style="height:26px;" size="30px"/>
                    </div>
                    <script type="text/javascript">
                        var d = new Date();
                        var str = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
                        //			var STATS_START_TIME = '4329148800';
                        var dateRange1 = new pickerDateRange('date1', {
                            aRecent90Days : 'aRecent90Days', //最近90天
//				isTodayValid : true,
                            needCompare : false,
                            defaultText : ' 离开 ',
                            autoSubmit : false,
                            inputTrigger : 'input_trigger1',
                            theme : 'ta'
                        });
                    </script>
                    <div>请输入关键字:<input type="text" class="ju-name" style="height:26px;" size="25px" id="check_name" name="gjz"/></div></div>
                <span style="margin-top:-25px"><div class="clearfix"></div></span><input id="submit-btn" value="搜索"  type="submit"style="margin-top: 50px;"/>
            </form>
            <div style="padding:10px 30px 10px 10px;"><div class="screen-address">
                    <div class="list-tab">
                    </div>
                </div>
            </div>
        </div>
        <div class="screen-term">
            <div class="selectNumberScreen">
                <div id="selectList" class="screenBox screenBackground">
                    <form action="<?php echo e(URL('all_sel')); ?>" method="post">
                        <dl class="listIndex" attr="价格范围">
                            <dt>房屋价格</dt>
                            <dd>
                                <label><a href="javascript:;"  attrval="不限">不限</a></label>
                                <label>
                                    <input name="radio2" type="radio" value="1-1000"  style="margin-top: 10px;"/>
                                    <a href="javascript:;" attrval="800以下">1000元以下</a></label>
                                <label>
                                    <input name="radio2" type="radio" value="1000-1500" style="margin-top: 10px;"/>
                                    <a href="javascript:;"  attrval="1000-1500">1000-1500元 </a></label>
                                <label>
                                    <input name="radio2" type="radio" value="1500-2500" style="margin-top: 10px;" />
                                    <a href="javascript:;"  attrval="1500-2500">1500-2500元</a></label>
                                <label>
                                    <input name="radio2" type="radio" value="2000-5000" style="margin-top: 10px;"/>
                                    <a href="javascript:;"  attrval="2000-5000">2000-5000元</a></label>
                                <div class="custom"><span>自定义</span>&nbsp;
                                    <input name="s_price" type="text" id="custext1" />
                                    &nbsp;-&nbsp;
                                    <input name="b_price" type="text" id="custext2"/>
                                    <input  type="button" id="cusbtn" onclick="check_price()"/>
                                </div>
                            </dd>
                        </dl>
                        <script>
                            function check_price(){
                                var jia1=$('#custext1').val();
                                var jia2=$('#custext2').val();
                                if(jia1<800){
                                    alert('最低价格不能低于800');
                                }else if(jia2 >= 10000){
                                    alert('您输入的价位过高');
                                } else if(parseInt(jia1)>=parseInt(jia2)){
                                  //  alert(parseInt(jia1)>=parseInt(jia2));
                                    alert('前者的价格不能高于后者');
                                }

                            }
                        </script>
                        <dl class=" listIndex" attr="terminal_os_s">
                            <dt>居住人数</dt>
                            <dd>
                                <label><a href="javascript:;"  attrval="不限">不限</a> </label>
                                <label>
                                    <input name="num" type="radio" value="1" autocomplete="off" style="margin-top: 10px;"/>
                                    <a href="javascript:;"  attrval="1"> 1人</a> </label>
                                <label>
                                    <input name="num" type="radio" value="2" autocomplete="off" style="margin-top: 10px;"/>
                                    <a href="javascript:;"  attrval="2">2人</a></label>
                                <label>
                                    <input name="num" type="radio" value="3" autocomplete="off" style="margin-top: 10px;"/>
                                    <a href="javascript:;"  attrval="3">3人</a></label>
                                <label>
                                    <input name="num" type="radio" value="4" autocomplete="off" style="margin-top: 10px;"/>
                                    <a href="javascript:;"  attrval="4">4人</a></label>
                                <label>
                                    <input name="num" type="radio" value="5" autocomplete="off" style="margin-top: 10px;"/>
                                    <a href="javascript:;"  attrval="5">5人</a></label>
                                <label>
                                    <input name="num" type="radio" value="6" autocomplete="off" style="margin-top: 10px;"/>
                                    <a href="javascript:;"  attrval="6">6人</a></label>
                            </dd>
                        </dl>
                        <dl class="listIndex" attr="terminal_brand_s">
                            <dt>主题风格</dt>
                            <dd data-more=true>
                                <label><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>
                            <?php foreach($type as $l): ?>
                                    <label>
                                        <input name="h_type[]" type="checkbox" value="<?php echo e($l->t_name); ?>" autocomplete="off" style="margin-top: 10px;"/>
                                        <a href="javascript:;"  attrval="<?php echo e($l->t_name); ?>"><?php echo e($l->t_name); ?></a>
                                    </label>
                            <?php endforeach; ?>
                            </dd>
                        </dl>

                </div>
            </div>
        </div>

    </div>

    <div class="hasBeenSelected clearfix"><span id="time-num" style="font-size: 15px;">共计<font><?php echo $num?></font>家房屋</span>
        <div style="float:right;margin-right: 200px;" class="eliminateCriteria">【清空】 </div>
        <dl>
            <dt>已选条件：</dt>
            <dd style="DISPLAY: none" class=clearDd>
                <div class=clearList></div>
        </dl>
    </div>
    <input type="submit" style="padding-left: 920px" id="eliminateCriteria"/>
    <script type="text/javascript" src="sel_css/js/shaixuan.js"></script>
</div>
</div></form>
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
                    <a href="javascript:void(0)">u+展示</a>
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
                <?php if(!empty($data)): ?>
                    <?php foreach($data as $v): ?>
                        <li  class="clearfix">
                            <div class="img">
                                <a target="_blank" href="<?php echo e(URL("perLook?id=$v->h_id")); ?>    ">
                                    <img src="houst_img/<?php echo e($v->photo); ?>" onError="this.src='/static/images/slist_1207/munian-loading.jpg'" width="288" height="180" alt="<?php echo e($v->h_address); ?>"/>
                                </a>
                            </div>
                            <div class="txt">
                                <h3><a target="_blank" href="<?php echo e(URL("perLook?id=$v->h_id")); ?>" class="t1"><?php echo e($v->h_address); ?></a></h3>
                                <h4><a target="_blank" href="<?php echo e(URL("perLook?id=$v->h_id")); ?>">
                                        <?php echo e($v->h_address); ?>

                                    </a></h4>
                                <div class="detail">
                                    <p><span><span class="icons">U+ </span>    <?php echo e($v->t_name); ?>  </span></p>
                                </div>
                                <p class="room_tags clearfix">
                                    <span class="subway"><?php echo e($v->h_area); ?>㎡</span>
                                    <span class="balcony">可住人数 : <?php echo e($v->number); ?>人</span>
                                    <span class="style">押金：<?php echo e($v->deposit); ?></span>
                                </p>
                            </div><!--/txt-->
                            <div class="priceDetail">
                                <p class="price">￥                       <?php echo e($v->pay); ?>                     <span class="gray-6">(每月)</span></p>
                                <p class="gray-6 checkBox vam">
                                    <input type="checkbox" class="" name="" value="" id="c_84641" onclick="addZiRoomCompare('84641','2290','海淀清河8号线永泰庄永泰园3居室-南卧');">

                                </p>
                                <a href="javascript:void(0)"  style="line-height: 20px; "  class="toCollect" name="<?php echo e($v->h_id); ?>"><font color="red">❤ </font> 加入收藏</a>
                                <p class="more"><a href="<?php echo e(URL("perLook?id")); ?>=<?php echo e($v->h_id); ?>" target="_blank" style="line-height: 20px;">查看更多</a></p>

                            </div><!--/priceDetail-->
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <span style="font-size: 20px;">sorry,没有找到符合条件的房源</span>
                <?php endif; ?>
            </div>
        </ul>

        <!--t_newlistbox -->
    </div><!--t_newlistbox -->

</div>

<div class="area">
    <div class="title">
        <span class="line"></span>
        <h2 class="cn"><span class="s"></span><span class="t" id="recommendation">热销推荐</span><span class="y2">●</span><span class="gray-a t" id="history">热销排行</span> <span class="y">●</span></h2>
        <p class="en">Recommend Room<span class="y">●</span></p>
    </div>

    <!--推荐房源-->
    <ul class="imgInfo_list clearfix" id="imgInfo_list_1">
        <?php foreach($hot as $h): ?>
            <li class="no_note " style="margin-left: 80px;">
                <div class="imgInfo_show">
                    <a href="<?php echo e(URL("perLook?id=$h->h_id")); ?>" target="_blank"><img  alt=""  src="houst_img/<?php echo e($h->photo); ?>" /></a>
                </div>
                <div class="clearfix info_sction">
                    <span class="text_l limit_w"><a href="<?php echo e(URL("perLook?id=$h->h_id")); ?>" target="_blank"><?php echo e($h->h_address); ?></a></span>
                    <span class="text_r">￥<i><?php echo e($h->pay); ?></i>/月 </span>
                </div>
                <div class="clearfix gray-6">
                    <!--<span class="text_l">[丰台马家堡] 10号线角门西</span>-->
                                <span class="text_l">


                               地址： <?php echo e($h->h_address); ?>

                                   </span>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

</div>



<div class="area">
    <div class="title">
        <span class="line"></span>
        <h2 class="cn"><span class="s"></span><span class="t" id="recommendation">精房推荐</span><span class="y2">●</span><span class="gray-a t" id="history">精装排行</span> <span class="y">●</span></h2>
        <p class="en">Recommend Room<span class="y">●</span></p>
    </div>

    <!--推荐房源-->
    <ul class="imgInfo_list clearfix" id="imgInfo_list_1">
        <?php foreach($best as $b): ?>
            <li class="no_note " style="margin-left: 80px;">
                <div class="imgInfo_show">
                    <a href="<?php echo e(URL("perLook?id=$b->h_id")); ?>" target="_blank"><img  alt=""  src="houst_img/<?php echo e($b->photo); ?>" /></a>
                </div>
                <div class="clearfix info_sction">
                    <span class="text_l limit_w"><a href="<?php echo e(URL("perLook?id=$b->h_id")); ?>" target="_blank"><?php echo e($b->h_address); ?></a></span>
                    <span class="text_r">￥<i><?php echo e($b->pay); ?></i>/月 </span>
                </div>
                <div class="clearfix gray-6">
                    <!--<span class="text_l">[丰台马家堡] 10号线角门西</span>-->
                                <span class="text_l">


                                地址：<?php echo e($b->h_address); ?>

                                 </span>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

</div>
<div class="area">
    <div class="title">
        <span class="line"></span>
        <h2 class="cn"><span class="s"></span><span class="t" id="recommendation">特价推荐</span><span class="y2">●</span><span class="gray-a t" id="history">特价排行</span> <span class="y">●</span></h2>
        <p class="en">Recommend Room<span class="y">●</span></p>
    </div>

    <!--推荐房源-->
    <ul class="imgInfo_list clearfix" id="imgInfo_list_1">
        <?php foreach($cheap as $c): ?>
            <li class="no_note " style="margin-left: 80px;">
                <div class="imgInfo_show">
                    <a href="<?php echo e(URL("perLook?id=$c->h_id")); ?>" target="_blank"><img  alt=""  src="houst_img/<?php echo e($c->photo); ?>" /></a>
                </div>
                <div class="clearfix info_sction">
                    <span class="text_l limit_w"><a href="<?php echo e(URL("perLook?id=$c->h_id")); ?>" target="_blank"><?php echo e($c->h_address); ?></a></span>
                    <span class="text_r">￥<i><?php echo e($c->pay); ?></i>/月 </span>
                </div>
                <div class="clearfix gray-6">
                    <!--<span class="text_l">[丰台马家堡] 10号线角门西</span>-->
                                <span class="text_l">


                               地址： <?php echo e($c->h_address); ?>

                            </span>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

</div>

<!-- //services -->

<!--引用底部公用信息-->
<?php echo $__env->make('commonality.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
<script type="text/javascript">
    //收藏
    $(".toCollect").click(function(){
        var url="<?php echo e('appointmentAdd'); ?>";
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