<?php
include "../config/conf.php";
$self = "";
$swim = "";

if (!empty($_POST['self'])) {
	$self = $_POST['self'];
	$sql = "SELECT Fname, Username, Email, Mobile, DOB, Age, City FROM Student WHERE StudentID = '$self'";
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "
			<script>
				window.location.href='../viewu.html?stdid=".$self."&fname=".$row['Fname']."&usrname=".$row['Username']."&email=".$row['Email']."&mob=".$row['Mobile']."&dob=".$row['DOB']."&age=".$row['Age']."&city=".$row['City']."';
			</script>";
		}
	}
	else {
		echo '
		<script>
			alert("Please login again.");
			window.location.href="../login.html";
		</script>';
	}
}
else {
	$swim = $_POST['swim'];
	$sql = "SELECT Fname, Mobile, City FROM Student WHERE StudentID = '$swim'";
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "
			<script>
				window.location.href='../viewswim.html?stdid=".$swim."&fname=".$row['Fname']."&mob=".$row['Mobile']."&city=".$row['City']."';
			</script>";
		}
	}
	else {
		echo '
		<script>
			alert("The entered Student ID has not registered.");
			window.history.back();
		</script>';
	}
}

mysqli_close($con);
?>