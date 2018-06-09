<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/default/css/brand.css" rel="stylesheet" type="text/css">
<link href="themes/default/css/imageflow.css" rel="stylesheet" type="text/css">

<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'imageflow.js')); ?>
<script type="text/javascript">
        $(function(){
            new ZoomPic("jswbox");
        })
    </script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php if ($this->_var['action'] == 'p1'): ?>
<div class="section">
    <div class="section-wrapper">
        <li class="title">宗医派养身浴案例</li>
        <ul class="case-wrapper">
            <li><img src="themes/default/images/img_index/case_8.png" alt=""></li>
            <li><img src="themes/default/images/img_index/case_1.png" alt=""></li>
            <li><img src="themes/default/images/img_index/case_2.png" alt=""></li>
            <li><img src="themes/default/images/img_index/case_4.png" alt=""></li>
        </ul>
        <div class="section-content">
            <div class="section-group">
                <div class="title">为王和老先生调理</div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="640" poster="">
                        <source src="themes/default/images/img_index/case1_1.mp4" type="video/mp4">
                    </video>
                    <p class="desc">为王和老先生进行调理</p>
                </div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="640" poster="">
                        <source src="themes/default/images/img_index/case1_2.mp4" type="video/mp4">
                    </video>
                    <p class="desc">王和老先生可以走路了</p>
               </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if ($this->_var['action'] == 'p2'): ?>
<div class="section">
    <div class="section-wrapper">
        <div class="title">宗医派菩提散案例</div>
        <ul class="case-wrapper">
            <li><img src="themes/default/images/img_index/case_7.png" alt=""></li>
            <li><img src="themes/default/images/img_index/case_1.png" alt=""></li>
            <li><img src="themes/default/images/img_index/case_2.png" alt=""></li>
        </ul>
        <div class="section-content">
            <div class="section-group">
                <div class="title">为郭老先生调理</div>
                <div class="item">
                    <img src="themes/default/images/img_index/case_6.png" alt="" style="max-height: 625px; vertical-align: top;">
                    <div class="desc">郭老先生简介</div>
                </div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case2_1.mp4" type="video/mp4">
                    </video>
                    <div class="desc">郭老先生调理后</div>
                </div>
            </div>
            <div class="section-group">
                <div class="title">宗医派菩提散为您带来健康</div>
                <div class="item">
                    <img src="themes/default/images/img_index/case_10.png" alt="" style="max-height: 625px; vertical-align: top;">
                    <div class="desc">李老先生简介</div>
                </div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case2_5.mp4" type="video/mp4">
                    </video>
                    <div class="desc">李老先生调理后</div>
                </div>
            </div>
            <div class="section-group">
                <div class="title">上海的一位婆婆调理案例</div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case2_2.mp4" type="video/mp4">
                    </video>
                    <div class="desc">上海婆婆调理后</div>
                </div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case2_3.mp4" type="video/mp4">
                    </video>
                    <div class="desc">调理现场采访</div>
                </div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case2_4.mp4" type="video/mp4">
                    </video>
                    <div class="desc">调理后</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if ($this->_var['action'] == 'p3'): ?>
<div class="section section-3">
    <div class="section-wrapper">
        <div class="title">宗医派保健经络案例</div>
        <div id="LoopDiv">
            <input id="S_Num" type="hidden" value="8" />
            <div id="starsIF" class="imageflow">
                <img src="themes/default/images/img_index/case_1.png" longdesc="#" width="280" height="300" alt="Picture" />
                <img src="themes/default/images/img_index/case_2.png" longdesc="#" width="280" height="300" alt="Picture" />
                <img src="themes/default/images/img_index/case_3.png" longdesc="#" width="280" height="300" alt="Picture" />
                <img src="themes/default/images/img_index/case_4.png" longdesc="#" width="280" height="300" alt="Picture" />
                <img src="themes/default/images/img_index/case_5.png" longdesc="#" width="280" height="300" alt="Picture" />
                <img src="themes/default/images/img_index/case_1.png" longdesc="#" width="280" height="300" alt="Picture" />
                <img src="themes/default/images/img_index/case_2.png" longdesc="#" width="280" height="300" alt="Picture" />
                <img src="themes/default/images/img_index/case_3.png" longdesc="#" width="280" height="300" alt="Picture" />
                <img src="themes/default/images/img_index/case_4.png" longdesc="#" width="280" height="300" alt="Picture" />
                <img src="themes/default/images/img_index/case_5.png" longdesc="#" width="280" height="300" alt="Picture" />
            </div>
        </div>
        <div class="section-content">
            <div class="section-group">
                <div class="title">上海小儿麻痹症患者调理</div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case3_1.mp4" type="video/mp4">
                    </video>
                    <div class="desc">释净如弟子杨庭为患者做经络调理</div>
                </div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case3_2.mp4" type="video/mp4">
                    </video>
                    <div class="desc">调理后采访</div>
                </div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case3_3.mp4" type="video/mp4">
                    </video>
                    <div class="desc">采访其父亲</div>
                </div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case3_4.mp4" type="video/mp4">
                    </video>
                    <div class="desc">调理后期采访</div>
                </div>
            </div>
            <div class="section-group">
                <div class="title">吉林长春梁先生调理</div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case3_5.mp4" type="video/mp4">
                    </video>
                    <div class="desc">梁先生调理后</div>
                </div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case3_6.mp4" type="video/mp4">
                    </video>
                    <div class="desc">梁先生调理后</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if ($this->_var['action'] == 'p4'): ?>
<div class="section">
    <div class="section-wrapper">
        <div class="title">宗医派养身甘露案例</div>
        <ul class="case-wrapper">
            <li><img src="themes/default/images/img_index/case_9.png" alt=""></li>
            <li><img src="themes/default/images/img_index/case_4.png" alt=""></li>
        </ul>
        <div class="section-content" style="margin-top: 50px;">
            <div class="title">九江莱女生案例</div>
            <ul class="section-group case-wrapper">
                <li><img src="themes/default/images/img_index/case4.1.jpg" alt="" style="max-height: 400px; vertical-align: top;"></li>
                <li><img src="themes/default/images/img_index/case4.2.jpg" alt="" style="max-height: 400px; vertical-align: top;"></li>
                <li><img src="themes/default/images/img_index/case4.3.jpg" alt="" style="max-height: 400px; vertical-align: top;"></li>
            </ul>
            <div class="section-group">
                <div class="title">释净如法师用宗医派养身甘露为九江莱女士做肩调理</div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case4_1.mp4" type="video/mp4">
                    </video>
                    <div class="desc">肩周调理1</div>
                </div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case4_2.mp4" type="video/mp4">
                    </video>
                    <div class="desc">肩周调理2</div>
                </div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case4_3.mp4" type="video/mp4">
                    </video>
                    <div class="desc">养身甘露调理</div>
                </div>
                <div class="item">
                    <video  controls preload="auto" width="400" height="625" poster="">
                        <source src="themes/default/images/img_index/case4_4.mp4" type="video/mp4">
                    </video>
                    <div class="desc">养身浴调理</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
    $(function() {
        window.__Object_toJSONString = Object.prototype.toJSONString;
        delete Object.prototype.toJSONString;
    });
</script>
</html>
