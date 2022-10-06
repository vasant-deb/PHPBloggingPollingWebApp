<?php
Configure::write('debug', 0);  
//echo $this->element('emerald/slider');
//echo $this->element('emerald/services');
//echo $this->element('emerald/newproducts');
//echo $this->element('emerald/featuredproducts');
//echo $this->element('emerald/wideproduct');
//echo $this->element('emerald/bestseller');
//echo $this->element('emerald/homeblog');
//echo $this->element('emerald/newarrivals');
//echo $this->element('emerald/hotdeals');
//echo $this->element('emerald/offer');
//echo $this->element('emerald/productstag');
//echo $this->element('emerald/specialdeals');
//echo $this->element('emerald/newsletter');
//echo $this->element('emerald/testimonials');
?>

	
	<style>
	input#form-search {
        width: 50%;
    margin: 0px auto;
	margin-bottom:10px;
	}
	</style>
	
    <div class="container">
	<div class="row">
	<div class="col-md-12">
    <!-- GOOGLE IMG -->  
    <div class="google" style="text-align:center;">
      <a href="#" id="google_logo"><img src="images/<?php echo $sitelogo; ?>" alt="logo"/></a>
	   </div> 
	  </div> 
	   </div> 
    </div>
    
    <!-- FORM SEARCH -->  
	<div class="container">
	<div class="row">
	<div class="col-md-12" style="text-align:center;margin: 0px auto;display: inline-block;">
    <div class="form">  
      <form method="post" action="complaints/search">
        <label for="form-search"></label>
        <input type="text" name="data[Complaint][keyword]" id="form-search" placeholder="Enter your search here!">
		 <input type="submit" class="button medium dark-blue-button custom-button" value="Search Now !" id="google_search">
      </form>
    </div> 
	 </div> 
	  </div> 
	   </div> 
  
 