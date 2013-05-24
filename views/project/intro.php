<?php include("modals_project.php"); ?>		
	<div class="row-fixed">
	<div class="page-header">	
<?php echo "<div>
                <a href='" . URL . "project/intro/" .$this->project[0]['idProject'] ."' class='btn btn-primary' id='activities'><i class='icon-time'></i> Overview</a>			
                <a href='" . URL . "project/sprint/" .$this->project[0]['idProject'] ."' class='btn btn'><i class='icon-time'></i> Sprints</a>											
                <a href='" . URL . "project/task/" .$this->project[0]['idProject'] ."' class='btn'><i class='icon-tasks'></i> Tasks</a>											
                <a href='" . URL . "project/members/" .$this->project[0]['idProject'] ."' class='btn'><i class='icon-group'></i> Members</a>
                <div class='pull-right'>
					<a href='#new-task' data-toggle='modal' class='btn btn-success' ><i class='icon-time'></i> New Task</a>			
					<a href='#newSprint' data-toggle='modal' class='btn btn-success'><i class='icon-tasks'></i> New Sprint</a>
					<a href='" . URL . "documentation/timeline' class='btn btn-success' id='activities'><i class='icon-time'></i> Add Members</a>				
                    <a class='btn btn-danger dropdown-toggle' data-toggle='dropdown' href='#' ><i class='icon-cogs'></i> Project Settings</a>
                </div>	
                <hr width='100%'>
            </div>";
?>

	
				<div class="tabbable tabs-top">
					<ul class="nav nav-tabs" style="padding-top:15px;margin-left:-20px;">
						<li class="active"><a href="#A" data-toggle="tab"><i class="icon-home"></i> <?php echo $this->project[0]['name']; ?></a></li>
						<li><a href="#B" data-toggle="tab"><i class="icon-info-sign"></i> Description</a></li>
						<li><a href="#C" data-toggle="tab"><i class="icon-tags"></i> Tags</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="A">
							
							Project Progress:
							<div class="progress">
							<div class="bar bar-success" style="width: 36%;">36%</div> 
							</div>						
						</div>
						<div class="tab-pane" id="B">
							<div>
								<div class="thumbnail pull-right"><img src="http://placehold.it/260x180"  alt=""></div>
								<h4><?php echo $this->project[0]['name']; ?></h4>
								<?php echo $this->project[0]['description']; ?><p>
								<p>Created by <a href="#">Owner name</a> | Sept 16th, 2012 </p>								
							</div>							
						</div>
						<div class="tab-pane" id="C">
							<a href="#"><span class="label label-info">Snipp</span></a> 
							<a href="#"><span class="label label-info">Bootstrap</span></a> 
							<a href="#"><span class="label label-info">UI</span></a> 
						</div>
					</div>
				</div>

	</div>
	</div>
