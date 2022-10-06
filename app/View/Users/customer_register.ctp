<?php ?>

 <div class="register-area pt-90">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="registered-customers new-customers">
                                <div class="section-title text-uppercase mb-20">
                                    <h4>NEW CUSTOMERS</h4>
                                </div>
                           <?php 
                              $msg = $this->Session->flash(); 
                              echo $msg; 							
                              ?>
                           <?php echo $this->Form->create('User'); ?>
                           <input type="hidden" name="mode" value="register">
                           <div class="row clearfix">
                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                 <label for="email">First Name</label>
                                 <?php echo $this->Form->input('first_name', array('class'=>'form-control col-md-3','label'=>''));?>	
                              </div>
                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                 <label for="email">Last Name</label>
                                 <?php echo $this->Form->input('last_name', array('class'=>'form-control col-md-3','label'=>''));?>	
                              </div>
                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                 <label for="email">Email address</label>                                     
                                 <?php echo $this->Form->input('email', array('class'=>'form-control col-md-3','label'=>''));?>	
                              </div>
                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                 <label for="email">Phone</label>
                                 <?php echo $this->Form->input('phone', array('class'=>'form-control col-md-3','label'=>''));?>	
                              </div>
                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                 <label for="password">Password</label>
                                 <?php echo $this->Form->input('password', array('class'=>'form-control col-md-3','label'=>''));?>	
                              </div>
                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                 <label for="confirmpassword">Confirm Password</label>
                                 <!-- <input type="password" name="confirmpassword" required="required" class="form-control" id="confirmpassword" required> -->
                                 <?php echo $this->Form->input('confirmpassword', array('type' => 'password', 'class'=>'form-control col-md-3','label'=>'', 'required' => 'required'));?>	
                              </div>
                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                 <label for="email">Address Line 1</label>
                                 <?php echo $this->Form->input('address', array('class'=>'form-control col-md-3','label'=>''));?>	
                              </div>
                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                 <label for="email">Address Line 2</label>
                                 <?php echo $this->Form->input('address2', array('class'=>'form-control col-md-3','label'=>''));?>	
                              </div>
                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                 <label for="email">City</label>
                                 <?php echo $this->Form->input('city', array('class'=>'form-control col-md-3','label'=>''));?>	
                              </div>
                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                 <label for="email">State</label>
                                 <?php echo $this->Form->input('state', array('class'=>'form-control col-md-3','label'=>''));?>	
                              </div>
                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                 <label for="Country">Country</label>
                                 <select  name="country" class="form-control">
                                    <option value="">Select Country</option>
                                    <?php foreach ($countries as $item): ?>
                                    <option value="<?php echo $item['Country']['name'];?>"><?php echo $item['Country']['name'];?></option>
                                    <?php endforeach; ?>
                                 </select>
                              </div>
                              <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                 <label for="Zip">Zip / Postal Code</label>
                                 <?php echo $this->Form->input('zipcode', array('class'=>'form-control col-md-3','label'=>''));?>	
                              </div>
                           </div>
                           <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <button value="register" type="submit" class="cart-button text-uppercase mt-20">Register</button>
                           </div>
                           </form>
                        </div>
                     </div>
                  </div>
                
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   var password = document.getElementById("UserPassword");
    var confirmpassword = document.getElementById("UserConfirmpassword");
   
   function validatePassword(){
     if(password.value != confirmpassword.value) {
       confirmpassword.setCustomValidity("Passwords Don't Match");
     } else {
       confirmpassword.setCustomValidity('');
     }
   }
   
   password.onchange = validatePassword;
   confirmpassword.onkeyup = validatePassword;
</script>