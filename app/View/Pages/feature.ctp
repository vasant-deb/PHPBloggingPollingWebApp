<?php ?>

<div class="breadcrumbs-area breadcrumbs-bg ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-inner">
                            <!--<h5 class="breadcrumbs-disc m-0">Best Products for you</h5>
                            <h2 class="breadcrumbs-title text-black m-0"> <span class="text-defualt"><?php echo $category['Category']['name']; ?></h2>-->
                            <ul class="top-page">
                                <li><a href="<?php echo $this->webroot; ?>">Home</a></li>
                                <li>&gt;</li>
                                <li><?php echo $page['Sitepage']['name']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<div class="product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-9 list-style">
                    
                     <!-- Start Product List -->
            <div class="product-list-tab modify-tnm">
                <div class="container">
                    <div class="row rp-style-2">
                        <div class="product-list tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="product-container-list rp-style-2">
                                   
									
								
				<?php 
				
				foreach ($homeproduct1 as $product_item):
		       
			   $frontImageurl = $this->Html->url('/images/products/'.$product_item['Product']['image']);
$backImageurl  = $this->Html->url('/images/products/'.$product_item['Product']['back_image']);
                 $ddthumbImageurl = "images/no-image.jpg";
				
				?> 
                                    <div class="product-inner cp-style-2 mt-30 col-3">
                                        <a href="<?php echo $product_item['Product']['slug']; ?>.html">
                                            <div class="product-img b-img">
											  <?php 
				if($product_item['Product']['image'] != '') {
				?>
                                                <img alt="" src="<?php echo $frontImageurl; ?>">
				<?php } else { ?>
				 <img alt="" src="<?php echo $ddthumbImageurl; ?>">
				<?php } ?>
                                            </div>
                                        </a>
										<?php 
				if($product_item['Product']['product_alt'] != '') {
				?>
                                     <span class="product-tag text-uppercase theme-bg"><?php echo $product_item['Product']['product_alt']; ?></span>
				<?php } ?>
                                       
                                        <div class="product-text pt-10">
                                           
                                            <ul class="pricing list-inline pull-right">
											<?php 
				if($product_item['Product']['discounted_price'] != '') {
				?>
                                                <li class="text-right c-price"><?php echo $product_item['Product']['discounted_price']; ?></li>
				<?php } ?>
				<?php 
				if($product_item['Product']['price'] != '') {
				?>
                                                <li class="text-right p-price"><?php echo $product_item['Product']['price']; ?></li>
				<?php } ?>
                                            </ul>
                                            <div class="clear"></div>
                                            <h6 class="product-name m-0">
                                                <a title="Tletria postma" href="<?php echo $product_item['Product']['slug']; ?>.html"><?php echo $product_item['Product']['name']; ?></a>
                                            </h6>
                                        </div>
                                    </div>
									 <?php endforeach; ?>
									
                                   
                                    
                                    
                                    
                                 
                                
                          
                              
                                    
                              
                                   
                              
                              
                               
                                </div>
                            </div>
                       
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- End Product List -->
                </div>
              
            </div>
        </div>
    </div>
</div>