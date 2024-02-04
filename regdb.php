<html>
<head>
<title>Profile Page</title>
<style>
tr td.sd {background-color:#0a3256; color:white;  width:250; height:30;}
tr td.sd2 {background-color:#89bbe9; width:400; height:30; }

</style>
</head>
<body>
	
<?php 


$name =$_POST["Name"];
$contact_no =$_POST["Contact_No"];
$email =$_POST["Email"];
$gender =$_POST["Gender"];
$registration_no =$_POST["Registration_No"];
$customer_type =$_POST["Customer_Type"];
$payment_type =$_POST["Payment_Type"];
$address =$_POST["Address"];
$nic =$_POST["NIC"];
$specialities =$_POST["Specialities"];
$user_name =$_POST["User_Name"];
$password =$_POST["Password"];




if(isset($_POST['submit'])){

$servername ="localhost";
$username="root";
$password="1234";
$dbname="customer";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect) {
    die ("Error " . mysqli_connect_error());
}
//echo "Connected Successfully";

else{
$sql="INSERT INTO sales(Name,Contact_No,Email,Gender,Registration_No,Customer_Type,Payment_Type,Address,NIC,Specialities,User_Name,Password)
VALUES('$name','$contact_no','$email','$gender','$reg_no','$customer_type','$payment_type','$address','$nic','$specialities','$user_name','$password')";

$result=mysqli_query($connect,$sql);
	echo $sql;
	if($result){
		echo '<script language ="javascript">';
			echo'alert("Successfully send data")';
		echo '</script>';		
	}else{
		echo "error";
	}


$sqls ="Select * from customer where Registration_No='$reg_no' AND Password='$password' ";
	$results = mysqli_query($connect,$sqls);
	session_start();
    $row=mysqli_fetch_assoc($results);  
    $_SESSION=$row;

if($row)
{
	header("Location: Customers.php");

}
}
}