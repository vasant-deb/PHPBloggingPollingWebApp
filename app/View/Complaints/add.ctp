   <?php ?>
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
           <div class="breadcrumbs">
            <section class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Speak Up</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="crumbs">
                            <a href="#">Home</a>
                            <span class="crumbs-span">/</span>
                            <a href="#">Pages</a>
                            <span class="crumbs-span">/</span>
                            <span class="current">Speak Up</span>
                        </div>
                    </div>
                </div>
                <!-- End row -->
            </section>
            <!-- End container -->
        </div>
        <!-- End breadcrumbs -->

        <section class="container main-content">
            <div class="row">
                <div class="col-md-9">

                    <div class="page-content ask-question">
                        <div class="boxedtitle page-title">
                            <h2>Speak Up</h2>
                        </div>

                       
                        <div class="form-style form-style-3" id="question-submit">
                              <?php echo $this->Form->create('Complaint',array('enctype'=>'multipart/form-data','class' => 'form-horizontal'));?>
                                <div class="form-inputs clearfix">
                                    <p>
									<input type="hidden" name="data[Complaint][user_ip]" value="<?php echo $user_ip; ?>">
										<input type="hidden" name="data[Complaint][user_id]" value="<?php echo $this->Session->read('User.id'); ?>">
                                        <label class="required">Confession Title<span>*</span></label>
                                        <input type="text" name="data[Complaint][title]" id="question-title">
                                        <span class="form-description">Please choose an appropriate title for the confession.</span>
                                    </p>
                                  
                                    
                                        <label class="required">Category<span>*</span></label>
                                     
											 <?php echo $this->Form->input('category_id', array('class'=>'styled-select','label'=>'','empty' => false));?>	
									
                                        <span class="form-description">Please choose the appropriate section.</span>
                  
                                   
                                    <div class="clearfix"></div>
                                    

                                </div>
                                <div id="form-textarea">
                                    <p>
                                        <label class="required">Details<span>*</span></label>
                                        <textarea name="data[Complaint][description]" id="question-details" aria-required="true" cols="58" rows="8">Type the description thoroughly and in detail .</textarea>
                                       
                                    </p>
                                </div>
                                <p class="form-submit">
                                    <input type="submit" id="publish-question" value="Publish Your Confession" class="button color small submit">
                                </p>
                          <?php echo $this->Form->end(); ?>
                        </div>
                    </div>
                    <!-- End page-content -->
                </div>
                <?php echo $this->element('speak/aside'); ?>
            </div>
            <!-- End row -->
        </section>
		
	
                  <script>
                        CKEDITOR.replace( 'data[Complaint][description]' );
                </script>
