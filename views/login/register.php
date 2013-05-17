    <div class="container-narrow">
	<div class="wrapper">
		<h1><a href="<?php URL ?>../welcome"><img src="<?php echo URL ?>/public/img/logo-big.png" alt="" class='retina-ready' width="59" height="49">SPM</a></h1>
		<p><h3>Student Project Management</h3>
		<div class="login-body">
			<h2>SIGN IN</h2>
			<form action="../login/createaccount" method='post' class='form-validate' id="test">
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
				<div class="control-group">
					<div class="pw controls">
						<input type="text" name="skype" placeholder="Skype" class='input-block-level' data-rule-required="false">
					</div>
				</div>
				<div class="control-group">
					<div class="pw controls">
						<input type="text" name="telefonnr" placeholder="Phone" class='input-block-level' data-rule-required="false">
					</div>
				</div>		
				<div class="control-group">
					<div class="pw controls">
						<input type="text" name="email" placeholder="Email" class='input-block-level' data-rule-required="true" data-rule-email="true">
					</div>
				</div>				
				<div class="submit">
					<input type="submit" value="Register me" class='btn btn-primary'>
				</div>
			</form>
			<div class="forget">
				<a href="../welcome"><span>Back to welcome?</span></a>
			</div>
		</div>
	</div>
</div>