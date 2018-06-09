<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:50:"E:/phpStudy/WWW/ecshop/themes/default/activity.dwt";i:1;s:61:"E:/phpStudy/WWW/ecshop/themes/default/library/page_header.lbi";i:2;s:61:"E:/phpStudy/WWW/ecshop/themes/default/library/page_footer.lbi";}s:7:"expires";i:1525007025;s:8:"maketime";i:1525003425;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                                    <a href="gallery.php?id=36&img=86" target="_blank">
                                        <img src="images/201801/goods_img/36_P_1517337638441.png"
                                             alt="宗医派养身菩提散" onmouseOver="change_img(this.src)" />
                                    </a>
                                </li>
                                                            </ul>
                        </div>
                        <div id="demo2"></div>
                    </div>
                </div>
            </div>
                        <div class="goods-list" style="width: 364px;margin: 0 auto;">
                                <a href="javascript:;" onclick="window.open('gallery.php?id=36'); return false;">
                    <img src="themes/default/images/img_index/bg3_frame.png" alt="">
                    <img src="images/201801/goods_img/36_P_1517337638441.png" alt="宗医派养身菩提散" name="goods_img" class="img-responsive"/>
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
                       <div>&nbsp;<b style="color: rgb(102, 102, 102); font-family: 宋体; font-size: larger;">宗医派养身菩提散</b><b style="color: rgb(102, 102, 102); font-family: 宋体; font-size: larger;"><br />
</b></div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span style="font-family: 宋体;">中药热敷法又称中药热奄包，为传统中医疗法，距今已有</span><span lang="EN-US">2000</span><span style="font-family: 宋体;">多年历史。《内经》中所述&ldquo;熨&rdquo;即热敷法，它是将中药敷于人体某一部位，并通过加热而进行治疗的方法。其优点是有药物和热敷双重作用。中药热敷法即将具有活血化瘀、通经活络的各种中草药放入纱布包敷治，能使局部血管扩张，血液循环改善，代谢增强，促进局部代谢废物的暇收和排泄，并有缓解肌肉痉挛，促进炎症和淤血的吸收及祛风散寒、舒筋活络、消肿止痛等多种作用。热敷疗法适用于各种闭合性损伤，如各种关节扭伤、脱位、骨折，以及颈椎病、腰腿痛、类风湿关节炎、关节挛缩等病变。</span><span style="font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">它能使局部的毛细血管扩张</span></span></span><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span style="font-family: 宋体; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">，血液循环加速，起到消炎、消肿、祛寒湿、减轻疼痛、消除疲劳的作用。由于此法简便易行，收效迅速，不仅从古沿用至今，还成为人们的日常生活中自我防病治病的常用疗法之一。热敷疗法一般可分为药物热敷疗法、水热敷疗法、盐热敷疗法、沙热敷疗法、砖热敷疗法、蒸饼热敷疗法等。</span></span></span></div>
<div>&nbsp;</div>
<div><span lang="EN-US" style="font-size:14.0pt"><o:p></o:p></span></div>
<div>&nbsp;</div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><b><span style="font-family: 宋体;">中药热敷法的形式</span></b></span></span></div>
<div>&nbsp;</div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US">1</span><span style="font-family: 宋体;">）药包热敷：将选好的药物在沙锅内或锅内煮热，用布包裹，敷于患病部位或穴位。每次热敷时间不宜超过</span><span lang="EN-US">30</span><span style="font-family: 宋体;">分钟，每日</span><span lang="EN-US">2</span><span style="font-family: 宋体;">次。</span></span></span><span lang="EN-US" style="font-size:&#10;14.0pt"><o:p></o:p></span></div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US">2</span><span style="font-family: 宋体;">）药饼热敷：将药物研极细末，加入适量面粉做成饼状，或蒸或烙或者是用面粉蒸饼，将药物细末散于热饼上，再将药饼敷于患病部位或穴位，凉后即换。</span></span></span><span lang="EN-US" style="font-size:14.0pt"><o:p></o:p></span></div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US">3</span><span style="font-family: 宋体;">）药末热敷：将选定的药物共研细末，或将所选用的药物捣烂，用有包好蒸热，直接敷在患病的部位或穴位上。</span></span></span><span lang="EN-US" style="font-size:14.0pt"><o:p></o:p></span></div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US">4</span><span style="font-family: 宋体;">）药液热敷：将药物煎熬后，用纱布蘸取药液，直接敷于患病部位。比如，一些临床常用的外涂药水热敷，如舒筋止痛水、麝香正骨酊等均匀的喷于患病部位，先行手法揉擦</span><span lang="EN-US">1</span><span style="font-family: 宋体;">～</span><span lang="EN-US">2</span><span style="font-family: 宋体;">分钟，再将电热护颈置于患处，进行加热，加强疗效。</span></span></span><span lang="EN-US" style="font-size:14.0pt"><o:p></o:p></span></div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;">5<span style="font-family: 宋体;">）药渣热敷：将选好的药物煎煮，去汁存渣，用其药渣热敷于患部。并施盖纱布等物或用热药汁淋洒，以防散热太快。</span></span></span><span lang="EN-US" style="font-size:14.0pt"><o:p></o:p></span></div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US">6</span><span style="font-family: 宋体;">）药酒热敷：将所用的药酒蒸热，用纱布或棉花蘸取药酒，直接敷于患病部位。</span></span></span><span lang="EN-US" style="font-size:14.0pt"><o:p></o:p></span></div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><b><span style="font-family: 宋体;">原理</span></b></span></span><b><span lang="EN-US" style="font-size:14.0pt"><o:p></o:p></span></b></div>
<div>&nbsp;</div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span style="font-family: 宋体;">虽然方法较多，但治疗原理可归结为两种：一是单纯的物理</span><span lang="EN-US">(</span><span style="font-family: 宋体;">温热</span><span lang="EN-US">)</span><span style="font-family: 宋体;">作用。皮肤层充满血管和毛细血管，当热的物质接触皮肤时，皮肤的血管即扩张充血，使机体代谢加快，促进炎症的消散、吸收。热敷后肌肉内的废物也加快排泄而减少疲劳，缓解僵硬和痉挛，使肌肉松弛而舒服。热也可使汗腺分泌增加，促进身体散热。另一种则是药理和物理的双重作用。由于热敷的作用，增强了局部新陈代谢，可使伤口迅速修复，形成新的皮肤。如用药液敷于患部，因水分和药液与皮肤的直接接触，药物有效成分就会渗透到组织中去，起到外治给药的作用。</span></span></span><span lang="EN-US" style="font-size:14.0pt"><o:p></o:p></span></div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span style="font-family: 宋体;">菩提散的用量用法：根据不同部位使用量不同，取适量的菩提散用开水调开，发酵</span><span lang="EN-US">5</span><span style="font-family: 宋体;">分钟后放入一勺陈醋再继续发酵</span><span lang="EN-US">2</span><span style="font-family: 宋体;">分钟，在病痛部位敷上适合大小的纱布，将发酵好的粉末均匀涂抹在纱布上，再用保鲜膜包好待</span><span lang="EN-US">1.5--2</span><span style="font-family: 宋体;">小时后卸下，在外敷期间如感不适可适当缩短等待时间。</span></span></span><span lang="EN-US" style="font-size:14.0pt"><o:p></o:p></span></div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><b><span style="font-family: 宋体;">注意事项：</span></b></span></span></div>
<div>&nbsp;</div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span style="font-family: 宋体;">本品为一次性用品，禁止重复使用，禁止多人共用，过敏体质慎用，外敷期间禁止食用任何食品，禁止用冷水擦拭外敷部位，女性月经期，妊娠期禁用热敷；危重疾病患者、严重心脏疾病患者禁用热敷，见血疾病者禁用热敷。血压高时禁用热敷，热证疾病禁用热敷。敷菩提散的部位会发红，发痒甚至脱皮，肚胀排气等均属正常现象，如果风湿病痛比较严重者会出现水泡，均属于正常现象。</span></span></span><span lang="EN-US" style="font-size:14.0pt"><o:p></o:p></span></div>
<div><span style="color: rgb(102, 102, 102);"><span style="font-size: larger;"><span lang="EN-US">&nbsp;</span></span></span></div>
<p>&nbsp;</p>                   </blockquote>
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
    var goods_id = 36;
    var goodsattr_style = 1;
    var gmt_end_time = 0;
        var day = "天";
        var hour = "小时";
        var minute = "分钟";
        var second = "秒";
        var end = "结束";
        var goodsId = 36;
    var now_time = 1524974625;
</script>
</html>
