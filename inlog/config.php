<?php
$host = 'localhost';
$user = 'root';
$pass = 'B3gN4w8J';
$db = 'login';

/* Attempt to connect to MySQL database */
$link = mysqli_connect($host, $user, $pass, $db);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>