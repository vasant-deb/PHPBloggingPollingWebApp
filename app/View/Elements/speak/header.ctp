<?php ?>
<?php header( "Cache-Control: no-cache, no-store, must-revalidate"); header( "Pragma: no-cache"); header( "Expires: 0"); ?>
<!-- HEADER -->
<!-- HEADER -->

<body>
    <div id="wrap" class="grid_1200">

     <!--   <div class="login-panel">
            <section class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-content">
                            <h2>Login</h2>
                            <div class="form-style form-style-3">
                                <form>
                                    <div class="form-inputs clearfix">
                                        <p class="login-text">
                                            <input type="text" value="Username" onfocus="if (this.value == 'Username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Username';}">
                                            <i class="icon-user"></i>
                                        </p>
                                        <p class="login-password">
                                            <input type="password" value="Password" onfocus="if (this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}">
                                            <i class="icon-lock"></i>
                                            <a href="#">Forget</a>
                                        </p>
                                    </div>
                                    <p class="form-submit login-submit">
                                        <input type="submit" value="Log in" class="button color small login-submit submit">
                                    </p>
                                    <div class="rememberme">
                                        <label><input type="checkbox" checked="checked"> Remember Me</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End page-content 
                    </div>
                    <!-- End col-md-6 
                    <div class="col-md-6">
                        <div class="page-content Register">
                            <h2>Register Now</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravdio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequa. Vivamus vulputate posuere nisl quis consequat.</p>
                            <a class="button color small signup">Create an account</a>
                        </div>
                        <!-- End page-content
                    </div>
                    <!-- End col-md-6 
                </div>
            </section>
        </div>
        <!-- End login-panel 

        <div class="panel-pop" id="signup">
            <h2>Register Now<i class="icon-remove"></i></h2>
            <div class="form-style form-style-3">
                <form>
                    <div class="form-inputs clearfix">
                        <p>
                            <label class="required">Username<span>*</span></label>
                            <input type="text">
                        </p>
                        <p>
                            <label class="required">E-Mail<span>*</span></label>
                            <input type="email">
                        </p>
                        <p>
                            <label class="required">Password<span>*</span></label>
                            <input type="password" value="">
                        </p>
                        <p>
                            <label class="required">Confirm Password<span>*</span></label>
                            <input type="password" value="">
                        </p>
                    </div>
                    <p class="form-submit">
                        <input type="submit" value="Signup" class="button color small submit">
                    </p>
                </form>
            </div>
        </div>
        <!-- End 

        <div class="panel-pop" id="lost-password">
            <h2>Lost Password<i class="icon-remove"></i></h2>
            <div class="form-style form-style-3">
                <p>Lost your password? Please enter your username and email address. You will receive a link to create a new password via email.</p>
                <form>
                    <div class="form-inputs clearfix">
                        <p>
                            <label class="required">Username<span>*</span></label>
                            <input type="text">
                        </p>
                        <p>
                            <label class="required">E-Mail<span>*</span></label>
                            <input type="email">
                        </p>
                    </div>
                    <p class="form-submit">
                        <input type="submit" value="Reset" class="button color small submit">
                    </p>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- End lost-password -->

        <div id="header-top">
            <section class="container clearfix">
                <nav class="header-top-nav">
                    <ul>
             <li><a href="speak-up.html">Confess Now</a></li>
						<li><a href="search.html">Search</a></li>
					   <li><a href="blog.html">Blog</a></li>
					  <li><a href="privacy"><i class="icon-headphones"></i>Privacy</a></li>
                      
						
                      <!--  <li><a href="login.html" id="login-panel"><i class="icon-user"></i>Login Area</a></li> -->
                    </ul>
                </nav>
                <div class="header-search">
                </div>
            </section>
            <!-- End container -->
        </div>
        <!-- End header-top -->
        <header id="header">
            <section class="container clearfix">
                <div class="logo"><a href="<?php echo $this->webroot;?>"><img alt="" src="images/<?php echo $sitelogo;?>" width="146px" height="57px"></a></div>
                <nav class="navigation">
                    <ul>
                        <li><a href="<?php echo $this->webroot;?>">Home</a></li>
							 <li class="active"><a href="speak-up.html">Confess Now</a></li>	
						 <li><a href="#" disable>Questions</a>
						 <ul>
						    <li><a href="question.html">Recent Questions</a></li>
                                <li><a href="trending-question.html">Trending Questions</a></li>
                            </ul>
						 </li>
                        <li><a href="ask-question.html">Ask Question</a></li>
						<li><a href="trending.html">Hot Confessions</a></li>
						 <li><a href="#" disable>Polls</a>
						  <ul>
						    <li><a href="poll.html">View Polls</a></li>
						    <li><a href="polls/add.html">Add Poll</a></li>
                            </ul>
						 
						 </li>
						<li><a href="search.html">Search</a></li>	
						<?php if(!empty($data)){ ?>
						<li><a href="#" disable>Hi <?php echo $data['User']['first_name'];?></a>
						 <ul>
						    <li><a href="/profile">My Account</a></li>
                                <li><a href="/users/sociallogout">Logout</a></li>
                            </ul>
						 </li>
                      <?php } else { ?>
                      <li><a href="/sociallogin">Login</a></li>
                      <?php }?>
						
                    </ul>
                </nav>
            </section>
            <!-- End container -->
        </header>
        <!-- End header -->
