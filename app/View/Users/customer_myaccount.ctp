<?php ?>
 <div class="breadcrumbs">
            <section class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>User Profile : <?php echo $customer_data['User']['username'];?></h1>
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
                    <div class="row">
                        <div class="user-profile">
                            <div class="col-md-12">
                                <div class="page-content">
                                    <h2>About <?php echo $customer_data['User']['username'];?></h2>
                                    <div class="user-profile-img"><img width="60" height="60" src="https://2code.info/demo/html/ask-me/images/demo/admin.jpeg" alt="admin"></div>
                                    <div class="ul_list ul_list-icon-ok about-user">
                                        <ul>
                                            <li><i class="icon-plus"></i>Registerd : <span><?php echo $customer_data['User']['created'];?></span></li>
                                            <li><i class="icon-map-marker"></i>Country : <span><?php echo $customer_data['User']['country'];?></span></li>
                                             <li><i class="icon-map-marker"></i>Aadhaar Number : <span><?php echo $details['User']['aadhaar_card'];?></span></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <!-- End page-content -->
                            </div>
                            <!-- End col-md-12 -->
                            <div class="col-md-12">
                                <div class="page-content page-content-user-profile">
                                    <div class="user-profile-widget">
                                        <h2>User Stats</h2>
                                        <div class="ul_list ul_list-icon-ok">
                                            <ul>
                                                <li><i class="icon-question-sign"></i><a href="user_questions.html">Questions<span> ( <span>30</span> ) </span></a></li>
                                                <li><i class="icon-comment"></i><a href="user_answers.html">Answers<span> ( <span>10</span> ) </span></a></li>
                                                <li><i class="icon-star"></i><a href="user_favorite_questions.html">Favorite Questions<span> ( <span>3</span> ) </span></a></li>
                                                <li><i class="icon-heart"></i><a href="user_points.html">Points<span> ( <span>20</span> ) </span></a></li>
                                                <li><i class="icon-asterisk"></i>Best Answers<span> ( <span>2</span> ) </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End user-profile-widget -->
                                </div>
                                <!-- End page-content -->
                            </div>
                            <!-- End col-md-12 -->
                        </div>
                        <!-- End user-profile -->
                    </div>
                    <!-- End row -->
                    <div class="clearfix"></div>
                    
                    <!-- End page-content -->
                </div>
                <!-- End main -->
                <aside class="col-md-3 sidebar">
                  
                    <div class="widget widget_login">
                       
                         <?php echo $this->element('speak/myaccount_menu'); ?>
                    </div>

                    <div class="widget widget_highest_points">
                        <h3 class="widget_title">Highest points</h3>
                        <ul>
                            <li>
                                
                                <h6><a href="#">admin</a></h6>
                                <span class="comment">12 Points</span>
                            </li>
                            <li>
                                
                                <h6><a href="#">vbegy</a></h6>
                                <span class="comment">10 Points</span>
                            </li>
                            <li>
                               
                                <h6><a href="#">ahmed</a></h6>
                                <span class="comment">5 Points</span>
                            </li>
                        </ul>
                    </div>

                </aside>
                <!-- End sidebar -->
            </div>
            <!-- End row -->
        </section>
