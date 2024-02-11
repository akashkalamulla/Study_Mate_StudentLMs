<?php
include "../config/conf.php";

$stdid = "";
$pword = "";
$stdid = $_POST['stdid'];
$pword = $_POST['pword'];

$sql = "SELECT * FROM Student WHERE StudentID = $stdid AND Password = '$pword'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
	echo '
	<script>
		window.location.href="../webpage.html?stdid='.$stdid.'";
	</script>';
}
else {
	echo '
	<script>
		alert("Invalid Student ID or Password.");
		window.history.back();
	</script>';
}
mysqli_close($con);
?>