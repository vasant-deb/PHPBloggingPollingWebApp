 <?php ?>
 <?php echo $this->Html->script(['cart.js'], ['inline' => false]); ?>
<?php if($this->Session->read('Shop')) : ?>

 <div class="shopping-cart"> <a href="#"> <span class="shopping-cart-control"> <img alt="" src="mwomen/images/shop.png"> </span> <span class="cart-size-value"><strong>Cart</strong>(<?php echo $shop['Order']['order_item_count']; ?>)<br>
             <span class="fa fa-inr"></span> <?php echo $shop['Order']['total']; ?></span> </a>
              <ul class="shopping-cart-down box-shadow white-bg">
			    <?php $tabindex = 1; ?>
                           <?php foreach ($shop['OrderItem'] as $key => $item): ?>
                           <?php
                              $frontImageurl  = $this->Html->url('/images/products/'.$item['Product']['image']);
                                
                              $mods = 0;
                              if(isset($item['Product']['productmod_name'])) :
                              $mods = $item['Product']['productmod_id'];
                              
                             // $productmod_image = $item['Product']['productmod_image'];
                             // $frontImageurl  = $this->Html->url('/images/products/'.$productmod_image);
                              
                              ?>
                           <?php endif; ?>
                <li class="media"> <a href="<?php echo $item['Product']['slug'];?>.html"><?php echo $this->Html->image('/images/products/' . $item['Product']['image'], ['width' => '75', 'height' => '75']); ?></a>
                  <div class="cart-item-wrapper"> <a href="<?php echo $item['Product']['slug'];?>.html"><?php echo $item['Product']['name'];?></a> <span class="quantity"> <span class="amount"><span class="fa fa-inr"></span> <?php echo $item['price']; ?></span> x<?php echo $item['quantity']; ?>	</span> <a title="Remove this item" class="remove" href="shop/remove/<?php echo $key; ?>"> <i class="fa fa-trash-o"></i> </a> </div>
                </li>
                <?php endforeach; ?>
                <li class="media"> <span class="total-title pull-left">Sub Total</span> <span class="total pull-right"><span class="fa fa-inr"></span> <?php echo $shop['Order']['total']; ?></span> </li>
                <li class="media"> <a class="cart-btn" href="<?php echo $this->webroot;?>shop/cart">VIEW CART</a> </li>
              <li class="media float-right"><a class="cart-btn" href="<?php echo $this->webroot;?>">Continue shopping</a> </li>
			  </ul>
            </div>
			<?php endif; ?>