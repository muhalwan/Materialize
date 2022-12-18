<?php
$servername = "localhost";
$username = "id17867745_muhalwan";
$password = "Ayamgoreng12@";
$dbname = "id17867745_pweb";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>