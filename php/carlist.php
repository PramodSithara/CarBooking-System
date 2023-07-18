<?php
$con = mysqli_connect('localhost', 'root', '','golden_car');

// get the post records
$file = uniqid("REF-");
$car = $_POST['car'];
$pick_date = $_POST['pick_date'];
$return_date = $_POST['return_date'];
$rent = $_POST['rent'];

//substract date
$date1 = new DateTime($pick_date);
$date2 = new DateTime($return_date);
$interval = $date1->diff($date2);





if ($interval->m==0){



	$dif_date = $interval->d;




//multiply rent * date
$total = $rent * $dif_date;


// database insert SQL code
$sql = "INSERT INTO `cars` (`ref_id` ,`car`, `pick_date`, `return_date` , `day_rent` , `dif_date` , `rent`) VALUES ('$file','$car', '$pick_date', '$return_date', '$rent' , '$dif_date' , '$total')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	//send value 
	session_start();
	$_SESSION['$vb'] = $file;
	
    header('Location: ../php/table.php');
	//////////////////////////////////


	/*header('Location: ../php/table.php');*/
	echo "Contact Records Inserted";
}
}

else{
	
	echo '<script>alert("Please Rent Less than a Month !!!")</script>';
	echo "Dear Customer Please Re-Enter Dates Less Than a Month !!";
}
?>