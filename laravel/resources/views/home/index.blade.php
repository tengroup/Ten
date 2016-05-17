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
<!-- 导航条 -->
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <div class="logo">
                        <a class="navbar-brand" href="{{URl('index')}}">
                            U+
                            <!-- <img src="images/u+.jpg" alt="U+"> -->
                        </a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="cl-effect-13" id="cl-effect-13">
                        <ul class="nav navbar-nav">
                            <li><a href="{{URl('index')}}" class="active">首页</a></li>
                            <li><a href="{{URl('events')}}"> 最新信息 </a></li>
                            <li><a href="{{URl('shortCodes')}}">  短码  </a></li>
                            <li role="presentation" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                  服务 <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a href="{{URl('services')}}">上门送货</a></li>
                                  <li><a href="{{URl('services')}}">直接支付</a></li>
                                </ul>
                            </li>
                            <li><a href="{{URl('mail')}}"> 邮寄 </a></li>
                        </ul>
                    </nav>
                    <div class="social-icons">
                        <ul>
                            <li><a class="icon-link round facebook" href="#"></a></li>
                            <li><a class="icon-link round p" href="#"></a></li>
                            <li><a class="icon-link round twitter" href="#"></a></li>
                            <li><a class="icon-link round dribble" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
<!-- 导航条 -->
<!-- 横幅 -->
    <div class="banner">
        <div class="container">
            <div class="banner-info">
                <h1 class="animated fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">习惯了在immundus父perspiciatis冰茶 <span>excepteur圣occaecat cupidatat非proident</span></h1>
                <div class="banner-info1 animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <ul id="flexiselDemo1">         
                        <li>
                            <div class="banner-info1-grid">
                                <img src="images/1.png" alt=" " class="img-responsive" />
                                <h3>denouncing pleasure</h3>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </li>
                        <li>
                            <div class="banner-info1-grid">
                                <img src="images/2.png" alt=" " class="img-responsive" />
                                <h3>denouncing pleasure</h3>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </li>
                        <li>
                            <div class="banner-info1-grid">
                                <img src="images/3.png" alt=" " class="img-responsive" />
                                <h3>denouncing pleasure</h3>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </li>
                    </ul>
                        <script type="text/javascript">
                            $(window).load(function() {
                                $("#flexiselDemo1").flexisel({
                                    visibleItems: 3,
                                    animationSpeed: 1000,
                                    autoPlay: true,
                                    autoPlaySpeed: 3000,            
                                    pauseOnHover: true,
                                    enableResponsiveBreakpoints: true,
                                    responsiveBreakpoints: { 
                                        portrait: { 
                                            changePoint:480,
                                            visibleItems: 1
                                        }, 
                                        landscape: { 
                                            changePoint:640,
                                            visibleItems:2
                                        },
                                        tablet: { 
                                            changePoint:768,
                                            visibleItems: 2
                                        }
                                    }
                                });
                                
                            });
                    </script>
                    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                    <div class="more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <a href="{{URL('single')}}" class="hvr-curl-bottom-right">阅读更多</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- //横幅 -->
<!-- 旗下 -->
    <div class="banner-bottom">
        <div class="container">
            <div class="banner-bottom-grids">
                <div class="col-md-5 banner-bottom-grid wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h2>vel illum qui dolorem eum</h2>
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                    ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
                    explicabo.</p>
                    <div class="more">
                        <a href="single.html" class="hvr-curl-bottom-right">阅读更多</a>
                    </div>
                </div>
                <div class="col-md-7 banner-bottom-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="banner-bottom-grid1">
                        <img src="images/1.jpg" alt=" " class="img-responsive" />
                        <div class="banner-bottom-grid-pos">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                <span class="sr-only">30% Complete</span>
                              </div>
                            </div>
                            <div class="progress progress1">
                              <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                <span class="sr-only">20% Complete</span>
                              </div>
                            </div>
                            <div class="progress progress2">
                              <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                <span class="sr-only">30% Complete</span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="banner-bottom-grids">
                <div class="col-md-6 banner-bottom-grid-1 wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="banner-bottom-grid-11">
                        <img src="images/2.jpg" alt=" " class="img-responsive" />
                        <div class="banner-bottom-grid-11-pos">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna 
                                aliqua.Quis autem vel eum iure reprehenderit qui in ea voluptate
                                velit esse quam nihil molestiae consequatur.</p>
                            <div class="more m1">
                                <a href="single.html" class="hvr-curl-bottom-right">阅读更多</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 banner-bottom-grid-1 wow fadeInLeftBig" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <h3>Excepteur sint occaecat cupidatat non proident</h3>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!-- //旗下 -->
<!-- 通讯 -->
    <div class="newsletter">
        <div class="container">
            <div class="newsletter-info">
                <h3 class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Newsletter</h3>
                <p class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">But who has any right to find fault with a man who chooses to enjoy 
                    a pleasure that has no annoying consequences</p>
                <form class="wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <input type="mail" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}" required="">
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
<!-- //通讯 -->
<!-- 通讯底层 -->
    <div class="newsletter-bottom">
        <div class="container">
            <div class="newsletter-bottom-grids">
                <div class="col-md-6 newsletter-bottom-grid wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>At vero eos et accusamus et iusto odio</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                        ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
                        explicabo.</p>
                    <div class="more">
                        <a href="single.html" class="hvr-curl-bottom-right">阅读更多</a>
                    </div>
                </div>
                <div class="col-md-6 newsletter-bottom-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <img src="images/4.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="newsletter-bottom-grids">
                <div class="col-md-6 newsletter-bottom-grid wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <img src="images/5.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="col-md-6 newsletter-bottom-grid  wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>At vero eos et accusamus et iusto odio</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                        ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
                        explicabo.</p>
                    <div class="more">
                        <a href="single.html" class="hvr-curl-bottom-right">阅读更多</a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!-- //通讯底层 -->
<!-- 页脚 -->
    <div class="footer">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-3 footer-grid wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>cumque nihil impedit</h3>
                    <div class="footer-grd-left">
                        <img src="images/6.jpg" class="img-responsive" alt=" " />
                    </div>
                    <div class="footer-grd-left">
                        <p>Nam libero tempore, cum 
                            soluta nobis est eligendi optio cumque nihil impedit quo minus 
                            id quod maxime placeat facere possimus, omnis voluptas assumenda 
                            est, omnis dolor repellendus</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 footer-grid wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>voluptas assumenda</h3>
                    <ul>
                        <li><a href="#">doloribus asperiores</a></li>
                        <li><a href="#">Itaque earum rerum</a></li>
                        <li><a href="#">deserunt mollitia</a></li>
                        <li><a href="#">facilis est et expedita</a></li>
                        <li><a href="#">occaecati cupiditate</a></li>
                        <li><a href="#">deserunt mollitia laborum</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>deserunt mollitia</h3>
                    <ul>
                        <li><a href="#">doloribus asperiores</a></li>
                        <li><a href="#">Itaque earum rerum</a></li>
                        <li><a href="#">deserunt mollitia</a></li>
                        <li><a href="#">facilis est et expedita</a></li>
                        <li><a href="#">occaecati cupiditate</a></li>
                        <li><a href="#">deserunt mollitia laborum</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h3>Flickr Posts</h3>
                    <div class="footer-grd">
                        <a href="#"><img src="images/7.jpg" class="img-responsive" alt=" " /></a>
                    </div>
                    <div class="footer-grd">
                        <a href="#"><img src="images/8.jpg" class="img-responsive" alt=" " /></a>
                    </div>
                    <div class="footer-grd">
                        <a href="#"><img src="images/7.jpg" class="img-responsive" alt=" " /></a>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="footer-grd">
                        <a href="#"><img src="images/8.jpg" class="img-responsive" alt=" " /></a>
                    </div>
                    <div class="footer-grd">
                        <a href="#"><img src="images/7.jpg" class="img-responsive" alt=" " /></a>
                    </div>
                    <div class="footer-grd">
                        <a href="#"><img src="images/8.jpg" class="img-responsive" alt=" " /></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container">
            <p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
        </div>
    </div>
<!-- //页脚 -->
<!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>