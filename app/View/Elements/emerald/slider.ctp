<?php ?>
<?php   
if(count($banners) > 0) { 
?>
<!-- BANNER -->
<?php 

foreach ($banners as $banner):
 $thumbImageurl = 'images/banners/'.$banner['Banner']['image'];
$Imageurl = "http://www.placehold.it/1920x683/EFEFEF/AAAAAA&amp;text=no+image";
$Imageurl = ($banner['Banner']['image'] != '')?$thumbImageurl:$Imageurl;
$name= $banner['Banner']['name'];
$url= $banner['Banner']['page_url'];
 
?>
    <div class="banner-wrap" style="background:url(<?php echo $thumbImageurl; ?>) center center / cover no-repeat;">
        <section class="banner">
          
            
			<?php endforeach; ?>
            
           
        </section>
    </div>
<?php }?>
    <!-- /BANNER -->