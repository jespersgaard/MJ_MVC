<?php include("modals.php"); ?>		

	
	
	<div class="row-fixed">
	<div class="page-header">	
<?php echo "<div>
									<a href='" . URL . "project/intro' class='btn btn-primary' id='activities'><i class='icon-time'></i> Overview</a>			
									<a href='" . URL . "project/timeline' class='btn btn' id='activities'><i class='icon-time'></i> Activities</a>											
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
	</div>	<p>
	
		<div class="span12">
			<div class="span8">
				<div class="span2">
					<a href="#"><h4>Framework</h4>
					<a href="#" class="thumbnail"><img src="http://placehold.it/60x60" alt=""></a>							
					</a>
				</div>
				<div class="span6">
				  Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option. Utinam salutatus ex eum. Ne mea dicit tibique facilisi, ea mei omittam explicari conclusionemque, ad nobis propriae quaerendum sea.
				<p><hr width='100%'>
				  <h6>Current Sprint: <i class="icon-tasks"></i> 04-04-2013 -> 08-04-2013</h6>
				<p><hr width='100%'>				
				  <i class="icon-comment"></i> <a href="#">3 Comments</a>
				  | <i class="icon-share"></i> <a href="#">39 Tasks</a>
				  | <i class="icon-tags"></i> Tags : 
						  <a href="#"><span class="label label-info">Snipp</span></a> 
						  <a href="#"><span class="label label-info">Bootstrap</span></a> 
						  <a href="#"><span class="label label-info">UI</span></a> 
				<p><hr width='100%'>
											<a href="#new-task" data-toggle="modal" class='btn btn-primary' ><i class='icon-time'></i> Create New Task</a>			
											<a href='" . URL . "documentation/filemanager' class='btn btn-primary'><i class='icon-tasks'></i> Add New Sprint</a>
											<a href='" . URL . "documentation/timeline' class='btn btn-primary' id='activities'><i class='icon-time'></i> Add Members</a>

				</div>

			</div>	

		</div>
	</div>
