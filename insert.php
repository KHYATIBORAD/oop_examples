<?php

	session_start();
	$db = mysqli_connect('localhost', 'root', 'root', 'demo1');
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$city = $_POST['city'];
		
		$query = "INSERT INTO test(name,contact,city) VALUES('".$name."','".$contact."','".$city."')";

		if(mysqli_query($db,$query)){
					$_SESSION['message'] = "Details saved"; 
					header('location: login.php');
		} 
		else{
				echo "sql error";
		}
		
	}
?>





