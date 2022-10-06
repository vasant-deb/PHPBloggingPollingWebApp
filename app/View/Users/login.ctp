 <?php 
 $thumbImageurl = 'images/'.$sitelogo;
 ?>
    <!-- Login Screen -->
    <div class="login-wrapper" align="center">
	
	<div class="login-container">
	 <div class="page-title"><h1>Admin Panel</h1></div>
      <!--<img width="200" height="75" src="<?php echo $thumbImageurl;?>" />--> 
	  <div class="page-title">
<?php echo $this->Session->flash(); ?>
 <br>
 </div>
      
        <?php echo $this->Form->create('User', ['url' => ['action' => 'login']]); ?>
 
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-user"></i></span><input name="data[User][username]" class="form-control" placeholder="Username" type="text" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-lock"></i></span><input name="data[User][password]" class="form-control" placeholder="Password" type="password" required>
          </div>
        </div>
         <div class="text-left">
         </div>
        <input class="btn  btn-primary" type="submit" value="Login">
        
      <?php echo $this->Form->end(); ?>
    </div>
    </div>
    <!-- End Login Screen -->
   