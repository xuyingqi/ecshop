<div class="userMenu">
<a href="javascript:void(0)" style="padding: 0;background-color: #e6e6e6;"><img src="themes/default/images/img/default-user-avatar.png" alt=""></a>
<a href="user.php" <?php if ($this->_var['action'] == 'default'): ?>class="curs"<?php endif; ?>>
   <?php echo $this->_var['lang']['label_welcome']; ?></a>
<a href="user.php?act=profile"<?php if ($this->_var['action'] == 'profile'): ?>class="curs"<?php endif; ?>>
   <?php echo $this->_var['lang']['label_profile']; ?></a>
<a href="user.php?act=order_list"<?php if ($this->_var['action'] == 'order_list' || $this->_var['action'] == 'order_detail'): ?>class="curs"<?php endif; ?>>
    <?php echo $this->_var['lang']['label_order']; ?></a>
<a href="user.php?act=address_list"<?php if ($this->_var['action'] == 'address_list'): ?>class="curs"<?php endif; ?>>
    <?php echo $this->_var['lang']['label_address']; ?></a>
<a href="user.php?act=message_list"<?php if ($this->_var['action'] == 'message_list'): ?>class="curs"<?php endif; ?>>
    <?php echo $this->_var['lang']['label_message']; ?></a>
<a href="user.php?act=bonus"<?php if ($this->_var['action'] == 'bonus'): ?>class="curs"<?php endif; ?>>
    <?php echo $this->_var['lang']['label_bonus']; ?></a>
<a href="user.php?act=comment_list"<?php if ($this->_var['action'] == 'comment_list'): ?>class="curs"<?php endif; ?>>
    <?php echo $this->_var['lang']['label_comment']; ?></a>
<!--<a href="user.php?act=group_buy"><?php echo $this->_var['lang']['label_group_buy']; ?></a>-->
<a href="user.php?act=track_packages"<?php if ($this->_var['action'] == 'track_packages'): ?>class="curs"<?php endif; ?>>
    <?php echo $this->_var['lang']['label_track_packages']; ?></a>
<a href="user.php?act=account_log"<?php if ($this->_var['action'] == 'account_log'): ?>class="curs"<?php endif; ?>>
    <?php echo $this->_var['lang']['label_user_surplus']; ?></a>
<?php if ($this->_var['show_transform_points']): ?>
<a href="user.php?act=transform_points"<?php if ($this->_var['action'] == 'transform_points'): ?>class="curs"<?php endif; ?>>
    <?php echo $this->_var['lang']['label_transform_points']; ?></a>
<?php endif; ?>
<a href="user.php?act=logout"><img src="themes/default/images/bnt_sign.gif"></a>
</div>