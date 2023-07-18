<?php
echo "MySql Page <br>";
//Connection to Database
$servername="localhost";
$username="root";
$password="";

$conn = mysqli_connect($servername, $username, $password);
if(!$conn){
    die("Connection was not successful: ".mysqli_connect_error());
}

echo "Connection was successfull";
?>