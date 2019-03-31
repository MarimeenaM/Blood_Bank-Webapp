
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
<li><a href="bloodfinder.php">Find Blood</a></li>
<li class="active"><a href="find.php">Find Donor</a></li>
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
			<div class="first">
			<form id="search-form" action=" " method="POST">
			<div class='form'>
								
			<table class='table'>
			<tr>
					<td style='width:40%;'><label class="required">State *</label></td>
					<td><select class="form-control" name="reqstate" >
<option value="">---Select State---</option>
<option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
<option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
<option value="DELHI">DELHI</option>
<option value="GOA">GOA</option>
<option value="GUJARAT">GUJARAT</option>
<option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
<option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
<option value="JHARKHAND">JHARKHAND</option>
<option value="KARNATAKA">KARNATAKA</option>
<option value="KERALA">KERALA</option>
<option value="LAKSHADWEEP">LAKSHADWEEP</option>
<option value="MADHYA PRADESH">MADHYA PRADESH</option>
<option value="MAHARASHTRA">MAHARASHTRA</option>
<option value="ORISSA">ORISSA</option>
<option value="PUDUCHERRY">PUDUCHERRY</option>
<option value="PUNJAB">PUNJAB</option>
<option value="RAJASTHAN">RAJASTHAN</option>
<option value="TAMIL NADU">TAMIL NADU</option>
<option value="TELANGANA">TELANGANA</option>
<option value="TRIPURA">TRIPURA</option>
<option value="UTTAR PRADESH">UTTAR PRADESH</option>
<option value="UTTARAKHAND">UTTARAKHAND</option>
<option value="WEST BENGAL">WEST BENGAL</option>
</select></td>
				</tr>
				<tr>
					<td><label>Required City *</label></td>
				<td><input class=" form-control" name="reqcity" type="text" placeholder="enter city"></td>
				</tr>
				<tr>
				<td><label>Required Area *</label></td>
				<td><input class=" form-control" name="reqarea" type="text" placeholder="enter area"></td>
				
				</tr>
				<tr>
					<td><label  class="required">Blood Group *</label></td>
					<td><select class="form-control" name="reqgrp" id="SearchForm_bg">
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
		
		<h2>Available Donor</h2>
	<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ssq";
$link=new mysqli($servername,$username,$password,'ssq');

$city=$_POST["reqcity"];
$blgrp=$_POST["reqgrp"];

	if(isset($_POST["search"]))
{
	$query = "select * from registerdon where city='$city' and bloodgroup='$blgrp' ";
$member = mysqli_query($link,$query);
echo "<div class=tablest>" ;
echo "<table border=1>";
if($row = mysqli_fetch_array($member)){
echo "<tr>";
 echo"  <th>";echo"Donorname"; echo"</th>";
        echo "<th>";echo "blood group";echo"</th>";
        echo "<th>";echo "mobile number";echo"</th>";
        echo "<th>";echo "lastdonateddate";echo"</th>";
        echo "<th>";echo "state";echo"</th>";
        echo "<th>";echo "city";echo"</th>";
        echo "<th>";echo "area";echo"</th>";
        echo"</tr>";
  while($row = mysqli_fetch_array($member)){
	  
	  echo"<tr>";echo "<td>"; echo $row["name"];echo"</td>";
	 echo "<td>"; echo $row["bloodgroup"];echo"</td>";
	  echo "<td>"; echo $row["mobile"];echo"</td>";
	  echo "<td>"; echo $row["lastdondate"];echo"</td>";
	  echo "<td>"; echo $row["state"];echo"</td>";
	  echo "<td>"; echo $row["city"];echo"</td>";
	  echo "<td>"; echo $row["area"];echo"</td>";
	  echo "</tr>";
}
}
else{
	echo "no donor available in your area";
}
echo "</table>";
echo "</div>";
}
?>
</body>
	</html>