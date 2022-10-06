<?php ?>
<div class="product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="row top-over">
        <div class="flexbin flexbin-margin">		
		        		<?php foreach($gallerys as $gallery): ?>
		    <a class="image-popup" href="<?php echo $gallery['Gallery']['page_url']; ?>"> <img src="images/galleries/<?php echo $gallery['Gallery']['image']; ?>" class="img-responsive img-rounded" alt=""></a>  
		        	<?php endforeach; ?>	
		   
         </div>       
      </div>

            </div>
        </div>
    </div>
</div>