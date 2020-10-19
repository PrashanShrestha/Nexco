<header>
		<div class="container-fluid">
			<div class="logo_wrapper">
				<a class="navbar-brand" href="index.php"><img src="assets/images/main_logo.jpg"></a>

			</div>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="nav_wrapper">
					<?php if(!isset($_SESSION['email'])):?>
					<div class="login_register_wrapper">
						<a href="register.php" class="register_btn">Register</a>
						<a href="login.php" class="login_btn">Login</a>
					</div>
					<?php endif;?>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="couple.php">Get a quote</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="services.php">OSHC Provider</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="policy.php">About Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact</a>
							</li>
							<?php if(isset($_SESSION['email'])):?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:green">
									<?php echo $_SESSION['email'];?>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="profile.php">Profile</a>
									<a class="dropdown-item" href="actions/logout.php">Logout</a>
								</div>
							</li>
						<?php endif;?>
						</ul>
					</div>
				</div>
			</nav><!-- /nav -->
		</div>
	</header>