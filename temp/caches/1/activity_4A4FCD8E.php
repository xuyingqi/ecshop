<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:50:"E:/phpStudy/WWW/ecshop/themes/default/activity.dwt";i:1;s:61:"E:/phpStudy/WWW/ecshop/themes/default/library/page_header.lbi";i:2;s:61:"E:/phpStudy/WWW/ecshop/themes/default/library/page_footer.lbi";}s:7:"expires";i:1524560871;s:8:"maketime";i:1524557271;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                                    <a href="gallery.php?id=38&img=80" target="_blank">
                                        <img src="images/201712/goods_img/38_P_1514513313943.png"
                                             alt="宗医派养身浴" onmouseOver="change_img(this.src)" />
                                    </a>
                                </li>
                                                            </ul>
                        </div>
                        <div id="demo2"></div>
                    </div>
                </div>
            </div>
                        <div class="goods-list" style="width: 364px;margin: 0 auto;">
                                <a href="javascript:;" onclick="window.open('gallery.php?id=38'); return false;">
                    <img src="themes/default/images/img_index/bg3_frame.png" alt="">
                    <img src="images/201712/goods_img/38_P_1514513313943.png" alt="宗医派养身浴" name="goods_img" class="img-responsive"/>
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
                       <div><span style="font-size: larger;"><font color="#666666" face="宋体"><b>宗医派养身浴</b></font></span></div>
<div>&nbsp;</div>
<p><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span style="font-family: 宋体;">养身药浴，在中国已有几千年的历史。据记载自周朝开始，就流行香汤浴。所谓香汤，就是用中药佩兰煎的药水。其气味芬芳馥郁，有解暑祛湿、醒神爽脑的功效。伟大爱国诗人屈原在《云中君》里记述：</span><span lang="EN-US">&ldquo;</span><span style="font-family: 宋体;">浴兰汤兮沐芳华。</span><span lang="EN-US">&rdquo;</span><span style="font-family: 宋体;">其弟子宋玉在《神女赋》中亦说：</span><span lang="EN-US">&ldquo;</span><span style="font-family: 宋体;">沐兰泽，含若芳。</span><span lang="EN-US">&rdquo;</span><span style="font-family: 宋体;">从清代开始，养身药浴就作为一种防病治病的有效方法受到历代中医的推崇</span> <span lang="EN-US">&nbsp;</span><span style="font-family: 宋体;">在中医中，养身药浴法是外调理法之一，即用药液或含有药液水洗浴全身或局部的一种方法，其形式多种多样：洗全身浴称</span><span lang="EN-US">&ldquo;</span><span style="font-family: 宋体;">药水澡</span><span lang="EN-US">&rdquo;</span><span style="font-family: 宋体;">；局部洗浴的又有</span><span lang="EN-US">&ldquo;</span><span style="font-family: 宋体;">烫洗</span><span lang="EN-US">&rdquo;</span><span style="font-family: 宋体;">、</span><span lang="EN-US">&ldquo;</span><span style="font-family: 宋体;">熏洗</span><span lang="EN-US">&rdquo;</span><span style="font-family: 宋体;">、</span><span lang="EN-US">&ldquo;</span><span style="font-family: 宋体;">坐浴</span><span lang="EN-US">&rdquo;</span><span style="font-family: 宋体;">、</span><span lang="EN-US">&ldquo;</span><span style="font-family: 宋体;">足浴</span><span lang="EN-US">&rdquo;</span><span style="font-family: 宋体;">等之称，尤其烫洗最为常用。养身药浴用药与内服药一样，亦需遵循处方原则，辨病辨证选药。即根据各自的体质、时间、地点、病情等因素，选用不同的方药，各司其属。煎药和洗浴的具体方法也有讲究：将药物粉碎后用纱布包好（或直接把药物放在锅内加水煎取亦可）。制作时，加清水适量，浸泡</span><span lang="EN-US">20</span><span style="font-family: 宋体;">分钟，然后再煮</span><span lang="EN-US">30</span><span style="font-family: 宋体;">分钟，将药液倒进盆内，待温度适度时即可洗浴。在洗浴中，其方法有先熏后浴之熏洗法，也有边擦边浴之擦浴法。</span> <span lang="EN-US"><br />
</span><span style="font-family: 宋体;">药浴原理</span> &nbsp; &nbsp;<span style="font-family: 宋体;">通过水的热效应，打开全身毛孔，使药物的有效成份参与血液循环，可起到疏通经络、活血化淤、驱风散寒、清热解毒、消肿止痛、调整阴阳、协调脏腑、通行气血、濡养全身等养生功效，起到养生保健，调理亚健康的作用。</span><span lang="EN-US"><br />
</span><span style="font-family: 宋体;">养身药浴作用机理概言之，系药物作用于全身肌表、局部、患处，并经吸收，循行经络血脉，内达脏腑，由表及里，因而产生效应。养身药浴洗浴，可起到疏通经络、活血化淤、驱风散寒、清热解毒、消肿止痛、调整阴阳、协调脏腑、通行气血、濡养全身等养生功效。现代药理也证实，药浴后能提高血液中某些免疫球蛋白的含量，增强肌肤的弹性和活力。</span> </span></span></p>
<p>&nbsp;</p>
<p><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span style="font-family: 宋体;">药浴的功效：</span></span></span></p>
<p><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"> </span></span><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US"><br />
</span><span style="font-family: 宋体;">出汗排毒，润肤止痒，预防皮肤问题，美肤美容</span><span lang="EN-US"><br />
</span><span style="font-family: 宋体;">改善全身微循环，减轻肌肉、关节疼痛</span><span lang="EN-US"><br />
</span><span style="font-family: 宋体;">调节自律神经，安抚睡眠，降脂减肥</span><span lang="EN-US"><br />
</span><span style="font-family: 宋体;">增强免疫力和消除疲劳，调理亚健康</span> &nbsp; </span></span><span lang="EN-US" style="font-size: 14pt;"><o:p></o:p></span><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"> <span style="font-family: 宋体;">宗医派养身浴粉使用方法：</span> &nbsp; </span></span><span lang="EN-US" style="font-size: 14pt;"><o:p></o:p></span><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"> <span style="font-family: 宋体;">本品外用，每次</span><span lang="EN-US">1</span><span style="font-family: 宋体;">包，</span><span lang="EN-US">3</span><span style="font-family: 宋体;">日</span><span lang="EN-US">1</span><span style="font-family: 宋体;">次（调理初期也可以连续泡浴</span><span lang="EN-US">7</span><span style="font-family: 宋体;">天）开水冲开，放入少量的陈醋，发酵</span><span lang="EN-US">5</span><span style="font-family: 宋体;">分钟后泡入浴桶中，水位在肚脐一下，水温控制在</span><span lang="EN-US">42</span><span style="font-family: 宋体;">度左右，泡</span><span lang="EN-US">30</span><span style="font-family: 宋体;">分钟，泡浴同时多喝温热的水。</span><span lang="EN-US">(</span><span style="font-family: 宋体;">若感不适随时调整泡浴时间以及水温</span><span lang="EN-US">)</span> </span></span><span lang="EN-US" style="font-size: 14pt;"><o:p></o:p></span><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"> &nbsp; <span style="font-family: 宋体;">药浴</span></span></span></p>
<p>&nbsp;</p>
<p><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span style="font-family: 宋体;">注意事项：</span></span></span><span lang="EN-US" style="font-size: 14pt;"><o:p></o:p></span></p>
<p><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"> </span></span></p>
<p class="MsoNormal"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US">1)</span><span style="font-family: 宋体;">禁止空腹泡药浴</span><span lang="EN-US">,</span><span style="font-family: 宋体;">饭后</span><span lang="EN-US">1</span><span style="font-family: 宋体;">小时内禁止泡药浴</span></span></span></p>
<p><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"> </span></span></p>
<p class="MsoNormal"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US">2)</span><span style="font-family: 宋体;">孕妇禁用。</span></span></span></p>
<p><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"> </span></span></p>
<p class="MsoNormal"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US">3)</span><span style="font-family: 宋体;">高血压、心脏病严重者禁用。</span></span></span></p>
<p><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"> </span></span></p>
<p class="MsoNormal"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US">4)</span><span style="font-family: 宋体;">女性经期禁</span></span></span></p>
<p><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"> </span></span></p>
<p class="MsoNormal"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US">5)</span><span style="font-family: 宋体;">浴后禁食。</span><br />
</span></span></p>
<p><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;">  <span lang="EN-US">6)</span><span style="font-family: 宋体;">泡浴过程中多喝温热水，泡后注意保暖，禁止多人共用，如有不适请调节水温后继续泡浴。</span></span></span><span lang="EN-US" style="font-size: 14pt;"><o:p></o:p></span><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"> &nbsp; &nbsp; </span></span></p>
<p><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"> </span></span></p>
<p class="MsoNormal"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US">&nbsp;</span></span></span></p>
<p>&nbsp;</p>
<div><span style="font-size: larger;"> </span></div>
<div><span style="font-size: larger;">&nbsp;</span></div>
<p>&nbsp;</p>
<p class="MsoNormal"><span style="font-size: small;"><span lang="EN-US">&nbsp;</span></span></p>                   </blockquote>
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
       <p>联系电话:13622001117</p>
       <p>邮箱:xiaozaiyanshou@126.com</p>
       <img src="themes/default/images/img_index/QR_code.png" alt="">
       <p>网址:www.zyp.com</p>
       <p>地址:天津市河北区建昌道街迎春道389号诗景颂苑4-2901 </p>
   </div>
</div>
</body>
<script type="text/javascript">
    var goods_id = 38;
    var goodsattr_style = 1;
    var gmt_end_time = 0;
        var day = "天";
        var hour = "小时";
        var minute = "分钟";
        var second = "秒";
        var end = "结束";
        var goodsId = 38;
    var now_time = 1524528471;
</script>
</html>
