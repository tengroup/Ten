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
                    <a class="navbar-brand" href="<?php echo e(URl('index')); ?>">
                        U+
                        <!-- <img src="images/u+.jpg" alt="U+"> -->
                    </a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="cl-effect-13" id="cl-effect-13">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo e(URl('index')); ?>" class="active">首页</a></li>
                        <li><a href="<?php echo e(URl('events')); ?>"> 最新信息 </a></li>
                        <li><a href="<?php echo e(URl('shortCodes')); ?>">  短码  </a></li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                服务 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(URl('services')); ?>">上门送货</a></li>
                                <li><a href="<?php echo e(URl('services')); ?>">直接支付</a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo e(URl('mail')); ?>"> 邮寄 </a></li>
                    </ul>

                </nav>
                <div class="social-icons">
                    <ul>
                        <li><a class="icon-link round facebook" href="#"></a></li>
                        <li><a class="icon-link round p" href="#"></a></li>
                        <li><a class="icon-link round twitter" href="#"></a></li>
                        <li><a class="icon-link round dribble" href="#"></a></li>
                        <li><a href="">登录</a></li>
                        <li><a href="">注册</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<!-- 导航条 -->