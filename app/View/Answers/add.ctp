   <?php ?>
           <div class="breadcrumbs">
            <section class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Speak Up</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="crumbs">
                            <a href="#">Home</a>
                            <span class="crumbs-span">/</span>
                            <a href="#">Pages</a>
                            <span class="crumbs-span">/</span>
                            <span class="current">Speak Up</span>
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

                    <div class="page-content ask-question">
                        <div class="boxedtitle page-title">
                            <h2>Speak Up</h2>
                        </div>

                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>

                        <div class="form-style form-style-3" id="question-submit">
                              <?php echo $this->Form->create('Complaint',array('enctype'=>'multipart/form-data','class' => 'form-horizontal'));?>
                                <div class="form-inputs clearfix">
                                    <p>
                                        <label class="required">Question Title<span>*</span></label>
                                        <input type="text" name="data[Complaint][title]" id="question-title">
                                        <span class="form-description">Please choose an appropriate title for the question to answer it even easier .</span>
                                    </p>
                                    <p>
                                        <label>Tags</label>
                                        <input type="text" class="input" name="question_tags" id="question_tags" data-seperator=",">
                                        <span class="form-description">Please choose  suitable Keywords Ex : <span class="color">question , poll</span> .</span>
                                    </p>
                                    
                                        <label class="required">Category<span>*</span></label>
                                     
											 <?php echo $this->Form->input('category_id', array('class'=>'styled-select','label'=>'','empty' => true));?>	
									
                                        <span class="form-description">Please choose the appropriate section so easily search for your question .</span>
                  
                                   
                                    <div class="clearfix"></div>
                                    

                                </div>
                                <div id="form-textarea">
                                    <p>
                                        <label class="required">Details<span>*</span></label>
                                        <textarea name="data[Complaint][description]" id="question-details" aria-required="true" cols="58" rows="8"></textarea>
                                        <span class="form-description">Type the description thoroughly and in detail .</span>
                                    </p>
                                </div>
                                <p class="form-submit">
                                    <input type="submit" id="publish-question" value="Publish Your Question" class="button color small submit">
                                </p>
                          <?php echo $this->Form->end(); ?>
                        </div>
                    </div>
                    <!-- End page-content -->
                </div>
                <!-- End main -->
                <aside class="col-md-3 sidebar">
                    <div class="widget widget_stats">
                        <h3 class="widget_title">Stats</h3>
                        <div class="ul_list ul_list-icon-ok">
                            <ul>
                                <li><i class="icon-question-sign"></i>Questions ( <span>20</span> )</li>
                                <li><i class="icon-comment"></i>Answers ( <span>50</span> )</li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget widget_social">
                        <h3 class="widget_title">Find Us</h3>
                        <ul>
                            <li class="rss-subscribers">
                                <a href="#" target="_blank">
							<strong>
								<i class="icon-rss"></i>
								<span>Subscribe</span><br>
								<small>To RSS Feed</small>
							</strong>
							</a>
                            </li>
                            <li class="facebook-fans">
                                <a href="#" target="_blank">
							<strong>
								<i class="social_icon-facebook"></i>
								<span>5,000</span><br>
								<small>People like it</small>
							</strong>
							</a>
                            </li>
                            <li class="twitter-followers">
                                <a href="#" target="_blank">
							<strong>
								<i class="social_icon-twitter"></i>
								<span>3,000</span><br>
								<small>Followers</small>
							</strong>
							</a>
                            </li>
                            <li class="youtube-subs">
                                <a href="#" target="_blank">
							<strong>
								<i class="icon-play"></i>
								<span>1,000</span><br>
								<small>Subscribers</small>
							</strong>
							</a>
                            </li>
                        </ul>
                    </div>

                   

                    <div class="widget widget_highest_points">
                        <h3 class="widget_title">Highest points</h3>
                        <ul>
                            <li>
                                <div class="author-img">
                                    <a href="#"><img width="60" height="60" src="https://2code.info/demo/html/ask-me/images/demo/admin.jpeg" alt=""></a>
                                </div>
                                <h6><a href="#">admin</a></h6>
                                <span class="comment">12 Points</span>
                            </li>
                            <li>
                                <div class="author-img">
                                    <a href="#"><img width="60" height="60" src="https://2code.info/demo/html/ask-me/images/demo/avatar.png" alt=""></a>
                                </div>
                                <h6><a href="#">vbegy</a></h6>
                                <span class="comment">10 Points</span>
                            </li>
                            <li>
                                <div class="author-img">
                                    <a href="#"><img width="60" height="60" src="https://2code.info/demo/html/ask-me/images/demo/avatar.png" alt=""></a>
                                </div>
                                <h6><a href="#">ahmed</a></h6>
                                <span class="comment">5 Points</span>
                            </li>
                        </ul>
                    </div>

                    <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Tags</h3>
                        <a href="#">projects</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Wordpress</a>
                        <a href="#">Html</a>
                        <a href="#">Css</a>
                        <a href="#">jQuery</a>
                        <a href="#">2code</a>
                        <a href="#">vbegy</a>
                    </div>

                    <div class="widget">
                        <h3 class="widget_title">Recent Questions</h3>
                        <ul class="related-posts">
                            <li class="related-item">
                                <h3><a href="#">This is my first Question</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <div class="clear"></div><span>Feb 22, 2014</span>
                            </li>
                            <li class="related-item">
                                <h3><a href="#">This Is My Second Poll Question</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <div class="clear"></div><span>Feb 22, 2014</span>
                            </li>
                        </ul>
                    </div>

                </aside>
                <!-- End sidebar -->
            </div>
            <!-- End row -->
        </section>
		
		
