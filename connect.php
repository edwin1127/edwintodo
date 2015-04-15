<?php
//why is this important? why does localhost have to be first?
$mysqli = new mysqli('localhost', 'root', 'tasks');
//$mysqli->connect_error then we want it to die and have this message
if ($mysqli->connect_error) {
	die('Connect Error ('. $mysqli_->connect_errno . ')'
		.$mysqli->connect_error
}
else {
	echo "Connection made";
}
$mysqli->close();
?>