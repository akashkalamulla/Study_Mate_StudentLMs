<?php
include "../config/conf.php";
$stdid = "";

$stdid = $_POST['sid'];


$sql = "SELECT Fname, Username, Email, Mobile, DOB, Age, City, Password FROM Student WHERE StudentID = '$stdid'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "
		<script>
			window.location.href='../update.html?stdid=".$stdid."&fname=".$row['Fname']."&usrname=".$row['Username']."&email=".$row['Email']."&mob=".$row['Mobile']."&dob=".$row['DOB']."&age=".$row['Age']."&city=".$row['City']."&pword=".$row['Password']."';
		</script>";
	}
	
}
else {
	echo '
	<script>
		alert("An unknown error has occured.");
		window.history.back();
	</script>';
}
mysqli_close($con);
?>