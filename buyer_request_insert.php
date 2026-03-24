<?php 
include_once '../config/conn.php';

if (isset($_POST['submit'])) {

if (isset($_GET['id'])) {
 	
$p_id = $_GET['id'];

echo $p_id;
}
// $info = "SELECT * FROM farmer_product WHERE product_id = '$p_id'";
// $result = mysqli_query($conn,$info);

// $row = mysqli_fetch_array($result);
// $farmer = $row['farmer_id'];



// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $phone = $_POST['phone'];
// $location = $_POST['location'];
// $product = $_POST['product'];
// $quantity = $_POST['quantity'];	




// $sql = "INSERT INTO buyer_request(buyer_id,fname,lname,phone,location,quantity,measurement,product_id) VALUES('','$fname','$lname','$phone','$location','$product','$quantity','$farmer')";
// $res = mysqli_query($conn,$sql);
// if ($res === true) {
// 	$msg = "Igihingwa cya tumijwe neza murakoze!!!";
// 	header("location:buyer_request.php?success=$msg");
// }else{
// 	echo "not inserted";
// }

}
?> 