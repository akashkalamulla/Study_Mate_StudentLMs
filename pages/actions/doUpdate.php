<?php
include "../config/conf.php";
$stdid = "";
$fname = "";
$usrname = "";
$email = "";
$mob = "";
$dob = "";
$age = "";
$city = "";
$pword = "";

$stdid = $_POST['stdid'];
$fname = $_POST['fname'];
$usrname = $_POST['usrname'];
$email = $_POST['email'];
$mob = $_POST['mob'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$city = $_POST['city'];
$pword = $_POST['pword'];


$sql = "UPDATE Student SET Fname='$fname', Username='$usrname', Email='$email', Mobile=$mob, DOB='$dob', Age=$age, City='$city', Password='$pword' WHERE StudentID='$stdid'";

if (mysqli_query($con, $sql)) {
	echo '
	<script>
		alert("Data updated successfully.");
		window.history.back();
	</script>';
	
}
else {
	echo '
	<script>
		alert("An unknown error has occured");
		window.history.back();
	</script>';
}
mysqli_close($con);
?>