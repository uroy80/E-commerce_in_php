<?php

$servername = "localhost";
$username="root";
$password="";
$database="ecommerce";


$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    echo "Connection Established <br> ";
}
else{
    echo "Connection Failed <br>";
    die("Connection Not Established because".mysqli_connect_error());
}
?>