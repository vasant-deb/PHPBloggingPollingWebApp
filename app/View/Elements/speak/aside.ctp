
 <aside class="col-md-3 sidebar">
                   

                 <div class="widget">
                        <h3 class="widget_title">Recent Speak Up</h3>
                        <ul class="related-posts">
						<?php foreach($latest_speak as $latest): ?>
                            <li class="related-item">
                                <h3><a href="speakup/<?php echo $latest['Complaint']['slug'];?>"><?php echo $latest['Complaint']['title'];?></a></h3>
                             
                                <div class="clear"></div><span><?php echo $latest['Complaint']['created_at'];?></span>
                            </li>
							<?php endforeach;?>
                            
                        </ul>
                    </div>

                    <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Tags</h3>
						<?php $i=1; foreach($tags as $tag):?>
                        <a class="color<?=$i;?>" href="category/<?php echo $tag['Category']['slug'];?>"><?php echo $tag['Category']['name'];?></a>
                      <?php $i++; endforeach; ?>
                    </div>

                    <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">College Confessions</h3>
						<?php $i=1; foreach($colleges as $college):?>
                        <a class="color<?=$i;?>" href="category/<?php echo $college['Category']['slug'];?>"><?php echo $college['Category']['name'];?></a>
                      <?php $i++; endforeach; ?>
                    </div>
                    
                    
                      

<div id="right-section-widgets.download-app-link-wdgt" class="naukri-wdgt download-app-link-wdgt naukri-js-wdgt" data-widget-name="download-app-link-wdgt" data-widget="{&quot;name&quot;:&quot;download-app-link-wdgt&quot;,&quot;version&quot;:&quot;v0&quot;,&quot;description&quot;:null,&quot;status&quot;:&quot;success&quot;,&quot;type&quot;:&quot;js&quot;,&quot;response&quot;:{&quot;js&quot;:&quot;http://naukri-static.cluster.infoedge.com/Static7p/0/common/j/download-app-link-wdgt_v0.min.js&quot;},&quot;ad&quot;:false,&quot;settings&quot;:{&quot;ttl&quot;:86401,&quot;isCachable&quot;:true},&quot;sectionName&quot;:&quot;right-section-widgets&quot;,&quot;widgetName&quot;:&quot;download-app-link-wdgt&quot;,&quot;widgetSequence&quot;:1,&quot;id&quot;:&quot;right-section-widgets.download-app-link-wdgt&quot;}">
    <div class="wdgt-header">
        <h3 class="wdgt-title">Feedback !!</h3>
        <p class="wdgt-desc">Want any updates or have any suggestions regarding our website</p>
        <img src="https://static.naukimg.com/s/7/0/assets/images/src/widgets/naukri-job-speak-wdgt/v0/njs-bg.74cb2db9.png" class="wdgt-app-install-img" alt="Install">
    </div>
       <form action="enquiries/add" id="onpageContactForm" class="wdgt-form" method="post">
						
		  <p id="successmsg"></p>
      
            <input class="wdgt-input" type="text" placeholder="Enter Your Name" maxlength="10" id="name" name="name" autocomplete="off">
       
       
            <textarea class="wdgt-input" name="message" id="message" autocomplete="off" required>Enter Your Feedback</textarea>
        
        <p class="wdgt-form-action-status"> Error </p>
        <input name="submit"  type="submit" class="wdgt-form-btn" title="Submit Feedback" value="Submit Feedback">
    </form>
   
   
</div>

                   
                    

                </aside>
                 