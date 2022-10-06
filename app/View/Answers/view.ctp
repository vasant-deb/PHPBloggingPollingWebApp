 <!--Page Info-->
  <section class="page-info">
    <!--Image Layer-->
    <div class="image-layer"></div>
    <div class="auto-container">
      <h2>Blog </h2>
      <ul class="bread-crumb clearfix">
        <li><a href="<?php echo $this->webroot; ?>">Home</a></li>
        <li class="active"><?php echo $blog['Blog']['name']; ?></li>
      </ul>
    </div>
  </section>
  <!--Sidebar Page Container-->
  <div class="sidebar-page-container">
    <div class="auto-container">
      <div class="row clearfix">
        <!--Content Side-->
        <div class="content-side col-lg-12 col-md-8 col-sm-12 col-xs-12">
          <!--Blog Details-->
          <section class="blog-details">
            <div class="posts-container">
              <!--Styled Blog Post-->
              <div class="styled-blog-post">
                <div class="inner-box">
                  <figure class="image-box"><img src="images/blogs/<?php echo $blog['Blog']['image']; ?>" alt=""></figure>
                  <div class="content-box">
                    <div class="info-box">
                      <h3 class="post-title"><?php echo $blog['Blog']['name']; ?></h3>
                    </div>
                    <div class="text-content">
                      <?php echo $blog['Blog']['description']; ?>
                    </div>
                    <!--Options-->
                    
                  </div>
                </div>
              </div>
              <!--End Styled Blog Post-->
            </div>
          </section>
        </div>
        <!--End Content Side-->
        
        <!--End Sidebar Side-->
      </div>
    </div>
  </div>
  <!--Main Footer-->