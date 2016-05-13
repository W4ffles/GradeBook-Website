<?php
$servername = "pav-dbs-0103";
$username = "han5zfzx";
$password = "poSt5such=";
$dbname = "han5zfzx";
//require_once('GradeDB.php');
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?> 
