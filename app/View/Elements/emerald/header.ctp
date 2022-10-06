<?php ?>
<body>
  <div class="header-wrap">
        <header>
            <!-- LOGO -->
            <a href="<?php echo $this->webroot; ?>">
                <figure class="logo">
                    <img src="images/<?php echo $sitelogo; ?>" alt="logo">
                </figure>
            </a>
            <!-- /LOGO -->

            <!-- MOBILE MENU HANDLER -->
            <div class="mobile-menu-handler left primary">
                <img src="emerald/images/pull-icon.png" alt="pull-icon">
            </div>
            <!-- /MOBILE MENU HANDLER -->

            <!-- LOGO MOBILE -->
            <a href="index.html">
                <figure class="logo-mobile">
                    <img src="emerald/images/logo_mobile.png" alt="logo-mobile">
                </figure>
            </a>
            <!-- /LOGO MOBILE -->

            <!-- MOBILE ACCOUNT OPTIONS HANDLER -->
            <div class="mobile-account-options-handler right secondary">
                <span class="icon-user"></span>
            </div>
            <!-- /MOBILE ACCOUNT OPTIONS HANDLER -->

            <!-- USER BOARD -->
            <div class="user-board">
                <!-- USER QUICKVIEW -->
                <div class="user-quickview">
                    <!-- USER AVATAR -->
                    <a href="author-profile.html">
                        <div class="outer-ring">
                            <div class="inner-ring"></div>
                            <figure class="user-avatar">
                                <img src="emerald/images/avatars/avatar_01.jpg" alt="avatar">
                            </figure>
                        </div>
                    </a>
                    <!-- /USER AVATAR -->

                    <!-- USER INFORMATION -->
                     <?php if($customer_data) {?>  <p class="user-name"><?php echo $customer_data['User']['first_name']. " ".$customer_data['User']['last_name'];  ?></p><?php }else{?>
					 <p class="user-name">Welcome</p><?php }?>
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
                    <!-- /SVG ARROW -->
                    <p class="user-money">$745.00</p>
                    <!-- /USER INFORMATION -->

                    <!-- DROPDOWN -->
                    <ul class="dropdown small hover-effect closed">
                        <li class="dropdown-item">
                            <div class="dropdown-triangle"></div>
                            <a href="customer/myaccount">Profile Page</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="dashboard-settings.html">Account Settings</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="dashboard-purchases.html">Your Purchases</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="dashboard-statement.html">Sales Statement</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="dashboard-buycredits.html">Buy Credits</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="dashboard-withdrawals.html">Withdrawals</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="dashboard-uploaditem.html">Upload Item</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="dashboard-manageitems.html">Manage Items</a>
                        </li>
                    </ul>
                    <!-- /DROPDOWN -->
                </div>
                <!-- /USER QUICKVIEW -->

                <!-- ACCOUNT INFORMATION -->
                <div class="account-information">
                    <a href="favourites.html">
                        <div class="account-wishlist-quickview">
                            <span class="icon-heart"></span>
                        </div>
                    </a>
					

                    			
					<div class="account-email-quickview">
                        <span class="icon-envelope">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</span>

                        <!-- PIN -->
                        <span class="pin soft-edged secondary">!</span>
                        <!-- /PIN -->

                        <!-- DROPDOWN NOTIFICATIONS -->
                        <ul class="dropdown notifications closed">
                            <!-- DROPDOWN ITEM -->
                            <li class="dropdown-item">
                                <div class="dropdown-triangle"></div>
                                <a href="dashboard-openmessage.html" class="link-to"></a>
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_06.jpg" alt="">
                                </figure>
                                <p class="text-header tiny"><span>Sarah-Imaginarium</span></p>
                                <p class="subject">Product Question</p>
                                <p class="timestamp">May 18th, 2014</p>
                                <span class="notification-type secondary-new icon-envelope"></span>
                            </li>
                            <!-- /DROPDOWN ITEM -->

                            <!-- DROPDOWN ITEM -->
                            <li class="dropdown-item">
                                <a href="dashboard-openmessage.html" class="link-to"></a>
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_04.jpg" alt="">
                                </figure>
                                <p class="text-header tiny"><span>Red Thunder Graphics</span></p>
                                <p class="subject">Support Inquiry</p>
                                <p class="timestamp">May 5th, 2014</p>
                                <span class="notification-type icon-envelope-open"></span>
                            </li>
                            <!-- /DROPDOWN ITEM -->

                            <!-- DROPDOWN ITEM -->
                            <li class="dropdown-item">
                                <a href="dashboard-openmessage.html" class="link-to"></a>
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_07.jpg" alt="">
                                </figure>
                                <p class="text-header tiny"><span>Twisted Themes</span></p>
                                <p class="subject">Collaboration</p>
                                <p class="timestamp">Feb 24th, 2014</p>
                                <span class="notification-type secondary-new icon-envelope"></span>
                            </li>
                            <!-- /DROPDOWN ITEM -->

                            <!-- DROPDOWN ITEM -->
                            <li class="dropdown-item">
                                <a href="dashboard-openmessage.html" class="link-to"></a>
                                <figure class="user-avatar">
                                    <img src="images/avatars/avatar_08.jpg" alt="">
                                </figure>
                                <p class="text-header tiny"><span>GregSpiegel1820</span></p>
                                <p class="subject">How to Install the Theme...</p>
                                <p class="timestamp">Jan 3rd, 2014</p>
                                <span class="notification-type icon-action-undo"></span>
                                <a href="dashboard-inbox.html" class="button secondary">View all Messages</a>
                            </li>
                            <!-- /DROPDOWN ITEM -->
                        </ul>
                        <!-- /DROPDOWN NOTIFICATIONS -->
                    </div>
                    <div class="account-settings-quickview">
                        <span class="icon-settings">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</span>

                        <!-- PIN -->
                        <span class="pin soft-edged primary">49</span>
                        <!-- /PIN -->

                        <!-- DROPDOWN NOTIFICATIONS -->
                        <ul class="dropdown notifications no-hover closed">
                            <!-- DROPDOWN ITEM -->
                            <li class="dropdown-item">
                                <div class="dropdown-triangle"></div>
                                <a href="author-profile.html">
                                    <figure class="user-avatar">
                                        <img src="images/avatars/avatar_02.jpg" alt="">
                                    </figure>
                                </a>
                                <p class="title">
                                    <a href="author-profile.html"><span>MeganV.</span></a> added
                                    <a href="item-v1.html"><span>Pixel Diamond Gaming Shop</span></a> to favourites
                                </p>
                                <p class="timestamp">2 Hours ago</p>
                                <span class="notification-type primary-new icon-heart"></span>
                            </li>
                            <!-- /DROPDOWN ITEM -->

                            <!-- DROPDOWN ITEM -->
                            <li class="dropdown-item">
                                <a href="author-profile.html">
                                    <figure class="user-avatar">
                                        <img src="images/avatars/avatar_03.jpg" alt="">
                                    </figure>
                                </a>
                                <p class="title">
                                    <a href="author-profile.html"><span>Thomas_Ket</span></a> wrote you an
                                    <a href="author-reputation.html"><span>Author’s Reputation</span></a>
                                </p>
                                <p class="timestamp">17 Hours ago</p>
                                <span class="notification-type icon-star"></span>
                            </li>
                            <!-- /DROPDOWN ITEM -->

                            <!-- DROPDOWN ITEM -->
                            <li class="dropdown-item">
                                <a href="author-profile.html">
                                    <figure class="user-avatar">
                                        <img src="images/avatars/avatar_04.jpg" alt="">
                                    </figure>
                                </a>
                                <p class="title">
                                    <a href="author-profile.html"><span>Red Thunder Graphics</span></a> commented on
                                    <a href="item-v1.html"><span>3D Layers - Web Mockup</span></a>
                                </p>
                                <p class="timestamp">8 Days Ago</p>
                                <span class="notification-type primary-new icon-bubble"></span>
                            </li>
                            <!-- /DROPDOWN ITEM -->

                            <!-- DROPDOWN ITEM -->
                            <li class="dropdown-item">
                                <a href="author-profile.html">
                                    <figure class="user-avatar">
                                        <img src="images/avatars/avatar_05.jpg" alt="">
                                    </figure>
                                </a>
                                <p class="title">
                                    <a href="author-profile.html"><span>DaBebop</span></a> purchased
                                    <a href="item-v1.html"><span>Miniverse - Hero Image Composer</span></a>
                                </p>
                                <p class="timestamp">1 Week ago</p>
                                <span class="notification-type icon-tag"></span>
                                <a href="dashboard-notifications.html" class="button primary">View all Notifications</a>
                            </li>
                            <!-- /DROPDOWN ITEM -->
                        </ul>
                        <!-- /DROPDOWN NOTIFICATIONS -->
                    </div>
                </div>
                <!-- /ACCOUNT INFORMATION -->

                <!-- ACCOUNT ACTIONS -->
                <div class="account-actions">
                    <?php if(!$customer_data) {?>  <a href="/software/customer/login" class="button primary">Login</a><?php }else {?>
                    <a href="/software/customer/logout" class="button secondary">Logout</a><?php }?>
					 
                </div>
                <!-- /ACCOUNT ACTIONS -->
            </div>
            <!-- /USER BOARD -->
        </header>
    </div>
    <!-- /HEADER -->
