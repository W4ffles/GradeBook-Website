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
// This function allows this page to use a Session to store data in cookies for the user
session_start();
// $_SERVER is an array of data to be used by the server
// The 'PHP_AUTH_USER' and 'PHP_AUTH_PW' were recorded when the user entered their 
//  artist account credentials upon HTTP authentication
if (isset($_SERVER['PHP_AUTH_USER']) &&
	isset($_SERVER['PHP_AUTH_PW']) && 
	$_SESSION['logged'] )  //Check the flag variable to see if user has been logged in
{
	// Verify that the user name and password combination is correct
	$username = $_SERVER['PHP_AUTH_USER'];
	$password = $_SERVER['PHP_AUTH_PW'];
?>
