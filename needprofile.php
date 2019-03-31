
<html>
<head>
<title>profile</title>
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
<li class="active"><a href="profile.php">My Profile</a></li>
<li ><a href="request.php">Request for Blood</a></li>
<li><a href="requestdetail.php">Blood Request's</a></li>
<li><a href="availdon.php">Available Donor</a></li>
<li><a href="availblood.php">Available Blood</a></li>
<li><a href="donateblood.php">Donated Blood</a></li>
<li><a href="logout.php">LogOut</a></li>
</ul>	</div>
	</div>
</div>

					
		
		
		<div id="content">
	<div class='row'>
	<div class='col-xs-12 col-sm-4'>
        <h2>My profile</h2>
			
			

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ssq";
$link=new mysqli($servername,$username,$password,'ssq');
$email=$_POST["email"];
echo "Hai " . $email . "";
echo "welcome to blood donation bank";
	$query = "select * from register where email='$email'";
$member = mysqli_query($link,$query);
echo "<div class= tablest>" ;
echo "<table border=0>";
while($row = mysqli_fetch_array($member)){
echo "<tr>";
echo"  <th>";echo"name"; echo"</th>";
echo "<td>"; echo $row["name"];echo"</td>";
echo "</tr>";
 echo"<tr>";
        echo "<th>";echo "blood group";echo"</th>";
		echo "<td>"; echo $row["bloodgroup"];echo"</td>";
echo"</tr>";
		 echo"<tr>";
        echo "<th>";echo "mobile number";echo"</th>";
		echo "<td>"; echo $row["mobile"];echo"</td>";
		 echo"</tr>";
		
		 echo"<tr>";
        echo "<th>";echo "password";echo"</th>";
		echo "<td>"; echo $row["password"];echo"</td>";
		 echo"</tr>";
		 echo"<tr>";
        echo "<th>";echo "height";echo"</th>";
		 echo "<td>"; echo $row["weight"];echo"</td>";
		 echo"</tr>";
		 echo "<tr>";
        echo "<th>";echo "weight";echo"</th>";
		 echo "<td>"; echo $row["weight"];echo"</td>";
        echo"</tr>";
		echo"<tr>";
        echo "<th>";echo "state";echo"</th>";
		 echo "<td>"; echo $row["state"];echo"</td>";
		 echo"</tr>";
  echo"<tr>";
        echo "<th>";echo "city";echo"</th>";
		echo "<td>"; echo $row["city"];echo"</td>";
	  echo"</tr>";
	  echo"<tr>";
	  echo "<th>";echo "area";echo"</th>";
	  echo "<td>"; echo $row["area"];echo"</td>";
        echo"</tr>";
  
}
echo "</table>";
echo "</div>";
?>
</div>
</body>
</html>
