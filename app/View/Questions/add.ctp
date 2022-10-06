   <?php ?>
           <div class="breadcrumbs">
            <section class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Ask Question</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="crumbs">
                            <a href="#">Home</a>
                            <span class="crumbs-span">/</span>
                            <a href="#">Pages</a>
                            <span class="crumbs-span">/</span>
                            <span class="current">Ask Question</span>
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
                            <h2>Ask Question</h2>
                        </div>

                        <div class="form-style form-style-3" id="question-submit">
                              <?php echo $this->Form->create('Question',array('enctype'=>'multipart/form-data','class' => 'form-horizontal'));?>
                                <div class="form-inputs clearfix">
                                    <p>
									 <input type="hidden" name="data[Question][user_ip]" value="<?php echo $user_ip; ?>">
									 	<input type="hidden" name="data[Question][user_id]" value="<?php echo $this->Session->read('User.id'); ?>">
                                        <label class="required">Question Title<span>*</span></label>
                                        <input type="text" name="data[Question][title]" id="question-title">
                                        <span class="form-description">Please choose an appropriate title for the question to answer it even easier .</span>
                                    </p>
                                  
                                    
                                        
                                     
											 <?php echo $this->Form->input('category_id', array('class'=>'col-md-9 form-control','label'=>'Select Category','empty' => false));?>	
									<br>
									<div id="form-textarea">
                                    <p><br><br>
                                        <label class="required">Details<span>*</span></label>
                                        <textarea name="data[Question][description]" id="question-details" aria-required="true" cols="58" rows="8"></textarea>
                                        <span class="form-description">Type the description thoroughly and in detail .</span>
                                    </p>
                                </div>
                                        <span class="form-description">Please choose the appropriate section so easily search for your question .</span>
                  
                                   
                                    <div class="clearfix"></div>
                                    

                                </div>
                                
                                <p class="form-submit">
                                    <input type="submit" id="publish-question" value="Publish Your Question" class="button color small submit">
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
		
		
