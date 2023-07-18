<?php
$con = mysqli_connect('localhost', 'root', '','golden_car');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];


// database insert SQL code
$sql = "INSERT INTO `feedback` (`name` ,`email`, `msg`) VALUES ('$name','$email', '$msg')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo '<script>alert("Thanks for Contact with us..")</script>';
    header('Location: ../main.html');
	echo "Contact Records Inserted";
}


else{
	echo '<script>alert("Please Enter Correct Value..")</script>';

	echo "Error...";
}
?>