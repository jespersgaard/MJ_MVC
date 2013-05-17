<div class="row-fluid">
	<div class="page-header">

				<div class="span8">
						<div class="box-content nopadding">
							<ul class="tabs tabs-inline tabs-top">
								<li class='active'>
									<a href="#profile" data-toggle='tab'><i class="icon-user"></i> Profile</a>
								</li>
							</ul>
							<div class="tab-content padding tab-content-inline tab-content-bottom">
								<div class="tab-pane active" id="profile">
									<form action="<?php echo URL ?>user/editSave/<?php echo $this->user[0]['userid']; ?>" class="form-horizontal">
										<div class="row-fluid">
											<div class="span2">
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="max-width: 200px; max-height: 150px;"><img src="<?php echo URL ?>public/users/profilepic/<?php echo  $_SESSION['profilepic']; ?>.jpg" /></div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
													<div>
														<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name='imagefile' /></span>
														<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
													</div>
												</div>
											</div>
											<div class="span10">
												<div class="control-group">
													<label for="name" class="control-label right">Name:</label>
													<div class="controls">
														<input type="text" name="name" class='input-xlarge' value="<?php echo $this->user[0]['login']; ?>">
													</div>
												</div>
												<div class="control-group">
													<label for="country" class="control-label right">Role:</label>
													<div class="controls">
														<select name="role">
															<option value="admin" <?php if($this->user[0]['role'] == 'admin') echo 'selected'; ?>>Admin</option>
															<option value="owner" <?php if($this->user[0]['role'] == 'owner') echo 'selected'; ?>>Owner</option>
														</select>
													</div>
												</div>
												<div class="control-group">
													<label for="telefonnr" class="control-label right">Telefon Nummer:</label>
													<div class="controls">
														<input type="text" name="name" class='input-xlarge' value="<?php echo $this->user[0]['telefonnr']; ?>">
													</div>
												</div>
												<div class="control-group">
													<label for="email" class="control-label right">Email:</label>
													<div class="controls">
														<input type="text" name="email" class='input-xlarge' value="<?php echo $this->user[0]['email']; ?>">
														<div class="form-button">
															<a href="#" class="btn btn-grey-4 change-input">Change</a>
														</div>
													</div>
												</div>
												<div class="control-group">
													<label for="skype" class="control-label right">Skype:</label>
													<div class="controls">
														<input type="text" name="name" class='input-xlarge' value="<?php echo $this->user[0]['skype']; ?>">
													</div>
												</div>												
												<div class="control-group">
													<label for="pw" class="control-label right">Password:</label>
													<div class="controls">
														<input type="password" name="pw" class='input-xlarge' value="<?php echo $this->user[0]['password']; ?>">
														<div class="form-button">
															<a href="#" class="btn btn-grey-4 change-input">Change</a>
														</div>
													</div>
												</div>
												<div class="form-actions">
													<input type="submit" class='btn btn-primary' value="Save">
													<input type="reset" class='btn' value="Discard changes">
												</div>
											</div>
										</div>
									</form>
								</div>


							</div>
						</div>
				</div>
			</div>
</div>			
