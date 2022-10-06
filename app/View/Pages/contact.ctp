<?php ?>
<style>
#header{
	    margin-bottom: 70px;
}
.question h2 {
   
    padding-right: 0px;
}
</style>
<section class="container main-content page-full-width">
		<div class="row">
			<div class="contact-us">
				<div class="col-md-7">
					<div class="page-content">
						<h2>Say hello !</h2>
						<p>We welcome your comments, suggestions and questions.</p>
						<form action="enquiries/add" class="form-style form-style-3 form-style-5 form-js" method="post">
						
		  <p id="successmsg"></p>
		  <input type="hidden" name="enquiry_for" value="Enquiry For Contact Us">
				<input type="hidden" name="page_url" value="<?php echo $this->Html->url( null, true ); ?>">	
							<div class="form-inputs clearfix">
								<p>
									<label for="name" class="required">Name<span>*</span></label>
									<input type="text" class="required-item" value="" name="name" id="name" aria-required="true">
								</p>
								<p>
									<label for="mail" class="required">E-Mail<span>*</span></label>
									<input type="email" class="required-item" id="mail" name="email" value="" aria-required="true">
								</p>
							</div>
							<div class="form-textarea">
								<p>
									<label for="message" class="required">Message<span>*</span></label>
									<textarea id="message" class="required-item" name="address" aria-required="true" cols="58" rows="7"></textarea>
								</p>
							</div>
							<p class="form-submit">
								<input name="submit" type="submit" value="Send" class="submit button small color">
							</p>
						</form>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-5">
					<div class="page-content">
						<h2>About Us</h2>
						<p></p>
						<div class="widget widget_contact">
							<ul>
								<li><i class="icon-envelope-alt"></i>E-mail :<p><?php echo $company_email; ?></p></li>
								<li>
									<i class="icon-share"></i>Social links :
									<p>
										<a href="#" original-title="Facebook" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#3b5997" span_hover="#2f3239" style="height: 25px; width: 25px; font-size: 12.5px; line-height: 25px; background-color: rgb(59, 89, 151); border-style: solid;">
													<i i_color="#FFF" class="social_icon-facebook" style="color: rgb(255, 255, 255);"></i>
												</span>
											</span>
										</a>
										<a href="#" original-title="Twitter" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#00baf0" span_hover="#2f3239" style="height: 25px; width: 25px; font-size: 12.5px; line-height: 25px; background-color: rgb(0, 186, 240); border-style: solid;">
													<i i_color="#FFF" class="social_icon-twitter" style="color: rgb(255, 255, 255);"></i>
												</span>
											</span>
										</a>
										<a original-title="Youtube" class="tooltip-n" href="#">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#cc291f" span_hover="#2f3239" style="height: 25px; width: 25px; font-size: 12.5px; line-height: 25px; background-color: rgb(204, 41, 31); border-style: solid;">
													<i i_color="#FFF" class="social_icon-youtube" style="color: rgb(255, 255, 255);"></i>
												</span>
											</span>
										</a>
										<a href="#" original-title="Linkedin" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#006599" span_hover="#2f3239" style="height: 25px; width: 25px; font-size: 12.5px; line-height: 25px; background-color: rgb(0, 101, 153); border-style: solid;">
													<i i_color="#FFF" class="social_icon-linkedin" style="color: rgb(255, 255, 255);"></i>
												</span>
											</span>
										</a>
										<a href="#" original-title="Google plus" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#ca2c24" span_hover="#2f3239" style="height: 25px; width: 25px; font-size: 12.5px; line-height: 25px; background-color: rgb(202, 44, 36); border-style: solid;">
													<i i_color="#FFF" class="social_icon-gplus" style="color: rgb(255, 255, 255);"></i>
												</span>
											</span>
										</a>
										<a original-title="RSS" class="tooltip-n" href="#">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#F18425" span_hover="#2f3239" style="height: 25px; width: 25px; font-size: 12.5px; line-height: 25px; background-color: rgb(241, 132, 37); border-style: solid;">
													<i i_color="#FFF" class="icon-rss" style="color: rgb(255, 255, 255);"></i>
												</span>
											</span>
										</a>
										<a original-title="Instagram" class="tooltip-n" href="#">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#306096" span_hover="#2f3239" style="height: 25px; width: 25px; font-size: 12.5px; line-height: 25px; background-color: rgb(48, 96, 150); border-style: solid;">
													<i i_color="#FFF" class="social_icon-instagram" style="color: rgb(255, 255, 255);"></i>
												</span>
											</span>
										</a>
										<a original-title="Dribbble" class="tooltip-n" href="#">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#e64281" span_hover="#2f3239" style="height: 25px; width: 25px; font-size: 12.5px; line-height: 25px; background-color: rgb(230, 66, 129); border-style: solid;">
													<i i_color="#FFF" class="social_icon-dribbble" style="color: rgb(255, 255, 255);"></i>
												</span>
											</span>
										</a>
										<a original-title="Pinterest" class="tooltip-n" href="#">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#c7151a" span_hover="#2f3239" style="height: 25px; width: 25px; font-size: 12.5px; line-height: 25px; background-color: rgb(199, 21, 26); border-style: solid;">
													<i i_color="#FFF" class="icon-pinterest" style="color: rgb(255, 255, 255);"></i>
												</span>
											</span>
										</a>
									</p>
								</li>
							</ul>
						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
			</div><!-- End contact-us -->
		</div><!-- End row -->
	</section>


			
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script> 
 

<script>
$(function() {
	$("#contact-form form").on('submit', function(event) {
		
		var $form = $(this);		
		$.ajax({
			type: $form.attr('method'),
			url: $form.attr('action'),
			data: $form.serialize(),
			success: function() {
 			$('#successmsg').html('Thank you for your enquiry with us, <br> Our representative will get in touch with you soon.');
		 	$('#successmsg').addClass(' alert alert-success');
						 			 
			 $("#successmsg").show();
			 setTimeout(function() { $("#successmsg").hide(); }, 15000);
			 $('#contact-form form')[0].reset();			 
  			
			}
		});
		event.preventDefault();		 
	});
});
</script>