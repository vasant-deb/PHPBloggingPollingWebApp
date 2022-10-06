<?php ?>

<!-- PRODUCT SIDESHOW -->
    <!-- CATEGORY NAV -->
    <div class="category-nav-wrap">
        <div class="category-nav primary">
            <div class="category-tabs">
                <div class="category-tab">
                    <p>Trending</p>
                </div>

                <div class="category-tab">
                    <p>New Products</p>
                </div>

                <div class="category-tab">
                    <p>Following</p>
                </div>
            </div>

            <!-- SLIDE CONTROLS -->
            <div class="slide-control-wrap primary">
                <div class="slide-control left">
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
                    <!-- /SVG ARROW -->
                </div>

                <div class="slide-control right">
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
                    <!-- /SVG ARROW -->
                </div>
            </div>
            <!-- /SLIDE CONTROLS -->
        </div>
    </div>
    <!-- /CATEGORY NAV -->

    <!-- PRODUCT SIDESHOW -->
    <div id="product-sideshow-wrap">
        <div id="product-sideshow">
            <!-- PRODUCT SHOWCASE -->
            <div class="product-showcase tabbed">
                <!-- PRODUCT LIST -->
                <div class="product-list grid column4-wrap">
				<?php $i=0;foreach($homeproduct as $products):$i++;
 $frontImageurl1 = $this->Html->url('/images/products/'.$products['Product']['image']);
$backImageurl1  = $this->Html->url('/images/products/'.$products['Product']['full_image']);
                 $ddthumbImageurl = "images/no-image.jpg";
				?>
                    <!-- PRODUCT ITEM -->
                    <div class="product-item column">
                        <!-- PRODUCT PREVIEW ACTIONS -->
                        <div class="product-preview-actions">
                            <!-- PRODUCT PREVIEW IMAGE -->
                            <figure class="product-preview-image">
                                <img src="<?php echo $frontImageurl1; ?>" alt="product-image">
                            </figure>
                            <!-- /PRODUCT PREVIEW IMAGE -->

                           <!-- PREVIEW ACTIONS -->
                            <div class="preview-actions">
                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                    <a href="<?php echo $products['Product']['slug']; ?>.html">
                                        <div class="circle tiny primary">
                                            <span class="icon-tag"></span>
                                        </div>
                                    </a>
                                    <a href="<?php echo $products['Product']['slug']; ?>.html">
                                        <p>Go to Item</p>
                                    </a>
                                </div>
                                <!-- /PREVIEW ACTION -->

                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                    <a href="#">
                                        <div class="circle tiny secondary">
                                            <span class="icon-heart"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <p>Favourites +</p>
                                    </a>
                                </div>
                                <!-- /PREVIEW ACTION -->
                            </div>
                        </div>
                        <!-- /PRODUCT PREVIEW ACTIONS -->

                        <!-- PRODUCT INFO -->
                        <div class="product-info">
                            <a href="<?php echo $products['Product']['slug']; ?>.html">
                                <p class="text-header"><?php echo $products['Product']['name']; ?></p>
                            </a>
                            <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                            <a href="<?php echo $products['Product']['slug']; ?>.html">
                                <p class="category primary"><?php echo $products['Product']['framework']; ?></p>
                            </a>
                            <p class="price"><span>$</span><?php echo $products['Product']['discounted_price']; ?></p>
                        </div>
                        <!-- /PRODUCT INFO -->
                        <hr class="line-separator">

                        <!-- USER RATING -->
                        <div class="user-rating">
                            <a href="<?php echo $products['Product']['slug']; ?>.html">
                                <figure class="user-avatar small">
                                    <img src="emerald/images/avatars/avatar_09.jpg" alt="user-avatar">
                                </figure>
                            </a>
                            <a href="<?php echo $products['Product']['slug']; ?>.html">
                                <p class="text-header tiny"><?php echo $products['Product']['files_included']; ?></p>
                            </a>
                            <ul class="rating tooltip" title="Author's Reputation">
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item empty">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                            </ul>
                        </div>
                        <!-- /USER RATING -->
                    </div>
                    <!-- /PRODUCT ITEM -->
<?php endforeach; ?>
                
                </div>
                <!-- /PRODUCT LIST -->
            </div>
            <!-- /PRODUCT SHOWCASE -->

            <!-- PRODUCT SHOWCASE -->
              <div class="product-showcase tabbed">
                <!-- PRODUCT LIST -->
                <div class="product-list grid column4-wrap">
				<?php $i=0;foreach($homeproduct as $products):$i++;
 $frontImageurl1 = $this->Html->url('/images/products/'.$products['Product']['image']);
$backImageurl1  = $this->Html->url('/images/products/'.$products['Product']['full_image']);
                 $ddthumbImageurl = "images/no-image.jpg";
				?>
                    <!-- PRODUCT ITEM -->
                    <div class="product-item column">
                        <!-- PRODUCT PREVIEW ACTIONS -->
                        <div class="product-preview-actions">
                            <!-- PRODUCT PREVIEW IMAGE -->
                            <figure class="product-preview-image">
                                <img src="<?php echo $frontImageurl1; ?>" alt="product-image">
                            </figure>
                            <!-- /PRODUCT PREVIEW IMAGE -->

                           <!-- PREVIEW ACTIONS -->
                            <div class="preview-actions">
                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                    <a href="<?php echo $products['Product']['slug']; ?>.html">
                                        <div class="circle tiny primary">
                                            <span class="icon-tag"></span>
                                        </div>
                                    </a>
                                    <a href="<?php echo $products['Product']['slug']; ?>.html">
                                        <p>Go to Item</p>
                                    </a>
                                </div>
                                <!-- /PREVIEW ACTION -->

                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                    <a href="#">
                                        <div class="circle tiny secondary">
                                            <span class="icon-heart"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <p>Favourites +</p>
                                    </a>
                                </div>
                                <!-- /PREVIEW ACTION -->
                            </div>
                        </div>
                        <!-- /PRODUCT PREVIEW ACTIONS -->

                        <!-- PRODUCT INFO -->
                        <div class="product-info">
                            <a href="<?php echo $products['Product']['slug']; ?>.html">
                                <p class="text-header"><?php echo $products['Product']['name']; ?></p>
                            </a>
                            <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                            <a href="<?php echo $products['Product']['slug']; ?>.html">
                                <p class="category primary"><?php echo $products['Product']['framework']; ?></p>
                            </a>
                            <p class="price"><span>$</span><?php echo $products['Product']['discounted_price']; ?></p>
                        </div>
                        <!-- /PRODUCT INFO -->
                        <hr class="line-separator">

                        <!-- USER RATING -->
                        <div class="user-rating">
                            <a href="<?php echo $products['Product']['slug']; ?>.html">
                                <figure class="user-avatar small">
                                    <img src="emerald/images/avatars/avatar_09.jpg" alt="user-avatar">
                                </figure>
                            </a>
                            <a href="<?php echo $products['Product']['slug']; ?>.html">
                                <p class="text-header tiny"><?php echo $products['Product']['files_included']; ?></p>
                            </a>
                            <ul class="rating tooltip" title="Author's Reputation">
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item empty">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                            </ul>
                        </div>
                        <!-- /USER RATING -->
                    </div>
                    <!-- /PRODUCT ITEM -->
<?php endforeach; ?>
                
                </div>
                <!-- /PRODUCT LIST -->
            </div>
            <!-- /PRODUCT SHOWCASE -->

            <!-- PRODUCT SHOWCASE -->
             <div class="product-showcase tabbed">
                <!-- PRODUCT LIST -->
                <div class="product-list grid column4-wrap">
				<?php $i=0;foreach($homeproduct as $products):$i++;
 $frontImageurl1 = $this->Html->url('/images/products/'.$products['Product']['image']);
$backImageurl1  = $this->Html->url('/images/products/'.$products['Product']['full_image']);
                 $ddthumbImageurl = "images/no-image.jpg";
				?>
                    <!-- PRODUCT ITEM -->
                    <div class="product-item column">
                        <!-- PRODUCT PREVIEW ACTIONS -->
                        <div class="product-preview-actions">
                            <!-- PRODUCT PREVIEW IMAGE -->
                            <figure class="product-preview-image">
                                <img src="<?php echo $frontImageurl1; ?>" alt="product-image">
                            </figure>
                            <!-- /PRODUCT PREVIEW IMAGE -->

                           <!-- PREVIEW ACTIONS -->
                            <div class="preview-actions">
                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                    <a href="<?php echo $products['Product']['slug']; ?>.html">
                                        <div class="circle tiny primary">
                                            <span class="icon-tag"></span>
                                        </div>
                                    </a>
                                    <a href="<?php echo $products['Product']['slug']; ?>.html">
                                        <p>Go to Item</p>
                                    </a>
                                </div>
                                <!-- /PREVIEW ACTION -->

                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                    <a href="#">
                                        <div class="circle tiny secondary">
                                            <span class="icon-heart"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <p>Favourites +</p>
                                    </a>
                                </div>
                                <!-- /PREVIEW ACTION -->
                            </div>
                        </div>
                        <!-- /PRODUCT PREVIEW ACTIONS -->

                        <!-- PRODUCT INFO -->
                        <div class="product-info">
                            <a href="<?php echo $products['Product']['slug']; ?>.html">
                                <p class="text-header"><?php echo $products['Product']['name']; ?></p>
                            </a>
                            <p class="product-description">Lorem ipsum dolor sit urarde...</p>
                            <a href="<?php echo $products['Product']['slug']; ?>.html">
                                <p class="category primary"><?php echo $products['Product']['framework']; ?></p>
                            </a>
                            <p class="price"><span>$</span><?php echo $products['Product']['discounted_price']; ?></p>
                        </div>
                        <!-- /PRODUCT INFO -->
                        <hr class="line-separator">

                        <!-- USER RATING -->
                        <div class="user-rating">
                            <a href="<?php echo $products['Product']['slug']; ?>.html">
                                <figure class="user-avatar small">
                                    <img src="emerald/images/avatars/avatar_09.jpg" alt="user-avatar">
                                </figure>
                            </a>
                            <a href="<?php echo $products['Product']['slug']; ?>.html">
                                <p class="text-header tiny"><?php echo $products['Product']['files_included']; ?></p>
                            </a>
                            <ul class="rating tooltip" title="Author's Reputation">
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                                <li class="rating-item empty">
                                    <!-- SVG STAR -->
                                    <svg class="svg-star">
										<use xlink:href="#svg-star"></use>
									</svg>
                                    <!-- /SVG STAR -->
                                </li>
                            </ul>
                        </div>
                        <!-- /USER RATING -->
                    </div>
                    <!-- /PRODUCT ITEM -->
<?php endforeach; ?>
                
                </div>
                <!-- /PRODUCT LIST -->
            </div>
            <!-- /PRODUCT SHOWCASE -->

            <a href="#" class="button big dark"><span>Load More</span> Products</a>
        </div>
    </div>
    <!-- /PRODUCT SIDESHOW -->