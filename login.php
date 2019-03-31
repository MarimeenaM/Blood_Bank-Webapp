<?php  
$servername="localhost";
$username="root";
$password="";
$db="ssq";
$link=new mysqli($servername,$username,$password,'ssq');
$user=$_POST["email"];
$pass=$_POST["password"];
 
if(isset($_POST["login"])){  
    
     
  $query="SELECT * FROM register WHERE email='$user' AND password='$pass'";  
   if($link->query($query)===TRUE)
   {	   $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row["email"];  
    $dbpassword=$row["password"];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser*/   
    include("request.php");  
    }  
    } 
   }
else {  
    echo "Invalid username or password!";  
    }  
  
}
  
?>
   
   