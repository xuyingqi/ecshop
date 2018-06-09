<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:50:"E:/phpStudy/WWW/ecshop/themes/default/activity.dwt";i:1;s:61:"E:/phpStudy/WWW/ecshop/themes/default/library/page_header.lbi";i:2;s:61:"E:/phpStudy/WWW/ecshop/themes/default/library/page_footer.lbi";}s:7:"expires";i:1517476565;s:8:"maketime";i:1517472965;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                                    <a href="gallery.php?id=35&img=82" target="_blank">
                                        <img src="images/201712/goods_img/35_P_1514513397072.png"
                                             alt="宗医派养身甘露" onmouseOver="change_img(this.src)" />
                                    </a>
                                </li>
                                                            </ul>
                        </div>
                        <div id="demo2"></div>
                    </div>
                </div>
            </div>
                        <div class="goods-list" style="width: 364px;margin: 0 auto;">
                                <a href="javascript:;" onclick="window.open('gallery.php?id=35'); return false;">
                    <img src="themes/default/images/img_index/bg3_frame.png" alt="">
                    <img src="images/201712/goods_img/35_P_1514513397072.png" alt="宗医派养身甘露" name="goods_img" class="img-responsive"/>
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
                       <div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;">宗医派养身甘露</span></span></div>
<div>&nbsp;</div>
<div>&nbsp;<span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span style="font-family: 宋体;">酒素有&ldquo;百药之长&rdquo;之称。古&ldquo;医&rdquo;字，即从&ldquo;酉&rdquo;（酒）也。现代研究表明，酒的主要成分乙醇（俗称酒精）是一种良好的半极性有机溶媒，大部分水溶性物质及水不能溶解。中药的多种成分如生物碱、盐类、鞣质、挥发油、有机酸、树脂、糖类及部分色素（如叶绿素、叶黄素）等均较易溶解于乙醇中。乙醇不仅有良好的穿透性，易于进入药材组织细胞中，发挥溶解作用，促进置换、扩散，有利于提高浸出速度和浸出效果；还有防腐作用，可延缓许多药物的水解，增强药剂的稳定性。</span></span></span></div>
<p style="mso-line-height-alt:1.15pt;mso-pagination:widow-orphan;word-break:&#10;break-all"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span style="font-family: 宋体;">药酒作用，包含有&ldquo;酒的作用和药物功效&rdquo;的双重作用。酒有&ldquo;通血脉，行药势，温肠胃，御风寒&rdquo;等作用，酒和药配置可增强药力，既可预防、治疗疾病，又可用于病后的辅助治疗。由于每种药酒都配入了不同的中药材，因此药酒作用也随之而异。</span></span></span><span style="font-size:14.0pt;font-family:宋体;mso-bidi-font-family:&#10;宋体"><span lang="EN-US"><o:p></o:p></span></span></p>
<p style="mso-line-height-alt:1.15pt;mso-pagination:widow-orphan;word-break:&#10;break-all"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span style="font-family: 宋体;">宗医派养身甘露属于内供的外用产品，具有祛风除湿，舒筋通络，活血化瘀，消肿止痛的作用。其适用范围：风寒侵袭、颈肩病痛、腰酸背痛、急慢性软组织损伤、风湿性关节炎、骨性关节炎、腰肌劳损及上述症状引起的关节酸麻、疼痛、肿胀关节运动障碍等。使用方法：<span lang="EN-US">1</span>、直接涂抹病痛之处并加以轻柔的手法按摩使其更好的渗透吸收<span lang="EN-US">2</span>、温酒后涂抹并加以轻柔的手法按摩使其更好的渗透吸收<span lang="EN-US">3</span>、用火点燃，然后涂抹并按摩病患之处（需专业人士，轻易不要使用）以达到更好的渗透吸收</span></span></span><span style="font-size:14.0pt;font-family:宋体;mso-bidi-font-family:&#10;宋体"><span lang="EN-US"><o:p></o:p></span></span></p>
<p style="mso-line-height-alt:1.15pt;mso-pagination:widow-orphan;word-break:&#10;break-all">&nbsp;</p>
<p style="mso-line-height-alt:1.15pt;mso-pagination:widow-orphan;word-break:&#10;break-all"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span style="font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">药酒外用<span lang="EN-US">6</span>大注意事项：</span></span></span><span style="font-size: 14pt; font-family: 宋体; color: rgb(51, 51, 51); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="EN-US"><o:p></o:p></span></span></p>
<p style="margin-left:0cm;text-indent:0cm;mso-line-height-alt:1.15pt;&#10;mso-pagination:widow-orphan;mso-list:l0 level1 lfo1;word-break:break-all"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US" style="font-family: 宋体;">1)</span><span style="font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">按摩手法宜先轻后重，临近结束时再逐渐减轻。</span></span></span><span style="font-size: 14pt; font-family: 宋体; color: rgb(51, 51, 51); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="EN-US"><o:p></o:p></span></span></p>
<p style="margin-left:0cm;text-indent:0cm;mso-line-height-alt:1.15pt;&#10;mso-pagination:widow-orphan;mso-list:l0 level1 lfo1;word-break:break-all"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US" style="font-family: 宋体;">2)</span><span style="font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">外用药酒多数为活血化瘀、行血止痛类药物，因而切忌内服，以免引起不良反应。</span></span></span><span style="font-size: 14pt; font-family: 宋体; color: rgb(51, 51, 51); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span lang="EN-US"><o:p></o:p></span></span></p>
<p style="margin-left:0cm;text-indent:0cm;mso-line-height-alt:1.15pt;&#10;mso-pagination:widow-orphan;mso-list:l0 level1 lfo1;word-break:break-all"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US" style="font-family: 宋体;">3</span></span></span><span style="color: rgb(102, 102, 102); font-family: 宋体; font-size: 14.4px;">)</span><span style="font-family: 宋体; font-size: larger; color: rgb(102, 102, 102); text-indent: 0cm;">用药酒按摩握拿组织时，注意不要直接按擦骨凸部，以免损伤骨面的软组织和骨膜组织而加重病情。</span></p>
<p style="margin-left:0cm;text-indent:0cm;mso-line-height-alt:1.15pt;&#10;mso-pagination:widow-orphan;mso-list:l0 level1 lfo1;word-break:break-all"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US" style="font-family: 宋体;">4</span></span></span><span style="color: rgb(102, 102, 102); font-family: 宋体; font-size: 14.4px;">)</span><span style="font-family: 宋体; font-size: larger; color: rgb(102, 102, 102); text-indent: 0cm;">软组织损伤在两天内出现局部出血、红肿，如果在患处用力按摩，会使症状加重，故不宜使用。</span></p>
<p style="margin-left:0cm;text-indent:0cm;mso-line-height-alt:1.15pt;&#10;mso-pagination:widow-orphan;mso-list:l0 level1 lfo1;word-break:break-all"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US" style="font-family: 宋体;">5</span></span></span><span style="color: rgb(102, 102, 102); font-family: 宋体; font-size: 14.4px;">)</span><span style="font-family: 宋体; font-size: larger; color: rgb(102, 102, 102); text-indent: 0cm;">对有骨肿瘤、骨结核、软组织化脓性感染等，只可在疼痛较重处作表面涂抹，不要推拉重压，以免病灶扩散。</span></p>
<p style="margin-left:0cm;text-indent:0cm;mso-line-height-alt:1.15pt;&#10;mso-pagination:widow-orphan;mso-list:l0 level1 lfo1;word-break:break-all"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US" style="font-family: 宋体;">6</span><span style="font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">药酒按摩方法不宜用于新鲜的骨折、关节脱位、表皮破损，对心、肝、肺、肾有严重疾患者也应禁止用该法治疗。</span></span></span><span lang="EN-US" style="font-size:14.0pt;font-family:宋体;mso-bidi-font-family:宋体;&#10;color:#333333"><o:p></o:p></span></p>
<p style="line-height:50%;mso-pagination:widow-orphan;word-break:break-all"><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span style="line-height: 50%; font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">药与酒结合，充分发挥了药和酒各自的功效，药酒外用，具有活血化瘀、消炎止痛等功效，当用于按摩时一定要注意以上事项。</span></span></span><span lang="EN-US" style="font-size:14.0pt;line-height:50%;font-family:宋体;mso-bidi-font-family:&#10;宋体"><o:p></o:p></span></p>                   </blockquote>
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
    var goods_id = 35;
    var goodsattr_style = 1;
    var gmt_end_time = 0;
        var day = "天";
        var hour = "小时";
        var minute = "分钟";
        var second = "秒";
        var end = "结束";
        var goodsId = 35;
    var now_time = 1517444165;
</script>
</html>
