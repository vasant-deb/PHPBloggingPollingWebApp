<?php ?>


        <div class="sitemap">
            <div class="container">
                <div class="col-md-8">
                    <ul class="site">
              <li><a href="<?php echo $this->webroot; ?>">Home</a></li>
              <li><a href="about-us.html">About Us</a></li>
                <li><a href="womans.html">woman</a>
				   
                    <ul>
					<?php foreach ($categories as $category): ?>	
                      <li><a href="category/<?php echo h($category['Category']['slug']); ?>.html"><?php echo h($category['Category']['name']); ?></a>
                        <ul>
						<?php foreach ($category['children'] as $categorys): ?>
                          <li><a href="category/<?php echo h($category['Category']['slug']); ?>/<?php echo h($categorys['Category']['slug']); ?>.html"><?php echo h($categorys['Category']['name']); ?></a></li>
                     
                      <?php endforeach; ?>
                        </ul>
                      </li>
                      <?php endforeach; ?>
                    </ul>
					
                  </li> 
			  
              
              
              <li><a href="contact-us.html">Contact Us</a></li>
              
            </ul>
                </div>
              <?php echo  $this->element('mwomen/inquiry'); ?>
            </div>
        </div>
      