            <!--testimonial-->
            <section class="testimonial-section ttm-row bg-layer break-991-colum">
                <div class="container">
                    <div class="row">
                        <!--Testimonials-->
                        <div class="col-md-12 col-lg-6">
                            <div class="col-bg-img-thirteen ttm-col-bgimage-yes ttm-bg ttm-left-span res-991-mt-0">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content"></div>
                            </div>
                            <img src="images/bg-image/col-bgimage-13.jpg" class="ttm-equal-height-image" alt="bg-image">
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="col-bg-img-ten ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-black ml_73 res-991-ml-0 ttm-col-bgimage-yes ttm-bgimage-yes padding-4">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="carousel-outer pr-10">
                                        <div class="section-title clearfix mb-30">
                                            <h4>TESTIMONAL</h4>
                                            <h2 class="title ttm-textcolor-white">Clients feedback</h2>
                                        </div>
                                        <!-- wrap-testimonial -->
                                        <div class="testimonial-slide owl-carousel" data-item="1" data-nav="false" data-dots="false" data-auto="false">
                                            <!-- testimonials -->
											<?php foreach($testimonials as $testimonial): ?>
                                            <div class="testimonials">
                                                <div class="testimonial-content mb-35">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-center" src="images/testimonials/<?php echo $testimonial['Testimonial']['image']; ?>" alt="<?php echo $testimonial['Testimonial']['name']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h6><?php echo $testimonial['Testimonial']['name']; ?></h6>
                                                        <label>Newyork City</label>
                                                    </div>
                                                    <blockquote><?php echo $testimonial['Testimonial']['short_description']; ?></blockquote>
                                                </div>
                                            </div>
                                            <!-- testimonials end -->
                                            <?php endforeach;?>
                                        </div>
                                        <!-- wrap-testimonial end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--left Column-end-->
                        <!--Testimonials-end-->
                    </div>
                </div>
            </section>
			
			
				 <section class="ttm-bgcolor-grey service-section2 bg-layer" style="margin-top:10px;margin-bottom:60px;">
                <div class="container">
                    <div class="row">
					<div class="col-md-12">
					<center> <h3 class="title">Facebook Feeds</h2></center></div>
                        <div class="col-md-6 col-lg-6">
                          <video width="550" height="310" controls="controls" type="video/mp4" id="vid1" poster="http://sonusharma.in/Videos/teaser-a.jpg">
<source src="http://sonusharma.in/Videos/udan.mp4" autostart="false">
</video>  
                        </div>
                        <div class="col-md-6">
                        <video width="550" height="310" controls="controls" type="video/mp4" id="vid1" poster="http://sonusharma.in/Videos/teaser-a.jpg">
<source src="http://sonusharma.in/Videos/udan.mp4" autostart="false">
</video>   
                        </div>
                    </div>
                </div>
            </section>