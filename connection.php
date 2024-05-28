<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "educatorsdb"; 
$con= mysqli_connect($server,$username,$password,$db_name);

if($con){
    // echo "Connected";
}
else{
    "Not Connectd";
}

?>