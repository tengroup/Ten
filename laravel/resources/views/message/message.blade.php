<!DOCTYPE HTML>
<html>
<head>
    <title>Mail Us</title>
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
    <!-- message -->
    <style>

        ul{list-style-type:none;}

        #msgBox{width:900px;background:#fff;border-radius:5px;margin:10px auto;padding-top:10px;}
        #msgBox form h2{font-weight:400;font:400 18px/1.5 \5fae\8f6f\96c5\9ed1;}
        #msgBox form{background:url(img/boxBG.jpg) repeat-x 0 bottom;padding:0 20px 15px;}
        #userName,#conBox{color:#777;border:1px solid #d0d0d0;border-radius:6px;background:#fff url(img/inputBG.png) repeat-x;padding:3px 5px;font:14px/1.5 arial;}
        #userName.active,#conBox.active{border:1px solid #7abb2c;}
        #userName{height:20px;}
        #conBox{width:448px;resize:none;height:65px;overflow:auto;}
        #msgBox form div{position:relative;color:#999;margin-top:10px;}
        #msgBox img{border-radius:3px;}
        #face{position:absolute;top:0;left:172px;}
        #face img{width:30px;height:30px;cursor:pointer;margin-right:6px;opacity:0.5;filter:alpha(opacity=50);}
        #face img.hover,#face img.current{width:28px;height:28px;border:1px solid #f60;opacity:1;filter:alpha(opacity=100);}
        #sendBtn{border:0;width:112px;height:30px;cursor:pointer;margin-left:10px;background:url(img/btn.png) no-repeat;}
        #sendBtn.hover{background-position:0 -30px;}
        #msgBox form .maxNum{font:26px/30px Georgia, Tahoma, Arial;padding:0 5px;}
        #msgBox .list{padding:10px;}
        #msgBox .list h3{position:relative;height:33px;font-size:14px;font-weight:400;background:#e3eaec;border:1px solid #dee4e7;}
        #msgBox .list h3 span{position:absolute;left:6px;top:6px;background:#fff;line-height:28px;display:inline-block;padding:0 15px;}
        #msgBox .list ul{overflow:hidden;zoom:1;}
        #msgBox .list ul li{float:left;clear:both;width:100%;border-bottom:1px dashed #d8d8d8;padding:10px 0;background:#fff;overflow:hidden;}
        #msgBox .list ul li.hover{background:#f5f5f5;}
        #msgBox .list .userPic{float:left;width:50px;height:50px;display:inline;margin-left:10px;border:1px solid #ccc;border-radius:3px;}
        #msgBox .list .content{float:left;width:400px;font-size:14px;margin-left:10px;font-family:arial;word-wrap:break-word;}
        #msgBox .list .userName{display:inline;padding-right:5px;}
        #msgBox .list .userName a{color:#2b4a78;}
        #msgBox .list .msgInfo{display:inline;word-wrap:break-word;}
        #msgBox .list .times{color:#889db6;font:12px/18px arial;margin-top:5px;overflow:hidden;zoom:1;}
        #msgBox .list .times span{float:left;}
        #msgBox .list .times a{float:right;color:#889db6;display:none;}
        .tr{overflow:hidden;zoom:1;}
        .tr p{float:right;line-height:30px;}
        .tr *{float:left;}
    </style>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
    <link href='http://fonts.useso.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
        /*-------------------------- +
         获取id, class, tagName
         +-------------------------- */
        var get = {
            byId: function(id) {
                return typeof id === "string" ? document.getElementById(id) : id
            },
            byClass: function(sClass, oParent) {
                var aClass = [];
                var reClass = new RegExp("(^| )" + sClass + "( |$)");
                var aElem = this.byTagName("*", oParent);
                for (var i = 0; i < aElem.length; i++) reClass.test(aElem[i].className) && aClass.push(aElem[i]);
                return aClass
            },
            byTagName: function(elem, obj) {
                return (obj || document).getElementsByTagName(elem)
            }
        };
        /*-------------------------- +
         事件绑定, 删除
         +-------------------------- */
        var EventUtil = {
            addHandler: function (oElement, sEvent, fnHandler) {
                oElement.addEventListener ? oElement.addEventListener(sEvent, fnHandler, false) : (oElement["_" + sEvent + fnHandler] = fnHandler, oElement[sEvent + fnHandler] = function () {oElement["_" + sEvent + fnHandler]()}, oElement.attachEvent("on" + sEvent, oElement[sEvent + fnHandler]))
            },
            removeHandler: function (oElement, sEvent, fnHandler) {
                oElement.removeEventListener ? oElement.removeEventListener(sEvent, fnHandler, false) : oElement.detachEvent("on" + sEvent, oElement[sEvent + fnHandler])
            },
            addLoadHandler: function (fnHandler) {
                this.addHandler(window, "load", fnHandler)
            }
        };
        /*-------------------------- +
         设置css样式
         读取css样式
         +-------------------------- */
        function css(obj, attr, value)
        {
            switch (arguments.length)
            {
                case 2:
                    if(typeof arguments[1] == "object")
                    {
                        for (var i in attr) i == "opacity" ? (obj.style["filter"] = "alpha(opacity=" + attr[i] + ")", obj.style[i] = attr[i] / 100) : obj.style[i] = attr[i];
                    }
                    else
                    {
                        return obj.currentStyle ? obj.currentStyle[attr] : getComputedStyle(obj, null)[attr]
                    }
                    break;
                case 3:
                    attr == "opacity" ? (obj.style["filter"] = "alpha(opacity=" + value + ")", obj.style[attr] = value / 100) : obj.style[attr] = value;
                    break;
            }
        };

        EventUtil.addLoadHandler(function ()
        {
            var oMsgBox = get.byId("msgBox");
            var oUserName = get.byId("userName");
            var oConBox = get.byId("conBox");
            var oSendBtn = get.byId("sendBtn");
            var oMaxNum = get.byClass("maxNum")[0];
            var oCountTxt = get.byClass("countTxt")[0];
            var oList = get.byClass("list")[0];
            var oUl = get.byTagName("ul", oList)[0];
            var aLi = get.byTagName("li", oList);
            var aFtxt = get.byClass("f-text", oMsgBox);
            var aImg = get.byTagName("img", get.byId("face"));
            var bSend = false;
            var timer = null;
            var oTmp = "";
            var i = 0;
            var maxNum = 140;

            //禁止表单提交
            EventUtil.addHandler(get.byTagName("form", oMsgBox)[0], "submit", function () {return false});

            //为广播按钮绑定发送事件
            EventUtil.addHandler(oSendBtn, "click", fnSend);

            //为Ctrl+Enter快捷键绑定发送事件
            EventUtil.addHandler(document, "keyup", function(event)
            {
                var event = event || window.event;
                event.ctrlKey && event.keyCode == 13 && fnSend()
            });

            //发送广播函数
            function fnSend ()
            {
                var reg = /^\s*$/g;
                if(reg.test(oUserName.value))
                {
                    alert("\u8bf7\u586b\u5199\u60a8\u7684\u59d3\u540d");
                    oUserName.focus()
                }
                // else if(!/^[u4e00-\u9fa5\w]{2,8}$/g.test(oUserName.value))
                // {
                // 	alert("\u59d3\u540d\u75312-8\u4f4d\u5b57\u6bcd\u3001\u6570\u5b57\u3001\u4e0b\u5212\u7ebf\u3001\u6c49\u5b57\u7ec4\u6210\uff01");
                // 	//alert(oUserName.value)
                // 	oUserName.focus()
                // }
                else if(reg.test(oConBox.value))
                {
                    alert("\u968f\u4fbf\u8bf4\u70b9\u4ec0\u4e48\u5427\uff01");
                    oConBox.focus()
                }
                else if(!bSend)
                {
                    alert("\u4f60\u8f93\u5165\u7684\u5185\u5bb9\u5df2\u8d85\u51fa\u9650\u5236\uff0c\u8bf7\u68c0\u67e5\uff01");
                    oConBox.focus()
                }
                else
                {
                    $.post("{{'messageInsert'}}",{
                        // oUserName:oUserName.value,
                        oConBox:oConBox.value,
                        oUserImg:get.byClass("current", get.byId("face"))[0].src,
                        oUserId:{{$u_id}}
                        // oUserName:oUserName.value,
                    },function(msg){
                        // alert(msg)
                        $('.list').html(msg);
                    })
                    var oLi = document.createElement("li");

                    //插入元素
                    // aLi.length ? oUl.insertBefore(oLi, aLi[0]) : oUl.appendChild(oLi);

                    //重置表单
                    get.byTagName("form", oMsgBox)[0].reset();
                    for (i = 0; i < aImg.length; i++) aImg[i].className = "";
                    aImg[0].className = "current";

                    //将元素高度保存
                    var iHeight = oLi.clientHeight - parseFloat(css(oLi, "paddingTop")) - parseFloat(css(oLi, "paddingBottom"));
                    var alpah = count = 0;
                    css(oLi, {"opacity" : "0", "height" : "0"});
                    timer = setInterval(function ()
                    {
                        css(oLi, {"display" : "block", "opacity" : "0", "height" : (count += 8) + "px"});
                        if (count > iHeight)
                        {
                            clearInterval(timer);
                            css(oLi, "height", iHeight + "px");
                            timer = setInterval(function ()
                            {
                                css(oLi, "opacity", (alpah += 10));
                                alpah > 100 && (clearInterval(timer), css(oLi, "opacity", 100))
                            },30)
                        }
                    },30);
                    //调用鼠标划过/离开样式
                    liHover();
                    //调用删除函数
                    delLi()
                }
            };

            //事件绑定, 判断字符输入
            EventUtil.addHandler(oConBox, "keyup", confine);
            EventUtil.addHandler(oConBox, "focus", confine);
            EventUtil.addHandler(oConBox, "change", confine);

            //输入字符限制
            function confine ()
            {
                var iLen = 0;
                for (i = 0; i < oConBox.value.length; i++) iLen += /[^\x00-\xff]/g.test(oConBox.value.charAt(i)) ? 1 : 0.5;
                oMaxNum.innerHTML = Math.abs(maxNum - Math.floor(iLen));
                maxNum - Math.floor(iLen) >= 0 ? (css(oMaxNum, "color", ""), oCountTxt.innerHTML = "\u8fd8\u80fd\u8f93\u5165", bSend = true) : (css(oMaxNum, "color", "#f60"), oCountTxt.innerHTML = "\u5df2\u8d85\u51fa", bSend = false)
            }
            //加载即调用
            confine();

            //广播按钮鼠标划过样式
            EventUtil.addHandler(oSendBtn, "mouseover", function () {this.className = "hover"});

            //广播按钮鼠标离开样式
            EventUtil.addHandler(oSendBtn, "mouseout", function () {this.className = ""});

            //li鼠标划过/离开处理函数
            function liHover()
            {
                for (i = 0; i < aLi.length; i++)
                {
                    //li鼠标划过样式
                    EventUtil.addHandler(aLi[i], "mouseover", function (event)
                    {
                        this.className = "hover";
                        oTmp = get.byClass("times", this)[0];
                        var aA = get.byTagName("a", oTmp);
                        if (!aA.length)
                        {
                            var oA = document.createElement("a");

                            oA.className = "del";
                            oA.href = "javascript:void(0);";
                            oTmp.appendChild(oA)
                        }
                        else
                        {
                            aA[0].style.display = "block";
                        }
                    });

                    //li鼠标离开样式
                    EventUtil.addHandler(aLi[i], "mouseout", function ()
                    {
                        this.className = "";
                        var oA = get.byTagName("a", get.byClass("times", this)[0])[0];
                        oA.style.display = "none"
                    })
                }
            }
            liHover();

            //删除功能
            function delLi()
            {
                var aA = get.byClass("del", oUl);

                for (i = 0; i < aA.length; i++)
                {
                    aA[i].onclick = function ()
                    {
                        var oParent = this.parentNode.parentNode.parentNode;
                        var alpha = 100;
                        var iHeight = oParent.offsetHeight;
                        timer = setInterval(function ()
                        {
                            css(oParent, "opacity", (alpha -= 10));
                            if (alpha < 0)
                            {
                                clearInterval(timer);
                                timer = setInterval(function ()
                                {
                                    iHeight -= 10;
                                    iHeight < 0 && (iHeight = 0);
                                    css(oParent, "height", iHeight + "px");
                                    iHeight == 0 && (clearInterval(timer), oUl.removeChild(oParent))
                                },30)
                            }
                        },30);
                        this.onclick = null
                    }
                }
            }
            delLi();

            //输入框获取焦点时样式
            for (i = 0; i < aFtxt.length; i++)
            {
                EventUtil.addHandler(aFtxt[i], "focus", function ()	{this.className = "active"});
                EventUtil.addHandler(aFtxt[i], "blur", function () {this.className = ""})
            }

            //格式化时间, 如果为一位数时补0
            function format(str)
            {
                return str.toString().replace(/^(\d)$/,"0$1")
            }

            //头像
            for (i = 0; i < aImg.length; i++)
            {
                aImg[i].onmouseover = function ()
                {
                    this.className += " hover"
                };
                aImg[i].onmouseout = function ()
                {
                    this.className = this.className.replace(/\s?hover/,"")
                };
                aImg[i].onclick = function ()
                {
                    for (i = 0; i < aImg.length; i++) aImg[i].className = "";
                    this.className = "current"
                }
            }
        });

    </script>
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
<!-- contact -->
<div class="contact">
    <div id="msgBox">
        <div class="container">
            <h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">给我们评论~</h1>
            <div class="contact-bottom wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                <!-- <iframe src="" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                <div style="height:400px;">
                    <div id="msgBox">
                        <div class="list">
                            <h3><span>大家在说</span></h3>
                            <ul class="three">
                                @foreach($users as $k)
                                    <li>
                                        <div class="userPic"><img src="{{$k->m_img}}" /></div>
                                        <div class="content">
                                            <div class="userName"><a href="javascript:;">{{$k->u_name}}</a>:</div>
                                            <div class="msgInfo">{!!$k->m_content!!}</div>
                                            <div class="times"><span>{{$k->m_time}}</span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 contact-left wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h4>注意！</h4>
                <h2>请不要恶意攻击我们的网站！感谢合作！
                    <span>联系我们</span></h2>
                <ul>
                    <li>电话 :+1 078 4589 2456</li>
                    <li>座机 :+1 078 4589 2456</li>
                    <li>QQ :+1 078 4589 2456</li>
                    <li>邮箱 :<a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="col-md-8 contact-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h4>发布留言</h4>
                <form>
                    <h2>来 , 说说你在做什么 , 想什么</h2>

                    <div>
                        <input id="userName" class="f-text" value="{{$username}}" disabled="disabled" />
                        <p id="face"><img src="img/face1.gif" class="current" /><img src="img/face2.gif" /><img src="img/face3.gif" /><img src="img/face4.gif" /><img src="img/face5.gif" /><img src="img/face6.gif" /><img src="img/face7.gif" /><img src="img/face8.gif" /></p>
                    </div>
                    <div><textarea id="conBox" class="f-text"></textarea></div>
                    <div class="tr">
                        <p>
                            <span class="countTxt">还能输入</span><strong class="maxNum">140</strong><span>个字</span>

                            <input id="sendBtn" type="button" value="" title="快捷键 Ctrl+Enter" />
                        </p>
                    </div>
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //contact -->


<!--引用底部公用信息-->
@include('commonality.foot');



<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>