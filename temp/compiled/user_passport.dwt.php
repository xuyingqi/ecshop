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
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" >

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport.js')); ?>
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
   <div class="wrapper" style="background: url(themes/default/images/img_index/bg.png) no-repeat 0 0;">
       
       <?php if ($this->_var['action'] == 'login'): ?>
       <div class="login-header">
           <div class="logo">
               <a href="index.php"></a>
           </div>
           <span>欢迎登录</span>
       </div>
       <div class="usBox clearfix">
           <div class="usBox_1 ">
               <div class="logtitle">账户登录</div>
               <form name="formLogin" autocomplete="off" action="user.php" method="post" onSubmit="return userLogin()">
                   <div class="login-box">
                       <div class="item item-fore1">
                           <label for="loginname"></label>
                           <input id="loginname" name="username" type="text">
                       </div>
                       <div class="item item-fore2">
                           <label for="loginpwd"></label>
                           <input id="loginpwd" name="password" type="password" >
                       </div>
                       <?php if ($this->_var['enabled_captcha']): ?>
                       <div class="item">
                           <span><?php echo $this->_var['lang']['comment_captcha']; ?></span>
                           <span>
                            <input type="text" size="8" name="captcha" class="inputBg" />
                            <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" />
                        </span>
                       </div>
                       <?php endif; ?>
                       <div class="item">
                           <input type="checkbox" value="1" name="remember" id="remember" style="position: relative;top:2px;"/>
                           <label for="remember" style="font-family:ywsf"><?php echo $this->_var['lang']['remember']; ?></label>
                       </div>
                       <div class="item">
                           <input type="hidden" name="act" value="act_login" />
                           <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                           <input type="submit" name="submit" value="登录" class="us_Submit" />
                       </div>
                       <div class="item">
                           <a href="user.php?act=get_password" class="f3"><?php echo $this->_var['lang']['get_password_by_mail']; ?></a>
                       </div>
                   </div>
               </form>
               <div class="regist-link">
                   <a href="user.php?act=register">
                       <b></b>
                       立即注册
                   </a>
               </div>
           </div>
       </div>
       <?php endif; ?>
       

       
       <?php if ($this->_var['action'] == 'register'): ?>
       <div class="login-header">
           <div class="logo">
               <a href="index.php"></a>
           </div>
           <span>欢迎注册</span>
       </div>
       <?php if ($this->_var['shop_reg_closed'] == 1): ?>
       <div class="usBox">
           <div class="usBox_2 clearfix">
               <div class="f1 f5" align="center"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
           </div>
       </div>
       <?php else: ?>
       <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
       <div class="regist-box">
           <div class="usBox_2 clearfix">
               <form action="user.php" method="post" name="formUser" class="formUser" onsubmit="return register();">
                   <div class="form-group form-regist">
                       <label for="username"><?php echo $this->_var['lang']['label_username']; ?></label>
                       <input name="username" type="text" size="14" id="username" onblur="is_registered(this.value);" class="form-control"/>
                       <span id="username_notice" style="color:#FF0000"> *</span>
                   </div>
                   <div class="form-group form-regist">
                       <label for="email"><?php echo $this->_var['lang']['label_email']; ?></label>
                       <input name="email" type="text" size="25" id="email" onblur="checkEmail(this.value);"  class="form-control"/>
                       <span id="email_notice" style="color:#FF0000"> *</span>
                   </div>
                   <div class="form-group form-regist">
                       <label for="password1"><?php echo $this->_var['lang']['label_password']; ?></label>
                       <input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" class="form-control"  />
                       <span style="color:#FF0000" id="password_notice"> *</span>
                   </div>
                   <div class="form-group password-intensity">
                       <p><?php echo $this->_var['lang']['label_password_intensity']; ?></p>
                       <p id="pwd_lower"><?php echo $this->_var['lang']['pwd_lower']; ?></p>
                       <p id="pwd_middle"><?php echo $this->_var['lang']['pwd_middle']; ?></p>
                       <p id="pwd_high"><?php echo $this->_var['lang']['pwd_high']; ?></p>
                   </div>
                   <div class="form-group form-regist">
                       <label for="conform_password"><?php echo $this->_var['lang']['label_confirm_password']; ?></label>
                       <input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);"  class="form-control"/>
                       <span style="color:#FF0000" id="conform_password_notice"> *</span>
                   </div>
                   <div class="form-group" style="display: none;">
                       <div class="checkbox">
                           <label>
                               <input name="agreement" type="checkbox" value="1" checked="checked">
                               <?php echo $this->_var['lang']['agreement']; ?>
                           </label>
                       </div>
                   </div>
                   <div class="form-group">
                       <input name="act" type="hidden" value="act_register" >
                       <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                       <input name="Submit" type="submit" value="立即注册" class="us_Submit_reg">
                   </div>
                   <div class="form-group">
                       <div class="actionSub">
                           <a href="user.php?act=login"><?php echo $this->_var['lang']['want_login']; ?></a><br />
                       </div>
                   </div>
               </form>
           </div>
       </div>
       <?php endif; ?>
       <?php endif; ?>
       

       
       <?php if ($this->_var['action'] == 'get_password'): ?>
       <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
       <script type="text/javascript">
           <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
           var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </script>
       <div class="usBox">
           <div class="usBox_2 clearfix">
               <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
                   <br />
                   <table width="70%" border="0" align="center">
                       <tr>
                           <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['username_and_email']; ?></strong></td>
                       </tr>
                       <tr>
                           <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
                           <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
                       </tr>
                       <tr>
                           <td align="right"><?php echo $this->_var['lang']['email']; ?></td>
                           <td><input name="email" type="text" size="30" class="inputBg" /></td>
                       </tr>
                       <tr>
                           <td></td>
                           <td><input type="hidden" name="act" value="send_pwd_email" />
                               <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
                               <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
                           </td>
                       </tr>
                   </table>
                   <br />
               </form>
           </div>
       </div>
       <?php endif; ?>

       
       <?php if ($this->_var['action'] == 'qpassword_name'): ?>
       <div class="usBox">
           <div class="usBox_2 clearfix">
               <form action="user.php" method="post">
                   <br />
                   <table width="70%" border="0" align="center">
                       <tr>
                           <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['get_question_username']; ?></strong></td>
                       </tr>
                       <tr>
                           <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
                           <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
                       </tr>
                       <tr>
                           <td></td>
                           <td><input type="hidden" name="act" value="get_passwd_question" />
                               <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
                               <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
                           </td>
                       </tr>
                   </table>
                   <br />
               </form>
           </div>
       </div>
       <?php endif; ?>

       
       <?php if ($this->_var['action'] == 'get_passwd_question'): ?>
       <div class="usBox">
           <div class="usBox_2 clearfix">
               <form action="user.php" method="post">
                   <br />
                   <table width="70%" border="0" align="center">
                       <tr>
                           <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['input_answer']; ?></strong></td>
                       </tr>
                       <tr>
                           <td width="29%" align="right"><?php echo $this->_var['lang']['passwd_question']; ?>：</td>
                           <td width="61%"><?php echo $this->_var['passwd_question']; ?></td>
                       </tr>
                       <tr>
                           <td align="right"><?php echo $this->_var['lang']['passwd_answer']; ?>：</td>
                           <td><input name="passwd_answer" type="text" size="20" class="inputBg" /></td>
                       </tr>
                       <?php if ($this->_var['enabled_captcha']): ?>
                       <tr>
                           <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
                           <td><input type="text" size="8" name="captcha" class="inputBg" />
                               <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
                       </tr>
                       <?php endif; ?>
                       <tr>
                           <td></td>
                           <td><input type="hidden" name="act" value="check_answer" />
                               <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
                               <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
                           </td>
                       </tr>
                   </table>
                   <br />
               </form>
           </div>
       </div>
       <?php endif; ?>

       <?php if ($this->_var['action'] == 'reset_password'): ?>
       <script type="text/javascript">
           <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
           var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </script>
       <div class="usBox">
           <div class="usBox_2 clearfix">
               <form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
                   <br />
                   <table width="80%" border="0" align="center">
                       <tr>
                           <td><?php echo $this->_var['lang']['new_password']; ?></td>
                           <td><input name="new_password" type="password" size="25" class="inputBg" /></td>
                       </tr>
                       <tr>
                           <td><?php echo $this->_var['lang']['confirm_password']; ?>:</td>
                           <td><input name="confirm_password" type="password" size="25"  class="inputBg"/></td>
                       </tr>
                       <tr>
                           <td colspan="2" align="center">
                               <input type="hidden" name="act" value="act_edit_password" />
                               <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
                               <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
                               <input type="submit" name="submit" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" />
                           </td>
                       </tr>
                   </table>
                   <br />
               </form>
           </div>
       </div>
       <?php endif; ?>
       
       <div class="blank"></div>

   </div>

    <?php echo $this->fetch('library/page_footer.lbi'); ?>
    <script type="text/javascript">
        $(function() {
            window.__Object_toJSONString = Object.prototype.toJSONString;
            delete Object.prototype.toJSONString;
        });
    </script>
</body>
<script type="text/javascript">
    var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
    <?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</html>
