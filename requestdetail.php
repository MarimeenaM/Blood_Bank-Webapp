<html>
<head>
<title>register</title>
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome.css">
<link rel="stylesheet" type="text/css" href="bootstrap/style.css">
</head>
<body>
<div class="row">
	<div class="col-xs-12">
	<div id="mainmenu">
		<ul id="yw1">
<li><a href="home.php">Home</a></li>
<li><a href="bloodfinder.php">Find Blood</a></li>
<li ><a href="find.php">Find Donor</a></li>
<li ><a href="register1.php">Register</a></li>
<li ><a href="request.php">Request for Blood</a></li>
<li class="active"><a href="requestdetail.php">Blood Request's</a></li>
<li><a href="availdon.php">Available Donor</a></li>
<li><a href="availblood.php">Available Blood</a></li>
<li><a href="tq.html">Login</a></li>
<li><a href="donateblood.php">Donated Blood</a></li>
</ul>	</div>
	</div>
</div>



<div class='row'>
	<div class='col-xs-12 col-sm-9'>
					
		
		<h2>Blood Requests</h2>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ssq";
$link=new mysqli($servername,$username,$password,'ssq');
	$query = "select * from request";
$member = mysqli_query($link,$query);
echo "<div class= tablest>" ;
echo "<table border=1>";
echo "<tr>";
 echo"  <th>";echo" patient "; echo"</th>";
        echo "<th>";echo " hospital address ";echo"</th>";
        echo "<th>";echo " bloodgroup";echo"</th>";
        echo "<th>";echo " required date ";echo"</th>";
        echo "<th>";echo " contact person ";echo"</th>";
        echo "<th>";echo " contact number ";echo"</th>";
        echo "<th>";echo " required area ";echo"</th>";
        echo"</tr>";
  while($row = mysqli_fetch_array($member)){
	  echo"<tr>";echo "<td>"; echo $row["pname"];echo"</td>";
	 echo "<td>"; echo $row["hosadrs"];echo"</td>";
	  echo "<td>"; echo $row["reqgrp"];echo"</td>";
	  echo "<td>"; echo $row["reqdate"];echo"</td>";
	  echo "<td>"; echo $row["contactpers"];echo"</td>";
	  echo "<td>"; echo $row["contactphone"];echo"</td>";
	  echo "<td>"; echo $row["reqarea"];echo"</td>";
	  echo "</tr>";
}
echo "</table>";
echo "</div>";
?>
	</body>
	</html>