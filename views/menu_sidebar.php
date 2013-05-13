	<div class="container-fluid" id="content">
		<div id="left">
			<form action="search-results.html" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit"><i class="icon-search"></i></button>
				</div>
			</form>
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Dashboard</span></a>
				</div>
				<ul class="subnav-menu">			
					<li>
						<a href="<?php echo URL . "Index"; ?>"><i class="icon-tasks"></i> Old View</a>
					</li>					<li>
						<a href="<?php echo URL . "Index/Tiles"; ?>"><i class="icon-list"></i> Tiles View</a>
					</li>
				</ul>
			</div>		
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Projects</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="<?php echo URL . "project/project_list"; ?>"><i class="icon-tasks"></i> My Projects</a>
					</li>					<li>
						<a href="<?php echo URL . "project/project_gitter"; ?>"><i class="icon-list"></i> Open Projects</a>
					</li>
				</ul>
			</div>
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Tasks</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="Sprint"><i class="icon-tasks"></i> Sprints</a>
					</li>					<li>
						<a href="<?php echo URL . "project/task"; ?>"><i class="icon-list"></i> Tasks</a>
					</li>
				</ul>
			</div>
			
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Members</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="#"><i class="icon-user"></i> Attendance</a>
					</li>					<li>
						<a href="#"><i class="icon-eye-open"></i> Moodes</a>
					</li>
				</ul>
			</div>
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Files</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="#"><i class="icon-file"></i> My Files</a>
					</li>					<li>
						<a href="#"><i class="icon-th-list"></i> Project Files</a>
					</li>
				</ul>
			</div>

			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-right"></i><span>More Apps.</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						Coming soon...
					</li>

				</ul>
			</div>
		</div>	