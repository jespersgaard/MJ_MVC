<?php include("modals_sprint.php"); ?>		
<div class="page-header">	
<?php 
echo "
<a href='" . URL . "project/intro/" .$this->currentProjectID ."' class='btn' id='activities'><i class='icon-time'></i> Overview</a>			
<a href='" . URL . "project/sprint/" .$this->currentProjectID ."' class='btn btn-primary'><i class='icon-time'></i> Sprints</a>  
<a href='" . URL . "project/task/" .$this->currentProjectID ."' class='btn'><i class='icon-tasks'></i> Tasks</a>											
<a href='" . URL . "project/members/" .$this->currentProjectID ."' class='btn'><i class='icon-group'></i> Members</a>
<div class='pull-right'>
<a href='#newSprint' data-toggle='modal' class='btn btn-success'><i class='icon-plus-sign'></i> New Sprint</a>
<a class='btn btn-danger dropdown-toggle' data-toggle='dropdown' href='#' ><i class='icon-cogs'></i> Project Settings</a>
</div>	
<hr width='100%'>
";
?></div>
<div class="row-fluid">    
<div class="accordion" id="accordionSprint">
<?php
	echo $this->statusmsg;

foreach($this->selectSprint as $key => $value) {


    // then call the date functions
	$today = date('Y-m-d') ."\n";
	$start = $value['date_from']."\n";
	$end = $value['date_to']."\n";
	if ($start < $today && $today < $end) {			//show past sprint
		$showSprint = "collapse"; 
		$status = "Past";
		$statuscolor = "label-warning";}
	elseif  ($start > $today && $today < $end){		//show future sprint
		$showSprint = "collapse"; 
		$status = "Future";
		$statuscolor = "label-info";}
	else {												//show active sprint
		$showSprint = "collapse in"; 
		$status = "Active";
		$statuscolor = "label-success";}
		

	echo "
		<div class='accordion-group'>
			<div class='accordion-heading'>    
				<a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#". $value['idSprint'] ."'>
					<h4>SprintID= ". $value['idSprint'] ." | ". $value['date_from'] ." until ". $value['date_to'] ." <span class='label " . $statuscolor. "'> " . $status. "</span></h4>
				</a>
				 
			</div>
			<div id='". $value['idSprint'] ."' class='accordion-body " . $showSprint. "'>
			<div class='pull-right'>
				<a href='" . URL . "project/intro' class='btn btn-success' id='activities'><i class='icon-plus-sign'></i> New Main Task</a>		
				<a href='" . URL . "project/intro' class='btn btn-success' id='activities'><i class='icon-plus-sign'></i> New Sub Task</a>
				<a href='" . URL . "project/intro' class='btn btn-info' id='activities'><i class='icon-cogs'></i> Edit Sprint</a>
				<a href='" . URL . "project/intro' class='btn btn-danger' id='activities'><i class='icon-trash'></i> Delete Sprint</a>
			</div>
			   

				<div class='accordion-inner'>
					<table class='table table-hover table-nomargin'>
						<thead>
						<tr>
								<th class='span4'>Main Task(s)</th>
								<th class='hidden-350 span2'>Owner</th>
								<th class='hidden-350 span1'>Status</th>
								<th>Sub Task(s)</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									Design GUI
								</td>
								<td class='hidden-350 '>Martin</td>	
								<td class='hidden-350 '>Ongoing
									<a href='" . URL . "project/intro' class='btn btn-info pull-right' id='activities'><i class='icon-edit'></i></a>
									<a href='" . URL . "project/intro' class='btn btn-danger pull-right' id='activities'><i class='icon-trash'></i></a>							
								</td>							
								<td>
									<div class='accordion' id='accordionTask'>
									  <div class='accordion-group'>
										<div class='accordion-heading'>
										  <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordionTask' href='#task1'>
											Task 1
										  </a>
										</div>
										<div id='task1' class='accordion-body collapse'>
										<a href='" . URL . "project/intro' class='btn btn-danger pull-right' id='activities'><i class='icon-trash'></i></a>
										<a href='" . URL . "project/intro' class='btn btn-info pull-right' id='activities'><i class='icon-edit'></i></a>
										  <div class='accordion-inner'>
											Task No. 1
																					
										  </div>
										</div>
									  </div>
									<div class='accordion-group'>
										<div class='accordion-heading'>
										  <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordionTask' href='#task2'>
											Task 2
										  </a>
										</div>
										<div id='task2' class='accordion-body collapse'>
										  <div class='accordion-inner'>
											Task No. 2
										<a href='" . URL . "project/intro' class='btn btn-danger pull-right' id='activities'><i class='icon-trash'></i></a>
										<a href='" . URL . "project/intro' class='btn btn-info pull-right' id='activities'><i class='icon-zoom-in'></i></a>
										  </div>
										</div>
									  </div>								  
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>"; }
?>
</div>   

</div>
