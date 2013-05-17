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
									<hr width='100%'>
			</div>					";?>
				<div class="actions">
					<a class="btn btn-success" data-toggle="modal" href="#myModal" >New Task</a>
				</div>	<br>
<div class="row-fixed">
	<div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Rendering engine</th>
					<th>Browser</th>
					<th class='hidden-350'>Platform(s)</th>
					<th class='hidden-1024'>Engine version</th>		
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Trident</td>
					<td>
						Internet
						Explorer 4.0
					</td>
					<td class='hidden-350'>Win 95+</td>
					<td class='hidden-1024'>4</td>
				</tr>
				<tr>
					<td>Presto</td>
					<td>Nokia N800</td>
					<td class='hidden-350'>N800</td>
					<td class='hidden-1024'>-</td>
				</tr>

			</tbody>
		</table>
	</div>

</div>



</div>
</div>