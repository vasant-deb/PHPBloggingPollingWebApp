 <div class="breadcrumbs">
            <section class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Love Reading</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="crumbs">
                            <a href="#">Home</a>
                            <span class="crumbs-span">/</span>
                            <span class="current">Blogs</span>
                        </div>
                    </div>
                </div>
                <!-- End row -->
            </section>
            <!-- End container -->
        </div>
        <!-- End breadcrumbs -->

        <section class="container main-content page-full-width">
            <div class="row">
                <div class="col-md-12">
				  <?php foreach($blogs as $blog): ?>
                    <article class="post blog_2 clearfix">
                        <div class="post-inner">
                            <h2 class="post-title"><span class="post-type"><i class="icon-picture"></i></span><a href="blogs/<?php echo $blog['Blog']['slug']; ?>.html"><?php echo $blog['Blog']['name'] ; ?></a></h2>
                            <div class="post-img"><a href="blogs/<?php echo $blog['Blog']['slug']; ?>.html"><img src="images/blogs/<?php echo $blog['Blog']['image'];?>" alt="<?php echo $blog['Blog']['name'] ; ?>"></a></div>
                            <div class="post-meta">
                                <span class="meta-author"><i class="icon-user"></i><a href="#">Administrator</a></span>
                                <span class="meta-date"><i class="icon-time"></i>September 30 , 2013</span>
                                <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">Wordpress</a></span>
                                <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">15 comments</a></span>
                            </div>
                            <div class="post-content">
                                <?php echo $blog['Blog']['description'] ; ?>
                                <a href="blogs/<?php echo $blog['Blog']['slug']; ?>.html" class="post-read-more button color small">Continue reading</a>
                            </div>
                            <!-- End post-content -->
                        </div>
                        <!-- End post-inner -->
                    </article>
                    <!-- End article.post -->
 <?php endforeach; ?>
                    <article class="post blog_2 clearfix">
                        <div class="post-inner">
                            <h2 class="post-title"><span class="post-type"><i class="icon-film"></i></span><a href="single_post.html">Beautiful Gallery Post.</a></h2>
                            <div class="flexslider blog_silder margin_b_20 post-img">
                                <ul class="slides">
                                    <li><img src="https://2code.info/demo/html/ask-me/images/demo/posts/3d-cartoon-caracter2.jpg" alt=""></li>
                                    <li><img src="https://2code.info/demo/html/ask-me/images/demo/posts/WebshotNature-250.jpg" alt=""></li>
                                </ul>
                            </div>
                            <!-- End flexslider -->
                            <div class="post-meta">
                                <span class="meta-author"><i class="icon-user"></i><a href="#">Administrator</a></span>
                                <span class="meta-date"><i class="icon-time"></i>September 30 , 2013</span>
                                <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">Wordpress</a></span>
                                <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">15 comments</a></span>
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.
                                    Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi.</p>
                                <a href="single_post.html" class="post-read-more button color small">Continue reading</a>
                            </div>
                            <!-- End post-content -->
                        </div>
                        <!-- End post-inner -->
                    </article>
                    <!-- End article.post -->

                    <article class="post blog_2 clearfix">
                        <div class="post-inner">
                            <h2 class="post-title"><span class="post-type"><i class="icon-play-circle"></i></span><a href="single_post.html">This is a Video Post.</a></h2>
                            <div class="video_embed post-img"><iframe height="500" src="//www.youtube.com/embed/JuyB7NO0EYY"></iframe></div>
                            <div class="post-meta">
                                <span class="meta-author"><i class="icon-user"></i><a href="#">Administrator</a></span>
                                <span class="meta-date"><i class="icon-time"></i>September 30 , 2013</span>
                                <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">Wordpress</a></span>
                                <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">15 comments</a></span>
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.
                                    Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi.</p>
                                <a href="single_post.html" class="post-read-more button color small">Continue reading</a>
                            </div>
                            <!-- End post-content -->
                        </div>
                        <!-- End post-inner -->
                    </article>
                    <!-- End article.post -->

                    <article class="post blog_2 clearfix">
                        <div class="post-inner">
                            <h2 class="post-title"><span class="post-type"><i class="icon-file-alt"></i></span><a href="single_post.html">Post Without Image.</a></h2>
                            <div class="post-meta">
                                <span class="meta-author"><i class="icon-user"></i><a href="#">Administrator</a></span>
                                <span class="meta-date"><i class="icon-time"></i>September 30 , 2013</span>
                                <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">Wordpress</a></span>
                                <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">15 comments</a></span>
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.
                                    Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi.</p>
                                <a href="single_post.html" class="post-read-more button color small">Continue reading</a>
                            </div>
                            <!-- End post-content -->
                        </div>
                        <!-- End post-inner -->
                    </article>
                    <!-- End article.post -->

                    <div class="pagination">
                        <a href="#" class="prev-button"><i class="icon-angle-left"></i></a>
                        <span class="current">1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <span>...</span>
                        <a href="#">11</a>
                        <a href="#">12</a>
                        <a href="#">13</a>
                        <a href="#" class="next-button"><i class="icon-angle-right"></i></a>
                    </div>
                    <!-- End pagination -->
                </div>
                <!-- End main -->
            </div>
            <!-- End row -->
        </section>
  