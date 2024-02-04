<html>
<head>
	<title>Admin Page</title>
	<!--<link rel="stylesheet" type="text/css" href="./css/admin.css" >-->
</head>
<body>

		<div class="contents">
				<?php

			
				require_once "./dbconn/data.php";
				require_once "./dbconn/connection.php";

				$sql="Select * from customer_registration where Registration_No ";
				$result= mysqli_query($conn,$sql);
				?>


				<?php 

				if(mysqli_num_rows($result)>0){
					echo "<table border=1 cellspacing=0 style='color:white;'>";
					echo "<tr>
						<th>Name</th>
						<th>Contact No</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Registration No</th>
						<th>Customer Type</th>
						<th>Payment Type</th>
						<th>Address</th>
						<th>NIC</th>
						<th>Specialities</th>
						<th>User Name</th>
						<th>Password</th>
					</tr>";
					while ($row=mysqli_fetch_assoc($result)){
						?>
				<tr>
				<td ><?php echo $row["Name"]; ?></td>
				<td ><?php echo $row["Contact_No"]; ?></td>
				<td ><?php echo $row["Email"]; ?></td>
				<td ><?php echo $row["Gender"]; ?></td>
				<td ><?php echo $row["Registration_No"]?></td>
				<td ><?php echo $row["Customer_Type"]?></td>
				<td ><?php echo $row["Payment_Type"]?></td>
				<td ><?php echo $row["Address"]?></td>
				<td ><?php echo $row["NIC"]?></td>
				<td ><?php echo $row["Specialities"]?></td>
				<td ><?php echo $row["User_Name"]?></td>
				<td ><?php echo $row["Password"]?></td>
				<td><a href="updatedata.php?id=<?php echo $Id; ?>" class="btn btn-primary">Update</a></td>
                <td><a href="deletedata.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                 </tr>
				<?php
				}
					echo "</table>";
				}
				?>

	
</body>
</html>