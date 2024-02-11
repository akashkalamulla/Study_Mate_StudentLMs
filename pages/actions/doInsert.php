<?php
include "../config/conf.php";
$fname = "";
$usrname = "";
$email = "";
$mob = "";
$dob = "";
$age = "";
$city = "";
$pword = "";

$fname = $_POST['fullname'];
$usrname = $_POST['username'];
$email = $_POST['email'];
$mob = $_POST['phoneNo'];
$dob = $_POST['Date'];
$age = $_POST['age'];
$city = $_POST['city'];
$pword = $_POST['password'];

$sql = "INSERT INTO Student (Fname, Username, Email, Mobile, DOB, Age, City, Password)
VALUES ('$fname', '$usrname', '$email', $mob, '$dob', $age, '$city', '$pword')";

$getId = "SELECT StudentID FROM Student WHERE Fname='$fname' AND Username='$usrname' AND Password='$pword'";
if (mysqli_query($con, $sql)) {
	$result = mysqli_query($con, $getId);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
	}
	else {
		echo '
		<script>
			alert("An unknown error has occured.");
			window.history.back();
		</script>';
	}
	echo '
	<script>
		alert("Registration Successfull.\nYour Student ID is: " + '.$row["StudentID"].');
		window.location.href="../login.html?stdid='.$row['StudentID'].'";
	</script>';
}
else {
	echo "Error: ".$sql."<br>".mysqli_error($con);
}
mysqli_close($con);

?>