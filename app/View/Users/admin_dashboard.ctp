<div class="container-fluid main-content">
<!-- Statistics -->
<div class="row">
  <div class="col-lg-12">
    <div class="widget-container stats-container">
      <div class="col-md-3">
        <div class="number">
          <a href="admin/answers"><div class="icon-th-large text-danger"></div></a>
          <?php echo $answers_stat_count; ?></div>
        <div class="text">
          <h3>Answers</h3>
        </div>
      </div>
      <div class="col-md-3">
        <div class="number">
         <a href="admin/questions"><div class="icon-group"></div></a>
          <?php echo $questions_stat_count; ?></div>
        <div class="text">
          <h3>Questions</h3>
        </div>
      </div>
      <div class="col-md-3">
        <div class="number">
           <a href="admin/complaints"><div class="icon-shopping-cart text-success"></div></a>
           <?php echo $speakers_stat_count; ?></div>
        <div class="text">
          <h3> Speakups</h3>
        </div>
      </div>
      <div class="col-md-3">
        <div class="number">
          <a href="admin/enquiries"><div class="icon-envelope text-warning"></div></a>
          <?php echo $total_enquiries;?></div>
        <div class="text">
          <h3> Enquiries</h3>
        </div>
      </div>
    </div>
  </div>
</div>

     
      <script>
$('#flashMessage').addClass('alert alert-success');
</script>
    </div>
  </div>
</div>
