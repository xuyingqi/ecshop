<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:50:"E:/phpStudy/WWW/ecshop/themes/default/activity.dwt";i:1;s:61:"E:/phpStudy/WWW/ecshop/themes/default/library/page_header.lbi";i:2;s:61:"E:/phpStudy/WWW/ecshop/themes/default/library/page_footer.lbi";}s:7:"expires";i:1525941769;s:8:"maketime";i:1525938169;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    
    <title></title>
    
    
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" href="animated_favicon.gif" type="image/gif" />
    <link href="themes/default/style.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/common.js"></script>    <script type="text/javascript">
        const NUMBER_OF_LEAVES = 50;
        function init()
        {
            var container = document.getElementById('leafContainer');
            for (var i = 0; i < NUMBER_OF_LEAVES; i++)
            {
                container.appendChild(createALeaf());
            }
        }
        function randomInteger(low, high)
        {
            return low + Math.floor(Math.random() * (high - low));
        }
        function randomFloat(low, high)
        {
            return low + Math.random() * (high - low);
        }
        function pixelValue(value)
        {
            return value + 'px';
        }
        function durationValue(value)
        {
            return value + 's';
        }
        function createALeaf()
        {
            var leafDiv = document.createElement('div');
            var image = document.createElement('img');
            image.src ='themes/default/images/img_index/flower' + randomInteger(1, 5) + '.png';
            leafDiv.style.top = "-10px";
            leafDiv.style.left = pixelValue(randomInteger(0, 2000));
            var spinAnimationName = (Math.random() < 0.5) ? 'clockwiseSpin' : 'counterclockwiseSpinAndFlip';
            leafDiv.style.webkitAnimationName = 'fade, drop';
            image.style.webkitAnimationName = spinAnimationName;
            var fadeAndDropDuration = durationValue(randomFloat(5, 11));
            var spinDuration = durationValue(randomFloat(4, 8));
            leafDiv.style.webkitAnimationDuration = fadeAndDropDuration + ', ' + fadeAndDropDuration;
            var leafDelay = durationValue(randomFloat(0, 5));
            leafDiv.style.webkitAnimationDelay = leafDelay + ', ' + leafDelay;
            image.style.webkitAnimationDuration = spinDuration;
            leafDiv.appendChild(image);
            return leafDiv;
        }
        window.addEventListener('load', init);
    </script>
    <style>
        .product-wrapper,.product-desc-wrapper{
            width:100%;
            height:100%;
            background-image: url(themes/default/images/img_index/bg.png);
            background-repeat: no-repeat;
            background-size:100%;
        }
        .product-wrapper{
            padding-top: 81px;
        }
    </style>
</head>
<body >
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<link  href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" style="padding: 0;"><span></span></a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav navbar-left">
                <li><a href="index.php#page1">首页</a></li>
                <li><a href="index.php#page2">公司介绍</a></li>
                <li><a href="index.php#page3" >产品介绍</a></li>
                <li><a href="index.php#page4">产品中心</a></li>
                <li><a href="index.php#page5">资讯新闻</a></li>
                <li><a href="index.php#page6" >会员中心</a></li>
                <li><a href="index.php#page7" >招商加盟</a></li>
                <li><a href="index.php#page8" >联系我们</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right ">
                <li class="nav-user"><a href="user.php" target="_self"><span>个人中心</span></a></li>
                <li class="nav-cart">
                    <a href="flow.php?step=cart"><span>购物车</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="leafContainer"></div>
    
    <div class="product-wrapper">
        <div id="goodsInfo" style="margin: 0 auto;">
            
                        <div class="clearfix" style="display: none;">
                <div class="gallery">
                    <div id="demo">
                        <div id="demo1">
                            <ul>
                                                                <li>
                                    <a href="gallery.php?id=39&img=84" target="_blank">
                                        <img src="images/201801/goods_img/39_P_1516663937639.png"
                                             alt="宗医派保健经络" onmouseOver="change_img(this.src)" />
                                    </a>
                                </li>
                                                            </ul>
                        </div>
                        <div id="demo2"></div>
                    </div>
                </div>
            </div>
                        <div class="goods-list" style="width: 364px;margin: 0 auto;">
                                <a href="javascript:;" onclick="window.open('gallery.php?id=39'); return false;">
                    <img src="themes/default/images/img_index/bg3_frame.png" alt="">
                    <img src="images/201801/goods_img/39_P_1516663937639.png" alt="宗医派保健经络" name="goods_img" class="img-responsive"/>
                </a>
                            </div>
            
        </div>
    </div>
    
    <div class="box product-desc-wrapper">
       <div class="container">
           <div class="box_1">
               <div id="com_v" class="boxCenterList RelaArticle"></div>
               <div id="com_h">
                   <blockquote>
                                          </blockquote>
                   <blockquote>
                       <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
                                                  </table>
                   </blockquote>
                                  </div>
           </div>
       </div>
    </div>
    <script type="text/javascript">
        <!--
        reg("com");
        //-->
    </script>
<div id="footer">
   <div class="footer-wrapper">
       <img src="themes/default/images/img_index/logo_max.png" alt="">
       <p>公司名称:宗医堂生物科技有限公司</p>
       <p>地址:天津市河北区建昌道街迎春道389号诗景颂苑4-2901 </p>
       <p>邮箱:xiaozaiyanshou@126.com</p>
       <p>联系电话:13622001117</p>
       <p>网址:www.zyp.com</p>
       <img src="themes/default/images/img_index/QR_code.png" alt="">
   </div>
</div>
</body>
<script type="text/javascript">
    var goods_id = 39;
    var goodsattr_style = 1;
    var gmt_end_time = 0;
        var day = "天";
        var hour = "小时";
        var minute = "分钟";
        var second = "秒";
        var end = "结束";
        var goodsId = 39;
    var now_time = 1525909370;
</script>
</html>
