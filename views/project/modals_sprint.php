<!--
This file is temp, this is where all the modals for Controller Sprint will be tested.
Once working they will be placed inside the Sprint-View-file
-->

<!-- MODAL FORM for creating a Sprint -->
<div class="modal hide" id="myModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">x</button>
    <h3>Create a new Sprint</h3>
  </div>
  <div class="modal-body">
	<form method="post" action="<?php echo URL;?>project/create_task">
	<div class="control-group  span6">
		<div class="controls">
			<div class="span3">
				<div class="control-group">
					<label for="textfield" class="control-label">Task Name</label>
					<div class="controls">
						<input type="text" name="name" id="textfield" class="input-normal">
					</div>
				</div>	
				<div class="control-group">
					<label for="textfield" class="control-label">Sprint</label>
					<div class="controls">
						<input type="text" name="sprintID" id="textfield" class="input-normal">
					</div>
				</div>	
				<div class="control-group">
					<label for="textfield" class="control-label">Description</label>
						<div class="controls">
							<textarea name="description" id="textarea" class="input-block-level input-normal"> </textarea>
						</div>
				</div>					
				<div class="control-group">
					<label for="textfield" class="control-label">Assigned To</label>
					<div class="controls">
						<select name="userID" id="s2" class='select2-me input-block-level' multiple="multiple">
							<option value="01">Martin</option>
							<option value="02">Frederik</option>
							<option value="03">Casper</option>
							<option value="04">Thomas</option>
							<option value="05">Nichlas</option>
							<option value="06">Christoffer</option>
						</select>
					</div>
				</div>				
			</div>
			<div class="span1">
				<div class="">
					<div class="check-line">
						<input type="radio" id="c1" class='icheck-me' name="status" data-skin="square" data-color="blue" checked> <label class='inline' for="c1">ToDo</label>
					</div>
					<div class="check-line">
						<input type="radio" id="c2" class='icheck-me' name="status" data-skin="square" data-color="blue" > <label class='inline' for="c2">Ongoing</label>
					</div>
					<div class="check-line">
						<input type="radio" id="c3"  class='icheck-me' name="status" data-skin="square" data-color="red" > <label class='inline' for="c3">Blocked</label>
					</div>
					<div class="check-line">
						<input type="radio" id="c4"  class='icheck-me' name="status" data-skin="square" data-color="green"  > <label class='inline' for="c4">Done</label>
					</div>
				</div>
			</div>
		</div>
	</div>

 </div>
  <div class="modal-footer">
    <input type="submit" class="btn btn-success"></form> 
    <a class="btn btn-danger" data-dismiss="modal">Cancel</a>
  </div>
</div>
	
