<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ssq";
$link=new mysqli($servername,$username,$password,'ssq');
$name=$_POST["name"];
$email=$_POST["email"];
$pwd=$_POST["password"];
$blgrp=$_POST["bloodgroup"];
$dob=$_POST["dob"];
$mobile=$_POST["mobile"];
$weight=$_POST["weight"];
$height=$_POST["height"];

$state=$_POST["state"];
$city=$_POST["city"];
$area=$_POST["area"];



if(isset($_POST["register"]))
{
  
 $sql="insert into register(name,email,password,bloodgroup,dob,mobile,weight,height,state,city,area)values('{$name}','{$email}','{$pwd}','{$blgrp}','{$dob}','{$mobile}','{$weight}','{$height}','{$state}','{$city}','{$area}')";
if($link->query($sql)===TRUE)
{
 include("request.html");
  }
  
}


?>