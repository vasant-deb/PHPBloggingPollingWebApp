<style>
.rwd-table {
 width:100%;
  border-collapse: collapse;
}



.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  background-color: #f5f9fc;
}

.rwd-table tr:nth-child(odd) {
  background-color: #ebf3f9;
}

.rwd-table th {
  display: none;
}

.rwd-table td {
  display: block;
}

.rwd-table td:first-child {
  margin-top: .5em;
}

.rwd-table td:last-child {
  margin-bottom: .5em;
}

.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 120px;
  display: inline-block;
  color: #000;
}

.rwd-table th,
.rwd-table td {
  text-align: left;
}

.rwd-table {
  color: #333;
  border-radius: .4em;
  overflow: hidden;
}

.rwd-table tr {
  border-color: #bfbfbf;
}

.rwd-table th,
.rwd-table td {
  padding: .5em 1em;
}
@media screen and (max-width: 601px) {
  .rwd-table tr:nth-child(2) {
    border-top: none;
  }
}
@media screen and (min-width: 600px) {
  .rwd-table tr:hover:not(:first-child) {
    background-color: #d8e7f3;
  }
  .rwd-table td:before {
    display: none;
  }
  .rwd-table th,
  .rwd-table td {
    display: table-cell;
    padding: .25em .5em;
  }
  .rwd-table th:first-child,
  .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child,
  .rwd-table td:last-child {
    padding-right: 0;
  }
  .rwd-table th,
  .rwd-table td {
    padding: 1em !important;
  }
}

</style>
 <div class="breadcrumbs">
            <section class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Speak Up</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="crumbs">
                            <a href="/">Home</a>
                            <span class="crumbs-span">/</span>
                            <a href="#">My Account</a>
                            
                        </div>
                   

                    </div>
                </div>
                <!-- End row -->
            </section>
            <!-- End container -->
        </div>
<section class="container main-content">
            <div class="row">
                <div class="col-md-9">

                    <div class="page-content ask-question">
                        <div class="boxedtitle page-title">
                            <?php echo $this->Session->flash('form1') ?>
                            <h2>Welcome <?php echo $data['User']['first_name']?> <?php echo $data['User']['last_name'];?></h2>
      
                        </div>


    <table class="rwd-table">
    <tbody>
         <tr>
        <td><b>User Id</b></td>
        <td><?php echo $data['User']['id'];?></td>
        </tr>
         <tr>
        <td><b>Username</b></td>
        <td><?php echo $data['User']['username'];?></td>
        </tr>
         <tr>
        <td><b>First Name</b></td>
        <td><?php echo $data['User']['first_name'];?></td>
        </tr>
         <tr>
        <td><b>Last Name</b></td>
        <td><?php echo $data['User']['last_name'];?></td>
        </tr>
         <tr>
        <td><b>Email</b></td>
        <td><?php echo $data['User']['email'];?></td>
        </tr>
         <tr>
        <td><b>Profile</b></td>
        <td><img src="<?php echo $data['User']['image'];?>" width="150px" height="150px"></td>
        </tr>
         <tr>
        <td><b>Gender</b></td>
        <td><?php echo $data['User']['gender'];?></td>
        </tr>
        <tr>
        <td><b>Birthday</b></td>
        <td><?php //echo $data['User']['gender'];?></td>
        </tr>
        <tr>
        <td><b>Total Points</b></td>
        <td><?php echo $total_points; ?></td>
        </tr>
         <tr>
        <td><b>Redeem Money</b></td>
        <td><?php //echo $data['User']['gender'];?></td>
        </tr>
     </tbody>
    </table>
          
                 </div>
                  </div>
 <aside class="col-md-3 sidebar">
                 <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Your Groups</h3>
                        	<?php if(!empty($groupname['Group']['group_name'])){
				echo $this->Html->link($groupname['Group']['group_name'],
				array('controller' =>'chats', 'action' => 'index', $groupname['Group']['id']),
				array('escape' => FALSE,'class' => 'color1')); }
				else{
				    echo "No Groups";
				}
				?>
						                        
                                             
                                          </div>  
<div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Subscribed Groups</h3>
                        	<?php foreach($resultsubscribe as $subscribers) : if(!empty($subscribers['Group']['group_name'])){
				echo $this->Html->link($subscribers['Group']['group_name'],
				array('controller' =>'chats', 'action' => 'index', $subscribers['Group']['id']),
				array('escape' => FALSE,'class' => 'color1')); }
				else{
				    echo "No Subscribe Groups";
				}
				endforeach;
				?>
                       
                                          </div>  
               <div id="right-section-widgets.download-app-link-wdgt" class="naukri-wdgt download-app-link-wdgt naukri-js-wdgt" data-widget-name="download-app-link-wdgt" data-widget="{&quot;name&quot;:&quot;download-app-link-wdgt&quot;,&quot;version&quot;:&quot;v0&quot;,&quot;description&quot;:null,&quot;status&quot;:&quot;success&quot;,&quot;type&quot;:&quot;js&quot;,&quot;response&quot;:{&quot;js&quot;:&quot;http://naukri-static.cluster.infoedge.com/Static7p/0/common/j/download-app-link-wdgt_v0.min.js&quot;},&quot;ad&quot;:false,&quot;settings&quot;:{&quot;ttl&quot;:86401,&quot;isCachable&quot;:true},&quot;sectionName&quot;:&quot;right-section-widgets&quot;,&quot;widgetName&quot;:&quot;download-app-link-wdgt&quot;,&quot;widgetSequence&quot;:1,&quot;id&quot;:&quot;right-section-widgets.download-app-link-wdgt&quot;}">
    <div class="wdgt-header">
        <h3 class="wdgt-title">Add Groups</h3>
    </div>
       <form action="groups/add" id="onpageContactForm1" class="wdgt-form" method="post">
						
		  <p id="successmsg"></p>
       <input class="wdgt-input" name="user_id" type="hidden" value="<?php echo $data['User']['id'];?>">
            <input class="wdgt-input" type="text" placeholder="Enter Your Name" maxlength="10" id="name" name="group_name" autocomplete="off">
       
       
        
        <p class="wdgt-form-action-status"> Error </p>
        <input name="submit" type="submit" class="wdgt-form-btn" title="Add Group" value="Add Group">
    </form>
   
   
</div>
                    <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Your Stats</h3>
						                        <a class="color1" href="/complaints/userview">Total Confessions : <?php echo $complaintcount; ?></a><br>
                                              <a class="color2" href="/questions/userview">Total Questions : <?php echo $questioncount; ?></a><br>
                                              <a class="color3" href="/comments/userview">Total Comments : <?php echo $commentcount; ?></a><br>
                                              <a class="color4" href="/answers/userview">Total Answers : <?php echo $answercount; ?></a>
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
       
       
            <textarea class="wdgt-input" name="message" id="message" autocomplete="off" required="">Enter Your Feedback</textarea>
        
        <p class="wdgt-form-action-status"> Error </p>
        <input name="submit" type="submit" class="wdgt-form-btn" title="Submit Feedback" value="Submit Feedback">
    </form>
   
   
</div>

                   
                    

                </aside>
                             </div>
            <!-- End row -->
        </section>
        