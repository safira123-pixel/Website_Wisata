<?php 
	include 'myconnection.php';

	$username = $_GET['username'];
	$password = md5($_GET['password']);

	$sql = "INSERT INTO user(username, password)
			VALUES ('$username','$password')";

	if (mysqli_query($connect, $sql)) {
		  header("Location:index.php");
	}
	else{
		echo "Data baru gagal ditambahkan <br> ".mysqli_error($connect);
	}

	mysqli_close($connect);
?>