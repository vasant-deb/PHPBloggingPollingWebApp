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
         <form id="add_poll" class="form" method="post" enctype="multipart/form-data">
             <input type="hidden" name="data[Poll][user_id]" value="<?php echo $this->Session->read('User.id'); ?>">
             <input type="hidden" name="data[Poll][user_ip]" value="<?php echo $user_ip; ?>">
	<div class="speakup-box no-p">
		<h4 class="speakup-head">
			<span class="title">Add poll</span>
			<i class="fa fa-plus icon"></i>
		</h4>
		<div class="speakup-body color-16">
			<div class="prt-group">
				<label>Your Question <strong style="color:red;">*</strong></label>
				<input type="text" name="data[Poll][poll_question]" placeholder="type here Your Question">
				<p><i class="fa fa-question-circle"></i>No HTML allowed. Invalid question will be ignored.</p>
			</div>
			<div class="prt-group">
				<label>Answers 1<strong style="color:red;">*</strong></label>
									<input type="text" name="data[Poll][poll_answer1]" placeholder="type here your answer">
										<label>Thumbnail</label>
				<input type="file" name="data[Poll][poll_photo1]" placeholder="Add question image">
								<div class="input_msg"></div>
				<p><i class="fa fa-question-circle"></i>Leave fields empty to ignore options. No HTML allowed. Invalid answers will be ignored.</p>
			</div>
		<div class="prt-group">
				<label>Answers 2<strong style="color:red;">*</strong></label>
									<input type="text" name="data[Poll][poll_answer2]" placeholder="type here your answer">
										<label>Thumbnail</label>
				<input type="file" name="data[Poll][poll_photo2]" placeholder="Add question image">
								<div class="input_msg"></div>
				<p><i class="fa fa-question-circle"></i>Leave fields empty to ignore options. No HTML allowed. Invalid answers will be ignored.</p>
			</div>

<div class="prt-group">
				<label>Answers 3<strong style="color:red;">*</strong></label>
									<input type="text" name="data[Poll][poll_answer3]" placeholder="type here your answer">
										<label>Thumbnail</label>
				<input type="file" name="data[Poll][poll_photo3]" placeholder="Add question image">
								<div class="input_msg"></div>
				<p><i class="fa fa-question-circle"></i>Leave fields empty to ignore options. No HTML allowed. Invalid answers will be ignored.</p>
			</div>
			<div class="prt-group">
				<label>Answers 4<strong style="color:red;">*</strong></label>
									<input type="text" name="data[Poll][poll_answer4]" placeholder="type here your answer">
										<label>Thumbnail</label>
				<input type="file" name="data[Poll][poll_photo4]" placeholder="Add question image">
								<div class="input_msg"></div>
				<p><i class="fa fa-question-circle"></i>Leave fields empty to ignore options. No HTML allowed. Invalid answers will be ignored.</p>
			</div>
			<div class="speakup-footer">
	         	<button type="submit" class="button">Submit <i class="fa fa-arrow-circle-right right"></i></button>
				
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