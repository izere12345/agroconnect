<?php

include_once '../config/conn.php';

function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['submit'])) {

	$fname = validate($_POST['fname']);
	$lname = validate($_POST['lname']);
	$username = validate($_POST['username']);
	$email = validate($_POST['email']);
	$gender = validate($_POST['gender']);
	$pswd = validate($_POST['pswd']);

	$sql = "INSERT INTO users VALUES('','$fname','$lname','$username','$email','$gender','$pswd','buyer')";
	$result = mysqli_query($conn,$sql);

	if ($result) {
		echo "ok.";
	}

	
}




?>