<?php session_start()?>



<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/list.css" >
	<link rel="stylesheet" type="text/css" href="./css/signinup.css" >
	<script language="JavaScript" src="validate.js" ></script>

	
</head>
<body>
<body bgcolor="#475252">
<div>
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
			<p class="text"> Hello! You can login and select the items you want...</p>
			<div class="container">
			<form top=5% action="code.php" method="post" name="loginform" onsubmit="return validate()">
			<div class="imgcontainer">
				<img width="10%" border-radius="50%" src="./Image/avatar.jpg" alt="Avatar" class="avatar">
			</div>	
			<table align="center" cellpadding="10" style="padding-top:0px" cellspacing="12px">
					<tbody>
						<tr>
							<td>Registration No :</td>
							<td><input type="int" name="Registration_No" placeholder="Enter Registration No" /></td>
						</tr>
						<tr>
							<td>Password :</td>
							<td><input type="password" name="Password" placeholder="Enter Password"  /></td>
						</tr>
					</tbody>
					
						<tr>
						<td  colspan=2 align="center"><a href=select.php><input type="image" src="./Image/button_login.png" name="submit" value="Login" /></td></tr></form>
					<tfoot>
						</tr>
						<tr><td colspan=2 align="center"><a href=reg.php><img src="./Image/register.png" width="200px" /> </a></td></tr>
					</tfoot>
				</table>
			</form>
			</div>
		</div>
	</center>
</div>

</body>
</html>

