<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tentheme";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if($conn){
    echo "";
}else{    
    echo "error";
}

?>