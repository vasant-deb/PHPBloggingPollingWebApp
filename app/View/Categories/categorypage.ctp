<?php
Configure::write('debug', 0);  
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
							 <?php foreach($categories_speak as $trend): ?>
							  <div class="col-md-6 col-lg-6">
								 <article class="question question-type-normal">
                                    <h2>
                                        <a href="speakup/<?php echo $trend['Complaint']['slug'];?>"><?php echo $trend['Complaint']['title'];?></a>
                                    </h2>
                    
                                    <div class="question-inner">
                                        <div class="clearfix"></div>
                                        <p class="question-desc"><?php echo substr($trend['Complaint']['description'],0,200); ?>....</p> 
                                        <span class="question-category"><a href="#"><i class="icon-folder-close"></i><?php echo $trend['Category']['name'];?></a></span>
                                        <span class="question-date"><i class="icon-time"></i><?php echo $trend['Complaint']['created_at'];?></span>
                                        <span class="question-view"><i class="icon-user"></i><?php echo $trend['Complaint']['views'];?> views</span>
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