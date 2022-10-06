<?php echo $this->Html->script(array('shop_address.js'), array('inline' => false)); ?><?php echo $this->Form->create('Order'); ?>
<?php $order_data = $shop;?> 
<?php echo $this->set('title_for_layout', 'Shopping Cart'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php $this->Html->addCrumb('Shopping Cart'); ?>
<?php echo $this->App->js(); ?>
<?php echo $this->fetch('script'); ?>

<div class="shopping-cart-page">
   <div class="container">
   
   
      <?php echo $this->Form->create(NULL, ['url' => ['controller' => 'shop', 'action' => 'cartupdate']]); ?>
      <?php if(empty($shop['OrderItem'])) : ?>
      Shopping Cart is empty.
      <?php else: ?>
					<h5> <?php 
                         $msg = $this->Session->flash(); 
                         echo $msg; 
                         ?> 
						 </h5>
							  
      <!--Shopping Cart-->
      <section>
         <div class="group-title">
            <h2>Review Your Order</h2>
         </div>
          <div class="row">
            <div class="col col-sm-4">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title">Customer Info</h3>
                  </div>
                  <div class="panel-body"> <?php echo $order_data['Order']['first_name'];?> <?php echo $order_data['Order']['last_name'];?><br />
                     Email: <?php echo $order_data['Order']['email'];?><br />
                     Phone: <?php echo $order_data['Order']['phone'];?><br>
                     &nbsp; 
                  </div>
               </div>
            </div>
            <div class="col col-sm-4">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title">Billing Address</h3>
                  </div>
                  <div class="panel-body"> <?php echo $order_data['Order']['first_name'];?> <?php echo $order_data['Order']['last_name'];?><br />
                     <?php echo $order_data['Order']['billing_address'];?><br />
                     <?php echo $order_data['Order']['billing_address2'];?><br />
                     <?php echo $order_data['Order']['billing_city'];?>, <?php echo $order_data['Order']['billing_state'];?> <?php echo $order_data['Order']['billing_zip'];?><br />
                  </div>
               </div>
            </div>
            <div class="col col-sm-4">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title">Shipping Address</h3>
                  </div>
                  <div class="panel-body"> <?php echo $order_data['Order']['first_name'];?> <?php echo $order_data['Order']['last_name'];?><br />
                     <?php echo $order_data['Order']['shipping_address'];?><br />
                     <?php echo $order_data['Order']['shipping_address2'];?><br />
                     <?php echo $order_data['Order']['shipping_city'];?>, <?php echo $order_data['Order']['shipping_state'];?> <?php echo $order_data['Order']['shipping_zip'];?><br />
                  </div>
               </div>
            </div>
         </div>
         <!--Cart Column-->
         <div class="cart-column">
            <!--Cart Outer-->
            <div class="cart-outer">
               <div class="table-outer">
                  <table class="cart-table">
                     <thead class="cart-header">
                        <tr>
                           <th class="prod-column">Product</th>
                           <th></th>
                           <th class="price">Unit Price</th>
                           <th>Quantity</th>
                           <th>Total</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        <?php $tabindex = 1; ?>
                        <?php foreach ($shop['OrderItem'] as $key => $item): ?>
                        <tr id="row-<?php echo $key; ?>">
                           <td class="prod-column" colspan="2">
                              <figure class="prod-thumb">  
								<a href="<?php echo $item['Product']['slug']; ?>.html"> 							  
                                 <?php echo $this->Html->image('/images/products/' . $item['Product']['image'], ['class' => 'px60']) ?>
								 </a>
                              </figure>
                              <div class="prod-info">
                                 <h3 class="prod-title">
								 <a href="<?php echo $item['Product']['slug']; ?>.html"> 
								 <?php echo $item['Product']['name'];?></a></h3>
                                 <?php
                                    $mods = 0;
                                    if(isset($item['Product']['productmod_name'])) :
                                    $mods = $item['Product']['productmod_id'];
                                    ?>
                                 <br />
                                 <small><?php echo $item['Product']['productmod_name']; ?></small>
                                 <?php endif; ?>
                                
                                 </div>
								 <div class="prod-info">
                                 <label>
                                                                Size :
                                                                <span><?php echo $item['size'];?></span>
                                                            </label>
															 <label>
                                                                Color :
                                                                <span><?php echo $item['color'];?></span>
                                                            </label>
                                 </div>
                              </div>
                           </td>
                           <td class="price" id="price-<?php echo $key; ?>"><span class="fa fa-inr"></span><?php echo $item['price']; ?></td>
                           <td class="qty">										 
                             <?php echo $item['quantity'];?> 									 
                           </td>
                           <td class="sub-total" id="subtotal_<?php echo $key; ?>"><span class="fa fa-inr"></span><?php echo $item['subtotal']; ?></td>
                           <td class="remove" id="<?php echo $key; ?>">										 
                           </td>
                        </tr>
                        <?php endforeach; ?>
						
						 <tr>
            <td class="text-right" colspan="4"><strong>Order Total:</strong></td>
            <td class="sub-total"><span class="fa fa-inr"></span><?php echo $shop['Order']['total']; ?></td>
          </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <!--End Cart Column-->
       
         <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="continue-column pull-left clearfix">
                  <a href="<?php echo $this->webroot;?>shop/cart" class="cart-button">Back to Cart</a>
               </div>
               <div class="continue-column pull-right clearfix">
                 <a href="shop/orderpayment" class="cart-button">Proceed to Payment</a>
				<!--  <button class="theme-btn btn-style-two proceed-btn">Complete Your Order</button> -->
               </div>
            </div>
         </div>
		 </br>
		   <?php echo $this->Form->end(); ?>
		   
      </section>
      <?php endif; ?>
   </div>
</div>