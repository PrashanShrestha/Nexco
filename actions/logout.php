<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["first_name"]);
unset($_SESSION["last_name"]);
unset($_SESSION["email"]);
$_SESSION['msg'] = 'Logout Success';
header('Location: /index.php');