<?php
include "../config/conf.php";
$stdid = "";

$stdid = $_POST['stdid'];
$sql = "DELETE FROM Student WHERE StudentID='$stdid'";

if (mysqli_query($con, $sql)) {
	echo '
	<script>
		alert("Deleted Successfully.");
		window.location.href="../../registration.html";
	</script>';
}
else {
	echo "Error: ".$sql."<br>".mysqli_error($con);
}
mysqli_close($con);

?>