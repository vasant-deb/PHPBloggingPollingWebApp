 
        <div class="breadcrumbs">
            <section class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo $question['Question']['title']; ?></h1>
                    </div>
                    <div class="col-md-12">
                        <div class="crumbs">
                            <a href="<?php echo $this->webroot; ?>">Home</a>
                            <span class="crumbs-span">/</span>
                            <a href="#">Questions</a>
                            <span class="crumbs-span">/</span>
                            <span class="current"><?php echo $question['Question']['title']; ?>
							<?php 
							$msg = $this->Session->flash(); 
							echo $msg; 							
							?> </span>
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
                    <article class="question single-question question-type-normal">
                        <h2>
                            <a href="single_question.html"><?php echo $question['Question']['title']; ?></a>
                        </h2>
                        <a class="question-report" href="#">Report</a>
                        <div class="question-type-main"><i class="icon-question-sign"></i><?php echo $question['Category']['name']; ?></div>
                        <div class="question-inner">
                            <div class="clearfix"></div>
                            <div class="question-desc">
                              <?php echo $question['Question']['description']; ?>
                            </div>
                            <div class="question-details">
                               
                            </div>
                            <span class="question-category"><a href="#"><i class="icon-folder-close"></i> <?php echo $question['Category']['name']; ?></a></span>
                            <span class="question-date"><i class="icon-time"></i><?php echo $question['Question']['created_at']; ?></span>
                            <span class="question-comment"><a href="#"><i class="icon-comment"></i><?=$answers_count;?> Answer</a></span>
                            <span class="question-view"><i class="icon-user"></i><?php echo $question['Question']['views']; ?> views</span>
                            <span class="single-question-vote-result">+22</span>
                            <ul class="single-question-vote">
                                <li><a href="#" class="single-question-vote-down" title="Dislike"><i class="icon-thumbs-down"></i></a></li>
                                <li><a href="#" class="single-question-vote-up" title="Like"><i class="icon-thumbs-up"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </article>

                    <div class="share-tags page-content">
                       
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
                    <!-- End share-tags -->

                    <div id="commentlist" class="page-content">
                        <div class="boxedtitle page-title">
                            <h2>Answers ( <span class="color"><?php echo $answers_count;?></span> )</h2>
                        </div>
                        <ol class="commentlist clearfix">
						<?php foreach($answers as $ans):?>
                            <li class="comment">
                                <div class="comment-body comment-body-answered clearfix">
                                    <div class="avatar"><img alt="" src="https://2code.info/demo/html/ask-me/images/demo/admin.jpeg"></div>
                                    <div class="comment-text">
                                        <div class="author clearfix">
                                            <div class="comment-author"><a href="#">Anonymous</a></div>
                                            
                                            <span class="question-vote-result">+1</span>
                                            <div class="comment-meta">
                                                <div class="date"><i class="icon-time"></i> <?php echo $ans['Answer']['created_at'];?></div>
                                            </div>
                                           
                                        </div>
                                        <div class="text">
                                            <?php echo $ans['Answer']['comment'];?>
                                        </div>
                                       
                                    </div>
                                </div>
    
                            </li>
                        <?php endforeach;?>
					  </ol>
                        <!-- End commentlist -->
                    </div>
                    <!-- End page-content -->

                    <div id="respond" class="comment-respond page-content clearfix">
                         <?php 
						
						 if (!empty($user_ip)) { ?><div class="boxedtitle page-title">
                            <h2>Leave a reply</h2>
                        </div>
                        <form action="" method="post" id="commentform" class="comment-form">
                            
                            <div id="respond-textarea">
                                <p>
								<input type="hidden" name="data[Answer][user_ip]" value="<?php echo $user_ip; ?>">
									<input type="hidden" name="data[Answer][user_id]" value="<?php echo $this->Session->read('User.id'); ?>">
								<input type="hidden" name="data[Answer][question_id]" value="<?php echo $question['Question']['id']; ?>">
                                    <label class="required" for="comment">Comment<span>*</span></label>
                                    <textarea id="comment" name="data[Answer][comment]" aria-required="true" cols="58" rows="10"></textarea>
                                </p>
                            </div>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" value="Post Comment" class="button small color">
                            </p>
                        </form><?php } else{ ?>
						<a href="customer/login" class="btn btn-primary">Login to Answer</a><?php } ?>
                    </div>

                    <div class="post-next-prev clearfix">
                        <p class="prev-post">
                            <a href="#"><i class="icon-double-angle-left"></i>&nbsp;Prev question</a>
                        </p>
                        <p class="next-post">
                            <a href="#">Next question&nbsp;<i class="icon-double-angle-right"></i></a>
                        </p>
                    </div>
                    <!-- End post-next-prev -->
                </div>
                <!-- End main -->
              <?php echo $this->element('speak/aside'); ?>
                <!-- End sidebar -->
            </div>
            <!-- End row -->
        </section>
        <!-- End container -->
  