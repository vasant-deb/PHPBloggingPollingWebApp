  <div class="breadcrumbs">
            <section class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo $blog['Blog']['name']; ?></h1>
                    </div>
                    <div class="col-md-12">
                        <div class="crumbs">
                            <a href="<?php echo $this->webroot; ?>">Home</a>
                            <span class="crumbs-span">/</span>
                            <a href="blog.html">Blog</a>
                            <span class="crumbs-span">/</span>
                            <span class="current"><?php echo $blog['Blog']['name']; ?></span>
                        </div>
                    </div>
                </div>
                <!-- End row -->
            </section>
            <!-- End container -->
        </div>
        <!-- End breadcrumbs -->

        <section class="container main-content">
            <div class="row">
                <div class="col-md-9">
                    <article class="post single-post clearfix">
                        <div class="post-inner">
                            <div class="post-img"><a href="single_post.html"><img src="images/blogs/<?php echo $blog['Blog']['image']; ?>" alt=""></a></div>
                            <h2 class="post-title"><span class="post-type"><i class="icon-film"></i></span> <?php echo $blog['Blog']['name']; ?></h2>
                            <div class="post-meta">
                                <span class="meta-author"><i class="icon-user"></i><a href="#">Administrator</a></span>
                                <span class="meta-date"><i class="icon-time"></i>September 30 , 2013</span>
                                <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">Wordpress</a></span>
                                <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">15 comments</a></span>
                            </div>
                            <div class="post-content">
                                <?php echo $blog['Blog']['description']; ?>
							</div>
                            <!-- End post-content -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- End post-inner -->
                    </article>
                    <!-- End article.post -->

                    <div class="share-tags page-content">
                        <div class="post-tags"><i class="icon-tags"></i>
                            <a href="#">projects</a>,
                            <a href="#">Portfolio</a>,
                            <a href="#">Wordpress</a>,
                            <a href="#">Html</a>,
                            <a href="#">Css</a>,
                            <a href="#">jQuery</a>,
                            <a href="#">2code</a>,
                            <a href="#">vbegy</a>
                        </div>
                        <div class="share-inside-warp">
                            <ul>
                                <li>
                                    <a href="#" original-title="Facebook">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#3b5997" span_hover="#666">
											<i i_color="#FFF" class="social_icon-facebook"></i>
										</span>
									</span>
								</a>
                                    <a href="#" target="_blank">Facebook</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#00baf0" span_hover="#666">
											<i i_color="#FFF" class="social_icon-twitter"></i>
										</span>
									</span>
								</a>
                                    <a target="_blank" href="#">Twitter</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#ca2c24" span_hover="#666">
											<i i_color="#FFF" class="social_icon-gplus"></i>
										</span>
									</span>
								</a>
                                    <a href="#" target="_blank">Google plus</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#e64281" span_hover="#666">
											<i i_color="#FFF" class="social_icon-dribbble"></i>
										</span>
									</span>
								</a>
                                    <a href="#" target="_blank">Dribbble</a>
                                </li>
                                <li>
                                    <a target="_blank" href="#">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#c7151a" span_hover="#666">
											<i i_color="#FFF" class="icon-pinterest"></i>
										</span>
									</span>
								</a>
                                    <a href="#" target="_blank">Pinterest</a>
                                </li>
                            </ul>
                            <span class="share-inside-f-arrow"></span>
                            <span class="share-inside-l-arrow"></span>
                        </div>
                        <!-- End share-inside-warp -->
                        <div class="share-inside"><i class="icon-share-alt"></i>Share</div>
                        <div class="clearfix"></div>
                    </div>
                  

                    <div id="related-posts">
                        <h2>Related Posts</h2>
                        <ul class="related-posts">
                            <li class="related-item">
                                <h3><a href="#"><i class="icon-double-angle-right"></i>This is a Standard Post .</a></h3>
                            </li>
                            <li class="related-item">
                                <h3><a href="#"><i class="icon-double-angle-right"></i>Post Without Image .</a></h3>
                            </li>
                            <li class="related-item">
                                <h3><a href="#"><i class="icon-double-angle-right"></i>Beautiful Gallery Post .</a></h3>
                            </li>
                            <li class="related-item">
                                <h3><a href="#"><i class="icon-double-angle-right"></i>This Is A Video Post .</a></h3>
                            </li>
                        </ul>
                    </div>
                   

                    <div class="post-next-prev clearfix">
                        <p class="prev-post">
                            <a href="#"><i class="icon-double-angle-left"></i>&nbsp;Prev post</a>
                        </p>
                        <p class="next-post">
                            <a href="#">Next post&nbsp;<i class="icon-double-angle-right"></i></a>
                        </p>
                    </div>
                    <!-- End post-next-prev -->
                </div>
                <?php echo $this->element('speak/aside'); ?>
            </div>
            <!-- End row -->
        </section>
        <!-- End container -->
 
 
 