<html>
<head> 
	<title>display</title>
	<link rel="stylesheet" type="text/css" href="./css/list.css" >
	<link rel="stylesheet" type="text/css" href="./css/display.css" >
</head>
<body bgcolor="#475252">

	<center>
		<div class=top>
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


			<div class="return">
				<form action="" method='POST' >
				<input type="image" src="./Image/return.png" name="Return" value="Return">
				 <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;";?>
				</form> 
			</div>	

			<?php
			if(isset($_POST['Return_x'])&&($_POST['Return_y'])){
				 header("location: select.php");
			}

			?>
		<div class="contents">
			<?php
			require_once "./dbconn/data.php";
			require_once "./dbconn/connection.php";

			if (isset($_POST['Filter_x']) && ($_POST['Filter_y'])) {
				$Customer_type=$_POST["Customer_Type"];
				$Payment_type=$_POST["Payment_Type"];
			  
			  $sql =  "SELECT Name,Contact_No,Email,Gender, Registration_No, Customer_Type,Payment_type, Address, NIC, Specialities from tour_guides WHERE Customer_Type = '$Customer_type' OR Payment_type='$Payment_type'";
			$result= mysqli_query($connect,$sql);


			if(mysqli_num_rows($result)>0){
				echo "<table border=1 cellspacing=0>";
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
			</tr>
			<?php
			}

			 }
			 	else {
			 		echo "Not found";
			 	}
			}

			if (isset($_POST['All_x'])) {

			$sql="SELECT * from tour_guides where Registration_No LIKE 'TG%'";
			$result= mysqli_query($connect,$sql);

			if(mysqli_num_rows($result)>0){
				echo "<table border=1 cellspacing=0>";
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
			</tr>
			<?php
			}}}
			?></table>
				</center>
				


		</div>

	</center>




</body>
</html>