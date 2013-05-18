<?php include("modals.php"); ?>		
<div class="row-fixed">
<div class="page-header">	
<?php echo "<div>
                <a href='" . URL . "project/intro' class='btn' id='activities'><i class='icon-time'></i> Overview</a>			
                <a href='" . URL . "project/sprint' class='btn btn'><i class='icon-time'></i> Sprints</a>											
                <a href='" . URL . "project/task' class='btn btn-primary'><i class='icon-tasks'></i> Tasks</a>											
                <a href='" . URL . "project/members' class='btn'><i class='icon-group'></i> Members</a>
                  <div class='btn-group pull-right'>
                  <a href='#myModal' data-toggle='modal' class='btn btn-success'><i class='icon-plus-sign'></i> New Main Task</a>
                    <a class='btn btn-danger dropdown-toggle' data-toggle='dropdown' href='#'><i class='icon-cogs'></i> Project Settings<span class='caret'></span></a>
                    </a>
                    <ul class='dropdown-menu pull-right'>
                            <li><a tabindex='-1' href='" . URL . "project/'>Privacy</a></li>
                            <li><a tabindex='-1' href='" . URL . "project/'>Settings</a></li>
                    </ul>
                </div>	
                <hr width='100%'>
            </div>";?>
<div class="accordion" id="accordion2">
        <div class="accordion-group">
                <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                <h4>Framework</h4>
                        </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse">
                        <div class="accordion-inner">
<div class="row-fluid">
<?php echo "<div class='pull-right'>
        <a href='" . URL . "project/intro' class='btn btn-success' id='activities'><i class='icon-plus-sign'></i> New Sub Task</a>
        <a href='" . URL . "project/intro' class='btn btn-info' id='activities'><i class='icon-pencil'></i> Edit Main Task</a>
        <a href='" . URL . "project/intro' class='btn btn-danger' id='activities'><i class='icon-trash'></i> Delete Main Task</a>
</div>";
?>     
    <div>
        <table class="table table-hover table-nomargin">
            <thead>
                    <tr>
                            <th>Task</th>
                            <th>Description</th>
                            <th class='hidden-350'>Deadline</th>
                            <th class='hidden-1024'>Assign To</th>
                            <th class='hidden-480'>Status</th>
                            <th></th>                            
                    </tr>
            </thead>
            <tbody>
                    <tr>
                            <td>Create Task</td>
                            <td>The controller and model needs update                          </td>
                            <td class='hidden-350'>29-05-2013</td>
                            <td class='hidden-1024'>Christoffer</td>
                            <td class='hidden-480'>Ongoing</td>
                            <td>
                                <?php echo "<div class='pull-right'>
                                    <a href='" . URL . "project/intro' class='btn btn-info' id='activities'><i class='icon-pencil'></i></a>
                                    <a href='" . URL . "project/intro' class='btn btn-danger' id='activities'><i class='icon-trash'></i></a>
                                </div>";
                                ?>                                 
                            </td>
                    </tr>

            </tbody>
    </table></div>
</div>                                
                            
                        </div>
                </div>
        </div>
        <div class="accordion-group">
                <div class="accordion-heading">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                <h4>Design GUI</h4>
                        </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">

<div class="row-fluid">
<?php echo "<div class='pull-right'>
        <a href='" . URL . "project/intro' class='btn btn-success' id='activities'><i class='icon-plus-sign'></i> New Sub Task</a>
        <a href='" . URL . "project/intro' class='btn btn-info' id='activities'><i class='icon-pencil'></i> Edit Main Task</a>
        <a href='" . URL . "project/intro' class='btn btn-danger' id='activities'><i class='icon-trash'></i> Delete Main Task</a>
</div>";
?>     
    <div>
        <table class="table table-hover table-nomargin">
            <thead>
                    <tr>
                            <th>Task</th>
                            <th>Description</th>
                            <th class='hidden-350'>Deadline</th>
                            <th class='hidden-1024'>Assign To</th>
                            <th class='hidden-480'>Status</th>
                            <th></th>                            
                    </tr>
            </thead>
            <tbody>
                    <tr>
                            <td>Create Task</td>
                            <td>We need to change current view                            </td>
                            <td class='hidden-350'>29-05-2013</td>
                            <td class='hidden-1024'>Martin</td>
                            <td class='hidden-480'>Blocked</td>
                            <td>
                                <?php echo "<div class='pull-right'>
                                    <a href='" . URL . "project/intro' class='btn btn-info' id='activities'><i class='icon-pencil'></i></a>
                                    <a href='" . URL . "project/intro' class='btn btn-danger' id='activities'><i class='icon-trash'></i></a>
                                </div>";
                                ?>                                 
                            </td>
                    </tr>
            </tbody>
    </table></div>
</div>                            
                            
                        </div>
                </div>
        </div>
        
</div>
 



</div>
</div>