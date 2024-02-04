
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/list.css" >
	<link rel="stylesheet" type="text/css" href="./css/signinup.css" >
	<script language="JavaScript" src="validate.js" ></script>

	
</head>

<body bgcolor="#475252">
<div>
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
	</center>
</div>


<div class="contents">
	<h2><font color="#F5464F">
<?php
session_start();
require_once "./dbconn/data.php";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['submit'])){
	$brand =$_POST['brand'];
	foreach($brand as $item)
	{
		echo "You selected : ";
		echo $item."<br/>"."<br/>";
		
		/*$query = "INSERT INTO items(name) VALUES('$item')";
		$query_run= mysqli_query($connect,$query );
	}
	if($query_run){
		$_SESSION['status']="Insert Successful";
		header("Location:select.php");
	}
	else{
		$_SESSION['status']="Data not inserted";
		header("Location:select.php");*/
	}

}

?>
</white>
</h2>
</div>

</body>
</html>


