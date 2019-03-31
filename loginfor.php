
<?php  
session_start();
 $servername="localhost";
$username="root";
$password="";
$dbname="ssq";
$link=new mysqli($servername,$username,$password,'ssq');

if (isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `register` WHERE email='$email' and password='$password'";
 
$result = mysqli_query($link, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['email'] = $email;
}else{

$fmsg = "Invalid Login Credentials.";
}
}

if (isset($_SESSION['email'])){
	
include("needprofile.php");
 
}else{
	echo "wrong username ";
echo " ";
echo "Try again";
echo "<a href='loginpg.php'>login</a>";

}
?>