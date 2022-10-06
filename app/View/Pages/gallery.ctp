<!--Page Info-->
  <section class="page-info">
    <!--Image Layer-->
    <div class="image-layer"></div>
    <div class="auto-container">
      <h2>Gallery</h2>
      <ul class="bread-crumb clearfix">
        <li><a href="<?php echo $this->webroot; ?>">Home</a></li>
        <li class="active">Gallery</li>
      </ul>
    </div>
  </section>
  <!--Classes Gallery Section-->
  <section class="classes-gallery">
    <div class="auto-container">
      <!--Default Filters Box-->
      <div class="row clearfix">
        <!--Default Class Column-->
		<?php foreach($gallerys as $gallery): ?>
        <div class="default-class-column col-md-4 col-sm-6 col-xs-12">
          <div class="inner-box">
            <figure class="image-box"><img src="images/galleries/<?php echo $gallery['Gallery']['image']; ?>" alt=""><a href="images/galleries/<?php echo $gallery['Gallery']['image']; ?>" class="lightbox-image" title="<?php echo $gallery['Gallery']['name']; ?>"><span class="icon flaticon-add-circular-button"></span></a></figure>
            </div>
        </div>
		<?php endforeach; ?>
      
      </div>
    </div>
  </section>
  <!--Main Footer-->