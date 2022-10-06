<?php
Configure::write('debug', 0);  
//echo $this->element('emerald/slider');
//echo $this->element('emerald/services');
//echo $this->element('emerald/newproducts');
//echo $this->element('emerald/featuredproducts');
//echo $this->element('emerald/wideproduct');
//echo $this->element('emerald/bestseller');
//echo $this->element('emerald/homeblog');
//echo $this->element('emerald/newarrivals');
//echo $this->element('emerald/hotdeals');
//echo $this->element('emerald/offer');
//echo $this->element('emerald/productstag');
//echo $this->element('emerald/specialdeals');
//echo $this->element('emerald/newsletter');
//echo $this->element('emerald/testimonials');
?>
<style>
#header{
	    margin-bottom: 70px;
}
.question h2 {
   
    padding-right: 0px;
}
</style>			
				
        <section class="container-fluid main-content">
            <div class="row">
                <div class="col-md-9 col-lg-9">

                    <div class="tabs-warp question-tab">
                        <ul class="tabs" style="display:none;">
                            <li class="tab"><a href="#" class="current">Speak Up</a></li>
                            <li class="tab"><a href="#">Most Responses</a></li>
                            <li class="tab"><a href="#">Recent Questions</a></li>
                        </ul>
                        <div class="tab-inner-warp">
                            <div class="tab-inner">
							 <?php foreach($trending as $trend): ?>
							  <div class="col-md-6 col-lg-6">
								 <article class="question question-type-normal">
                                    <h2>
                                        <a href="question/<?php echo $trend['Question']['slug'];?>"><?php echo $trend['Question']['title'];?></a>
                                    </h2>
                    
                                    <div class="question-inner">
                                        <div class="clearfix"></div>
                                        
                                        
                                        <span class="question-category"><a href="#"><i class="icon-folder-close"></i><?php echo $trend['Category']['name'];?></a></span>
                                        <span class="question-date"><i class="icon-time"></i><?php echo $trend['Question']['created_at'];?></span>
                                      
                                        <span class="question-view"><i class="icon-user"></i><?php echo $trend['Question']['views'];?> views</span>
                                        <div class="clearfix"></div>
                                    </div>
                                </article>
								</div>
								<?php endforeach; ?>
                                
                                                           </div>
                        </div>
						
						
               
                    </div>
                    <!-- End page-content -->
                </div>
                 <?php echo $this->element('speak/aside'); ?>
            </div>
            <!-- End row -->
        </section>
        <!-- End container -->