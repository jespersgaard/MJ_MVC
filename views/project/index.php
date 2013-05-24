<?php include("modals_project.php"); ?>		
	<div class="page-header">	
		<?php echo "

		<div>
			<a href='" . URL . "project' class='btn btn-primary' id='activities'><i class='icon-list'></i> List View</a>			
			<a href='" . URL . "project/index_gitter' class='btn' id='activities'><i class='icon-th'></i> Grid View</a>	
			<div class='pull-right'>
					<a href='#createProject' data-toggle='modal' class='btn btn-success' ><i class='icon-time'></i> New Project</a>			

            </div>				
			<hr width='100%'>
		</div>	
		"; ?>
	</div>

	<table class="table table-hover table-nomargin dataTable-columnfilter dataTable">
					<thead>
						<tr class='thefilter'>
							<th class="span2">Project</th>
							<th>Description</th>						
							<th class='hidden-350 span2'><i class="icon-user"></i> Owner </th>
							<th class='hidden-480 span2'><i class="icon-calendar"></i> Created</th>
						</tr>					
						<tr>
							<th class="span2">Project</th>
							<th>Description</th>
							<th class='hidden-350 span2'><i class="icon-user"></i> Owner </th>
							<th class='hidden-480 span2'><i class="icon-calendar"></i> Created</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($this->project_list_mine as $key => $value) {
								echo '<tr>';
								echo '<td class="span2"><div><a href="'. URL . 'project/intro/' . $value['idProject'].'" class="btn btn-success"><i class="icon-zoom-in"></i> ' . $value['name'] . '</a></div></td>';
								echo '<td>' . $value['description'] . ' ';
								echo '	</td>';
								echo '<td class="hidden-350 span2"><div><a href="'. URL . 'user/profile/' . $value['idUser'].'" class="btn btn-success"><i class="icon-zoom-in"></i> ' . $value['login'] . '</a></div></td>';
								echo '<td class="hidden-480 span2">' . $value['date_from'].'</td>';
								echo '</tr>';
							}
						?>
					</tbody>
				</table>