<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ssq";
$link=new mysqli($servername,$username,$password,'ssq');
$name=$_POST["pname"];
$disease=$_POST["patdis"];
$address=$_POST["hosadrs"];
$blgrp=$_POST["reqgrp"];
$date=$_POST["reqdate"];
$con_pers=$_POST["contactpers"];
$con_phone=$_POST["contactphone"];
$state=$_POST["reqstate"];
$city=$_POST["reqcity"];
$area=$_POST["reqarea"];
$units=$_POST["noofunits"];

if(isset($_POST["request"]))
{
  
 $sql="insert into request(pname,patdis,hosadrs,reqgrp,reqdate,contactpers,contactphone,reqstate,reqcity,reqarea,noofunits)values('{$name}','{$disease}','{$address}','{$blgrp}','{$date}','{$con_pers}','{$con_phone}','{$state}','{$city}','{$area}','{$units}')";
if($link->query($sql)===TRUE)
{

include("tq.html");
  }
  else
  {
	  echo "not registered";
  
}
}

?>