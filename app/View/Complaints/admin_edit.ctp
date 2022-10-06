   
<div class="container-fluid main-content">
    <div class="page-title">
      <h1> Edit Blog</h1>
    </div>
		
	
    <div class="row">
      <div class="col-lg-12">
        <div class="widget-container fluid-height clearfix">
          <div class="heading"> <i class="icon-reorder"></i>Blog Details </div>
          <div class="widget-content padded">
             <?php echo $this->Form->create('Complaint',array('enctype'=>'multipart/form-data','class' => 'form-horizontal'));
		echo $this->Form->input('id');

          ?>
		  
		 

				     <div class="form-group">
              
			  <label class="control-label col-md-2">Select Category</label>
                <div class="col-md-4">
				 
					 <?php echo $this->Form->input('category_id', array('class'=>'form-control col-md-3','label'=>'','empty' => true));?>	
                </div>
              
			   </div>
 
              <div class="form-group">
                <label class="control-label col-md-2">Title</label>
                <div class="col-md-7">
						<?php echo $this->Form->input('title', array('class'=>'form-control col-md-3','label'=>''));?>	 				  	
                </div>
              </div>
			  
			     
 				 
 		 

			  
			  	<div class="form-group">
                <label class="control-label col-md-2">Short Description</label>
                <div class="col-md-7">
 				   
				<?php echo $this->Form->input('short_description', array('class'=>'form-control col-md-3','label'=>''));?>	

                </div>
              </div>
			  
			  
			    	<div class="form-group">
                <label class="control-label col-md-2">Description</label>
                <div class="col-md-7">
 				   
				<?php echo $this->Form->input('description', array('class'=>'ckeditor form-control col-md-3','label'=>''));?>	

                </div>
              </div>
	  
	  
			   <div class="form-group">
                <label class="control-label col-md-2">Meta Title</label>
                <div class="col-md-7">
 				   
				<?php echo $this->Form->input('meta_title', array('class'=>'form-control col-md-3','label'=>''));?>	

                </div>
              </div>
			  
			     <div class="form-group">
                <label class="control-label col-md-2">Meta Keyword</label>
                <div class="col-md-7">
 				 
				<?php echo $this->Form->input('meta_keyword', array('class'=>'form-control col-md-3','label'=>''));?>	

                </div>
              </div>
			  
			    <div class="form-group">
			       <label class="control-label col-md-2">Meta Description</label>
                <div class="col-md-7">
 				  
				  
				  				<?php echo $this->Form->input('meta_desc', array('class'=>'form-control col-md-3','label'=>''));?>	

                </div>
              </div>
			  
			  
                  <div class="form-group">
                <label class="control-label col-md-2"></label>
                <div class="col-md-7">
                  <button class="btn btn-primary" type="submit">Submit</button>
                  <?php 
		   echo $this->Html->link("Cancel",
		   array( 'controller' => 'blogs', 'action' => 'index', 'admin' => true),
		    array('escape' => FALSE,'class' => 'btn btn-default-outline')); 
			?>
                </div>
              </div>
           <?php echo $this->Form->end(); ?>
          </div>
        </div>
      </div>
    </div>
	  </div>
	  
	     