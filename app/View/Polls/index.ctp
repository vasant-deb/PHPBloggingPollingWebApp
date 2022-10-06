<?php
   Configure::write('debug', 0);  
   ?>
<style>
   #header{
   margin-bottom: 70px;
   }
</style>
<link rel="stylesheet" href="css/poll.css">
<section class="container-fluid main-content">
   <div class="row">
      <div class="col-md-9 col-lg-9">
         <div class="speakup-box">
            <h4 class="speakup-head">
               <span class="title">Polls List</span>
               <i class="fa fa-tasks icon"></i>
            </h4>

            
                             <?php foreach($polls as $poll):
           $str= $poll['Poll']['polldata'];

preg_match('/Question:(.*?),Option1:(.*?),Option1Img:(.*?),Option2:(.*),Option2Img:(.*?),Option3:(.*),Option3Img:(.*?),Option4:(.*),Option4Img:(.*?)/', $str, $m);

  $question=$m[1].PHP_EOL;
 $option1=$m[2].PHP_EOL;
  $option1img=$m[3].PHP_EOL;
  $option2=$m[4].PHP_EOL;
  $option2img=$m[5].PHP_EOL;
  $option3=$m[6].PHP_EOL;
  $option3img=$m[7].PHP_EOL;
  $option4=$m[8].PHP_EOL;
  $option4img=$m[9].PHP_EOL;


?><div class="speakup-body color-16">
               <div class="speakup-list poll-439">
                  <h3 class="title">
                     <span class="poll-locked439"><small class="poll-closed clr-6"><i class="fa fa-lock"></i></small></span>
                     <a href="polls/<?php echo $poll['Poll']['slug'];?>.html"><?php echo $m[1].PHP_EOL; ?></a>
                  </h3>
                  <div class="details">
                     
                     <i class="fa fa-clock-o"></i><span><?php 
$ab=$poll['Poll']['created_at'];
$date = strtotime($ab);
echo date('M jS o', $date); ?></span>
                     <i class="fa fa-tasks"></i><span><?php echo $poll['Poll']['count1']+$poll['Poll']['count2']+$poll['Poll']['count3']+$poll['Poll']['count4'];?> Votes</span>
                     <div class="clearfix"></div>
                  </div>
               </div>
               </div>
                
            <div class="speakup-box">
               <div class="speakup-body color-5">
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
               </div>
            </div>
       
               <?php endforeach;?>
               
               <div>
                  <ul class='speakup-pagination'>
                     <li class='disabled'><a>&laquo;</a></li>
                     <li class='active'>1</li>
                     <li><a href='index4658.html?page=2'>2</a></li>
                     <li><a href='index9ba9.html?page=3'>3</a></li>
                     <li><a href='indexfdb0.html?page=4'>4</a></li>
                     <li><a href='indexaf4d.html?page=5'>5</a></li>
                     <li class='dot'>...</li>
                     <li><a href='index09f5.html?page=36'>36</a></li>
                     <li><a href='indexf497.html?page=37'>37</a></li>
                     <li><a href='index4658.html?page=2'>&raquo;</a></li>
                  </ul>
               </div>
            </div>
            
         </div>
     
      <?php echo $this->element('speak/aside'); ?>
   </div>
   <!-- End row -->
</section>
<!-- End container -->