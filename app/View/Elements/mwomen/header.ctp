<?php /* ?>
<div class="wrapper">
   <header>
    <div class="header-top gray-bg">
      <div class="container">
          <div class="wel push-left">  <p><a href="customer/myaccount">Welcome :   <?php if($customer_data) { echo $customer_data['User']['first_name']. " ".$customer_data['User']['last_name']; } else { echo "mwoman"; } ?> !</a></p>  </div> 
        <div class="row pull-right">
        

          <div class="col-sm-4 hidden-xs">
            <div class="header-top-left">
              <ul class="header-top-style text-capitalize mr-25">
                <li><a href="customer/myaccount"><span class="mr-10">My Account</span><i class="fa fa-angle-down"></i></a>
                  <ul class="ul-style my-account box-shadow white-bg">
                    <li><a href="customer/myaccount">My Account</a></li>
                    <li><a href="shop/cart">My Cart</a></li>
                   
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-xs-6">
            <div class="header-top-middle">
              <ul class="header-top-style">
                <?php if($this->Session->read('User.id')) { ?>
                
                 <li><a href="customer/logout"> Logout</a></li>
                </li>
			   <?php } else { ?>
			   <li> <a href="customer/login"> <span>Login or Register</span> </a>
			   <?php } ?>
                </li>
              </ul>
            </div>
          </div>
          
          
          <div class="col-md-4 col-sm-4 hidden-xs">
            <div class="service-inner mt-10"> <span class="service-img b-img"> <img alt="" src="mwomen/images/service.png"> </span> <span class="service-content ml-15"><strong>24*7 Support</strong>
              081308 48771</span> </div>
          </div>
       
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <div class="row header-middle-content">
         
          <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="header-logo text-center"> <a href="<?php echo $this->webroot; ?>"><img alt="" src="/images/<?php echo $sitelogo; ?>"></a> </div>
          </div>
          
          <div class="col-md-6">
              <nav class="primary-menu">
            <ul class="header-top-style text-uppercase">
              <li> <a href="<?php echo $this->webroot; ?>">home</a></li>
              <li><a href="about-us.html">about us</a></li>
              <li class="mega-container"> <a href="shop.html" class="menu-tag">Shop</a>
                <div class="megamenu-area ul-style box-shadow white-bg">
                 <?php foreach ($categories as $category_data): ?>	
                  <div class="mega-inner ptb-40">
                    <h6 class="mega-title text-uppercase"><strong><?php echo h($category_data['Category']['name']); ?></strong></h6>
                    <ul class="text-capitalize forge-list">
					<?php foreach ($category_data['children'] as $cproduct): ?>
                      <li><a href="category/<?php echo h($category_data['Category']['slug']); ?>/<?php echo h($cproduct['Category']['slug']); ?>.html"><?php echo $cproduct['Category']['name'];?></a>
							<ul class="list2">
							 <?php foreach ($cproduct['ChildCategory'] as $product): ?>
								  <li><a href="category/<?php echo h($cproduct['Category']['slug']); ?>/<?php echo $product['slug']; ?>.html"><?php echo $product['name'];?></a></li>
								<?php endforeach; ?>
							</ul>
					  
					  </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                 <?php endforeach; ?>
                </div>
              </li>
             <li><a href="fanbook.html">FANBOOK</a></li>
              <li><a href="contact-us.html">Contact us</a></li>
            </ul>
          </nav>
          </div>
        
          	<div class="col-sm-3 col-xs-6">
           
                <form action="/products/search"  id="UserSearchForm" method="get" class="search">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
          </div>
        <?php  echo $this->element('mwomen/homecart'); ?>
         
      
        </div>
      </div>
    </div>
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="mobile-menu">
              <nav id="dropdown">
                <ul>
                  <li><a href="<?php echo $this->webroot; ?>">Home</a></li>
                  <li><a href="about-us.html">about</a></li>
                  <li><a href="womans.html">woman</a>
				   
                    <ul>
					<?php foreach ($categories as $category): ?>	
                      <li><a href="category/<?php echo h($category['Category']['slug']); ?>/<?php echo h($category['Category']['slug']); ?>.html"><?php echo h($category['Category']['name']); ?></a>
                        <ul>
						<?php foreach ($category['children'] as $categorys): ?>
                          <li><a href="category/<?php echo $categorys['Category']['slug'];?>/<?php echo h($categorys['Category']['slug']); ?>.html"><?php echo h($categorys['Category']['name']); ?></a></li>
                     
                      <?php endforeach; ?>
                        </ul>
                      </li>
                      <?php endforeach; ?>
                    </ul>
					
                  </li> 
                  <li><a href="fanbook.html">FANBOOK</a></li>
                  <li><a href="contact-us.html">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu End -->
  </header>
  <?php */ ?>
  
  
  
 <header>
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4"> <a href="<?php echo $this->webroot; ?>"><img alt="" src="images/<?php echo $sitelogo; ?>"></a> </div>
          
          <div class="col-lg-8 secrch-account">
            <div class="header-top-left">
			<span class="user"><p><a href="customer/myaccount">Welcome :   <?php if($customer_data) { echo $customer_data['User']['first_name']. " ".$customer_data['User']['last_name']; } else { echo "mwoman"; } ?> !</a></p>  </a></span>
              <ul class="header-top-style text-capitalize mr-25">
                <li><a href="#"><span class="mr-10">My Account</span><i class="fa fa-angle-down"></i></a>
                  <ul class="ul-style my-account box-shadow white-bg">
                   <li><a href="customer/myaccount">My Account</a></li>
                    <li><a href="shop/cart">My Cart</a></li>
                  </ul>
                </li>
				<li> <?php  echo $this->element('mwomen/homecart'); ?></li>
              </ul>
            </div>
			
            <div class="header-top-right"> <span class="mr-20"><a href="#"><img alt="" src="images/header/search-icon.png"></a></span> <span>
              <input type="text" class="pl-10" placeholder="Search...">
              </span> </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="#">&nbsp;</a> </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="<?php echo $this->webroot; ?>">Home </a></li>
                  <li><a href="about-us.html">About Us</a></li>
                 
                  <li><a href="fanbook.html">Fanbook</a></li>
                  <li><a href="contact-us.html">Contact</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Start Featured product Area -->
    <div class="featured-product-area featured-product-area-2 section-padding">
      <div class="container-fluid">
        <div class="row rp-style">
          <div class="menucategory indicator-style">
		  <?php foreach ($categories as $category_data): ?>
		 
<?php $i=0;
foreach ($category_data['ChildCategory'] as $category):
$i++;
 ?>	
  
            <div class="product-container menus<?php echo $i; ?> cp-style-2">
              <a href="category/<?php echo h($category_data['Category']['slug']); ?>.html/<?php echo $category['slug']; ?>.html"><?php echo $category['name']; ?></a>
            </div>
           
             <?php endforeach; ?>
		  <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Start Featured product Area -->
  </header>   
  
  
  
  