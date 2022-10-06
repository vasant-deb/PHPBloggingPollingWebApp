<?php ?>
<style>
.media-body {
    background: white;
    color: black;
    padding: 10px;
    font-size: 16px;
	line-height:32px;
	text-align:justify;
}

</style>
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12">
   
        <div class="comment-wrapper">
            <div class="panel panel-info">
                <div class="panel-heading" style="color:blue;font-weight:800;">
                  Total <?php echo $numResults; ?> Results
                </div><br>
				<?php $i=0;
						  foreach($result as $row): $i++;?>
                <div class="panel-body">
           
                    <div class="clearfix"></div>
                    <hr>
                    <ul class="media-list">
					 
                        <li class="media">
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted"><?php echo $row['Complaint']['created_at'];?></small>
                                </span>
                                <strong class="text-success"><?php echo $row['Complaint']['title'];?></strong><br>
                                <?php echo $row['Complaint']['description'];?><a href="speakup/<?php echo $row['Complaint']['slug'];?>">Continue Reading </a>.
                                </p>
                            </div>
                        </li>
						
                    </ul>
                </div><br><br>
				<?php endforeach; ?>
            </div>
        </div>

    </div>
</div>	
</div>		
<div class="paging">
<?php
echo $this->Paginator->prev('< ' . __('Previous'), array(), null, array('class' => 'prev disabled'));
echo $this->Paginator->numbers(array('separator' => ''));
echo $this->Paginator->next(__('Next') . ' >', array(), null, array('class' => 'next disabled'));
?>
</div>