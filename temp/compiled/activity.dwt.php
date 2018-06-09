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
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,common.js')); ?>
    <script type="text/javascript">
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
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div id="leafContainer"></div>
    
    <div class="product-wrapper">
        <div id="goodsInfo" style="margin: 0 auto;">
            
            <?php if ($this->_var['pictures']): ?>
            <div class="clearfix" style="display: none;">
                <div class="gallery">
                    <div id="demo">
                        <div id="demo1">
                            <ul>
                                <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>
                                <li>
                                    <a href="gallery.php?id=<?php echo $this->_var['id']; ?>&img=<?php echo $this->_var['picture']['img_id']; ?>" target="_blank">
                                        <img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>"
                                             alt="<?php echo $this->_var['goods']['goods_name']; ?>" onmouseOver="change_img(this.src)" />
                                    </a>
                                </li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                        <div id="demo2"></div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="goods-list" style="width: 364px;margin: 0 auto;">
                <?php if ($this->_var['pictures']): ?>
                <a href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;">
                    <img src="themes/default/images/img_index/bg3_frame.png" alt="">
                    <img src="<?php echo $this->_var['picture']['img_url']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" name="goods_img" class="img-responsive"/>
                </a>
                <?php else: ?>
                <img src="<?php echo $this->_var['picture']['img_url']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" name="goods-img"/>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
    
    <div class="box product-desc-wrapper">
       <div class="container">
           <div class="box_1">
               <div id="com_v" class="boxCenterList RelaArticle"></div>
               <div id="com_h">
                   <blockquote>
                       <?php echo $this->_var['goods']['goods_desc']; ?>
                   </blockquote>
                   <blockquote>
                       <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
                           <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
                           <tr>
                               <th colspan="2" bgcolor="#FFFFFF"><?php echo htmlspecialchars($this->_var['key']); ?></th>
                           </tr>
                           <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
                           <tr>
                               <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</td>
                               <td bgcolor="#FFFFFF" align="left" width="70%"><?php echo $this->_var['property']['value']; ?></td>
                           </tr>
                           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                       </table>
                   </blockquote>
                   <?php if ($this->_var['package_goods_list']): ?>
                   <blockquote>
                       !-- <?php $_from = $this->_var['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods']):
?> -->
                       <strong><?php echo $this->_var['package_goods']['act_name']; ?></strong><br />
                       <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
                           <tr>
                               <td bgcolor="#FFFFFF">
                                   <?php $_from = $this->_var['package_goods']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['goods_list']):
?>
                                   <a href="goods.php?id=<?php echo $this->_var['goods_list']['goods_id']; ?>" target="_blank"><font class="f1"><?php echo $this->_var['goods_list']['goods_name']; ?><?php echo $this->_var['goods_list']['goods_attr_str']; ?></font></a> &nbsp;&nbsp;X <?php echo $this->_var['goods_list']['goods_number']; ?><br />
                                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                               </td>
                               <td bgcolor="#FFFFFF">
                                   <strong><?php echo $this->_var['lang']['old_price']; ?></strong><font class="market"><?php echo $this->_var['package_goods']['subtotal']; ?></font><br />
                                   <strong><?php echo $this->_var['lang']['package_price']; ?></strong><font class="shop"><?php echo $this->_var['package_goods']['package_price']; ?></font><br />
                                   <strong><?php echo $this->_var['lang']['then_old_price']; ?></strong><font class="shop"><?php echo $this->_var['package_goods']['saving']; ?></font><br />
                               </td>
                               <td bgcolor="#FFFFFF"><a href="javascript:addPackageToCart(<?php echo $this->_var['package_goods']['act_id']; ?>)" style="background:transparent"><img src="themes/default/images/bnt_buy_1.gif" alt="<?php echo $this->_var['lang']['add_to_cart']; ?>" /></a></td>
                           </tr>
                       </table>
                       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                   </blockquote>
                   <?php endif; ?>
               </div>
           </div>
       </div>
    </div>
    <script type="text/javascript">
        <!--
        reg("com");
        //-->
    </script>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
    var goods_id = <?php echo $this->_var['goods_id']; ?>;
    var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
    var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
    <?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    var goodsId = <?php echo $this->_var['goods_id']; ?>;
    var now_time = <?php echo $this->_var['now_time']; ?>;
</script>
</html>
