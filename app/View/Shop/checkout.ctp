<?php ?>

<div class="section-headline-wrap">
		<div class="section-headline">
			<h2>Login and Register</h2>
			<p>Home<span class="separator">/</span><span class="current-section">Login</span></p>
		</div>
	</div>
	<!-- /SECTION HEADLINE -->

	<!-- SECTION -->
	<div class="section-wrap">
		<div class="section demo">
			<!-- FORM POPUP -->
			<div class="form-popup">
				<!-- CLOSE BTN -->
				<div class="close-btn">
					<!-- SVG PLUS -->
					<svg class="svg-plus">
						<use xlink:href="#svg-plus"></use>
					</svg>
					<!-- /SVG PLUS -->
				</div>
				<!-- /CLOSE BTN -->

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<h4 class="popup-title">Login to your Account</h4>
					<!-- LINE SEPARATOR -->
					<hr class="line-separator">
					<!-- /LINE SEPARATOR -->
					 <form class="form-horizontal product-form" action="customer/login" method="post">
						<label for="username" class="rl-label">Email</label>
						<input type="email" name="email" required="required" placeholder="Enter your email here...">
						<label for="password" class="rl-label">Password</label>
						<input type="password" id="password" name="password" placeholder="Enter your password here...">
						<!-- CHECKBOX -->
						<input type="checkbox" id="remember" name="remember" checked>
						<label for="remember" class="label-check">
							<span class="checkbox primary primary"><span></span></span>
							Remember username and password
						</label>
						<!-- /CHECKBOX -->
						<p>Forgot your password? <a href="customer/forgot-password" class="primary">Click here!</a></p>
						<p>New User? <a href="customer/forgot-password" class="primary">Register here!</a></p>
						 <small id="emailHelp" class="form-text text-muted">
							<p>
							<?php 
							$msg = $this->Session->flash(); 
							echo $msg; 							
							?> 
							</p>
						   </small>		
						<input type="hidden" name="mode" value="login">
						<button class="button mid dark" type="submit">Login <span class="primary">Now!</span></button>
					</form>
					<!-- LINE SEPARATOR -->
					
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->

			<!-- FORM POPUP -->
			<div class="form-popup">
				<!-- CLOSE BTN -->
				<div class="close-btn">
					<!-- SVG PLUS -->
					<svg class="svg-plus">
						<use xlink:href="#svg-plus"></use>
					</svg>
					<!-- /SVG PLUS -->
				</div>
				<!-- /CLOSE BTN -->

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<h4 class="popup-title">Restore your Password</h4>
					<!-- LINE SEPARATOR -->
					<hr class="line-separator short">
					<!-- /LINE SEPARATOR -->
					<p class="spaced">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
					<form id="restore-pwd-form">
						<label for="email_address" class="rl-label">Email Address</label>
						<input type="email" id="email_address" name="email_address" placeholder="Enter your email address...">
						<!-- CHECKBOX -->
						<input type="checkbox" id="generate_pwd" name="generate_pwd" checked>
						<label for="generate_pwd" class="label-check">
							<span class="checkbox primary primary"><span></span></span>
							Generate new password
						</label>
						<!-- /CHECKBOX -->
						<button class="button mid dark no-space">Restore your <span class="primary">Password</span></button>
					</form>
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			</div>
			</div>