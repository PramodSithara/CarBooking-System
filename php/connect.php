<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
    $nic = $_POST['nic'];
	$gender = $_POST['gender'];
    $number = $_POST['number'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','golden_car');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into customer(firstname, lastname, nic, gender, number, email, password) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssiss", $firstname, $lastname, $nic, $gender, $number, $email, $password);
		$execval = $stmt->execute();
		echo $execval;

		//redirect main page
		header('Location: ../main.html');
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>