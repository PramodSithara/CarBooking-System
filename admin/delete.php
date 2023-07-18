<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM cars");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Manage Customers</title>
<style>
table,th,td{
    border:2px solid black;
    width:1100px;
    background-color:#ccffff;
    text-align:center;
    margin-left: 186px;
    line-height: 2;
    border-radius: 4px;
}





</style>
</head>
<body>
<table>
	<tr>
	<td>Id</td>
	<td>Car</td>
	<td>Pick Date</td>
	<td>Return Date</td>
	<td>Day Rent</td>
	<td>Days</td>
	<td>Rent</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["car"]; ?></td>
	<td><?php echo $row["pick_date"]; ?></td>
	<td><?php echo $row["return_date"]; ?></td>
	<td><?php echo $row["day_rent"]; ?></td>
	<td><?php echo $row["dif_date"]; ?></td>
	<td><?php echo $row["rent"]; ?></td>
	<td><a href="delete-process.php?userid=<?php echo $row["id"]; ?>">Delete</a></td>
	<input type="text" name="userid">
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>