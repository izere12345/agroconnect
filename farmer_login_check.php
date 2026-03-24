<?php

include_once '../config/conn.php';
session_start();

function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['submit'])) {
	$phone = validate($_POST['phone']);
	$pswd = validate($_POST['pswd']);


  $sql = "SELECT * FROM users WHERE phone='$phone' AND password='$pswd'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_num_rows($result);

	if ($row > 0) {
		  session_start();
		  $_SESSION['phone'] = $phone;
			header("location:farmer_dashboard.php");
		}else{
			$em = " telefone cg Ijambobanga Sibyo. Ongera Ugerageze.";
      header("location:farmer_login.php?error=$em");
		}
    
  }



	




?>
