<html>
<head>
	<title>Update</title>
<style>
tr td.sd {background-color:#0a3256; color:white;  width:250 }
tr td.sd2 {background-color:#89bbe9; width:400 }
</style>
</head>
<body>

<?php

require_once "./dbconn/data.php";
require_once "./dbconn/connection.php";

		
if(isset($_POST['Name'])){
	// print("<pre>");
	//  print_r($_POST);
	//  print("</pre>");
	//  die;

	 $id=$_GET['id'];
	 $name = $_POST['Name'];
	$contact_no = $_POST['Contact_No'];
	$email = $_POST['Email'];
	$gender = $_POST['Gender'];
	$reg_number = $_POST['Registration_No'];
	$customer_type = $_POST['Customer_Type'];
	$payment_type = $_POST['Payment_Type'];
	$address = $_POST['Address'];
	$nic = $_POST['NIC'];
	$specialities = $_POST['Specialities'];
	$user_name = $_POST['User_Name'];
	$password = $_POST['Password'];
 


//$sql ="UPDATE customer_registration SET name=".$name." WHERE id = $id";
$sql = "UPDATE customer_registration SET name='$name', contact_no='$contact_no',email ='$email', gender='$gender',reg_number='$reg_number',customer_type='$customer_type',address='$address',nic='$nic',your_specialities='$specialities' WHERE id='$id'";

mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql)){
	header("Location: login.php");
}
}

var_dump(mysqli_query($conn,$sql));


?>
</body>
</html>