<?php ?>
<?php echo $this->set('title_for_layout', 'Shopping Cart'); ?>
	<script src="emerald/js/vendor/jquery-3.1.0.min.js"></script>
<?php $this->Html->addCrumb('Shopping Cart'); ?>
<?php echo $this->App->js(); ?>
<?php echo $this->Html->script(['cart.js'], ['inline' => false]); ?>
<?php echo $this->fetch('script'); ?>


<div class="section-headline-wrap">
		<div class="section-headline">
			<h2>Shopping Cart</h2>
			<p>Home<span class="separator">/</span><span class="current-section">Shopping Cart</span></p>
		</div>
	</div>
	<!-- /SECTION HEADLINE -->

	<!-- SECTION -->
	<div class="section-wrap">
		<div class="section">
			<!-- SIDEBAR -->
			<div class="sidebar left">
				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item">
					<h4>Redeem Code</h4>
					<hr class="line-separator">
					<form id="coupon-code-form">
						<input type="text" name="coupon_code" placeholder="Enter your coupon code...">
						<button class="button mid dark-light">Apply Coupon Code</button>
					</form>
				</div>
				<!-- /SIDEBAR ITEM -->

				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item">
					<h4>Calculate Shipping</h4>
					<hr class="line-separator">
					<form id="shipping-form">
						<label for="country" class="select-block">
							<select name="country" id="country">
								<option value="0">Select your Country...</option>
								<option value="1">United States</option>
								<option value="2">Argentina</option>
								<option value="3">Brasil</option>
								<option value="4">Japan</option>
							</select>
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</label>
						<label for="state_city" class="select-block">
							<select name="state_city" id="state_city">
								<option value="0">Select your State/City...</option>
								<option value="1">New York</option>
								<option value="2">Buenos Aires</option>
								<option value="3">Brasilia</option>
								<option value="4">Tokyo</option>
							</select>
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</label>
						<input type="text" name="zip_code" placeholder="Enter your Zip Code...">
						<button class="button mid dark-light">Update Shipping Total</button>
					</form>
				</div>
				<!-- /SIDEBAR ITEM -->
			</div>
			<!-- /SIDEBAR -->

			<!-- CONTENT -->
			<div class="content right">
				<!-- CART -->
				<div class="cart">
					<!-- CART HEADER -->
					<div class="cart-header">
						<div class="cart-header-product">
							<p class="text-header small">Product Details</p>
						</div>
						<div class="cart-header-category">
							<p class="text-header small">Category</p>
						</div>
						<div class="cart-header-price">
							<p class="text-header small">Price</p>
						</div>
						<div class="cart-header-actions">
							<p class="text-header small">Remove</p>
						</div>
					</div>
					<!-- /CART HEADER -->
 <?php echo $this->Form->create(NULL, ['url' => ['controller' => 'shop', 'action' => 'cartupdate']]); ?>
                                    <?php if(empty($shop['OrderItem'])) : ?>
                                    Shopping Cart is empty.
                                    <?php else: ?>
									 <?php $tabindex = 1; ?>
                                          <?php foreach ($shop['OrderItem'] as $key => $item): ?>
					<!-- CART ITEM -->
					<div class="cart-item">
						<!-- CART ITEM PRODUCT -->
						<div class="cart-item-product">
							<!-- ITEM PREVIEW -->
							<div class="item-preview">
								<a href="item-v1.html">
									<figure class="product-preview-image small liquid">
										<?php echo $this->Html->image('/images/products/' . $item['Product']['image']); ?>
									</figure>
								</a>
								<a href="<?php echo $item['Product']['slug'];?>.html"><p class="text-header small"><?php echo $item['Product']['name'];?></p></a>
								
							</div>
							<!-- /ITEM PREVIEW -->
						</div>
						<!-- /CART ITEM PRODUCT -->

						<!-- CART ITEM CATEGORY -->
						<div class="cart-item-category">
							<a href="shop-gridview-v1.html" class="category primary"><?php echo $item['price']; ?></a>
						</div>
						<!-- /CART ITEM CATEGORY -->

						<!-- CART ITEM PRICE -->
						<div class="cart-item-price">
							<p class="price"><span>$</span><?php echo $item['price']; ?></p>
						</div>
						<!-- /CART ITEM PRICE -->

						<!-- CART ITEM ACTIONS -->
						<div class="cart-item-actions">
							<a href="#" class="button dark-light rmv">
								<!-- SVG PLUS -->
								<svg class="svg-plus">
									<use xlink:href="#svg-plus"></use>	
								</svg>
								<!-- /SVG PLUS -->
							</a>
						</div>
						<!-- /CART ITEM ACTIONS -->
					</div>
					<!-- /CART ITEM -->
 <?php endforeach; ?>
					<!-- CART ITEM -->
					
					<!-- /CART TOTAL -->
 <?php echo $this->Form->end(); ?>
					<!-- CART TOTAL -->
					<div class="cart-total">
						<p class="price medium"><span>$</span><?php echo $shop['Order']['total']; ?></p>
						<p class="text-header total">Cart Total</p>
					</div>
					<!-- /CART TOTAL -->

					<!-- CART ACTIONS -->
					<div class="cart-actions">
						<a href="shop/checkout" class="button mid primary">Proceed to Checkout</a>
						<a href="shop-gridview-v1.html" class="button mid dark-light spaced">Continue Browsing</a>
					</div>
					<!-- /CART ACTIONS -->
				</div>
				<!-- /CART -->
			</div>
			<!-- CONTENT -->
		</div>
	</div>
	<!-- /SECTION -->