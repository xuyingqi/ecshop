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
<link  href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <style>
        html,body{
            width: 100%;
            height: 100%;
        }
        #footer{
            padding-top: 81px;
            width: 100%;
            height: 100%;
            background: url(themes/default/images/img_index/bg7footer.png) no-repeat center center;
            -webkit-background-size: 100% 100%;
            background-size: 100% 100%;
        }

    </style>

</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div id="footer">
    <div class="footer-wrapper">
        <img src="themes/default/images/img_index/logo_max.png" alt="">
        <p>公司名称:宗医堂生物科技有限公司</p>
        <p>联系电话:<?php echo $this->_var['service_phone']; ?></p>
        <p>邮箱:<?php echo $this->_var['service_email']; ?></p>
        <img src="themes/default/images/img_index/QR_code.png" alt="">
        <p>网址:<?php echo $this->_var['lang']['icp_number']; ?></p>
        <p>地址:<?php echo $this->_var['shop_address']; ?> </p>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        window.__Object_toJSONString = Object.prototype.toJSONString;
        delete Object.prototype.toJSONString;
    });
</script>
</body>
</html>
