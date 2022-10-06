<?php ?>

	
	
<div class="breadcrumbs-area breadcrumbs-bg ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-inner">
                            <h5 class="breadcrumbs-disc m-0">Best Products for you</h5>
                    <h2 class="breadcrumbs-title text-black m-0">  <span class="text-defualt"> M</span>arket place</h2>
                            <ul class="top-page">
                                <li><a href="<?php echo $this->webroot; ?>">Home</a></li>
                                <li>&gt;</li>
                                <li>Market place</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <div class="market">
            <div class="container">
                <div class="col-md-9">
                        <div class="col-sm-9 col-md-9 col-lg-9">
    
            
 

<div class="clearfix"></div>
<?php  
			
			if(count($locations) > 0) {
			foreach ($locations as $location):
			
			?>
 <h4><?php echo ucwords(strtolower($location['Location']['name']));?></h4>
          <div class="col-md-12 four-cols-text mrkt">
            
           
            <ul class="list-icon theme-colored rounded">
			 <?php  
			 
				$child_locations = $location['ChildLocation'];
										if(count($child_locations) > 0) {
										foreach ($child_locations as $child_location):
			?>
            
      <li><i class="fa fa-hand-o-right"></i><a href="<?php echo h($child_location['slug']); ?>" title="<?php echo ucwords(strtolower($child_location['name']));?>" alt="<?php echo ucwords(strtolower($child_location['name']));?>"><?php echo ucwords(strtolower($child_location['name'])); ?></a></li>
      
      <?php endforeach; } ?>
            
  
 
</ul>




          </div>


   <?php endforeach; } ?>

          
          </div>
                </div>
               <?php echo  $this->element('mwomen/inquiry'); ?>
            </div>
        </div>

            
         