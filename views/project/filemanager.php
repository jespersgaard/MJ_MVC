<div class="row-fixed">
	<div class="page-header">	
		<?php echo $viewModel->__get('doc-nav'); ?>
	</div>	
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
							<a href="#" class='task-delete' rel="tooltip" title="Delete that task"><i class="icon-remove"></i></a>
							<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important"><i class="icon-bookmark-empty"></i></a>
						</span>
					</li>
					<li>
						<div class="check">
							<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
						</div>
						<span class="task"><i class="icon-bar-chart"></i><span>Check statistics</span></span>
						<span class="task-actions">
							<a href="#" class='task-delete' rel="tooltip" title="Delete that task"><i class="icon-remove"></i></a>
							<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important"><i class="icon-bookmark-empty"></i></a>
						</span>
					</li>
					<li class='done'>
						<div class="check">
							<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue" checked>
						</div>
						<span class="task"><i class="icon-envelope"></i><span>Check for new mails</span></span>
						<span class="task-actions">
							<a href="#" class='task-delete' rel="tooltip" title="Delete that task"><i class="icon-remove"></i></a>
							<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important"><i class="icon-bookmark-empty"></i></a>
						</span>
					</li>
					<li>
						<div class="check">
							<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
						</div>
						<span class="task"><i class="icon-comment"></i><span>Chat with John Doe</span></span>
						<span class="task-actions">
							<a href="#" class='task-delete' rel="tooltip" title="Delete that task"><i class="icon-remove"></i></a>
							<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important"><i class="icon-bookmark-empty"></i></a>
						</span>
					</li>
					<li>
						<div class="check">
							<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
						</div>
						<span class="task"><i class="icon-retweet"></i><span>Go and tweet some stuff</span></span>
						<span class="task-actions">
							<a href="#" class='task-delete' rel="tooltip" title="Delete that task"><i class="icon-remove"></i></a>
							<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important"><i class="icon-bookmark-empty"></i></a>
						</span>
					</li>
					<li>
						<div class="check">
							<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
						</div>
						<span class="task"><i class="icon-edit"></i><span>Write an article</span></span>
						<span class="task-actions">
							<a href="#" class='task-delete' rel="tooltip" title="Delete that task"><i class="icon-remove"></i></a>
							<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important"><i class="icon-bookmark-empty"></i></a>
						</span>
					</li>
				</ul>
			</div>
		</div>	</div>	
</div>
