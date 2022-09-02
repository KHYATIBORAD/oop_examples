<?php

	session_start();
	$db = mysqli_connect('localhost', 'root', 'root', 'data');

	if (isset($_POST['submit'])) {
	    $firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = $_POST['password'];
		$contact = $_POST['contact'];
		$city = $_POST['city'];
		$address = $_POST['address'];

		$query = "INSERT INTO reg(firstname,lastname,password,contact,city,address) VALUES('".$firstname."','".$lastname."','".$password."','".$contact."','".$city."','".$address."')";
		                                                                          
		   
		if (mysqli_query($db,$query)) {
			$_SESSION['message'] = "form submit";
			header('location:registration.php');
		}
		else{
			echo "not submited";
		}                                                                                  
	}

?>