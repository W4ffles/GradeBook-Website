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
if (isset($_POST['new_user']) &&
	isset($_POST['new_pwd']) &&
	isset($_POST['conf_pwd']))
{
	// The get_post function is defined below to collect data from the POST protocol.
	$new_user = get_post('new_user');
	$new_pwd = get_post('new_pwd');
	$conf_pwd = get_post('conf_pwd');
	
	// Verify that the password matches the password entered in the confirmation field.
	if ($new_pwd == $conf_pwd)
	{
		// MySQL query retrieval examined in 2.2.3
		// returns any database row matching the desired user name
		$query = "SELECT * FROM gradebook WHERE StudentID='" . $new_user . "'";
		$result = mysql_query($query, $db_server);
		$row = mysql_fetch_row($result);
		
		// Checks to make sure that there were no entries in our database for the desired user name
		if (!$row)
		{
			// This conditional block creates the new account in the database if possible
			$query = "INSERT INTO gradebook VALUES" .
				"('$new_user', '$new_pwd', '', '')";
			if (!mysql_query($query, $db_server))
				echo "INSERT failed: $query<br/>" .
					mysql_error() . "<br /><br />";
			else
			{
				echo "<br />Account created successfully.";
			}
		}
		else
		{
			echo "That username is already taken.";
		}
	}
	else
	{
		echo "Password confirmation invalid.";
	}
}
// Creates the form for account creation. Specifies the POST method.
echo <<<_END
<form action ="Grades.php" method="post"><pre>
StudentID: <input type="text" name="new_user" />
Password: <input type="password" name="new_pwd" />
Confirm Password: <input type="password" name="conf_pwd" />	
<input type="submit" value="SUBMIT" />

</pre></form>
_END;
echo("Have An Account Already?<button onclick=\"location.href='ArtGalleryPortal.php'\">Log in</button><br />");
//style='position:absolute;top:180;right:20;border:50;'
/** 
 * Quality of life function to reduce the amount of code needed to retrieve POST data
 * 
 * @param string $var the name of the element in the POST array to retrieve
 * @return string
 */
function get_post($var)
{
	return mysql_real_escape_string($_POST[$var]);
}
?> 