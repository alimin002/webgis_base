<?php echo $form->messages(); ?>

<div class="row">

	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Create Message</h3>
			</div>
			<div class="box-body">
				<?php echo $form->open(); ?>
					<div class="form-group">
					  <label for="usr">Message From:</label>
					  <input type="hidden" class="form-control" id="message_from" value="<?php echo $this->session->user_id; ?>" name="message_from">
					   <input type="text" class="form-control" value="<?php echo $this->session->username; ?>" disabled />
					</div>
					<div class="form-group">
					  <label for="pwd">Message To:</label>
					  <select class="form-control" name="message_to" id="message_to">
						<option>Select Contact</option>
						<option value="11">Budi</option>
						<option value="12">Andi</option>
						<option value="13">Yoga</option>
					  </select>
					</div>
					<div class="form-group">
					  <label for="pwd">Message:</label>
					  <textarea name="message_content" id="message_content" class="form-control"></textarea>
					</div>
					<?php echo $form->bs3_submit(); ?>
					
				<?php echo $form->close(); ?>
			</div>
		</div>
	</div>
	
</div>