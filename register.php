
<?php include('includes/header.php');


		if(count($_POST)>0) {
			 $first_name = $_POST['first_name'];
			 $last_name  = $_POST['last_name'];
			 $email      = $_POST['email'];
			 $password   = md5($_POST['password']);

			$sql = "INSERT INTO users (first_name, last_name, email,password)
					VALUES ('".$first_name."', '".$last_name."', '".$email."','".$password."')";
			 $result = $conn->query($sql);
			 if($result)
			 $_SESSION['msg'] = 'Registration Complete';
		}
		if(isset($_SESSION["id"])) {
				header("Location:index.php");
		}
?>

	<div class="popup_form popup_register">
		<div class="form_wrapper">
			<div class="form_content">
				<?php if(isset($_SESSION['msg'])):?>
					<div style="color: blue">
						<?php echo $_SESSION['msg'];?>
					</div>
				<?php endif;?>

				<h3>Sign up for Nexco</h3>
				<form action="" method="post">
					<input name="first_name" type="text" placeholder="First Name" required>
					<input name="last_name" type="text" placeholder="Last Name" required="">

					<input name="email" type="text" placeholder="Email" required>
					<input name="password" type="password" placeholder="Password">
					<input type="submit" value="Register">
					<p style="text-align: left;display: block;font-weight: bold;color:blue">
						<a href='login.php' >Login from HERE.</a></p>
				</form>
			</div>
		</div>
	</div>
	
<?php 
unset($_SESSION['msg']);

include('includes/footer.php');?>