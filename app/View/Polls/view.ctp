<?php
   Configure::write('debug', 0);  
   ?>
<style>
   #header{
   margin-bottom: 70px;
   }
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
<section class="container-fluid main-content">
   <div class="row">
      <div class="col-md-9 col-lg-9">
          <?php echo $message;?>
         <form id="vote" method="post">
            <div class="speakup-box">
               <div class="speakup-body color-5">
                  <h3 class="title">
                      <?php echo $this->Session->flash('form1');?>
                   <?php echo $question;?>					
                  </h3>
                  <?php 
                  $total=$poll['Poll']['count1']+$poll['Poll']['count2']+$poll['Poll']['count3']+$poll['Poll']['count4'];
                  $p1=$poll['Poll']['count1']/$total;
                  $percentage1=number_format((float)$p1*100, 2, '.', ''); 
                  $p2=$poll['Poll']['count2']/$total;
                  $percentage2=number_format((float)$p2*100, 2, '.', ''); 
                  $p3=$poll['Poll']['count3']/$total;
                  $percentage3=number_format((float)$p3*100, 2, '.', ''); 
                  $p4=$poll['Poll']['count4']/$total;
                  $percentage4=number_format((float)$p4*100, 2, '.', ''); 
                
                  
                
                  ?>
                  <div class="speakup-bars">
                      
                      <?php if (strlen(trim($option1)) != 0) {?>
                     <div class="color-16 radius">
                        <span class="bar speakup-charp-key radius" style="width:<?=$percentage1;?>%;"></span>
                        <h3 class="radius"><?php echo $option1;?></h3>
                        <small><?php echo $poll['Poll']['count1'];?> Votes (<?=$percentage1;?>%)</small>
                     </div>
                     <?php } ?>
                    <?php if (strlen(trim($option2)) != 0) {?>
                     <div class="color-8 radius">
                        <span class="bar speakup-charp-key radius" style="width:<?=$percentage2;?>%;"></span>
                        <h3 class="radius"><?php echo $option2;?></h3>
                        <small><?php echo $poll['Poll']['count2'];?> Votes (<?=$percentage2;?>%)</small>
                     </div>
                     <?php } ?>
                      <?php if (strlen(trim($option3)) != 0) {?>
                     <div class="color-14 radius">
                        <span class="bar speakup-charp-key radius" style="width:<?=$percentage3;?>%;"></span>
                        <h3 class="radius"><?php echo $option3;?></h3>
                        <small><?php echo $poll['Poll']['count3'];?> Votes (<?=$percentage3;?>%)</small>
                     </div>
                     <?php } ?>
                       <?php if (strlen(trim($option4)) != 0) {?>
                     <div class="color-15 radius">
                        <span class="bar speakup-charp-key radius" style="width:<?=$percentage4;?>%;"></span>
                        <h3 class="radius"><?php echo $option4;?></h3>
                        <small><?php echo $poll['Poll']['count4'];?> Votes (<?=$percentage4;?>%)</small>
                     </div>
                     <?php } ?>
                     
                  </div>
                  <div class="speakup-answers">
                      <?php if (strlen(trim($option1)) != 0) {?>
                     <div class="speakup-radio">
                        <input id="1479" type="radio" name="count" value="count1"> 
                        <label for="1479"><?php echo $option1;?></label>
                     <?php if(strlen(trim($option1img)) != 0){?> <img src="images/polls/<?php echo $option1img;?>" id="1479" width="250px" height="250px"> <?php } ?>
                     </div>
                     <?php } ?>
                       <?php if (strlen(trim($option2)) != 0) {?>
                     <div class="speakup-radio">
                        <input id="1480" type="radio" name="count" value="count2"> 
                        <label for="1480"><?php echo $option2;?></label>
                          <?php if(strlen(trim($option2img)) != 0){?>  <img src="images/polls/<?php echo $option2img;?>" width="250px" height="250px"> <?php } ?>
                     </div>
                     <?php } ?>
                      <?php if (strlen(trim($option3)) != 0) {?>
                     <div class="speakup-radio">
                        <input id="1481" type="radio" name="count" value="count3"> 
                        <label for="1481"><?php echo $option3;?></label>
                           <?php if(strlen(trim($option3img)) != 0){?> <img src="images/polls/<?php echo $option3img;?>" width="250px" height="250px"> <?php } ?>
                     </div>
                     <?php } ?>
                     <?php if (strlen(trim($option4)) != 0) {?>
                     <div class="speakup-radio">
                        <input id="1491" type="radio" name="count" value="count4"> 
                        <label for="1491"><?php echo $option4;?></label>
                          <?php if(strlen(trim($option4img)) != 0){?>  <img src="images/polls/<?php echo $option4img;?>" width="250px" height="250px"> <?php } ?>
                     </div>
                     <?php } ?>
                  </div>
                 <input  type="hidden" name="user_ip" value="<?php echo $user_ip; ?>">
                 <input type="hidden" name="user_id" value="<?php echo $this->Session->read('User.id'); ?>">
                  <div class="speakup-footer">
                     <button type="submit" class="button" >Submit Vote</button>
                     <div class="btn-color-11">Total Votes: <?php echo $total;?> Votes</div><br><br>
                     <div class="sharethis-inline-share-buttons"></div>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
         </form>
      </div>
      <?php echo $this->element('speak/aside'); ?>
   </div>
   <!-- End row -->
</section>

<!-- End container -->