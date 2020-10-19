<?php include('includes/header.php');
		
		if(!isset($_SESSION["id"])) {
				header("Location:index.php");
		}else{
			$id = $_SESSION['id'];
			$first_name = $_SESSION['first_name'];
			$last_name  = $_SESSION['last_name'];
			$email      = $_SESSION['email'];

			if(count($_POST)>0) {
				     $fname = $_POST['first_name'];
					 $lname  = $_POST['last_name'];
					 $e      = $_POST['email'];
					 $pa   = md5($_POST['password']);

					$sql = "UPDATE users 
							SET first_name='".$fname."',last_name='".$lname."',
							    email='".$e."',password='".$pa."' 
							    WHERE id=".$id;
					 $result = $conn->query($sql);
					 if($result)
					 $_SESSION['msg'] = 'Profile Updated';
			}
		
		}




?>
<?php include('includes/nav.php');?>

	
	<section>
		<div class="slider_banner" style="background: url(assets/images/A.jpg);height: 200px">
			<div class="banner_content">
				<h1>Update Profile</h1>
			</div>
		</div>
	</section>
	<div class="contact_form_wrapper container">
		<div class="form_wrapper">
			<div class="form_content">
				<h3>Your Information</h3>
				<?php if(isset($_SESSION['msg'])):?>
					<div style="color: green;font-weight: bold;margin:10px 0px ">
						<?php echo $_SESSION['msg'];?>
						<span style="color: red">( Please logout to see the changes )</span>

					</div>
				<?php endif;?>
				<form action="" method="post">
					<input name="first_name" type="text"
						   placeholder="First Name" 
					       value="<?php echo $first_name;?>" required>
					<input name="last_name" type="text" 
						   placeholder="Last Name"
						   value="<?php echo $last_name;?>" required>

					<input name="email" type="text" 
						   placeholder="Email"
						   value="<?php echo $email;?>" readonly>
					<input name="password" type="password" placeholder="New Password" required>
					<input type="submit" value="Update">
				</form>
			</div>
		</div>
	</div>
		</section>

<?php include('includes/foot_nav.php');?>
<?php include('includes/footer.php');?>
	