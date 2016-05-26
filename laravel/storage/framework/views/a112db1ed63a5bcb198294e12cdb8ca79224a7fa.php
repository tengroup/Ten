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
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                我要租房 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(URl('short')); ?>">短租房屋</a></li>
                                <li><a href="<?php echo e(URl('long')); ?>">长租房屋</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo e(URl('shortCodes')); ?>">  短码  </a></li>
                        <li><a href="<?php echo e(URl('events')); ?>"> 今日更新 </a></li>
                        <li><a href="<?php echo e(URl('message')); ?>"> 留言 </a></li>
                    </ul>

                </nav>
                <div class="social-icons">
                    <ul>
                        <!--<li><a class="icon-link round facebook" href="#"></a></li>
                        <li><a class="icon-link round p" href="#"></a></li>
                        <li><a class="icon-link round twitter" href="#"></a></li>
                        <li><a class="icon-link round dribble" href="#"></a></li>
                        <li><a href="<?php echo e(URl('login')); ?>"><img src="houst_img/user_center.png" alt=""></a></li>-->
                        <font color="#f0f8ff">欢迎
                                <?php if(empty($_COOKIE['username'])): ?>
                                    游客
                                <?php else: ?>
                                    <?php echo e($_COOKIE['username']); ?>

                                <?php endif; ?>
                            登录</font>
                        <?php if(!empty($_COOKIE['username'])): ?>
                            <li><a href="<?php echo e('login/loginout'); ?>">退出</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo e(URl('login')); ?>">登录</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo e(URl('register')); ?>">注册</a></li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                用户中心 <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(URl('personal')); ?>">个人信息</a></li>
                                <?php if(empty($_COOKIE['status'])): ?>
                                    <li><a href="<?php echo e(URl('fyAdd')); ?>">房源添加</a></li>
                                    <li><a href="<?php echo e(URl('appointment')); ?>">预约列表</a></li>
                                <?php elseif($_COOKIE['status']==10): ?>
                                    <li><a href="<?php echo e(URl('appointment')); ?>">预约列表</a></li>
                                <?php elseif($_COOKIE['status']==1): ?>
                                    <li><a href="<?php echo e(URl('fyAdd')); ?>">房源添加</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<!-- 导航条 -->