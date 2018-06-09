<?php if ($this->_var['pictures']): ?>
 <div class="clearfix col-md-3">
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