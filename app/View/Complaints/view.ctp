 <style>
 
   .btn-color-11 {
   display: inline;
   width: fit-content;
   border-radius: 5%;
   border: 2px solid lightgreen;
   color: white;
   background: green;
   padding: 10px;
   }
   .speakup-radio label:before, .speakup-checkbox label:before {
    width: 20px !important;
    height: 20px !important;
    border: 1px solid #ff8f04 !important;
}
.speakup-radio {
    display: inline-block;
    /* width: 50%; */
    padding: 5px;
}
.notify{
    width:100%;
}
.speakup-radio img {
    margin: 5px;
}
</style>
<link rel="stylesheet" href="css/poll.css">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5edf9323dfb0c300120d6017&product=inline-share-buttons&cms=website' async='async'></script>  
        <div class="breadcrumbs">
            <section class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo $complaint['Complaint']['title']; ?></h1>
                    </div>
                    <div class="col-md-12">
                        <div class="crumbs">
                            <a href="<?php echo $this->webroot; ?>">Home</a>
                            <span class="crumbs-span">/</span>
                            <a href="#">Questions</a>
                            <span class="crumbs-span">/</span>
                            <span class="current"><?php echo $complaint['Complaint']['title']; ?>
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
                            <a href="single_question.html"><?php echo $complaint['Complaint']['title']; ?></a>
                        </h2>
                        <a class="question-report" href="#">Report</a>
                        <div class="question-type-main"><i class="icon-question-sign"></i><?php echo $complaint['Category']['name']; ?></div>
                        <div class="question-inner">
                            <div class="clearfix"></div>
                            <div class="question-desc">
                              <?php echo $complaint['Complaint']['description']; ?>
                            </div>
                            
                            <span class="question-category"><a href="#"><i class="icon-folder-close"></i> <?php echo $complaint['Category']['name']; ?></a></span>
                            <span class="question-date"><i class="icon-time"></i><?php 
$ab=$complaint['Complaint']['created_at'];
$date = strtotime($ab);
echo date('M jS o', $date); ?></span>
                            
                            <span class="question-view"><i class="icon-user"></i><?php echo $complaint['Complaint']['views']; ?> views</span>
                        <!--
                             <span class="single-question-vote-result">+22</span>
                            <ul class="single-question-vote">
                                <li><a href="#" class="single-question-vote-up" title="Like"><i class="icon-thumbs-up"></i></a></li>
                            </ul> -->
                            <div class="clearfix"></div>
                        </div>
                    </article>
 <div class="speakup-footer">
                   
                     <div class="sharethis-inline-share-buttons"></div>
                     <div class="clearfix"></div>
                  </div>
                 
                      <div id="commentlist" class="page-content">
                        <div class="boxedtitle page-title">
                            <h2>Comments ( <span class="color"><?php echo $comments_count;?></span> )</h2>
                        </div>
                        <ol class="commentlist clearfix">
						<?php foreach($comments as $ans):?>
                            <li class="comment">
                                <div class="comment-body comment-body-answered clearfix">
                                    <div class="avatar"><img alt="" src="https://2code.info/demo/html/ask-me/images/demo/admin.jpeg"></div>
                                    <div class="comment-text">
                                        <div class="author clearfix">
                                            <div class="comment-author"><a href="#">Anonymous</a></div>
                                        
                                            <span class="question-vote-result">+1</span>
                                            <div class="comment-meta">
                                                <div class="date"><i class="icon-time"></i> <?php echo $ans['Comment']['created_at'];?></div>
                                            </div>
                                           
                                        </div>
                                        <div class="text">
                                            <?php echo $ans['Comment']['content'];?>
                                        </div>
                                      
                                    </div>
                                </div>
    
                            </li>
                        <?php endforeach;?>
					  </ol>
                        <!-- End commentlist -->
                    </div>
                    
                    
 <div id="respond" class="comment-respond page-content clearfix">
                         <?php 
						
						 if (!empty($user_ip)) { ?><div class="boxedtitle page-title">
                            <h2>Leave a reply</h2>
                        </div>
                        
                        <form action="" method="post" id="commentform" class="comment-form">
                            
                            <div id="respond-textarea">
                                <p>
								<input type="hidden" name="data[Comment][user_ip]" value="<?php echo $user_ip; ?>">
									<input type="hidden" name="data[Comment][user_id]" value="<?php echo $this->Session->read('User.id'); ?>">
								<input type="hidden" name="data[Comment][complaint_id]" value="<?php echo $complaint['Complaint']['id']; ?>">
                                    <label class="required" for="comment">Comment<span>*</span></label>
                                    <textarea id="comment" name="data[Comment][content]" aria-required="true" data-emojiable="true" data-emoji-input="unicode" cols="58" rows="10"></textarea>
                                </p>
                            </div>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" value="Post Comment" class="button small color">
                            </p>
                        </form><?php } else{ ?>
						<a href="customer/login" class="btn btn-primary">Login to Answer</a><?php } ?>
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
        
  