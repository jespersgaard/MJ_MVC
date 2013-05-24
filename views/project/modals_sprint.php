<!--
This file is temp, this is where all the modals for Controller Sprint will be tested.
Once working they will be placed inside the Sprint-View-file
-->

<!-- MODAL FORM for creating a Sprint -->
<div class="modal hide" id="newSprint">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">x</button>
		<h3>Create a new Project</h3>
	</div>
<div class="modal-body">
<form method="post" action="<?php echo URL;?>sprint/create" class='form-horizontal form-validate' id="bb">
	<div class="control-group">
		<label for="textfield" class="control-label">Group</label>
		<div class="controls">
			<input type="text" name="idProject" data-rule-required="true"/><br/>		</div>
	</div>	
	<div class="control-group">
		<label for="textfield" class="control-label">Valid From</label>
		<div class="controls">
			<input type="date" name="date_from" data-rule-required="true"/><br/>		</div>
	</div>	
	<div class="control-group">
		<label for="textfield" class="control-label">Valid Until</label>
		<div class="controls">
			<input type="date" name="date_to" data-rule-required="true"/><br/>		</div>
	</div>		
	<input type="submit" class="btn btn-success"/>
</form>
	 </div>
</div>	
