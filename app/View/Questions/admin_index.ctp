<div class="container-fluid main-content">
  <div class="page-title">
    <h1> Speak Ups <?php //echo $title_for_layout?></h1>
  </div>
  <!-- DataTables Example -->
  <div class="row">
    <div class="col-lg-12">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"> <i class="icon-table"></i>Manage Questions
          <?php 
		   echo $this->Html->link("<i class=\"icon-plus\"></i>New Question",
		   array( 'action' => 'add', 'admin' => true),
		    array('escape' => FALSE,'class' => 'btn btn-sm btn-primary-outline pull-right')); 
			?>
        </div>
        <div class="widget-content padded clearfix">
          <table class="table table-bordered table-striped" id="dataTable1">
            <thead>
			  <th width="5%">ID</th>
			   <th width="35%">User Ip</th>
               <th width="35%">Title</th>
			   <th width="40%">Category</th>              
               <th class="actions">Actions</th>
              </thead>
            <tbody>
			<?php foreach ($questions as $speak): ?>
              <tr>
				<td><?php echo h($speak['Question']['id']); ?></td>
				<td><?php echo h($speak['Question']['user_ip']); ?></td>	
				<td><?php echo h($speak['Question']['title']); ?></td>	
 <td><?php echo h($speak['Category']['name']); ?></td>	
				
 				 
                <td class="actions">
				<div class="action-buttons"> 
			 

				<?php 
				echo $this->Html->link("<i class=\"icon-pencil\"></i>",
				array( 'action' => 'edit', $speak['Question']['id']),
				array('escape' => FALSE,'class' => 'table-actions')); 
				?>


				<?php echo $this->Form->postLink("<i class=\"icon-trash\"></i>", 
				array('action' => 'delete', $speak['Question']['id']), 
				array('escape' => FALSE,'class' => 'table-actions'), __('Are you sure you want to delete # %s?', $speak['Question']['id'])); ?>

 
			</div>
				 </td>
              
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- end DataTables Example -->
</div>
   
 
<script>
$('#flashMessage').addClass('alert alert-success');
</script>
 
 
 