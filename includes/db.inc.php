<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myshop";

 //create connection
 $connection =new mysqli($servername, $username, $password, $database);

 // check connection
 if ($connection->connect_error){
     die("connection failed: .$connection->connect_error");
 }
?>