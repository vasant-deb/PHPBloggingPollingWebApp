<?php ?>
<?php 
if(count($ourblogs) > 0) { 
?>
 <div class="blog-testimonial-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="section-title text-center mb-35">
              <h2 class="text-uppercase"><strong>NEWS FROM THE BLOG</strong></h2>
              <p class="text-defualt">FROM THE BLOG</p>
              <img src="mwomen/images/section-border.png" alt=""> </div>
            <div class="blog-carousel indicator-style-two">
            
			  <?php foreach($ourblogs as $blog): ?>
              <div class="single-blog blog-bg">
                <div class="blog-img b-img"> <a href="blog-details.html"> <img alt="" src="images/blogs/<?php echo $blog['Blog']['image']; ?>"> </a> </div>
                <div class="blog-text p-20">
                  <h4 class="text-uppercase text-defualt"> <a href="blog-details.html"><?php echo $blog['Blog']['name']; ?></a> </h4>
                  <ul class="">
                    <li><a href="#"><?php 
$ab=$blog['Blog']['created'];
$date = strtotime($ab);
echo date('M jS', $date); ?></a></li>
                   <!-- <li><a href="#">Fashion</a></li>-->
                  </ul>
                  <p><?php echo $blog['Blog']['short_description']; ?></p>
                  <a class="btn-read-more text-uppercase text-defualt" href="blogs/<?php echo $blog['Blog']['slug']; ?>.html">read more</a>
                 
                </div>
              </div>
			  <?php endforeach; ?>
             
             
            </div>
          </div>
          <div class="col-md-4">
            <div class="section-title text-center mb-35">
              <h2 class="text-uppercase"><strong>WHAT CLIENTS SAY</strong></h2>
              <p class="text-defualt">TESTIMONIALS</p>
              <img src="mwomen/images/section-border.png" alt=""> </div>
            <div class="testimonial-list indicator-style">
              <div class="testimonial-inner">
                
				<?php foreach($testimonials as $testimonial): ?>
                <div class="single-testimonial blog-bg">
                  <div class="testimonial-img"> <a > <img src="images/testimonials/<?php echo $testimonial['Testimonial']['image']; ?>" alt="<?php echo $testimonial['Testimonial']['name']; ?>"> </a> </div>
                  <div class="testimonial-content">
                    <h5 class="text-uppercase text-defualt"><?php echo $testimonial['Testimonial']['name']; ?></h5>
                    <p class="m-0"><?php echo $testimonial['Testimonial']['short_description']; ?></p>
                  </div>
                </div>
              </div>
			  <?php endforeach; ?>
              
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog Area -->
    </section>
<?php } ?>