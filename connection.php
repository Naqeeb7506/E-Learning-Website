<?php
$server = "localhost";
$username = "root";
$password = "";
$databaseanme = "elearningdb";


$conn = mysqli_connect($server, $username, $password, $databaseanme);

if(!$conn){
    die ("connection error". mysqli_connect_error());
}

session_start();
$_SESSION['loggedin'] = false;

// mysqli_close($conn);
?>