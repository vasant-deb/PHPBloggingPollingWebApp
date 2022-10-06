<?php ?>
<footer id="footer" class="footer-area">
  
    <div class="footer-middle-area footer-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="single-footer-inner">
              <h5 class="footer-title text-white">CONTACT US</h5>
              <ul class="footer-contact">
                <li class="contact-icon"> <img alt="" src="mwomen/images/footer/icon/1.png"> </li>
                <li class="footer-text text-ash">
                  <p><?php echo $company_address; ?></p>
                </li>
              </ul>
              <ul class="footer-contact">
                <li class="contact-icon"> <img alt="" src="mwomen/images/footer/icon/2.png"> </li>
                <li class="footer-text text-ash">
                  <p>Telephone : <a href="tel:<?php echo $company_phone2; ?>"><?php echo $company_phone2; ?></p>
                 
                </li>
              </ul>
              <ul class="footer-contact">
                <li class="contact-icon"> <img alt="" src="mwomen/images/footer/icon/3.png"> </li>
                <li class="footer-text text-ash">
                  <p>Email : <a href="mailto:<?php echo $company_email; ?>"><?php echo $company_email; ?></a></p>
                  <p>Web : www.mwoman.in</p>
                </li>
              </ul>
			  <ul class="social-icon">
                <li><a href="<?php echo $facebook_url; ?>" target=_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="<?php echo $twitter_url; ?>" target=_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?php echo $linkedin_url; ?>" target=_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="<?php echo $googleplus_url; ?>" target=_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="<?php echo $instagram_url; ?>" target=_blank"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 col-sm-6">
            <div class="single-footer-inner">
              <h5 class="footer-title text-white">QUICK LINKS</h5>
              <ul class="footer-menu">
                <li><a href="<?php echo $this->webroot; ?>" title="Home">Home</a></li>
                <li><a href="about-us.html" title="About us">About us</a></li>
                <li><a href="contact-us.html" title="Contact us">Contact us</a></li>
                <li><a href="faq.html" title="Faq's">Faq's</a></li>
                <li><a href="shipping.html" title="Shipping">Shipping</a></li>
                <li><a href="policy.html" title="Privacy policy">Privacy policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 col-sm-3">
            <div class="single-footer-inner">
              <h5 class="footer-title text-white">SHOP</h5>
              <ul class="footer-menu">
			  <?php foreach ($categories as $category_data): ?>
		 
<?php $i=0;
foreach ($category_data['ChildCategory'] as $cate):
$i++;
 ?>	
                <li><a href="category/<?php echo  $category_data['Category']['slug']; ?>/<?php echo $cate['slug']; ?>.html"><?php echo $cate['name']; ?></a></li>
                <?php endforeach; ?>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
		  
		  
          <div class="col-md-4 col-sm-9">
            <h2 class="footer-title text-uppercase">newsletter   subscription</h2>
            <form>
									<div class="col-sm-12" style="padding:0px;">
                                        <div class="shop-select">
                                           <label class="control-label col-sm-4">
                                                Email address
                                                <span class="required">*</span>
                                            </label>
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>                                                
                                    </div>
									<div class="col-sm-12">
											<div class="order-button-payment mt-20">
												<input type="submit" name="submit" value="Submit">
											</div>
											<a href="http://swatifashionandlifestyle.com/" target="_blank" class="blk">Franchise</a>
									</div>
			</form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom-area">
      <div class="container">
        <div class="row">         
          
          <div class="col-md-10 col-sm-6 col-xs-12">
            <div class="copyright">
              <p>Copyright © 2018 Mwoman.in All Rights Reserved . Website Designed &amp; SEO By Web Click India <a href="http://www.webclickindia.com" target="_blank" title="Website Designing Company in Delhi india">Website Designing Company India</a> </p>
            </div>
          </div>
          <div class="col-md-2 hidden-sm hidden-xs">
            <nav>
              <ul class="footer-bottom-menu">
                <li><a href="sitemap.html">SiteMap</a></li>
                <!--<li><a href="our-presence.html">Market Area</a></li>-->
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- popup form -->
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      
      </div>
      <div class="modal-body">
        <img src="offer.png" class="img-responsive" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  
  
</div>
<script src="mwomen/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Bootstrap framework js -->
<script src="mwomen/js/bootstrap.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="mwomen/js/plugins.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="mwomen/js/main.js"></script>
 <script src="mwomen/js/zoom.js"></script>

  <script src="mwomen/js/jquery.elevatezoom.js"></script>

  <script>
    $('.zoom_01').elevateZoom({
    zoomWindowFadeIn: 500,
			zoomWindowFadeOut: 500,
			lensFadeIn: 500,
			lensFadeOut: 500
	   }); 
	  
	</script>
</body>
</html>
