<?php include("modals.php"); ?>		


	<div class="row-fixed">
	<div class="page-header">	
<?php echo "<div>
									<a href='" . URL . "project/intro' class='btn' id='activities'><i class='icon-time'></i> Overview</a>			
									<a href='" . URL . "project/sprint' class='btn btn'><i class='icon-time'></i> Sprints</a>											
									<a href='" . URL . "project/task' class='btn btn-primary'><i class='icon-tasks'></i> Tasks</a>											
									<a href='" . URL . "project/members' class='btn'><i class='icon-group'></i> Members</a>
									<div class='btn-group pull-right'>
									  <a class='btn btn-danger dropdown-toggle' data-toggle='dropdown' href='#'><i class='icon-cogs'></i> <span class='caret'></span>
									  </a>
									  <ul class='dropdown-menu pull-right'>
										  <li><a tabindex='-1' href='" . URL . "project/'>Privacy</a></li>
										  <li><a tabindex='-1' href='" . URL . "project/'>Settings</a></li>
									  </ul>
								</div>	
									<hr width='100%'></div>
								";
?>

		
	<div>
		<div class="box box-color box-bordered lightgrey">
			<div class="box-title">
				<h3><i class="icon-ok"></i> Tasks</h3>
				<div class="actions">
					<a href="#new-task" data-toggle="modal" class='btn'><i class="icon-plus-sign"></i> Add Task</a>
				</div>
			</div>
			<div class="box-content nopadding">
				<ul class="tasklist">
					<li class='bookmarked'>
						<div class="check">
							<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">					
						</div>
						<span class="task"><i class="icon-ok"></i><span>Approve new users</span></span>
						<span class="task-actions">
							<a href="#" class='task-delete' rel="tooltip" title="Delete that task" data-placement="left"><i class="icon-remove"></i></a>
							<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important" data-placement="left"><i class="icon-bookmark-empty"></i></a>
							<a href="#new-task"  rel="tooltip" title="Edit that task" data-placement="left"><i class="icon-edit"></i></a>
							
						</span>
					</li>
					<li>
						<div class="check">
							<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
						</div>
						<span class="task"><i class="icon-bar-chart"></i><span>Check statistics</span></span>
						<span class="task-actions">
							<a href="#" class='task-delete' rel="tooltip" title="Delete that task" data-placement="left"><i class="icon-remove"></i></a>
							<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important" data-placement="left"><i class="icon-bookmark-empty"></i></a>
						</span>
					</li>
					<li class='done'>
						<div class="check">
							<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue" checked>
						</div>
						<span class="task"><i class="icon-envelope"></i><span>Check for new mails</span></span>
						<span class="task-actions">
							<a href="#" class='task-delete' rel="tooltip" title="Delete that task" data-placement="left"><i class="icon-remove"></i></a>
							<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important" data-placement="left"><i class="icon-bookmark-empty"></i></a>
						</span>
					</li>
					<li>
						<div class="check">
							<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
						</div>
						<span class="task"><i class="icon-comment"></i><span>Chat with John Doe</span></span>
						<span class="task-actions">
							<a href="#" class='task-delete' rel="tooltip" title="Delete that task" data-placement="left"><i class="icon-remove"></i></a>
							<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important" data-placement="left"><i class="icon-bookmark-empty"></i></a>
						</span>
					</li>
					<li>
						<div class="check">
							<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
						</div>
						<span class="task"><i class="icon-retweet"></i><span>Go and tweet some stuff</span></span>
						<span class="task-actions">
							<a href="#" class='task-delete' rel="tooltip" title="Delete that task" data-placement="left"><i class="icon-remove"></i></a>
							<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important" data-placement="left"><i class="icon-bookmark-empty"></i></a>
						</span>
					</li>
					<li>
						<div class="check">
							<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
						</div>
						<span class="task"><i class="icon-edit"></i><span>Write an article</span></span>
						<span class="task-actions">
							<a href="#" class='task-delete' rel="tooltip" title="Delete that task" data-placement="left"><i class="icon-remove"></i></a>
							<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important" data-placement="left"><i class="icon-bookmark-empty"></i></a>
						</span>
					</li>
				</ul>
			</div>
		</div>	</div>	
</div>
