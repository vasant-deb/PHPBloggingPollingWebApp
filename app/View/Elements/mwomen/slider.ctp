 <?php   
if(count($banners) > 0) { 
?>
 <section class="slider-container">
   
    <div id="mainSlider" class="nivoSlider slider-image">
    <?php 

foreach ($banners as $banner):
 $thumbImageurl = 'images/banners/'.$banner['Banner']['image'];
$Imageurl = "http://www.placehold.it/1920x683/EFEFEF/AAAAAA&amp;text=no+image";
$Imageurl = ($banner['Banner']['image'] != '')?$thumbImageurl:$Imageurl;
$name= $banner['Banner']['name'];
$url= $banner['Banner']['page_url'];
 
?>
   <a href="<?php echo $url; ?> "> <img src=" <?php echo $thumbImageurl; ?>" alt="<?php echo $name; ?>" /></a>
   
   <?php endforeach; ?>
    </div>
  </section>
  <?php } ?>