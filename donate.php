<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ssq";
$link=new mysqli($servername,$username,$password,'ssq');
$name=$_POST["name"];
$blgrp=$_POST["bloodgroup"];
$dod=$_POST["donateddate"];
$mobile=$_POST["mobile"];
$city=$_POST["city"];
$area=$_POST["area"];

if(isset($_POST["submit"]))
{
  
 $sql="insert into donatedblood(name,bloodgroup,donateddate,mobile,city,area)values('{$name}','{$blgrp}','{$dod}','{$mobile}','{$city}','{$area}')";
if($link->query($sql)===TRUE)
{

include("home.php");
  }
  
}


?>