<?php ?>
<div class="banner-area">
      <div class="container">
	  <?php foreach($homepages1 as $home1): ?>
        <div class="row rp-style">
          <div class="col-sm-4 cp-style">
            <div class="banner-inner"> <a class="test-popup-link banner-img" href="images/homepages/<?php echo $home1['Homepage']['image']; ?> "> <img src="images/homepages/<?php echo $home1['Homepage']['image']; ?> " > </a>
              <div class="banner-text banner-text-1"> <a href="<?php echo $home1['Homepage']['link_title']; ?>" class="banner-heading text-uppercase text-right"><?php echo $home1['Homepage']['text1']; ?></a>
                <h3 class="banner-title text-uppercase text-right"><?php echo $home1['Homepage']['text2']; ?></h3>
              </div>
            </div>
          </div>
		  <?php endforeach; ?>
		   <?php foreach($homepages2 as $home2): ?>
          <div class="col-sm-8 cp-style">
            <div class="row rp-style">
              <div class="col-sm-8 cp-style">
                <div class="banner-inner"> <a class="test-popup-link banner-img" href="images/homepages/<?php echo $home2['Homepage']['image']; ?>"> <img src="images/homepages/<?php echo $home2['Homepage']['image']; ?> " > </a>
                  <div class="banner-text banner-text-2 text-center"> <a href="<?php echo $home2['Homepage']['link_title']; ?>" class="banner-heading text-uppercase text-right"><?php echo $home2['Homepage']['text1']; ?></a>
                    <h3 class="banner-title-x text-uppercase"><?php echo $home2['Homepage']['text2']; ?></h3>
                    <h3 class="banner-title text-uppercase text-right"><?php echo $home2['Homepage']['text3']; ?></h3>
                  </div>
                </div>
              </div>
			  <?php endforeach; ?>
			   <?php foreach($homepages3 as $home3): ?>
              <div class="col-sm-4 cp-style">
                <div class="banner-inner"> <a class="test-popup-link banner-img" href="images/homepages/<?php echo $home3['Homepage']['image']; ?>"> <img src="images/homepages/<?php echo $home3['Homepage']['image']; ?>" > </a>
                  <div class="banner-text banner-text-3"> <a href="<?php echo $home3['Homepage']['link_title']; ?>" class="banner-heading text-uppercase text-right"><?php echo $home3['Homepage']['text1']; ?></a>
                    <h3 class="banner-title text-uppercase text-right"><?php echo $home3['Homepage']['text2']; ?></h3>
                  </div>
                </div>
              </div>
            </div>
			<?php endforeach; ?>
			 <?php foreach($homepages4 as $home4): ?>
            <div class="row rp-style mt-8">
              <div class="col-sm-4 cp-style">
                <div class="banner-inner"> <a class="test-popup-link banner-img" href="images/homepages/<?php echo $home4['Homepage']['image']; ?>"> <img src="images/homepages/<?php echo $home4['Homepage']['image']; ?>" > </a>
                  <div class="banner-text banner-text-4 text-right"> <a href="<?php echo $home4['Homepage']['link_title']; ?>" class="banner-heading text-uppercase text-right"><?php echo $home4['Homepage']['text1']; ?></a>
                    <h3 class="banner-title text-uppercase text-right"><?php echo $home4['Homepage']['text2']; ?></h3>
                  </div>
                </div>
              </div>
			  <?php endforeach; ?>
			   <?php foreach($homepages5 as $home5): ?>
              <div class="col-sm-8 cp-style">
                <div class="banner-inner m-0"> <a class="test-popup-link banner-img" href="images/homepages/<?php echo $home5['Homepage']['image']; ?>"> <img src="images/homepages/<?php echo $home5['Homepage']['image']; ?>" > </a>
                  <div class="banner-text banner-text-5 text-center"> <a href="<?php echo $home5['Homepage']['link_title']; ?>" class="banner-heading text-uppercase text-right text-white"><?php echo $home5['Homepage']['text1']; ?></a>
                    <h3 class="banner-title text-uppercase text-right text-white"><?php echo $home5['Homepage']['text1']; ?></h3>
                  </div>
                </div>
              </div>
			   <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>