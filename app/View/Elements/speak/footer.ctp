<?php ?>

       <footer id="footer">
            <section class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget widget_contact">
                            <h3 class="widget_title">Where We Are ?</h3>
                            <p><?php echo $footer_text; ?></p>
                            <ul>
                <li>Support Email Account : <?php echo $company_email; ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="ask-question.html">Ask Question</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="question.html">Questions</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="/privacy">Policy</a></li>
                                <li><a href="speakup.html">Speak Up</a></li>
                               <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget">
                            <h3 class="widget_title">Popular Questions</h3>
                            <ul class="related-posts">
							<?php foreach($latest_speak as $latest): ?>
                            <li class="related-item">
                                <h3><a href="speakup/<?php echo $latest['Complaint']['slug'];?>"><?php echo $latest['Complaint']['title'];?></a></h3>
                             
                                <div class="clear"></div><span><?php echo $latest['Complaint']['created_at'];?></span>
                            </li>
							<?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="widget">
					    <h3 class="widget_title">Follow Us</h3>
                    <ul style="display:inline-flex;list-style:none;">
					 
<li><a href="<?php echo $instagram_url; ?>" title="instagram"><img src="img/social/instagram.png" alt="instagram" title="instagram"></a></li>
<li><a href="<?php echo $facebook_url; ?>" title="facebook"><img src="img/social/facebook.png" alt="facebook" title="facebook"></a></li>
<li><a href="<?php echo $linkedin_url; ?>" title="linkedin"><img src="img/social/linkedin.png" alt="linkedin" title="linkedin"></a></li>

<li><a href="" title="twitter"><img src="img/social/twitter.png" alt="twitter" title="twitter"></a></li>
</ul>
                
                   
                </div>
                    </div>
                </div>
                <!-- End row -->
            </section>
            <!-- End container -->
        </footer>
        <!-- End footer -->
        <footer id="footer-bottom">
               
            <section class="container">
			 <div class="copyrights f_left"><?php echo $footer_text_title; ?></div>
                
                <!-- End social_icons -->
            </section>
            <!-- End container -->
        </footer>
        <!-- End footer-bottom -->
    </div>
    <!-- End wrap -->

    <div class="go-up"><i class="icon-chevron-up"></i></div>

    <!-- js -->
    <script src="speak/js/jquery.min.js"></script>
    <script src="speak/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="speak/js/jquery.easing.1.3.min.js"></script>
    <script src="speak/js/html5.js"></script>
    <script src="speak/js/twitter/jquery.tweet.js"></script>
    <script src="speak/js/jflickrfeed.min.js"></script>
    <script src="speak/js/jquery.inview.min.js"></script>
    <script src="speak/js/jquery.tipsy.js"></script>
    <script src="speak/js/tabs.js"></script>
    <script src="speak/js/jquery.flexslider.js"></script>
    <script src="speak/js/jquery.prettyPhoto.js"></script>
    <script src="speak/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="speak/js/jquery.scrollTo.js"></script>
    <script src="speak/js/jquery.nav.js"></script>
    <script src="speak/js/tags.js"></script>
    <script src="speak/js/jquery.bxslider.min.js"></script>
    <script src="speak/js/custom.js"></script>
    <!-- End js -->
 
   <script src="lib/js/config.js"></script>
    <script src="lib/js/util.js"></script>
    <script src="lib/js/jquery.emojiarea.js"></script>
    <script src="lib/js/emoji-picker.js"></script>
    <!-- End emoji-picker JavaScript -->
    <script>
      $(function() {
        // Initializes and creates emoji set from sprite sheet
        window.emojiPicker = new EmojiPicker({
          emojiable_selector: '[data-emojiable=true]',
          assetsPath: 'lib/img/',
          popupButtonClasses: 'fa fa-smile-o'
        });
        // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
        // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
        // It can be called as many times as necessary; previously converted input fields will not be converted again
        window.emojiPicker.discover();
      });
    </script>
     <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script> 
 

<script>
$(function() {
	$("#onpageContactForm").on('submit', function(event) {

		var $form = $(this);

		$.ajax({
			type: $form.attr('method'),
			url: $form.attr('action'),
			data: $form.serialize(),
			success: function() {
			    
 			$('#successmsg').html('Thank you for your feedback.');
		 	$('#successmsg').addClass('alert alert-success');
						 			 
			 $("#successmsg").show();
			 setTimeout(function() { $("#successmsg").hide(); }, 15000);
			 $('#contact-form form')[0].reset();			 
  			
			}
		});
		event.preventDefault();		 
	});
});
</script>

</body>

</html>