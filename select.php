
<html>
<head>
	<title>Select Items</title>
	<link rel="stylesheet" type="text/css" href="./css/list.css" >
	<link rel="stylesheet" type="text/css" href="./css/reg.css" >
	<script language="JavaScript" src="register_alert.js" >
	</script>	
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
		
		<img  src="./Image/index.jpg" width="100%" height="94%" />

		<div style="position:absolute;top:68px;left:45px;">
			 <img width="85px" src="./Image/logo.jpg" />
		</div>

		<div style="position:absolute;top:15px;left:1365px;">
			<a href="help.html#login"> <img width="50px" src="./Image/help.png" /></a>
		</div>
		
		<div class="contents2">
		
			<a href="explore.php"><font color="pink" size="8px">You can easily see our facilities using product page</font></a>			
			<center><table style="font-family: cursive;" >
				<form name="select" action="items_select.php" method="POST" onsubmit="return testform()"  >
				<tr><th colspan=3 style="background:rgba(0,0,0,0.7); color:white; font-size:30; height:30;">Select Items</th></tr>

			<tr> <td colspan=3 class="sd">Beverage Type</td>
					<tr><td class="sd2"><h3>Espresso</h3>
							<input type="checkbox" name="brand[]" value="Cappuccino"/>Cappuccino
							<input type="checkbox" name="brand[]" value="Cafe latte"/>Cafe latte 
							<input type="checkbox" name="brand[]" value="White mocha"/>White mocha
							<input type="checkbox" name="brand[]" value="Irish latte"/>Irish latte		
					</td>
					<td class="sd2"><h3>Iced Beverages</h3>
							<input type="checkbox" name="brand[]" value="Iced latte"/>Iced latte
							<input type="checkbox" name="brand[]" value="Iced amaricano"/>Iced amaricano
							<input type="checkbox" name="brand[]" value="Iced chocolate"/>Iced chocolate
							<input type="checkbox" name="brand[]" value="Iced white mocha"/>Iced white mocha		
					</td></tr>
					<tr><td class="sd2"><h3>Frap-Iced Blended Coffee</h3>
							<input type="checkbox" name="brand[]" value="Coffee frap"/>Coffee frap
							<input type="checkbox" name="brand[]" value="Mocha frap"/>Moca frap
							<input type="checkbox" name="brand[]" value="Caramel frap"/>Caramel frap
							<input type="checkbox" name="brand[]" value="Vanila frap"/>Vanila frap	
					</td>
					<td class="sd2"><h3>Iced Blended Cream</h3>
							<input type="checkbox" name="brand[]" value="Chocolate cream frap"/>Chocolate cream frap
							<input type="checkbox" name="brand[]" value="Caremal cream frap"/>Caremal cream frap
							<input type="checkbox" name="brand[]" value="Vanila cream frap"/>Vanila cream frap
							<input type="checkbox" name="brand[]" value="Stroberry cream frap"/>Stroberry cream frap
					</td></tr>
					<td class="sd2"><h3>Tea beverages(Hot)</h3>
							<input type="checkbox" name="brand[]" value="English breakfast tea"/>English breakfast tea
							<input type="checkbox" name="brand[]" value="Pure green tea"/>Pure green tea
							<input type="checkbox" name="brand[]" value="Flavoured tea"/>Flavoured tea
							
					</td>
					<td class="sd2"><h3>Tea beverages(Iced)</h3>
							<input type="checkbox" name="brand[]" value="Strawberry iced tea"/>Strawberry iced tea
							<input type="checkbox" name="brand[]" value="Lemon iced tea"/>Lemon iced tea
							<input type="checkbox" name="brand[]" value="Apple iced tea"/>Apple iced tea
							
					</td></tr>
				
				
					</td></tr>

					<tr><td colspan=3 class="sd">Food Items</td>
					<tr><td class="sd2"><input type="checkbox" name="brand[]" value="Chocolate Cake"/>Chocolate Cake
							<input type="checkbox" name="brand[]" value="Donuts"/>Donuts
							<input type="checkbox" name="brand[]" value"Burgers"/>Burgers </td></tr>
					<tr><td class="sd2"><input type="checkbox" name="brand[]" value="Sabmarine sandwich"/>Sabmarine sandwich
							<input type="checkbox" name="brand[]" value="Noodles"/>Noodles
							<input type="checkbox" name="brand[]" value="Pancakes"/>Pancakes
		
				
					</td></tr>

					<tr>
					<td class="sd4" colspan=3 align="center" style="background:rgba(0,0,0,0.7); color:white; font-size:30; height:30;padding-bottom: 5px;">
						<input  type="submit" name="submit" value="Submit" />
						<input  type="reset" name="cancel" value="Clear"/></form>
						<a href="login.php"><button>Back </button></a>
					</td></tr>

					</table></center>
			<center>		
			</div>
			<div style="position:absolute;z-index:-1;left:5px;">
			 <img width="505px" src="./Image/nine.jpeg" />
			</div>
			<div style="position:absolute;z-index:-1;left:505px;">
			 <img width="505px" src="./Image/eleven.jpg" />
			</div>
			<div style="position:absolute;z-index:-1;left:1010px;">
			 <img width="505px" src="./Image/ten.jpeg" />
			</div>
			</center>

		</center>
</body>
</html>

