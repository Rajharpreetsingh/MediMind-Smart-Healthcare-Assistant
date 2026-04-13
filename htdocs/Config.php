<?php

$servername = "sql113.hstn.me"; 
$username = "mseet_41638887";        
$password = "ioEPv67jZ81p";           
$dbname = "mseet_41638887_MEDICAL"; 



$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) 
{
  die("Connection failed: " . mysqli_connect_error()); 
}
else
{
 //echo'<script>alert("Connected successfully to the database!")</script>';
}


?>
