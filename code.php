<?php session_start() ?>
<?php

$registration_no=$_POST['Registration_No'];
$inputpassword =$_POST['Password'];

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

//$sql = "SELECT id, name, reg_number FROM customer_registration WHERE reg_number=$registration_no ";
$sql_password = "SELECT * FROM customer_registration WHERE reg_number=".$registration_no." AND password=".$inputpassword;
//$result = $conn->query($sql);

$result_password = $conn->query($sql_password);
$result=$result_password ->fetch_assoc();

if(!empty($result)){
    $_SESSION['id']=$result['id'];
    $_SESSION['name']=$result['name'];
    $_SESSION['contact_no']=$result['contact_no'];
    $_SESSION['email']=$result['email'];
    $_SESSION['gender']=$result['gender'];
    $_SESSION['reg_number']=$result['reg_number'];
    $_SESSION['customer_type']=$result['customer_type'];
    $_SESSION['payment Type']=$result['payment Type'];
    $_SESSION['address']=$result['address'];
    $_SESSION['nic']=$result['nic'];
    $_SESSION['your_specialities']=$result['your_specialities'];
    $_SESSION['user_name']=$result['user_name'];
    $_SESSION['password']=$result['password'];
}else{
    die ("Not ok");
}


    ?>
<html>
<head>
	<title>Customer_Profile</title>
	<link rel="stylesheet" type="text/css" href="./css/list.css" >
	<link rel="stylesheet" type="text/css" href="./css/Customer_profile.css" >
</head>

<body bgcolor="#475252">

	<center>
		<div class="top">
			<ul>
			<li><a href="index.php">Home</a>
			<li><a href="select.php">Menu</a>
			<li><a href="explore.php">Product</a>
			<li><a href="review.php">Review</a>
			<li><a href="about.php">AboutUs</a>
		</div>
		
		<img  src="./Image/index.jpg" width="100%" height="93%" />

		<div style="position:absolute;top:68px;left:45px;">
			 <img width="85px" src="./Image/logo.jpg" />
		</div>

		<div style="position:absolute;top:15px;left:1365px;">
			<a href="help.html#login"> <img width="50px" src="./Image/help.png" /></a>
		</div>

		<div class="contents">
	
				<a href="select.php"><font size=5px color="red"> Go to menu and selct items you want</font></a>
				<form action="update.php?id=<?php echo  $_SESSION['id'];?>" method="POST" width=400>
						
				<table style="font-family: cursive">
				<tr><th colspan=3 style="background:rgba(0,0,0,0.7); color:white; font-size:30; height:30;">Customer Profile</th></tr>
				<tr><td class="sd">Name</td>
				<td class="sd2"><input type="text" name="Name" value="<?php echo $_SESSION['name']; ?>" /></td></tr>

				<tr><td class="sd">Contact No</td>
				<td class="sd2"><input type=int name="Contact_No" value="<?php echo $_SESSION['contact_no']; ?>"/></td></tr>


				<tr><td class="sd">Email</td>
				<td class="sd2"><input type=text name="Email" value="<?php echo $_SESSION['email']; ?>"/></td></tr>


				<tr><td class="sd">Gender</td>
					<td class="sd2"><input type=text name="Gender" value="<?php echo $_SESSION['gender']  ?>"></td>
				</tr>


				</td></tr>


				<tr><td class="sd">Registration No</td>
				<td class="sd2"><input type=text name="Registration_No" value="<?php echo  $_SESSION['reg_number']?>" /></td></tr>

				<tr> <td class="sd">Customer Type</td>
					<td class="sd2"><input type=text name="Customer_Type" value="<?php echo $_SESSION['customer_type']; ?>"></td>
				<td class="sd3"><select name="Customer_Type">
					<option value="<?php echo $_SESSION['customer_type']; ?>"></option>
					<option>Local Customer</option>
					<option>Foriegn Customer</option>
				</select>
				</td></tr>

				<tr> <td class="sd">Payment Type</td>
					<td class="sd2"><input type=text name="Payment_Type" value="<?php echo $_SESSION['payment Type']; ?>"></td>
				<td class="sd3"><select name="Payment_Type">
					<option value="<?php echo $_SESSION['payment Type']; ?>"></option>
					<option>Cash</option>
					<option>Card Payment</option>
					<option>Other(QR...)</option>
				</select>
				</td></tr>
					
				<tr><td class="sd">Address</td>
				<td class="sd2"><input type=int name="Address" value="<?php echo $_SESSION['address']; ?>"/></td></tr>

				<tr><td class="sd">NIC</td>
				<td class="sd2"><input type=int name="NIC" value="<?php echo $_SESSION['nic'];?>" /></td></tr>

				<tr><td class="sd">Specialities</td>
				<td class="sd2"><TEXTAREA name="Specialities" rows=5 columns=15><?php echo $_SESSION['your_specialities'];?></TEXTAREA></td></tr>

				<tr><td class="sd">User Name</td>
				<td class="sd2"><input type=text name="User_Name" value="<?php echo $_SESSION['user_name'];?>" /></td></tr>

				<tr><td class="sd">Password</td>
				<td class="sd2"><input type=password name="Password" value="<?php echo $_SESSION['password'];?>"/></td></tr>

				<tr ><td class="sd4" colspan=3 style="background:rgba(0,0,0,0.7); color:white; font-size:30; height:30;padding-bottom: 5px;" align="center" >
                <!-- <button type="submit"><a href="update.php?id=<?php echo  $_SESSION['id'];?>">Update</a></button></td > -->
                <input type="submit" name="update" value="Update" />&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="delete.php?reg_number=<?php echo  $_SESSION['reg_number'];?>">Delete</a>
					<a href="logout.php">Logout</a></td >
				</tr>
            
				</table>
				</form>
                
                </div>
				</center>
                 
                
            
        
     </body>
     </html>   