<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

 	
 
    Router::connect('/', ['controller' => 'pages', 'action' => 'index']);
    Router::connect('/poll.html', ['controller' => 'polls', 'action' => 'index']);
       Router::connect('/polls/add.html', ['controller' => 'polls', 'action' => 'add']);
    Router::connect('/polls/:slug.html', ['controller' => 'polls', 'action' => 'view'], ['pass' => ['slug']]);
 
	Router::connect('/support', ['controller' => 'pages', 'action' => 'support']);
		Router::connect('/sociallogin', ['controller' => 'users', 'action' => 'sociallogin']);
			Router::connect('/profile', ['controller' => 'users', 'action' => 'profile']);
	Router::connect('/gallery.html', ['controller' => 'pages', 'action' => 'gallery']);
	Router::connect('/search.html', ['controller' => 'pages', 'action' => 'search']);
	Router::connect('/blog.html', ['controller' => 'blogs', 'action' => 'index']);
	Router::connect('/question/:slug', ['controller' => 'questions', 'action' => 'view'], ['pass' => ['slug']]);
	Router::connect('/speakup/:slug', ['controller' => 'complaints', 'action' => 'view'], ['pass' => ['slug']]);
	Router::connect('/speak-up.html', ['controller' => 'complaints', 'action' => 'add']);
	Router::connect('/trending.html', ['controller' => 'pages', 'action' => 'trending']);
	
	Router::connect('/trending-question.html', ['controller' => 'pages', 'action' => 'TrendingQuestion']);
	Router::connect('/question.html', ['controller' => 'pages', 'action' => 'question']);
	Router::connect('/ask-question.html', ['controller' => 'questions', 'action' => 'add']);
	
	Router::connect('/returns', ['controller' => 'pages', 'action' => 'returns']);
	
	Router::connect('/faq.html', ['controller' => 'pages', 'action' => 'faq']);
	
	
	
	Router::connect('/warranty', ['controller' => 'pages', 'action' => 'warranty']);
	
	Router::connect('/new-arrival.html', ['controller' => 'pages', 'action' => 'newarrival']); 
	
	Router::connect('/featured-products.html', ['controller' => 'pages', 'action' => 'feature']); 
	
	Router::connect('/privacy', ['controller' => 'pages', 'action' => 'policy']); 
	
	Router::connect('/application-for-credit-form', ['controller' => 'pages', 'action' => 'creditform']); 

	Router::connect('/shipping.html', ['controller' => 'pages', 'action' => 'shipping']); 
	
	Router::connect('/terms', ['controller' => 'pages', 'action' => 'terms']); 
	
	Router::connect('/sitemap.html', ['controller' => 'pages', 'action' => 'sitemap']); 
	
	Router::connect('/about-us.html', ['controller' => 'pages', 'action' => 'about']);
	
	Router::connect('/contact-us.html', ['controller' => 'pages', 'action' => 'contact']);		
	
	Router::connect('/shop.html', ['controller' => 'categories', 'action' => 'index']);
	
	Router::connect('/our-presence.html', ['controller' => 'locations', 'action' => 'index']);
	
	Router::connect('/mens', ['controller' => 'categories', 'action' => 'offers']);	

	Router::connect('/products/search', ['controller' => 'products', 'action' => 'search']);

	Router::connect('/products/add', ['controller' => 'products', 'action' => 'add', 'admin' => true]);
 
    Router::connect('/compare/compareadd/:slug', ['controller' => 'products', 'action' => 'compareadd'], ['pass' => ['slug']]);
   
    Router::connect('/compare/compareremove/:slug', ['controller' => 'products', 'action' => 'compareremove'], ['pass' => ['slug']]);

	Router::connect('/compare/compareremoveall', ['controller' => 'products', 'action' => 'compareremoveall']);
	
	Router::connect('/compareproducts', ['controller' => 'categories', 'action' => 'compareproducts']);

	Router::connect('/shop/add', ['controller' => 'shop', 'action' => 'add']);

	Router::connect('/category/:slug', ['controller' => 'categories', 'action' => 'categorypage'], ['pass' => ['slug']]);
	
	Router::connect('/category/:category/:slug.html', ['controller' => 'categories', 'action' => 'view'], ['pass' => ['category','slug']]);
	
    Router::connect('/blogs/:slug.html', ['controller' => 'blogs', 'action' => 'view'], ['pass' => ['slug']]);
	
	Router::connect('/:slug.html', ['controller' => 'products', 'action' => 'view'], ['pass' => ['slug']]);
	
	Router::connect('/products/:category/:slug', ['controller' => 'products', 'action' => 'view'], ['pass' => ['category','slug']]);
		
	Router::connect('/admin', ['controller' => 'users', 'action' => 'dashboard', 'admin' => true]);
	
	Router::connect('/customer/login', ['controller' => 'users', 'action' => 'login','customer' => true]);
	
	Router::connect('/customer/forgot-password', ['controller' => 'users', 'action' => 'forgot_password','customer' => true]);

	Router::connect('/customer/register', ['controller' => 'users', 'action' => 'register','customer' => true]);
	
	Router::connect('/customer/logout', ['controller' => 'users', 'action' => 'logout','customer' => true]);
	
	Router::connect('/customer/myaccount', ['controller' => 'users', 'action' => 'myaccount','customer' => true]);
	
	Router::connect('/customer/addressbook', ['controller' => 'users', 'action' => 'addressbook','customer' => true]);
	
	Router::connect('/customer/changepassword', ['controller' => 'users', 'action' => 'changepassword','customer' => true]);

	Router::connect('/customer/orderhistory', ['controller' => 'users', 'action' => 'orderhistory','customer' => true]);
	
	Router::connect('/', ['controller' => 'users', 'action' => 'dashboard', 'admin' => true]); 
	
	Router::connect('/customer/orderdetails/:slug', array('controller' => 'users', 'action' => 'orderdetails','customer' => true), array('pass' => array('slug')));


/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
  // Router::connect('/pages/*', ['controller' => 'pages', 'action' => 'display']);

/**
 * Load all plugin routes.  See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
    CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
    require CAKE . 'Config' . DS . 'routes.php';

 