<?php
  session_start();
   $db = mysqli_connect('localhost' , 'root' , '' , 'registration');

if (isset($_POST['save'])) {
 	$username = $_POST['username'];
 	$email = $_POST['email'];
	$studentsrecord = $_POST['studentsrecord'];

 	$query = "INSERT INTO users (username,email,studentrecord) VALUES ('$username', '$email', '$studentsrecord')";
 	mysqli_query($db,$query);
 	$_SESSION['message'] = "record saved";
 	header('location: index.php');
 }


 if (isset($_POST['update'])) {
 	$username = ($_POST['username']);
 	$email = ($_POST['email']);
	$patientsrecord = ($_POST['studentsrecord']);
 	$id = ($_POST['id']);

 	$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
	
}
 	header('location: index.php');
 }
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM users
	 WHERE id=$id");
	 $_SESSION['msg'] = "students record deleted!";
    header('location: index.php');
}

$results = mysqli_query($db, "SELECT * FROM users");

 ?>