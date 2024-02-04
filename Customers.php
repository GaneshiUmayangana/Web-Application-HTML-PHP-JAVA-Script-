<html>
<head>
<title>Customer Profile</title>
<link rel="stylesheet" type="text/css" href="./css/list.css" >
<link rel="stylesheet" type="text/css" href="./css/Customer.css" >
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


						<?php

						require_once "./dbconn/data.php";
						require_once "./dbconn/connection.php";

						session_start();
						$reg_number=$_SESSION['Registration_No'];


						$sql="SELECT * FROM customer_registration where reg_number='$reg_number'";
						$result=mysqli_query($connect,$sql);
						while($row = mysqli_fetch_assoc($result)){
						echo "<form action=Customer_Profile.php method=POST>";
						echo "<center>";
						echo "<table width=850 style='font-family: cursive'>";
						echo "<tr><th colspan=3 style='background:rgba(0,0,0,0.7); color:#ffffff; font-size:30; height:30;'>Customer Profile</th></tr>
							<tr><td class=sd>Name</td><td class=sd2>".$row['Name']."</td></tr>
							<tr><td class=sd>Contact No</td><td class=sd2>".$row['Contact_No']."</td></tr>
							<tr><td class=sd>Email</td><td class=sd2>".$row['Email']."</td></tr>
							<tr><td class=sd>Gender</td><td class=sd2>".$row['Gender']."</td></tr>
							<input type=text name=Registration_No value=$row[Registration_No]></td></tr>
							<tr><td class=sd>Customer Type</td><td class=sd2>".$row["Customer_Type"]."</td></tr>
							<tr><td class=sd>Payment_Type Area</td><td class=sd2>".$row["Payment_Type"]."</td></tr>
							<tr><td class=sd>Address</td><td class=sd2>".$row["Address"]."</td></tr>
							<tr><td class=sd>NIC</td><td class=sd2>".$row['NIC']."</td></tr>
							<tr><td class=sd>Specialities</td><td class=sd2>".$row['Specialities']."</td></tr>
							<tr><td class=sd>User Name</td><td class=sd2>".$row['User_Name']."</td></tr>
							<tr><td class=sd>Password</td><td class=sd2><input type=text name=Password value=$row[Password]></td></tr>
							<tr>
							<td colspan='2' class='sd4' align=center style='padding:10px; background:rgba(0,0,0,0.7); color:#ffffff; font-size:20; height:30;'>
							<input type=submit name=submit_x value=Back>
							<input type=submit name=logout value=Logout />
							</td></tr>
							</form>";
							

						?>

						

						<?php
						echo "</table>";
						echo "</center>";
						}

						mysqli_close($connect);

						 ?>

			 </div>
					
	</center>
</body>
</html>