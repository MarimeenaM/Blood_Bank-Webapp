
<html>
<head>
<title>find donor</title>
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome.css">
<link rel="stylesheet" type="text/css" href="bootstrap/style.css">
</head>
<body>
<div class="row">
	<div class="col-md-12">
	<div id="mainmenu">
		<ul id="yw1">
<li><a href="home.php">Home</a></li>
<li class="active"><a href="bloodfinder.php">Find Blood</a></li>
<li ><a href="find.php">Find Donor</a></li>
<li><a href="register1.php">Register</a></li>
<li ><a href="request.php">Request for Blood</a></li>
<li><a href="requestdetail.php">Blood Request's</a></li>
<li><a href="availdon.php">Available Donor</a></li>
<li><a href="availblood.php">Available Blood</a></li>
<li><a href="tq.html">Login</a></li>
<li><a href="donateblood.php">Donated Blood</a></li>
</ul>	</div>
	</div>
</div>
<div id="content">
	<div class='row'>
	<div class='col-xs-12 col-sm-4'>
		<div class='inner-section' >
			<h4>Find a Blood Donor</h4>
			<div class="blood-form-section">
			<form  action=" " method="POST">
			<div class='form'>
								
			<table class='table'>
			
				</tr>
				<tr>
					<td><label  class="required">Blood Group *</label></td>
					<td><select class="form-control" name="bloodgroup" id="SearchForm_bg">
<option value="">---Select Blood Group---</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB-">AB-</option>
<option value="AB+">AB+</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>	</td>
				</tr>
			</table>
			<div class="buttons" align='center'>
					<input class="btn btn-danger btn-sm" name="search" type="submit" value="Search" />			</div>
			</form>			</div>
		</div>
	</div>
				
		</div>
	</div>
	
	<div class='row'>
	<div class='col-xs-12 col-sm-9'>
		
		<h2>Available Blood</h2>
	<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ssq";
$link=new mysqli($servername,$username,$password,'ssq');

$blgrp=$_POST["bloodgroup"];
$date=$_POST["donatedate"];

	if(isset($_POST["search"]))
{
	$query="delete from donatedblood where  `donateddate` <= DATE_SUB(CURDATE(), INTERVAL 30 DAY)";
	$mem = mysqli_query($link,$query);
	$query1 = "select * from donatedblood where  bloodgroup='$blgrp'";
$member = mysqli_query($link,$query1);
echo "<div class=tablest>" ;
echo "<table border=1>";
echo "<tr>";
 
        echo "<th>";echo "blood group";echo"</th>";
        echo "<th>";echo "city";echo"</th>";
        echo "<th>";echo "area";echo"</th>";
        echo"</tr>";
  while($row = mysqli_fetch_array($member)){
	  
	 echo "<td>"; echo $row["bloodgroup"];echo"</td>";
	  echo "<td>"; echo $row["city"];echo"</td>";
	  echo "<td>"; echo $row["area"];echo"</td>";
	  echo "</tr>";
}
echo "</table>";
echo "</div>";
}
?>
</body>
	</html>