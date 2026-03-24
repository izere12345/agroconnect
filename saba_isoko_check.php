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
	$phone = $_SESSION['phone'];
  $sql = "SELECT * FROM users WHERE phone ='$phone'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);

	$igihingwa = validate($_POST['igihingwa']);
	$ingano = validate($_POST['ingano']);
	$igiciro = validate($_POST['igiciro']);
	$location = validate($_POST['location']);
	$date = validate($_POST['date']);
	$foreign = $row['id'];


$sql = "INSERT INTO farmer_product(product_id, product_name, quantity, location, price, date,farmer_id) VALUES('','$igihingwa','$ingano','$location','$igiciro','$date','$foreign')";
$result = mysqli_query($conn,$sql);

	if ($result === true) {
		$em= "washyize igihingwa cyawe kw'isoko";
		header("location:saba_isoko.php?error=$em");
		}
    
  }

?>