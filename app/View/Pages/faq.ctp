<?php ?>



<div class="product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="faq">
			     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

       
<?php foreach($faqs as $faq): ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $faq['Faq']['id']; ?>" aria-expanded="false" aria-controls="<?php echo $faq['Faq']['id']; ?>">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <?php echo $faq['Faq']['name']; ?>
                    </a>
                </h4>
            </div>
            <div id="<?php echo $faq['Faq']['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                     <?php echo $faq['Faq']['description']; ?>
                </div>
            </div>
        </div>
<?php endforeach; ?>
        
    </div><!-- panel-group -->
			   </div>
              
            </div>
        </div>
    </div>
</div>