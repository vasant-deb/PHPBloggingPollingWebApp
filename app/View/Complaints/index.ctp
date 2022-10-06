<!--Page Info-->
  <section class="page-info">
    <!--Image Layer-->
    <div class="image-layer"></div>
    <div class="auto-container">
      <h2>Blog</h2>
      <ul class="bread-crumb clearfix">
        <li><a href="<?php echo $this->webroot; ?>">Home</a></li>
        <li class="active">Blog</li>
      </ul>
    </div>
  </section>
  <!--Sidebar Page Container-->
  <div class="sidebar-page-container">
    <div class="auto-container">
      <div class="row clearfix">
        <!--Content Side-->
        <div class="content-side col-lg-12 col-md-8 col-sm-12 col-xs-12">
          <!--Blog List View-->
          <section class="blog-list-view">
            <div class="posts-container">
              <!--Styled Blog Post-->
			  <?php foreach($blogs as $blog): ?>
              <div class="styled-blog-post">
                <div class="inner-box">
                  <div class="row clearfix">
                    <!--Image Column-->
                    <div class="image-column col-lg-5 col-md-6 col-sm-6 col-xs-12">
                      <figure class="image-box wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms"><a href="blogs/<?php echo $blog['Blog']['slug']; ?>.html"><img src="images/blogs/<?php echo $blog['Blog']['image'] ; ?>" alt=""></a></figure>
                    </div>
                    <!--Content Column-->
                    <div class="content-column col-lg-7 col-md-6 col-sm-6 col-xs-12">
                      <div class="content-box">
                        <div class="info-box">
                          <div class="date">18 Apr 2016</div>
                          <h3 class="post-title"><a href="blogs/<?php echo $blog['Blog']['slug']; ?>.html"><?php echo $blog['Blog']['name']; ?></a></h3>
                        </div>
                        <div class="text-content"><?php echo $blog['Blog']['description']; ?> </div>
						 <a href="blogs/<?php echo $blog['Blog']['slug']; ?>.html" class="theme-btn btn-style-two">View Details</a> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <?php endforeach; ?>
			    
            </div>
            <!-- Styled Pagination -->
            
          </section>
        </div>
        <!--End Content Side-->
        <!--Sidebar-->
        
      </div>
    </div>
  </div>