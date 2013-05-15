				<div class="row-fluid">
					<div class="span12">
						<ul class="tiles">
							<li class="orange high long">
								<a href="#"><span class='count'><i class="icon-tasks"></i> 8</span><span class='name'>My active tasks</span></a>
							</li>

							<li class="red">
								<a href="#"><span class='count'><i class="icon-envelope"></i> 1</span><span class='name'>Messages</span></a>
							</li>
							<li class="lime">
								<a href="#"><span class='count'><i class="icon-comment"></i> 4</span><span class='name'>Comments</span></a>
							</li>
							<li class="image">
								<a href="<?php echo URL . "user/edit/".$_SESSION['userid']; ?>"><img src="<?php echo URL ?>data/users/<?php echo  $_SESSION['userid']; ?>/profile/user.jpg" /><span class='name'><?php echo  $_SESSION['login']; ?></span></a>
							</li>

							<li class="green long">
								<a href="#"><span><i class="icon-globe"></i></span><span class='name'>User regions</span></a>
							</li>
							<li class="brown">
								<a href="#"><span class='count'><i class="icon-bolt"></i> 3</span><span class='name'>Warnings</span></a>
							</li>
							<li class="teal long">
								<a href="#"><span class='count'><i class="icon-cloud-upload"></i> 12</span><span class='name'>New uploads</span></a>
							</li>
							<li class="blue">
								<a href="#"><span><i class="icon-cogs"></i></span><span class='name'>Settings</span></a>
							</li>
							<li class="lime">
								<a href="<?php echo URL . "index/index"; ?>"><span><i class="icon-dashboard"></i></span><span class='name'>Dashboard</span></a>
							</li>
							<li class="orange">
								<a href="<?php echo URL . "index/logout"; ?>"><span><i class="icon-signout"></i></span><span class='name'>Sign out</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
