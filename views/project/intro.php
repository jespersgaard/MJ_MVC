<?php include("modals.php"); ?>		
	<div class="row-fixed">
	<div class="page-header">	
<?php echo "<div>
									<a href='" . URL . "project/intro' class='btn btn-primary' id='activities'><i class='icon-time'></i> Overview</a>			
									<a href='" . URL . "project/sprint' class='btn btn'><i class='icon-time'></i> Sprints</a>											
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
			</div>					";
?>
	<div class="row span12">
                <div class="span8">
                    <div class="row">
                        <div class="span8">
                            <h4 style="margin-left:5px;">
                                <strong><a href="#">Framework</a></strong>
                                <p class="pull-right"></p>
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span2">
                            <a href="#" class="thumbnail" style="margin-left:5px;"><img src="http://placehold.it/260x180"  alt=""></a>
                        </div>
                        <div class="span6">
                                <div class="tabbable tabs-left">
                                  <ul class="nav nav-tabs" style="padding-top:15px;margin-left:-20px;">
                                    <li class="active"><a href="#A" data-toggle="tab"><i class="icon-home"></i> Overview</a></li>
                                    <li><a href="#B" data-toggle="tab"><i class="icon-info-sign"></i> Description</a></li>
                                    <li><a href="#C" data-toggle="tab"><i class="icon-tags"></i> Tags</a></li>
                                  </ul>
                                  <div class="tab-content">
                                    <div class="tab-pane active" id="A">
										<p style="margin-left:5px;">
										Created by: <a href="#"><span class="label label-info">Martin</span></a> | Sept 16th, 2012 <p>
										Current Sprint: <i class="icon-tasks"></i> <a href="#"><span class="label label-info">Start: 04-04-2013 <br>End: 08-04-2013</span></a> <p>
										Comments: <i class="icon-comment"></i> <span class="label label-info">3 Comments</span></a> <p>
										Sprints task: <i class="icon-share"></i> <a href="#"><span class="label label-info">9 Tasks</span></a>	| All tasks: <i class="icon-share"></i> <a href="#"><span class="label label-info"> 39 Tasks</span></a></p>
										Project Progress:
										<div class="progress">
												<div class="bar bar-success" style="width: 36%;">36%</div> 
										</div>
									</div>
                                    <div class="tab-pane" id="B">
										Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option. Utinam salutatus ex eum. Ne mea dicit tibique facilisi, ea mei omittam explicari conclusionemque, ad nobis propriae quaerendum sea.<p>
										<p style="margin-left:5px;">Created by <a href="#">Owner name</a> | Sept 16th, 2012 </p>
                                    </div>
                                    <div class="tab-pane" id="C">
										<a href="#"><span class="label label-info">Snipp</span></a> 
										<a href="#"><span class="label label-info">Bootstrap</span></a> 
										<a href="#"><span class="label label-info">UI</span></a> 
                                    </div>
                                  </div>
                                </div> <!-- /tabbable -->
                         </div>
                    </div>

                </div>
            </div>
            <hr>
		<div class="span12">
			<div class="span8">
				<p><hr width='100%'>
											<a href="#new-task" data-toggle="modal" class='btn btn-primary' ><i class='icon-time'></i> Create New Task</a>			
											<a href='" . URL . "documentation/filemanager' class='btn btn-primary'><i class='icon-tasks'></i> Add New Sprint</a>
											<a href='" . URL . "documentation/timeline' class='btn btn-primary' id='activities'><i class='icon-time'></i> Add Members</a>

				</div>

			</div>	

		</div>
	</div>
