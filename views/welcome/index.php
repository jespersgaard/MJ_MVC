
    <div class="container-narrow">
	      <div class="masthead">
			<ul class="nav nav-pills pull-right">
				<!-- <li><a href="<?php echo URL; ?>index">About</a></li>
				<li><a href="<?php echo URL; ?>help">Contact</a></li> -->
				<?php if (Session::get('loggedIn') == true):?>
					<li><a href="<?php echo URL; ?>dashboard">Dashboard</a></li>
					<li><a href="<?php echo URL; ?>login/logout">Logout</a> </li>  				
				<?php else: ?>
					<li><a href="<?php echo URL; ?>login">Login</a></li>
				<?php endif; ?></ul>
        <h3 class="muted">Student Project Management</h3>
      </div>

      <hr>
	
	

      <div class="">
		<h1>Fast, Easy and Efficient Student Project Management</h1>

      </div>
      <div class="row-fluid marketing">
        <div class="span6">
          <p><img src="<?php echo URL; ?>public/img/demo/screen1.jpg" alt=""></p>
      </div>
        <div class="span6">
          <p><h5>SPM is powerful, yet easy-to-use Web-based Student Project Management Software that takes your study group one step closer to project success. Its fantastic set of features and elegant interface will help your group become more productive in achieving their goals.</h5></p>
		    <a class="btn btn-large btn-success" href="<?php echo URL; ?>login/register">Sign up today</a>
        </div>

      </div>	  
      <hr>

      <div class="row-fluid marketing">
        <div class="span6">
          <h4>Work Better Together</h4>
          <p>Unlock your groups potential by giving them the freedom to collaborate when and how they want.</p>

          <h4>See What is Ahead</h4>
          <p>Feeds keeps your finger on the pulse of every project. Plan for events, be alerted to missed deliverables, view critical requests.</p>

        </div>

        <div class="span6">
          <h4>Fastest Tool. All in one page</h4>
          <p>Your projects move fast. SPM moves faster. It loads in a flash, giving you a complete view of events as they happen.</p>

          <h4>All You Need For All You Do</h4>
          <p>SPM has all you need to keep projects on time and on target, including planning, time tracking, reporting and more.</p>        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->