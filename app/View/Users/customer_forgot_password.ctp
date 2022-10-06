<?php ?>
<div class="breadcrumbs-area breadcrumbs-bg ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs-inner">
                            <h5 class="breadcrumbs-disc m-0">Best Products for you</h5>
                    <h2 class="breadcrumbs-title text-black m-0"> <span class="text-defualt">F</span>ORGET PASSWORD</h2>
                            <ul class="top-page">
                                <li><a href="<?php echo $this->webroot; ?>">Home</a></li>
                                <li>&gt;</li>
                                <li>Forget Password</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="checkout-page">
   <div class="container">
      <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="checkout_details_area checkout-1 mt-50 clearfix">
               <div class="row">
                 
                   <div class="col-md-12">
                     <h2>Forgot Your Password?</h2>
					 <hr>
                     <p>Enter the e-mail address associated with your account. Click Reset Your Password to have your password e-mailed to you.</p>
                        <form class="form-horizontal product-form" action="" method="post">
                        <div class="form-group">
                           <label for="email">Email address</label>
                           <input type="email" class="form-control" id="email"  name="email" required="required" aria-describedby="emailHelp" placeholder="Enter email">
                              
                           <small id="emailHelp" class="form-text text-muted">
							<p>
							<?php 
							$msg = $this->Session->flash(); 
							echo $msg; 							
							?> 
							</p>
						   </small>						  
                        </div>
                       
                        <input type="hidden" name="mode" value="forgot">
						<button  type="submit" class="cart-button text-uppercase mt-20">Reset Your Password</button>
                        
                        <a class="forget_password" href="customer/login">Login to Your Account</a>
                     </form>
					 </br>
                  </div>
               </div>
            </div>
         </div>
                   
      </div>
   </div>
</div>
          