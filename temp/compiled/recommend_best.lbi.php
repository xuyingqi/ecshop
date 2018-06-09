<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="product-wrapper">
   <div class="product-module">
       <div class="module-title">
           <h3>我们的产品</h3>
       </div>
       <div id="show_best_area">
           <?php endif; ?>
           <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
           <div class="box" >
               <img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"/><br />
               <div class="info">
                   <h6><?php echo $this->_var['goods']['short_style_name']; ?></h6>
               </div>
               <p class="price">
                   <?php if ($this->_var['goods']['promote_price'] != ""): ?>
                   <?php echo $this->_var['goods']['promote_price']; ?>
                   <?php else: ?>
                   <?php echo $this->_var['goods']['shop_price']; ?>
                   <?php endif; ?>
               </p>
               <a href="<?php echo $this->_var['goods']['url']; ?>" target="_self"></a>
           </div>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
           <?php if ($this->_var['cat_rec_sign'] != 1): ?>
       </div>
   </div>
</div>
  <?php endif; ?>
<?php endif; ?>

