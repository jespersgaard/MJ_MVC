	<div class="page-header">	
		<?php echo "

		<div>
			<a href='" . URL . "project' class='btn btn-primary' id='activities'><i class='icon-list'></i> List View</a>			
			<a href='" . URL . "project/index_gitter' class='btn' id='activities'><i class='icon-th'></i> Grid View</a>											
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
								echo '<td class="span2"><div><a href="'. URL . 'user/edit/' . $value['idUser'].'" class="btn btn-success"><i class="icon-zoom-in"></i> ' . $value['name'] . '</a></div></td>';
								echo '<td>' . $value['description'] . '<small>
									<p></p>
									<p>
									  <i class="icon-comment"></i> <a href="#">3 Comments</a>
									  | <i class="icon-share"></i> <a href="#">39 Tasks</a>
									  | <i class="icon-tags"></i> Tags : 
											  <a href="#"><span class="label label-info">Snipp</span></a> 
											  <a href="#"><span class="label label-info">Bootstrap</span></a> 
											  <a href="#"><span class="label label-info">UI</span></a> 
									</small>
										<h6>Members <small>(10)</small></h6>	';
										foreach($this->project_list_mine as $key => $value) {
									echo'		<a href="1#"><img src="<?php echo URL ?>/public/img/demo/user-avatar.jpg" class="img-circle"></a>
											<a href="1#"><img src="<?php echo URL ?>/public/img/demo/user-avatar.jpg" class="img-circle"></a><P>'; }
								echo '	</td>';
								echo '<td class="hidden-350 span2"><div><a href="'. URL . 'user/edit/' . $value['idUser'].'" class="btn btn-success"><i class="icon-zoom-in"></i> ' . $value['login'] . '</a></div></td>';
								echo '<td class="hidden-480 span2">' . $value['date_from'].'</td>';
								echo '</tr>';
							}
						?>
					</tbody>
				</table>