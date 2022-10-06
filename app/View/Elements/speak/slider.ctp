<?php ?>
<style>
@media screen and (min-width: 768px){
	.carousel{
	    margin-top: 70px;
	}
	}
	@media screen and (max-width: 768px){
	.header-default.header-transparent {
	    position: relative;
	    top: 0px;
	}
	}
</style>

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
   <ol class="carousel-indicators">
     <?php 
$i=0;
foreach($banners as $banner){

$name= $banner['Banner']['name'];
$url= $banner['Banner']['page_url'];
$description= $banner['Banner']['description'];

if ($i == 0) {
    $status="active";
} else {
   $status="";
}

$i++;

?>
      <li data-target="#carouselExampleIndicators" data-slide-to="<?=$i;?>" class="<?=$status;?>"></li>
<?php } ?>
   </ol>
   <div class="carousel-inner">
   <?php 
$i=0;
foreach($banners as $banner){

$name= $banner['Banner']['name'];
$url= $banner['Banner']['page_url'];
$description= $banner['Banner']['description'];



if ($i == 0) {
    $status="active";
} else {
   $status="";
}

$i++;

?>
      <div class="carousel-item <?=$status;?>" style="<?=$description;?>">
         <div class="mask flex-center">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-7 col-12 order-md-1 order-2">
                     <div class="carousel_caption">
                        <h1>Appearance</h1>
                        <h2>Your choice has been approved</h2>
                        <p>It is a long established fact that a reader will be happy</p>
                        <a href="#">View Now</a>
                     </div>
                  </div>
                  <div class="col-md-5 col-12 order-md-2 order-1"><img src="images/banners/<?=$banner['Banner']['image'];?>" class="mx-auto" alt="<?=$name;?>"></div>
               </div>
            </div>
         </div>
      </div>
	 
<?php } ?>
 
   </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>
</div>