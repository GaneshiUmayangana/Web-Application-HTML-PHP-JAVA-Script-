<!-- <html>
<head>
<title>Profile Page</title>
<style>
tr td.sd {background-color:#0a3256; color:white;  width:250; height:30;}
tr td.sd2 {background-color:#89bbe9; width:400; height:30; }

</style>
</head>
<body> -->
	


<?php




require_once "./dbconn/data.php";
require_once "./dbconn/connection.php";
// $servername = "localhost";
// $username = "root";
// $password = "1234";
// $dbname = "select";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }



if(isset($_POST['submit'])){
   $name = $_POST['Name'];
   $contact_no = $_POST['Contact_No'];
   $email = $_POST['Email'];
   $gender = $_POST['Gender'];
   $reg_number = $_POST['Registration_No'];
   $customer_type = $_POST['Customer_Type'];
   $payment_type = $_POST['Payment_Type'];
   $address = $_POST['Address'];
   $nic = $_POST['NIC'];
   $your_specialities = $_POST['Specialities'];
   $user_name = $_POST['User_Name'];
   $password = $_POST['Password'];

$sql = "INSERT INTO customer_registration ( `name`, `contact_no`, `email`, `gender`, `reg_number`, `customer_type`, `payment Type`, `address`, `nic`, `your_specialities`, `user_name`, `password`) 
VALUES ( '$name', '$contact_no', '$email', '$gender', ' $reg_number', ' $customer_type', '$payment_type', '$address', ' $nic', '$your_specialities', '$user_name', '$password')";


if ($conn->query($sql) === TRUE) {
   header("location: ./login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();



?>