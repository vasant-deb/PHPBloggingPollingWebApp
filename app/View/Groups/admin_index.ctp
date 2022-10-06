<div class="container-fluid main-content">
  <div class="page-title">
    <h1> Banners <?php //echo $title_for_layout?></h1>
  </div>
  <!-- DataTables Example -->
  <div class="row">
    <div class="col-lg-12">
      <div class="widget-container fluid-height clearfix">
        <div class="heading"> <i class="icon-table"></i>Manage Banners
          <?php 
		   echo $this->Html->link("<i class=\"icon-plus\"></i>New Banner",
		   array( 'action' => 'add', 'admin' => true),
		    array('escape' => FALSE,'class' => 'btn btn-sm btn-primary-outline pull-right')); 
			?>
        </div>
        <div class="widget-content padded clearfix">
          <table class="table table-bordered table-striped" id="dataTable1">
            <thead>
			  <th width="5%">ID</th>
               <th width="35%">Name</th>
			   <th width="20%">User Id</th>    
			    <th width="20%">Status</th>    
               <th class="actions">Actions</th>
              </thead>
            <tbody>
			<?php foreach ($groups as $group): ?>
              <tr>
				<td><?php echo h($group['Group']['id']); ?></td>
				<td><?php echo h($group['Group']['group_name']); ?></td>
				<td><?php echo h($group['Group']['user_id']); ?></td>
  <td>
				<?php				
 				
				$options = array( '1' => 'Active', '0' => 'Inactive');
				echo $this->Form->select('status', $options, array('empty'=>false, 'name'=>'data[Group][status]', 'default'=>$group['Group']['status'], 'class'=>'form-control ddStatus', 'data-id'=>$group['Group']['id']));
				 
 				?>
				</td>
			
 				 
                <td class="actions">
				<div class="action-buttons"> 
			 

				<?php 
				echo $this->Html->link("<i class=\"icon-pencil\"></i>",
				array( 'action' => 'edit', $group['Group']['id']),
				array('escape' => FALSE,'class' => 'table-actions')); 
				?>


			

 
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
 <script type="text/javascript">     
        $(document).on('change', '.ddStatus', function(e) {
            var element = $(this); 
            currentStatus = $(this).val(); // Current Status
            $.ajax({
                type: 'POST',
                url: '<?php echo Router::url(array('controller'=>'groups', 'action'=>'change_group_status'))?>', // change_testimonial_status is a Function in controller
                data: 'id='+element.data('id')+'&status='+currentStatus,
                success: function(jsonResponse) {
                    var response = $.parseJSON(jsonResponse);
                    if(response.status != 'success')
                    {
                        element.val(!currentStatus);
                    }
                    
                    alert(response.message);
                    }
                });
            });            
  </script> 
   
 
 