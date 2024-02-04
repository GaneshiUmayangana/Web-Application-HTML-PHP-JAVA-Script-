<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="./css/list.css" >
	<link rel="stylesheet" type="text/css" href="./css/reg.css" >
	<script language="JavaScript" src="reg.js" >
	</script>	
</head>


<body bgcolor="#475252">
	<center>
	
		<div class="top">
			<ul>
			<li><a href="index.php">Home</a>
			<!-- <li><a href="select.php">Menu</a>
			<li><a href="explore.php">Product</a>
			<li><a href="review.php">Review</a>
			<li><a href="about.php">AboutUs</a> -->
		</div>
		
		<img  src="./Image/index.jpg" width="100%" height="93%" />

		<div style="position:absolute;top:68px;left:45px;">
			 <img width="85px" src="./Image/logo.jpg" />
		</div>

		<div style="position:absolute;top:15px;left:1365px;">
			<a href="help.html#login"> <img width="50px" src="./Image/help.png" /></a>
		</div>
		
		
		<div class="contents">
	
				
					
					<center><table style="font-family: cursive;" >
					<form name="regform" action="profile.php" method="POST" onsubmit="return test()"  >
					<tr><th colspan=3 style="background:rgba(0,0,0,0.7); color:white; font-size:30; height:30;">Customer Registration</th></tr>

					<tr><td class="sd">Name</td>
					<td class="sd2"><input type="text" name="Name" required/></td></tr>

					<tr><td class="sd">Contact No</td>
					<td class="sd2"><input type=int name="Contact_No" maxlength="10" required/></td></tr>


					<tr><td class="sd">Email</td>
					<td class="sd2"><input type="text" name="Email" required/></td></tr>
					
					<tr><td rowspan="2" class="sd">Gender</td>
					<td  style="font-family: arial; "><input style="vertical-align:middle;margin: 0px" name="Gender" type="radio"  value="Female" required/> Female</td></tr>
					<tr><td style="font-family: arial;"> <input style="vertical-align:middle;margin:0px" name="Gender" type="radio"  value="Male" required/> Male
					</td></tr>

					
					<tr><td class="sd">Registration No</td>
					<td class="sd2"><input type="text" name="Registration_No" required/></td></tr>


					<tr><td class="sd">Customer Type</td>
					<td class="sd2"><select name="Customer_Type" required>
						<option selected>Local Customer</option>
						<option>Foriegn Customer</option>
						
					</select>
					</td></tr>
					

					<tr><td class="sd">Payment Type</td>
					<td class="sd2"><select name="Payment_Type" size="1" required>
						<option>Cash</option>
						<option>Card Payment</option>
						<option>Other(QR...)</option>	
					</select>
					</td></tr>

					<tr><td class="sd">Address</td>
					<td class="sd2"><input type="text" name="Address" required/></td></tr>


					<tr><td class="sd">NIC</td>
					<td class="sd2"><input type=int name="NIC" maxlength="12" required/></td></tr>

					<tr><td class="sd"> Your Specialities</td>
					<td class="sd2"><TEXTAREA name="Specialities" required rows=5> </TEXTAREA>

					<tr><td class="sd">User Name</td>
					<td class="sd2"><input type=txt name="User_Name" required/></td></tr>


					<tr><td class="sd">Password</td>
					<td class="sd2"><input type=password name="Password" required/></td></tr>

					<tr>
					<td class="sd4" colspan=3 align="center" style="background:rgba(0,0,0,0.7); color:white; font-size:30; height:30;padding-bottom: 5px;">
						<button onclick="test()">check</button>
						<input  type="submit" name="submit" value="Submit" />
						<input  type="reset" name="cancel" value="Clear"/></form>
						<a href="login.php"><button>Back </button></a>
					</td></tr>

					</table></center>
					
			</div>
		
		</center>
</body>
</html>

