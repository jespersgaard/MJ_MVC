<div id="navigation">
		<div class="container-fluid">
			<a href="<?php echo URL . "index"; ?>" id="brand">FLAT</a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
			
			<div class="user">
				
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown"><?php echo  $_SESSION['login']; ?> <img src="<?php echo URL ?>/public/img/demo/user-avatar.jpg" alt=""></a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="<?php echo URL . "user/edit/".$_SESSION['userid']; ?>">My profile</a>
						</li>
						<li>
							<a href="<?php echo URL . "index/logout"; ?>">Sign out</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>