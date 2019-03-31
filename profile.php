
<html>
<head>
<title>profile</title>

</head>
<body>
<li><a href="home.php">Home</a></li>
<li ><a href="register.php">Register</a></li>
<li><a href="registered.php">Registered</a></li>
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
	$query = "select * from registerdon where email='$email'";
$member = mysqli_query($link,$query);
echo "<div class= tablest>" ;
echo "<table border=0>";
while($row = mysqli_fetch_array($member)){
echo "<tr>";
echo"  <th>";echo"Donorname"; echo"</th>";
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
        echo "<th>";echo "lastdonateddate";echo"</th>";
		echo "<td>"; echo $row["lastdondate"];echo"</td>";
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
