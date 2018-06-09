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
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
function del() {
    var num=document.getElementById("number");
    var n=parseInt(num.value);
    if(n-1 <= 0){
        num.value = 0;
    }else{
        num.value = n-1;
    }
    changePrice()
}
function add() {
    var num=document.getElementById("number");
    var n=parseInt(num.value);
        num.value = n+1;
    changePrice()
}
</script>
<script type="text/javascript">
    function change_img(img_src){
        document.getElementsByName("goods_img")[0].src=img_src;}
</script>
    <style>
        .goods-info,.goods-description{
            background: url(themes/default/images/img_index/bg.png) no-repeat center center;
            width:100%;
            height:100%;
            -webkit-background-size: 100%;
            background-size: 100%;
        }
        .goods-info{
            padding-top: 100px;
        }
    </style>
</head>
<body >
<?php echo $this->fetch('library/page_header.lbi'); ?>
 <div class="goods-info">
     <div id="goodsInfo" class="container">
         
         <div class="row">
             <div class="col-md-6" style="overflow: hidden">
                 <div class="row">
                     
                     <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
                     
                     <?php if ($this->_var['pictures']): ?>
                     <a href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;" class="goods-list col-md-9">
                         <img src="themes/default/images/img_index/bg3_frame.png" alt="">
                         <img src="<?php echo $this->_var['picture']['img_url']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" name="goods_img" class="img-responsive"/>
                     </a>
                     <?php else: ?>
                     <img src="<?php echo $this->_var['picture']['img_url']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" name="goods-img"/>
                     <?php endif; ?>
                 </div>
             </div>
             
             <div class="col-md-6">
                 <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY"   class="params">
                     <div class="clearfix params-title">
                         <div class="params-info">
                             <h4><?php echo $this->_var['goods']['goods_style_name']; ?></h4>
                             <h6><?php echo $this->_var['goods']['goods_style_name']; ?></h6>
                         </div>
                         <div class="params-price">
                     <span class="shop" id="ECS_SHOPPRICE">
                        <?php echo $this->_var['goods']['shop_price_formated']; ?>
                      </span>
                         </div>
                     </div>
                     <div class="params-panel">
                         
                         <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
                         <div class="params-panel-color padd loop">
                             <span class="params-name"><?php echo $this->_var['spec']['name']; ?>:</span>
                             
                             <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                             <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                             <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                             <label for="spec_value_<?php echo $this->_var['value']['id']; ?>" class="f_l">
                                 <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
                                 <?php echo $this->_var['value']['label']; ?>
                             </label>
                             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                             <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                             <?php else: ?>
                             <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                                 <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                                 <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                             </select>
                             <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                             <?php endif; ?>
                             <?php else: ?>
                             <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                             <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                                 <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                                 <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label><br />
                             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                             <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                             <?php endif; ?>
                         </div>
                         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                         
                         <div class="params-panel-num">
                             <span class="params-name"><?php echo $this->_var['lang']['number']; ?>：</span>
                             <span><img src ="themes/default/images/img/minus.gif" onclick ="del()"/> </span>
                             <input name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" style="border:1px solid #ccc; "/>
                             <span><img src="themes/default/images/img/add.gif" onclick="add()"></span>
                         </div>
                         <?php if ($this->_var['volume_price_list']): ?>
                         <div class="padd params-panel-more">
                             <span><?php echo $this->_var['lang']['volume_price']; ?>：</span>
                             <div>
                                 <div style="padding: 10px 0;">
                                     <span style="padding: 0 55px 0 0"><?php echo $this->_var['lang']['number_to']; ?></span>
                                     <span><?php echo $this->_var['lang']['preferences_price']; ?></span>
                                 </div>
                                 <ul>
                                     <?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
                                     <li><?php echo $this->_var['price_list']['number']; ?>
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                         <?php echo $this->_var['price_list']['format_price']; ?></li>
                                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                 </ul>
                             </div>
                         </div>
                         <?php endif; ?>
                     </div>
                     <div class="params-status">
                 <span class="blue-title-btn">
                     <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" target="_blank">加入购物车</a>
                 </span>
                         <span class="gray-title-btn">
                     <a target="_blank" href="flow.php?step=checkout" target="_blank">现在购买</a>
                 </span>
                     </div>
                     <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
                     <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
                     <li class="padd loop" style="margin-bottom:5px; border-bottom:1px dashed #ccc;">
                         <strong><?php echo $this->_var['lang']['promote_price']; ?></strong><font class="shop"><?php echo $this->_var['goods']['promote_price']; ?></font><br />
                         <strong><?php echo $this->_var['lang']['residual_time']; ?></strong>
                         <font class="f4" id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></font><br />
                     </li>
                     <?php endif; ?>
                     <li class="clearfix">
                         <dd>
                             <strong><?php echo $this->_var['lang']['amount']; ?>：</strong><font id="ECS_GOODS_AMOUNT" class="shop"></font>
                         </dd>
                         <dd class="ddR">
                             <?php if ($this->_var['goods']['give_integral'] > 0): ?>
                             <strong><?php echo $this->_var['lang']['goods_give_integral']; ?></strong><font class="f4"><?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['points_name']; ?></font>
                             <?php endif; ?>
                         </dd>
                     </li>
                     <?php if ($this->_var['goods']['bonus_money']): ?>
                     <li class="padd loop" style="margin-bottom:5px; border-bottom:1px dashed #ccc;">
                         <strong><?php echo $this->_var['lang']['goods_bonus']; ?></strong><font class="shop"><?php echo $this->_var['goods']['bonus_money']; ?></font><br />
                     </li>
                     <?php endif; ?>

                     <?php if ($this->_var['goods']['is_shipping']): ?>
                     <li style="height:30px;padding-top:4px;">
                         <?php echo $this->_var['lang']['goods_free_shipping']; ?><br />
                     </li>
                     <?php endif; ?>
                 </form>
             </div>
         </div>
     </div>
 </div>
<div class="goods-description">
    <div class="box container">
        <div class="box_1">
            <h3 style="padding:0 5px;">
                <div id="com_b" class="history clearfix">
                    <h2><?php echo $this->_var['lang']['goods_brief']; ?></h2>
                    <h2 class="h2bg"><?php echo $this->_var['lang']['goods_attr']; ?></h2>
                    <?php if ($this->_var['package_goods_list']): ?>
                    <h2 class="h2bg" style="color:red;"><?php echo $this->_var['lang']['remark_package']; ?></h2>
                    <?php endif; ?>
                </div>
            </h3>
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
    <script type="text/javascript">
        <!--
        reg("com");
        //-->
    </script>
</div>

 </div>
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

onload = function(){
  changePrice();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
</html>
