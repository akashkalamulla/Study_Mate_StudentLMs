<?php
$servername = "localhost";
$username = "ShadowClient";
$password = "unlock.ux";
$dbname = "StudyMate";

$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con) {
	die("Connection failed: ".mysqli.connect.error());
}
?>