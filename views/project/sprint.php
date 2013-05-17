<?php include("modals.php"); ?>		
	<div class="row-fixed">
	<div class="page-header">	
<?php echo "<div>
									<a href='" . URL . "project/intro' class='btn' id='activities'><i class='icon-time'></i> Overview</a>			
									<a href='" . URL . "project/sprint' class='btn btn-primary'><i class='icon-time'></i> Sprints</a>											
									<a href='" . URL . "project/task' class='btn'><i class='icon-tasks'></i> Tasks</a>											
									<a href='" . URL . "project/members' class='btn'><i class='icon-group'></i> Members</a>
									<div class='btn-group pull-right'>
									  <a class='btn btn-danger dropdown-toggle' data-toggle='dropdown' href='#'><i class='icon-cogs'></i> <span class='caret'></span>
									  </a>
									  <ul class='dropdown-menu pull-right'>
										  <li><a tabindex='-1' href='" . URL . "project/'>Privacy</a></li>
										  <li><a tabindex='-1' href='" . URL . "project/'>Settings</a></li>
									  </ul>
								</div>	
									<hr width='100%'>
								";
?>

							<div class="box-content nopadding">test
								<table class="table table-nomargin table-striped dataTable dataTable-colvis dataTable-columnfilter ">
									<thead>
										<tr class='thefilter'>
											<th></th>
											<th></th>
											<th class='hidden-350'></th>
											<th class='hidden-1024'></th>
											<th class='hidden-480'></th>
										</tr>									
										<tr>
											<th>Description</th>
											<th>Tasks</th>
											<th class='hidden-350'>Deadline</th>
											<th class='hidden-1024'>Assigned</th>
											<th class='hidden-480'>Status</th>
										</tr>
									</thead>
									<tbody>
							<!--TASK IS DEFINED HERE-->
																
										<tr>
											<td>Framework</td>
											<td>Design GUI</td>
											<td class='hidden-350'><input type="text" name="textfield" id="textfield" class="input-medium datepick"></td>
											<td class='hidden-1024'>
												<select name="s2" id="s2" class='select2-me input-block-level' multiple="multiple">
													<option value="01">Martin</option>
													<option value="02">Nicklas</option>
													<option value="03">Casper</option>
													<option value="04">Frederik</option>
													<option value="05">Thomas</option>
													<option value="06">Christoffer</option>
												</select>											
											</td>
											<td class='hidden-480'>
												<select name="s2" id="s2" class='select2-me input-normal'>
													<option value="01">Todo</option>
													<option value="02">Ongoing</option>
													<option value="03">Blocked</option>
													<option value="04">Done</option>
												</select>													
											</td>
							
										</tr>
										<tr>
											<td>Implementation</td>
											<td>Write Code</td>
											<td class='hidden-350'>29-05-2013</td>
											<td class='hidden-1024'>Nicklas</td>
											<td class='hidden-480'>
												<select name="s2" id="s2" class='select2-me input-small'>
													<option value="01">Todo</option>
													<option value="02">Ongoing</option>
													<option value="03">Blocked</option>
													<option value="04">Done</option>
												</select>												
											</td>
										</tr>
										</tbody>
								</table>
							</div>

</div>
</div>
