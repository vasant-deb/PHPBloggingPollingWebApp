<?php ?>

 <div class="section-headline-wrap">
        <div class="section-headline">
            <h2><?php echo $product['Product']['name']; ?></h2>
            <p>Home<span class="separator">/</span>Products<span class="separator">/</span><span class="current-section"><?php echo $product['Product']['name']; ?></span></p>
        </div>
    </div>
    <!-- /SECTION HEADLINE -->
	<style>
	.alert-success {
    background-color: #dff0d8;
    border-color: #d6e9c6;
    color: #3c763d;
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
	
	</style>
<?php 
                         $msg = $this->Session->flash(); 
                         echo $msg; 
                         ?> 
    <!-- SECTION -->
    <div class="section-wrap">
        <div class="section">
		  <script src="js/addtocart.js"></script>
			<?php  echo $this->Form->create(NULL, array('url' => array('controller' => 'shop', 'action' => 'add'))); ?>
			<?php  echo $this->Form->input('id', array('type' => 'hidden', 'value' => $product['Product']['id'])); ?>
            <!-- SIDEBAR -->
            <div class="sidebar right">
                <!-- SIDEBAR ITEM -->
                <div class="sidebar-item void buttons">
                    <a href="<?php echo $this->webroot;?>shop/cart" class="button big dark purchase">
						<span class="primary"><?php echo $product['Product']['discounted_price']; ?></span> &nbsp;BUY NOW
						
					</a>
					 <input type="hidden" name="data[Product][product_size]" value="S">
			 <input type="hidden" name="data[Product][quantity]" value="1">
			 <input type="hidden" name="data[Product][color]" value="White">
                    <a href="#" class="button big primary wcart">
						<span class="icon-present"></span>Add to Cart
						
					</a>
                      <div class="buy-now"><a href="">Buy Now</a> <a class="button big primary wcart"><?php echo $this->Form->button('Add to Cart', array( 'id' => 'addtocart', 'id' => $product['Product']['id']));?></a></div>
                </div>
                <!-- /SIDEBAR ITEM -->

              

                <!-- SIDEBAR ITEM -->
                <div class="sidebar-item product-info">
                    <h4>Product Information</h4>
                    <hr class="line-separator">
                    <!-- INFORMATION LAYOUT -->
                    <div class="information-layout v2">
                        <!-- INFORMATION LAYOUT ITEM -->
                        <div class="information-layout-item">
                            <p class="text-header">Upload Date:</p>
                            <p>August 18th, 2015</p>
                        </div>
                        <!-- /INFORMATION LAYOUT ITEM -->

                        <!-- INFORMATION LAYOUT ITEM -->
                        <div class="information-layout-item">
                            <p class="text-header">Files Included:</p>
                            <p><?php echo $product['Product']['files_included']; ?></p>
                        </div>
                        <!-- /INFORMATION LAYOUT ITEM -->

                        <!-- INFORMATION LAYOUT ITEM -->
                        <div class="information-layout-item">
                            <p class="text-header">Framework:</p>
                            <p><?php echo $product['Product']['framework']; ?></p>
                        </div>
                        <!-- /INFORMATION LAYOUT ITEM -->

                        <!-- INFORMATION LAYOUT ITEM -->
                        <div class="information-layout-item">
                            <p class="tags primary"><span>Category:</span><a href="#"><?php echo $product['Category']['name']; ?></a></p>
                        </div>
                        <!-- /INFORMATION LAYOUT ITEM -->
                    </div>
                    <!-- INFORMATION LAYOUT -->
                </div>
                <!-- /SIDEBAR ITEM -->

                <!-- SIDEBAR ITEM -->
                

                <!-- SIDEBAR ITEM -->
                <div class="sidebar-item author-items-v2">
                    <h4>More Author's Items</h4>
                    <hr class="line-separator">
                    <!-- ITEM PREVIEW -->
                    <div class="item-preview">
                        <a href="#">
                            <figure class="product-preview-image small liquid">
                                <img src="images/items/miniverse_s.jpg" alt="">
                            </figure>
                        </a>
                        <a href="#">
                            <p class="text-header small">Miniverse - Hero Image Composer</p>
                        </a>
                        <p class="category tiny primary"><a href="#">Hero Image</a></p>
                        <p class="price"><span>$</span>14</p>
                    </div>
                    <!-- /ITEM PREVIEW -->

                    <!-- ITEM PREVIEW -->
                    <div class="item-preview">
                        <a href="#">
                            <figure class="product-preview-image small liquid">
                                <img src="images/items/patriot_s.jpg" alt="">
                            </figure>
                        </a>
                        <a href="#">
                            <p class="text-header small">The Patriot - Flyer Template</p>
                        </a>
                        <p class="category tiny primary"><a href="#">Flyers</a></p>
                        <p class="price"><span>$</span>6</p>
                    </div>
                    <!-- /ITEM PREVIEW -->

                    <!-- ITEM PREVIEW -->
                    <div class="item-preview">
                        <a href="#">
                            <figure class="product-preview-image small liquid">
                                <img src="images/items/pixel_s.jpg" alt="">
                            </figure>
                        </a>
                        <a href="#">
                            <p class="text-header small">Pixel Diamond Gaming Shop</p>
                        </a>
                        <p class="category tiny primary"><a href="#">Shopify</a></p>
                        <p class="price"><span>$</span>86</p>
                    </div>
                    <!-- /ITEM PREVIEW -->
                </div>
               
                
            </div>
            <!-- /SIDEBAR -->

            <!-- CONTENT -->
            <div class="content left">
                <!-- POST -->
                <article class="post">
                    <!-- POST IMAGE -->
                    <div class="post-image">
                        <figure class="product-preview-image large liquid">
                            <img src="images/products/<?php echo $product['Product']['full_image']; ?>"  title="<?php echo $product['Product']['full_image']; ?>" alt="<?php echo $product['Product']['full_image']; ?>">
                       
					   </figure>
                    </div>
                    <!-- /POST IMAGE -->

                    <!-- POST IMAGE SLIDES -->
                    <div class="post-image-slides">
                        <!-- SLIDE CONTROLS -->
                        <div class="slide-control-wrap">
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

                        <!-- IMAGE SLIDES WRAP -->
                        <div class="image-slides-wrap">
                            <!-- IMAGE SLIDES -->
                            <div class="image-slides" data-slide-visible-full="6" data-slide-visible-small="2" data-slide-count="9">
                                <!-- IMAGE SLIDE -->
								 <div class="image-slide selected">
                                    <div class="overlay"></div>
                                    <figure class="product-preview-image thumbnail liquid">
									  <img style="background-size:contain;" src="images/products/<?php echo $product['Product']['full_image']; ?>"  title="<?php echo $product['Product']['full_image']; ?>" alt="<?php echo $product['Product']['full_image']; ?>">
                       
								   </figure>
                                </div>
                               
                                <!-- /IMAGE SLIDE -->

                                <!-- IMAGE SLIDE -->
								<?php $i  = 0;
			  foreach($product['Productphoto'] as $gallery):$i++;

			  ?>
    <div class="image-slide">
                                    <div class="overlay"></div>
                                    <figure class="product-preview-image thumbnail liquid">
                                       
                                        <img src="images/productphotos/<?php echo $gallery['image']; ?>" title="<?php echo $product['Product']['full_image']; ?>" alt="<?php echo $product['Product']['full_image']; ?>">
                                   
                                    </figure>
                                </div>
                                <!-- /IMAGE SLIDE -->
								<?php endforeach;?>
                            </div>
                            <!-- IMAGE SLIDES -->
                        </div>
                        <!-- IMAGE SLIDES WRAP -->
                    </div>
                    <!-- /POST IMAGE SLIDES -->

                    <hr class="line-separator">

                    <!-- POST CONTENT -->
                    <div class="post-content">
                        <!-- POST PARAGRAPH -->
                        <div class="post-paragraph">
                            <h3 class="post-title">The Pack Contains:</h3>
                            <p><?php echo $product['Product']['short_description']; ?></p>
                        </div>
                        <!-- /POST PARAGRAPH -->

                        <!-- POST PARAGRAPH -->
                        <div class="post-paragraph">
                            <h3 class="post-title small">How to Install the Theme:</h3>
                            <p><?php echo $product['Product']['description']; ?></p>
                        </div>
                        <!-- /POST PARAGRAPH -->

                        <iframe src="<?php echo $product['Product']['youtube']; ?>" class="video"></iframe>

                        <div class="clearfix"></div>
                    </div>
                    <!-- /POST CONTENT -->

                    <hr class="line-separator">

                    <!-- SHARE -->
                    <div class="share-links-wrap">
                        <p class="text-header small">Share this:</p>
                        <!-- SHARE LINKS -->
                        <ul class="share-links hoverable">
                            <li><a href="#" class="fb"></a></li>
                            <li><a href="#" class="twt"></a></li>
                            <li><a href="#" class="db"></a></li>
                            <li><a href="#" class="rss"></a></li>
                            <li><a href="#" class="gplus"></a></li>
                        </ul>
                        <!-- /SHARE LINKS -->
                    </div>
                    <!-- /SHARE -->
                </article>
                <!-- /POST -->

                <!-- POST TAB -->
                <div class="post-tab">
                    <!-- TAB HEADER -->
                    <div class="tab-header primary">
                        <!-- TAB ITEM -->
                        <div class="tab-item selected">
                            <p class="text-header">Comments (35)</p>
                        </div>
                        <!-- /TAB ITEM -->

                        <!-- TAB ITEM -->
                        <div class="tab-item">
                            <p class="text-header">Buyers Corner</p>
                        </div>
                        <!-- /TAB ITEM -->

                        <!-- TAB ITEM -->
                        <div class="tab-item">
                            <p class="text-header">Item FAQs</p>
                        </div>
                        <!-- /TAB ITEM -->
                    </div>
                    <!-- /TAB HEADER -->

                    <!-- TAB CONTENT -->
                    <div class="tab-content void">
                        <!-- COMMENTS -->
                        <div class="comment-list">
                            <!-- COMMENT -->
                            <div class="comment-wrap">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_06.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->
                                <div class="comment">
                                    <p class="text-header">View as Customer</p>
                                    <!-- PIN -->
                                    <span class="pin greyed">Purchased</span>
                                    <!-- /PIN -->
                                    <p class="timestamp">5 Hours Ago</p>
                                    <a href="#" class="report">Report</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                            <!-- /COMMENT -->

                            <!-- LINE SEPARATOR -->
                            <hr class="line-separator">
                            <!-- /LINE SEPARATOR -->

                            <!-- COMMENT -->
                            <div class="comment-wrap">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_11.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->
                                <div class="comment">
                                    <p class="text-header">View as Author (Reply Option)</p>
                                    <p class="timestamp">8 Hours Ago</p>
                                    <a href="#" class="report">Report</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                            </div>
                            <!-- /COMMENT -->

                            <!-- COMMENT REPLY -->
                            <div class="comment-wrap comment-reply">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_09.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->

                                <!-- COMMENT REPLY FORM -->
                                <form class="comment-reply-form">
                                    <textarea name="treply1" placeholder="Write your comment here..."></textarea>
                                    <!-- CHECKBOX -->
                                    <input type="checkbox" id="notif1" name="notif1" checked>
                                    <label for="notif1">
										<span class="checkbox primary"><span></span></span>
										Receive email notifications
									</label>
                                    <!-- /CHECKBOX -->
                                    <button class="button primary">Post Comment</button>
                                </form>
                                <!-- /COMMENT REPLY FORM -->
                            </div>
                            <!-- /COMMENT REPLY -->

                            <!-- LINE SEPARATOR -->
                            <hr class="line-separator">
                            <!-- /LINE SEPARATOR -->

                            <!-- COMMENT -->
                            <div class="comment-wrap">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_12.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->
                                <div class="comment">
                                    <p class="text-header">View as Author (Replies)</p>
                                    <p class="timestamp">10 Hours Ago</p>
                                    <a href="#" class="report">Report</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>

                                <!-- COMMENT -->
                                <div class="comment-wrap">
                                    <!-- USER AVATAR -->
                                    <a href="user-profile.html">
                                        <figure class="user-avatar medium">
                                            <img src="images/avatars/avatar_09.jpg" alt="">
                                        </figure>
                                    </a>
                                    <!-- /USER AVATAR -->
                                    <div class="comment">
                                        <p class="text-header">Odin_Design</p>
                                        <!-- PIN -->
                                        <span class="pin">Author</span>
                                        <!-- /PIN -->
                                        <p class="timestamp">2 Hours Ago</p>
                                        <a href="#" class="report">Report</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                    </div>
                                </div>
                                <!-- /COMMENT -->

                                <!-- COMMENT -->
                                <div class="comment-wrap">
                                    <!-- USER AVATAR -->
                                    <a href="user-profile.html">
                                        <figure class="user-avatar medium">
                                            <img src="images/avatars/avatar_12.jpg" alt="">
                                        </figure>
                                    </a>
                                    <!-- /USER AVATAR -->
                                    <div class="comment">
                                        <p class="text-header">Customer Reply</p>
                                        <p class="timestamp">2 Hours Ago</p>
                                        <a href="#" class="report">Report</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam onsectetur elit</p>
                                    </div>
                                </div>
                                <!-- /COMMENT -->

                                <!-- COMMENT REPLY -->
                                <div class="comment-wrap comment-reply">
                                    <!-- USER AVATAR -->
                                    <a href="user-profile.html">
                                        <figure class="user-avatar medium">
                                            <img src="images/avatars/avatar_09.jpg" alt="">
                                        </figure>
                                    </a>
                                    <!-- /USER AVATAR -->

                                    <!-- COMMENT REPLY FORM -->
                                    <form class="comment-reply-form">
                                        <textarea name="treply2" placeholder="Write your comment here..."></textarea>
                                        <!-- CHECKBOX -->
                                        <input type="checkbox" id="notif2" name="notif2" checked>
                                        <label for="notif2">
											<span class="checkbox primary"><span></span></span>
											Receive email notifications
										</label>
                                        <!-- /CHECKBOX -->
                                        <button class="button primary">Post Comment</button>
                                    </form>
                                    <!-- /COMMENT REPLY FORM -->
                                </div>
                                <!-- /COMMENT REPLY -->
                            </div>
                            <!-- /COMMENT -->

                            <!-- LINE SEPARATOR -->
                            <hr class="line-separator">
                            <!-- /LINE SEPARATOR -->

                            <!-- COMMENT -->
                            <div class="comment-wrap">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_03.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->
                                <div class="comment">
                                    <p class="text-header">View as Customer</p>
                                    <p class="timestamp">6 Days Ago</p>
                                    <a href="#" class="report">Report</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                </div>
                            </div>
                            <!-- /COMMENT -->

                            <!-- LINE SEPARATOR -->
                            <hr class="line-separator">
                            <!-- /LINE SEPARATOR -->

                            <!-- PAGER -->
                            <div class="pager primary">
                                <div class="pager-item">
                                    <p>1</p>
                                </div>
                                <div class="pager-item active">
                                    <p>2</p>
                                </div>
                                <div class="pager-item">
                                    <p>3</p>
                                </div>
                                <div class="pager-item">
                                    <p>...</p>
                                </div>
                                <div class="pager-item">
                                    <p>17</p>
                                </div>
                            </div>
                            <!-- /PAGER -->

                            <div class="clearfix"></div>

                            <!-- LINE SEPARATOR -->
                            <hr class="line-separator">
                            <!-- /LINE SEPARATOR -->

                            <h3>Leave a Comment</h3>

                            <!-- COMMENT REPLY -->
                            <div class="comment-wrap comment-reply">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_09.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->

                                <!-- COMMENT REPLY FORM -->
                                <form class="comment-reply-form">
                                    <textarea name="treply1" placeholder="Write your comment here..."></textarea>
                                    <button class="button primary">Post Comment</button>
                                </form>
                                <!-- /COMMENT REPLY FORM -->
                            </div>
                            <!-- /COMMENT REPLY -->
                        </div>
                        <!-- /COMMENTS -->
                    </div>
                    <!-- /TAB CONTENT -->

                    <!-- TAB CONTENT -->
                    <div class="tab-content void">
                        <!-- COMMENTS -->
                        <div class="comment-list">
                            <!-- COMMENT -->
                            <div class="comment-wrap">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_02.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->
                                <div class="comment">
                                    <p class="text-header">MeganV.</p>
                                    <!-- PIN -->
                                    <span class="pin greyed">Purchased</span>
                                    <!-- /PIN -->
                                    <p class="timestamp">5 Hours Ago</p>
                                    <a href="#" class="report">Report</a>
                                    <p>I’ve recently bought your theme and let me say it’s fantastic! I have a small question regarding the main files and how to install the theme. Could you help me? Thanks!</p>
                                </div>
                            </div>
                            <!-- /COMMENT -->

                            <!-- COMMENT REPLY -->
                            <div class="comment-wrap comment-reply">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_09.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->

                                <!-- COMMENT REPLY FORM -->
                                <form class="comment-reply-form">
                                    <textarea name="treply10" placeholder="Write your comment here..."></textarea>
                                    <!-- CHECKBOX -->
                                    <input type="checkbox" id="notif10" name="notif10" checked>
                                    <label for="notif10">
										<span class="checkbox primary"><span></span></span>
										Receive email notifications
									</label>
                                    <!-- /CHECKBOX -->
                                    <button class="button primary">Post Comment</button>
                                </form>
                                <!-- /COMMENT REPLY FORM -->
                            </div>
                            <!-- /COMMENT REPLY -->

                            <!-- LINE SEPARATOR -->
                            <hr class="line-separator">
                            <!-- /LINE SEPARATOR -->

                            <!-- COMMENT -->
                            <div class="comment-wrap">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_19.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->
                                <div class="comment">
                                    <p class="text-header">Cloud Templates</p>
                                    <!-- PIN -->
                                    <span class="pin greyed">Purchased</span>
                                    <!-- /PIN -->
                                    <p class="timestamp">8 Hours Ago</p>
                                    <a href="#" class="report">Report</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                            </div>
                            <!-- /COMMENT -->

                            <!-- COMMENT REPLY -->
                            <div class="comment-wrap comment-reply">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_09.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->

                                <!-- COMMENT REPLY FORM -->
                                <form class="comment-reply-form">
                                    <textarea name="treply20" placeholder="Write your comment here..."></textarea>
                                    <!-- CHECKBOX -->
                                    <input type="checkbox" id="notif20" name="notif20" checked>
                                    <label for="notif20">
										<span class="checkbox primary"><span></span></span>
										Receive email notifications
									</label>
                                    <!-- /CHECKBOX -->
                                    <button class="button primary">Post Comment</button>
                                </form>
                                <!-- /COMMENT REPLY FORM -->
                            </div>
                            <!-- /COMMENT REPLY -->

                            <!-- LINE SEPARATOR -->
                            <hr class="line-separator">
                            <!-- /LINE SEPARATOR -->

                            <!-- COMMENT -->
                            <div class="comment-wrap">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_18.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->
                                <div class="comment">
                                    <p class="text-header">Lucy Diamond</p>
                                    <!-- PIN -->
                                    <span class="pin greyed">Purchased</span>
                                    <!-- /PIN -->
                                    <p class="timestamp">10 Hours Ago</p>
                                    <a href="#" class="report">Report</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>

                                <!-- COMMENT -->
                                <div class="comment-wrap">
                                    <!-- USER AVATAR -->
                                    <a href="user-profile.html">
                                        <figure class="user-avatar medium">
                                            <img src="images/avatars/avatar_09.jpg" alt="">
                                        </figure>
                                    </a>
                                    <!-- /USER AVATAR -->
                                    <div class="comment">
                                        <p class="text-header">Odin_Design</p>
                                        <!-- PIN -->
                                        <span class="pin">Author</span>
                                        <!-- /PIN -->
                                        <p class="timestamp">2 Hours Ago</p>
                                        <a href="#" class="report">Report</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                </div>
                                <!-- /COMMENT -->

                                <!-- COMMENT -->
                                <div class="comment-wrap">
                                    <!-- USER AVATAR -->
                                    <a href="user-profile.html">
                                        <figure class="user-avatar medium">
                                            <img src="images/avatars/avatar_18.jpg" alt="">
                                        </figure>
                                    </a>
                                    <!-- /USER AVATAR -->
                                    <div class="comment">
                                        <p class="text-header">Lucy Diamond</p>
                                        <!-- PIN -->
                                        <span class="pin greyed">Purchased</span>
                                        <!-- /PIN -->
                                        <p class="timestamp">2 Hours Ago</p>
                                        <a href="#" class="report">Report</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnada. Ut enim ad minim veniam onsectetur elit.</p>
                                    </div>
                                </div>
                                <!-- /COMMENT -->

                                <!-- COMMENT REPLY -->
                                <div class="comment-wrap comment-reply">
                                    <!-- USER AVATAR -->
                                    <a href="user-profile.html">
                                        <figure class="user-avatar medium">
                                            <img src="images/avatars/avatar_09.jpg" alt="">
                                        </figure>
                                    </a>
                                    <!-- /USER AVATAR -->

                                    <!-- COMMENT REPLY FORM -->
                                    <form class="comment-reply-form">
                                        <textarea name="treply30" placeholder="Write your comment here..."></textarea>
                                        <!-- CHECKBOX -->
                                        <input type="checkbox" id="notif30" name="notif30" checked>
                                        <label for="notif30">
											<span class="checkbox primary"><span></span></span>
											Receive email notifications
										</label>
                                        <!-- /CHECKBOX -->
                                        <button class="button primary">Post Comment</button>
                                    </form>
                                    <!-- /COMMENT REPLY FORM -->
                                </div>
                                <!-- /COMMENT REPLY -->
                            </div>
                            <!-- /COMMENT -->

                            <!-- LINE SEPARATOR -->
                            <hr class="line-separator">
                            <!-- /LINE SEPARATOR -->

                            <!-- PAGER -->
                            <div class="pager primary">
                                <div class="pager-item">
                                    <p>1</p>
                                </div>
                                <div class="pager-item active">
                                    <p>2</p>
                                </div>
                                <div class="pager-item">
                                    <p>3</p>
                                </div>
                                <div class="pager-item">
                                    <p>...</p>
                                </div>
                                <div class="pager-item">
                                    <p>17</p>
                                </div>
                            </div>
                            <!-- /PAGER -->

                            <div class="clearfix"></div>

                            <!-- LINE SEPARATOR -->
                            <hr class="line-separator">
                            <!-- /LINE SEPARATOR -->

                            <h3>Leave a Comment</h3>

                            <!-- COMMENT REPLY -->
                            <div class="comment-wrap comment-reply">
                                <!-- USER AVATAR -->
                                <a href="user-profile.html">
                                    <figure class="user-avatar medium">
                                        <img src="images/avatars/avatar_09.jpg" alt="">
                                    </figure>
                                </a>
                                <!-- /USER AVATAR -->

                                <!-- COMMENT REPLY FORM -->
                                <form class="comment-reply-form">
                                    <textarea name="treply100" placeholder="Write your comment here..."></textarea>
                                    <button class="button primary">Post Comment</button>
                                </form>
                                <!-- /COMMENT REPLY FORM -->
                            </div>
                            <!-- /COMMENT REPLY -->
                        </div>
                        <!-- /COMMENTS -->
                    </div>
                    <!-- /TAB CONTENT -->

                    <!-- TAB CONTENT -->
                    <div class="tab-content">
                        <!-- ITEM-FAQ -->
                        <div class="accordion item-faq primary">
                            <!-- ACCORDION ITEM -->
                            <div class="accordion-item">
                                <h6 class="accordion-item-header">Read Before Buying</h6>
                                <!-- SVG ARROW -->
                                <svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
                                <!-- /SVG ARROW -->
                                <div class="accordion-item-content">
                                    <h4>Bidding for the First Time</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    <h4>Winning the Auction</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                </div>
                            </div>
                            <!-- /ACCORDION ITEM -->

                            <!-- ACCORDION ITEM -->
                            <div class="accordion-item">
                                <h6 class="accordion-item-header">How Does Bidding Work?</h6>
                                <!-- SVG ARROW -->
                                <svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
                                <!-- /SVG ARROW -->
                                <div class="accordion-item-content">
                                    <h4>Bidding for the First Time</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    <h4>Winning the Auction</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                </div>
                            </div>
                            <!-- /ACCORDION ITEM -->

                            <!-- ACCORDION ITEM -->
                            <div class="accordion-item">
                                <h6 class="accordion-item-header">Our Return Policy</h6>
                                <!-- SVG ARROW -->
                                <svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
                                <!-- /SVG ARROW -->
                                <div class="accordion-item-content">
                                    <h4>Bidding for the First Time</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    <h4>Winning the Auction</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                </div>
                            </div>
                            <!-- /ACCORDION ITEM -->

                            <!-- ACCORDION ITEM -->
                            <div class="accordion-item">
                                <h6 class="accordion-item-header">Shipping and Delivery</h6>
                                <!-- SVG ARROW -->
                                <svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
                                <!-- /SVG ARROW -->
                                <div class="accordion-item-content">
                                    <h4>Bidding for the First Time</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    <h4>Winning the Auction</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                </div>
                            </div>
                            <!-- /ACCORDION ITEM -->

                            <!-- ACCORDION ITEM -->
                            <div class="accordion-item">
                                <h6 class="accordion-item-header">Quality Guarantee</h6>
                                <!-- SVG ARROW -->
                                <svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
                                <!-- /SVG ARROW -->
                                <div class="accordion-item-content">
                                    <h4>Bidding for the First Time</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    <h4>Winning the Auction</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                </div>
                            </div>
                            <!-- /ACCORDION ITEM -->
                        </div>
                        <!-- /ITEM-FAQ -->
                    </div>
                    <!-- /TAB CONTENT -->
                </div>
                <!-- /POST TAB -->
            </div>
            <!-- CONTENT -->
        </div>
    </div>
    <!-- /SECTION -->
