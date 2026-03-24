<?php

include_once '../config/conn.php';

function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['submit'])) {
	session_start();
	

	$fname = validate($_POST['fname']);
	$lname = validate($_POST['lname']);
	$phone = validate($_POST['phone']);
	$email = validate($_POST['email']);
	$gender = validate($_POST['gender']);
	$pswd = validate($_POST['pswd']);
	// $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  // Sanitize the input
  

  // Prepare and execute a query to check if the username exists
  $sql = "SELECT  phone FROM users WHERE phone='$phone'";
  $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
//   $row = mysqli_fetch_array($result);



  // If the count is greater than zero, the username is taken
  if ($num>0) {
    $em = " iyi nimero ya telephone yarakoreshejwe";
    header("location:farmer_signup_page.php?error=$em");
  } else {
     $sql = "INSERT INTO users(id, fname, lname, phone, email, gender, password) VALUES('','$fname','$lname','$phone','$email','$gender','$pswd')";
	$result = mysqli_query($conn,$sql);

	if ($result === true) {
		$sql1 = "SELECT * FROM users WHERE phone='$phone'";
		$res = mysqli_query($conn,$sql1);
		$row = mysqli_fetch_array($res);

		  session_start();
		  $_SESSION['phone'] = $phone;
		  $_SESSION['id']    = $row['id'];
			header("location:farmer_dashboard.php");
		}
    
  }
 }



	




?>
