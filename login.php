
    <?php include 'includes/header.php'; ?>
	
	<!-- Heading Section -->

	<section id="heading_area">
		<div class="heading_area">
			<h2 class="m-0 wow fadeInUp" data-wow-delay=".4s">Login</h2>
			<nav aria-label="breadcrumb wow fadeInUp" data-wow-delay=".6s">
				<ol class="breadcrumb bg-transparent justify-content-center m-0">
					<li class="breadcrumb-item"><a href="index.php">HOME</a></li>
					<li class="breadcrumb-item active" aria-current="page">Login</li>
				</ol>
			</nav>
		</div>
	</section>


	<!-- Login Here -->

	<section id="login_area" class="py-5 my-5">
		<div class="sign__shape">
			<img src="images/bg/login.png" class="bg" alt="Login BG">
		</div>
		<h2 style="color: #232059; text-align: center; font-size: 34px;">Sign in to <br> recharge direct.</h2>
		<p class="text-center">it you don't have an account you can <a href="register.php" style="color: #007bff; font-weight: bold;">Register here!</a></p>
		<div class="login_form pb-5">
			<form action="" method="POST">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" autocomplete="off" required placeholder="Enter Email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" required placeholder="Enter Password">
				</div>
				<div class="px-1 form_optional justify-content-between">
					<div class="form_optional_box1">
						<input type="checkbox" id="remember_me" value="">
						<label for="remember_me">&nbsp; Remember me</label>
					</div>
					<div class="form_optional_box2">
						<a href="#">Forgot password ?</a>
					</div>
				</div>
				<div class="form-group mt-2">
					<button class="btn btn-primary btn-block">Sign In</button>
				</div>
				<div class="form-group p-0 text-center">
					<p class="m-0">New to Markit? <a href="#" style="color: #007bff; font-weight: bold;">Sign Up</a></p>
				</div>
			</form>
		</div>
	</section>

	


	<?php include 'includes/footer.php'; ?>
	</body>
</html>