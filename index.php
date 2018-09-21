<!DOCTYPE html>
<html>
<head>
	<title>PHP Test</title>
</head>
<body>
<?php
	$servername = "localhost";
	$dbuser = "admin";
	$dbpwd = ">g23povVB>.?M#";

	$con = new mysqli($servername, $dbuser, $dbpwd);

	if ($con->connect_error) {
		die("Alles zu spät, DB ist tot.".$con->connect_error);
	}
	echo connected

?>

</body>
</html>

