<html>
<head>
<title>blood avail</title>
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
<li ><a href="requestdetail.php">Blood Request's</a></li>
<li ><a href="availdonor.php">Available Donor</a></li>
<li class="active"><a href="availblood.php">Available Blood </a></li>
<li><a href="tq.html">Login</a></li>
<li><a href="donateblood.php">Donated Blood</a></li>
</ul>	</div>
	</div>
</div>



<div class='row'>
	<div class='col-xs-12 col-sm-9'>
		
			
		
		<h2>Available Blood in Blood Bank</h2>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ssq";
$link=new mysqli($servername,$username,$password,'ssq');
$query="delete from donatedblood where  `donateddate` <= DATE_SUB(CURDATE(), INTERVAL 30 DAY)";
	$mem = mysqli_query($link,$query);
	$query = "select * from donatedblood";
$member = mysqli_query($link,$query);
echo "<div class= tablest>" ;
echo "<table border=1>";
echo "<tr>";
 echo"  <th>";echo" donor name "; echo"</th>";
        echo "<th>";echo "donated date ";echo"</th>";
        echo "<th>";echo " bloodgroup";echo"</th>";
        echo "<th>";echo "mobile";echo"</th>";
  
              echo"</tr>";
  while($row = mysqli_fetch_array($member)){
	  echo"<tr>";echo "<td>"; echo $row["name"];echo"</td>";
	 echo "<td>"; echo $row["donateddate"];echo"</td>";
	  echo "<td>"; echo $row["bloodgroup"];echo"</td>";
	  echo "<td>"; echo $row["mobile"];echo"</td>";
	  echo "</tr>";
}
echo "</table>";
echo "</div>";
?>
	</body>
	</html>