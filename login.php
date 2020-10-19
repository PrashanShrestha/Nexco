<?php 
		
		include('includes/header.php');

        if(isset($_POST)){
			if(count($_POST)>0) {
				 $email    = $_POST["email"];
				 $password = md5($_POST["password"]);

				 if(empty($email) || empty($password)){
				 	$_SESSION['msg'] = 'Field are required.';
				 }else{

					 $sql = "SELECT * FROM users WHERE email='" .$email. "' and password = '". $password."'";
					 $result = $conn->query($sql);
					 $row = $result->fetch_assoc();
					
					
					if(is_array($row)) {
						$_SESSION["id"] = $row['id'];
						$_SESSION["first_name"] = $row['first_name'];
						$_SESSION["last_name"] = $row['last_name'];
						$_SESSION["email"] = $row['email'];
					} else {
						$_SESSION['msg'] = "Invalid Username or Password!";
					}
				}
			}
			if(isset($_SESSION["id"])) {
				header("Location:index.php");
			}
		}
	?>

	<div class="popup_form">
		<div class="form_wrapper">
			<div class="form_content">
				<h3>Login To NEXCO</h3>
				<?php if(isset($_SESSION['msg'])):?>
					<p style="color:blue"><?php echo $_SESSION['msg'];?></p>
				<?php endif;?>
				<form name="login" method="post" action="" align="center">
					<input type="text" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<p style="text-align: left;display: block;font-weight: bold;">New to Nexco . Please Register Now from <a href='register.php'>HERE.</a></p>
					<span style="display: flex;">
						<input type="submit" name="submit" value="Submit" style="width: 100px; margin-right: 10px;">
						<input type="reset" style="width: 100px">	
					</span>			
				</form>
			</div>
		</div>
	</div>
<?php 
	unset($_SESSION['msg']);
	include('includes/footer.php');

?>
