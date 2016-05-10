<?php
/*==============================================================================================================================*/
/*|                                                                                                                            |
  |  *This is the Main Page of a Gradebook Website/Database that is used to setup the main php aspect of this project.         |
  |  *This Project was worked on by Chinmay Yadav, Lucas Babati, and Nick Carreon.                                             |
  |  *This Project has been done for Mr.Hanson.                                                                                |
*/                                                                                                                            
/*==============================================================================================================================*/ 
/*
  *This Creates Connection to the Database.
*/
require_once 'GradeBookDB.php';
$db_server = mysql_connect($host, $username, $password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($dbname)
	or die("Unable to select database: " . mysql_error());
?>
