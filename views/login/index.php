
	<div class="wrapper">
		<h1><a href="<?php URL ?>index"><img src="<?php echo URL ?>/public/img/logo-big.png" alt="" class='retina-ready' width="59" height="49">SPM</a></h1>
		<p><h3>Student Project Management</h3>
		<div class="login-body">
			<h2>SIGN IN</h2>
			<form action="login/run" method='post' class='form-validate' id="test">
				<div class="control-group">
					<div class="email controls">
						<input type="text" name='login' placeholder="Username" class='input-block-level' data-rule-required="true" data-rule-email="false">
					</div>
				</div>
				<div class="control-group">
					<div class="pw controls">
						<input type="password" name="password" placeholder="Password" class='input-block-level' data-rule-required="true">
					</div>
				</div>
				<div class="submit">
					<div class="remember">
						<input type="checkbox" name="remember" class='icheck-me' data-skin="square" data-color="blue" id="remember"> <label for="remember">Remember me</label>
					</div>
					<input type="submit" value="Sign me in" class='btn btn-primary'>
				</div>
			</form>
			<div class="forget">
				<a href="#"><span>Forgot password?</span></a>
			</div>
		</div>
	</div>
