<?php
//Connection to Database
$servername="localhost";
$username="root";
$password="";

//create connection
$conn = mysqli_connect($servername, $username, $password);
if(!$conn){
    die("Connection was not successful: ".mysqli_connect_error());
}

echo "Connection was successfull";

//Create DB
$sql = "create database dbavesh";
$result = mysqli_query($conn, $sql);
if(!$result)
{
    echo "database not created <br>";
}
echo "database created successfully <br>";
?>