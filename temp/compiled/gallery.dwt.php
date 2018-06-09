<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_var['gallery']['goods_name']; ?> - <?php echo $this->_var['shop_name']; ?></title>
<link rel="shortcut icon" href="favicon.ico" >
<link rel="icon" href="animated_favicon.gif" type="image/gif" >
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<style>
body{margin:0;}
</style>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['gallery_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'lang_js');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['lang_js']):
?>
var <?php echo $this->_var['key']; ?> = '<?php echo $this->_var['lang_js']; ?>';
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</head>
<body>
<div id="show-pic">
<embed src="data/images/pic-view.swf" quality="high" id="picview" flashvars="copyright=shopex&xml=<products name='<?php echo $this->_var['gallery']['goods_name']; ?>' shopname='<?php echo $this->_var['shop_name']; ?>'><?php $_from = $this->_var['gallery']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'photo');$this->_foreach['gallery_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gallery_list']['total'] > 0):
    foreach ($_from AS $this->_var['photo']):
        $this->_foreach['gallery_list']['iteration']++;
?><smallpic<?php if (($this->_foreach['gallery_list']['iteration'] <= 1)): ?> selected='selected'<?php endif; ?>><?php echo $this->_var['photo']['gallery_thumb']; ?></smallpic><photo_desc><?php echo $this->_var['photo']['img_desc']; ?></photo_desc><bigpic<?php if (($this->_foreach['gallery_list']['iteration'] <= 1)): ?> selected='selected'<?php endif; ?>><?php echo $this->_var['photo']['gallery']; ?></bigpic><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></products>" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100%" height="100%"></embed>
<script>
function windowClose()
{
    if(window.confirm(close_window))
    {
        window.close();
    }
}
</script>
</div>
</body>
</html>