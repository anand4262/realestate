<?php include_once('includes/head.inc.php'); ?>
<?php include_once('includes/header.inc.php'); ?>

<section class="login-section">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h4>Admin Login</h4>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Submit</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h4>User Login</h4>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Submit</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
            <h4>Hello, Friend!</h4>
				<p>Login to get Additional information</p>
				<button class="ghost" id="signIn">User Login</button>
			</div>
			<div class="overlay-panel overlay-right">
                <h4>Welcome Back!</h4>
				<p>Enter details  to access Admin previlages</p>
				<button class="ghost" id="signUp">Admin Login</button>
			</div>
		</div>
	</div>
</div>
</section>
<?php include_once('includes/footer.inc.php'); ?>