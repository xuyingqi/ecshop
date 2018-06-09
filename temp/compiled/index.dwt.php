<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
<link href="themes/default/css/fullPage.css" rel="stylesheet" type="text/css"/>
<link href="themes/default/css/index.css" rel="stylesheet" type="text/css"/>
<link href="themes/default/css/video.css" rel="stylesheet" type="text/css">
<link  href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" >

<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://libs.baidu.com/jqueryui/1.8.22/jquery-ui.min.js "></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js,jquery.fullPage.min.js,video.min.js')); ?>
    <script type="text/javascript">
        var lanren = {
            changeClass: function (target,id) {
                var className = $(target).attr('class');
                var ids = document.getElementById(id);
                (className == 'on')
                    ? $(target).removeClass('on').addClass('off')
                    : $(target).removeClass('off').addClass('on');
                (className == 'on')
                    ? ids.pause()
                    : ids.play();
            },
            play:function(){
                document.getElementById('media').play();
            }
        }
    </script>
</head>
<body>
<div id="lanren">
    <div id="audio-btn" class="on" onclick="lanren.changeClass(this,'media')">
        <audio loop="loop" src="themes/default/images/img_index/bgmusic.mp3" id="media" preload="preload"></audio>
    </div>
</div>
<div class="section section1">
    <?php echo $this->fetch('library/navigation.lbi'); ?>
    <div class="bg"><img src="themes/default/images/img_index/section1.gif" alt=""></div>
    <div class="section1-logo"><img src="themes/default/images/img_index/logo_max.png" alt=""></div>
</div>
<div class="section section2">
    <div class="bg"><img src="themes/default/images/img_index/section2.png" alt=""></div>
    <div class="m bg21">
        <video id="my-video" class="video-js" controls preload="auto" width="740" height="400"
               poster="themes/default/images/img_index/m.png" data-setup="{}">
            <source src="themes/default/images/img_index/video.mp4" type="video/mp4">
            <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
        </video>
    </div>
    <div class="bg22"></div>
    <div class="brief">
        <p>先养身</p>
        <p>后养生</p>
    </div>
</div>
<div class="section section3">
    <div class="bg"><img src="themes/default/images/img_index/section3.png" alt=""></div>
    <?php if ($this->_var['best_goods']): ?>
    <?php if ($this->_var['cat_rec_sign'] != 1): ?>
    <div  id="show_best_area" style="position: absolute;z-index: 9;">
        <div>
            <?php endif; ?>
            <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
            <div class="bg31">
            <a href="activity.php?id=<?php echo $this->_var['goods']['id']; ?>" style="width: 100%;height: 100%;display: block;">
                <div class="bg3-reverse">
                    <div class="backface">
                        <img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"/><br />
                        <p><?php echo $this->_var['goods']['brief']; ?></p>
                    </div>
                    <div class="foreface">
                        <h3><?php echo $this->_var['goods']['name']; ?></h3>
                    </div>
                </a>
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php if ($this->_var['cat_rec_sign'] != 1): ?>
        </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
    <div class="bg36">
        <img src="themes/default/images/img_index/bg36.png" alt="">
    </div>
</div>
<div class="section section4">
    <div class="bg"><img src="themes/default/images/img_index/section4.png" alt=""></div>
    <p class="bg41">产品中心</p>
    <div class="bg42">
        <a href="record.php">
            <div class="img-wrapper">
                <img class="pic1" src="themes/default/images/img_index/bg31.png"/>
            </div>
            <div class="img-wrapper">
                <img class="pic5" src="themes/default/images/img_index/bg35.png"/>
            </div>
            <div class="img-wrapper">
                <img class="pic3" src="themes/default/images/img_index/bg33.png"/>
            </div>
            <div class="img-wrapper">
                <img class="pic4" src="themes/default/images/img_index/bg34.png"/>
            </div>
            <div class="img-wrapper">
                <img class="pic2" src="themes/default/images/img_index/bg32.png"/>
            </div>

        </a>
    </div>
</div>
<div class="section section5">
    <div class="bg"><img src="themes/default/images/img_index/section5.png" alt=""></div>
    <div class="bg55"></div>
    <div class="section5-top">
        <div class="top-wrapper">
            <div class="bg51"></div>
            <div class="bg54">案例中心</div>
            <div class="bg56"></div>
        </div>
        <div class="content1">
            <p>
                <a href="brand.php?act=p1">宗医派养身浴案例 </a>
                <img src="themes/default/images/img_index/arrow_left.png" alt="">
            </p>
            <p>
                <a href="brand.php?act=p2">宗医派菩提散案例</a>
                <img src="themes/default/images/img_index/arrow_left.png" alt="">
            </p>
            <p>
                <a href="brand.php?act=p3">宗医派保健经络案例</a>
                <img src="themes/default/images/img_index/arrow_left.png" alt="">
            </p>
            <p>
                <a href="brand.php?act=p4">宗医派养身甘露案例</a>
                <img src="themes/default/images/img_index/arrow_left.png" alt="">
            </p>
        </div>
    </div>
    <div class="section5-bottom">
       <div class="bottom-wrapper">
           <div class="bg52"></div>
           <div class="bg53">公益活动</div>
           <div class="bg57"></div>
       </div>
        <div class="content2">
            <p>
                <a href="package.php?act=p1">释净如法师受邀参加全国助残日活动 </a>
                <img src="themes/default/images/img_index/arrow_right.png" alt="">
            </p>
            <p>
                <a href="package.php?act=p2">祝贺宗医派创始人五指弹禅功法的传承人释净如法师申请区级非物质文化遗产成功</a>
                <img src="themes/default/images/img_index/arrow_right.png" alt="">
            </p>
            <p>
                <a href="package.php?act=p3">慈善公益｜释净如法师亲临广东梅州千佛塔寺开展义诊</a>
                <img src="themes/default/images/img_index/arrow_right.png" alt="">
            </p>
            <p>
                <a href="package.php?act=p4">16年11月上海义诊活动报道</a>
                <img src="themes/default/images/img_index/arrow_right.png" alt="">
            </p>
            <p>
                <a href="package.php?act=p5">抚顺市政协文化和文史委员会携宗医堂联合举办科学养身大型公益活动</a>
                <img src="themes/default/images/img_index/arrow_right.png" alt="">
            </p>
        </div>
    </div>
</div>
<div class="section section6">
    <div class="bg"><img src="themes/default/images/img_index/section6.png" alt=""></div>
    <div class="bg60">
        <div class="bg61"></div>
        <div class="bg62"><a href="catalog.php?act=p1"></a></div>
        <div class="bg63"></div>
    </div>
    <div class="content2">
        <p>
            <a href="catalog.php?act=p1">天津宗医堂养身体验馆</a>
            <img src="themes/default/images/img_index/arrow_right.png" alt="">
        </p>
        <p>
            <a href="catalog.php?act=p2">抚顺市顺城区宗医堂养身体验馆</a>
            <img src="themes/default/images/img_index/arrow_right.png" alt="">
        </p>
        <p>
            <a href="catalog.php?act=p3">深圳市福田区宗医堂养身体验馆</a>
            <img src="themes/default/images/img_index/arrow_right.png" alt="">
        </p>
        <p>
            <a href="catalog.php?act=p4">台安县宗医堂养身体验馆</a>
            <img src="themes/default/images/img_index/arrow_right.png" alt="">
        </p>
    </div>
</div>
<div class="section section7">
    <a href="auction.php">
        <div class="bg"><img src="themes/default/images/img_index/section7.png" alt=""></div>
        <div class="bg71">招商加盟</div>
    </a>
</div>
<div class="section section8">
    <div class="bg"><img src="themes/default/images/img_index/section8.png" alt=""></div>
    <div class="bg81"></div>
    <div class="bg82"></div>
    <div class="bg83">
        <form action="message.php" method="post" name="formMsg" onSubmit="return submitMsgBoard(this)">
            <div class="list-item">
                <label><img src="themes/default/images/img_index/user_name.png" alt=""></label>
                <input name="user_name" type="text" class="inputBg" size="20" value="" />
            </div>
            <div class="list-item">
                <label><img src="themes/default/images/img_index/user_tel.png" alt=""></label>
                <input name="msg_title" type="text" class="inputBg" size="20" value="" />
            </div>
            <div class="list-item">
                <label><img src="themes/default/images/img_index/user_address.png" alt=""></label>
                <td><input name="msg_content" type="text" class="inputBg" size="20" value="" id="msg_content"/>
            </div>
            <div class="list-item">
                <label><img src="themes/default/images/img_index/result.png" alt=""></label>
                <td><input name="msg_status" type="text" class="inputBg" size="30" />
            </div>
            <div class="list-item">
                <label><img src="themes/default/images/img_index/invest.png" alt=""></label>
                <input name="msg_type" type="text" class="inputBg" size="30">
            </div>
            <div class="list-item">
                <input type="hidden" name="act" value="act_add_message" />
                <input type="submit" value="" class="btn-submit"/>
            </div>
        </form>
        <script type="text/javascript">
            <?php $_from = $this->_var['lang']['message_board_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            
            /**
             * 提交留言信息
             */
            function submitMsgBoard(frm)
            {
                var msg = new Object;

                msg.user_email  = frm.elements['user_email'].value;
                msg.msg_title   = frm.elements['msg_title'].value;
                msg.msg_content = frm.elements['msg_content'].value;
                msg.captcha     = frm.elements['captcha'] ? frm.elements['captcha'].value : '';

                var msg_err = '';

                if (msg.user_email.length > 0)
                {
                    if (!(Utils.isEmail(msg.user_email)))
                    {
                        msg_err += msg_error_email + '\n';
                    }
                }
                else
                {
                    msg_err += msg_empty_email + '\n';
                }
                if (msg.msg_title.length == 0)
                {
                    msg_err += msg_title_empty + '\n';
                }
                if (frm.elements['captcha'] && msg.captcha.length==0)
                {
                    msg_err += msg_captcha_empty + '\n'
                }
                if (msg.msg_content.length == 0)
                {
                    msg_err += msg_content_empty + '\n'
                }
                if (msg.msg_title.length > 200)
                {
                    msg_err += msg_title_limit + '\n';
                }

                if (msg_err.length > 0)
                {
                    alert(msg_err);
                    return false;
                }
                else
                {
                    return true;
                }
            }
            
        </script>
    </div>
 </div>
<script type="text/javascript">
    $(function() {
        window.__Object_toJSONString = Object.prototype.toJSONString;
        delete Object.prototype.toJSONString;
        $.fn.fullpage({
            verticalCentered: false,
            anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7','page8'],
            navigation: true,
            navigationTooltips: ['首页', '公司介绍', '产品介绍', '产品中心', '资讯新闻', '会员中心', '招商加盟','联系我们']
        });

        lanren.play();

    });
</script>
</body>
</html>
