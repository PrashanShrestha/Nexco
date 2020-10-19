<?php
require_once('connect.php');
require_once('config.php');
require('PHPMailer/PHPMailerAutoload.php');

if(isset($_POST) & !empty($_POST)){

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(!isset($name) || empty($name)){
	$error[] = "Name is required";
}

if(!isset($email) || empty($email)){
	$error[] = "E-Mail is required";
}

if(!isset($message) || empty($message)){
	$error[] = "Message is required";
}

if(!isset($error) || empty($error)){
	$to = "prsn.stha@gmail.com";
	$headers = "From : " . $email;

	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host = $smtphost;
	$mail->SMTPAuth = true;
	$mail->Username = $smtpuser;
	$mail->Password = $smtppass;
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;

	$mail->setFrom('info@pixelw3.com', 'PixelW3 Technologies');
	$mail->addAddress('prsn.stha@gmail.com', 'Vivek Vengala'); 

	$mail->Body    = $message . " Name : " . $name . ". E-Mail : " . $email;

	if(!$mail->send()) {
	    echo 'Message has been sent successfully.';
	    
	} else {
		$sql = "INSERT INTO `temp` (name, email, message) VALUES ('$name', '$email', '$message')";
		if(mysqli_query($connection, $sql)){
	    	echo 'Message has been sent, we will get back to you soon';
		}
	}
	/*
	if(mail($to, $subject, $message, $headers)){
		$sql = "INSERT INTO `contact` (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
		if(mysqli_query($connection, $sql)){
			"Message Received, we will get back to you soon";
		}else{
			echo "Failed to send message, Try again";
		}
	}else{
		echo "Failed to send message, Try again";
	}
	*/
}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Contact form in PHP & MySQL</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
	<div class="row">
		<form class="col-md-6 col-md-offset-3" method="post">
			<h2>Contact Us</h2>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Name</label>
		    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Full Name" required="">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email" required="">
		  </div>
		  
		  <textarea class="form-control"  name="message" rows="3" placeholder="Enter Your Query Here" required=""></textarea>
		  <button type="submit" class="btn btn-default">Submit</button>
		  <section class="map_wrapper">
		<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3312.073349472959!2d151.12328521566113!3d-33.88776472747571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s50%20brown%20street%2C%20ashfield%2C%20Sydney%20ko%20!5e0!3m2!1sen!2snp!4v1602693247854!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</section>


		</form>
	</div>
	<?php include('includes/foot_nav.php');?>
<?php include('includes/footer.php');?>
</div>
</body>
</html>

	