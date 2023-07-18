<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM cars");
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Golden Car Rent</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">




<style>

table,th,td{
    border:2px solid black;
    width:1100px;
    background-color:#ccffff;
    text-align:center;
    margin-left: 186px;
    line-height: 2;
    border-radius: 2px;
}

.n_btn{
    width:15%;
    height:5%;
    font-size:22px;
    padding:0px;
    
}

.nn_btn{
        width:15%;
        height:5%;
        font-size:22px;
        padding:0px;
        margin-left:1055px;  
}

#in{
    margin-left:800px;
    width: 255px;
    height: 33px;
    margin-bottom: 16px;
}

.heading{
    margin-top:68px;
}
#loc{
        margin-left:247px;
}

</style>





</head>
<body>
        <header>
                <a href="#" class="logo"><i class='bx bxs-car'></i></a> 
        
                <div class="bx bx-menu" id="menu-icon"></div>

                <ul class="navbar">
                        <li><a href="#home" id="loc">GOLDEN CAR RENTAL PORTAL</a></li>
                </ul>
                <div class="header-btn">
                        <a href="#" class="sign-in">Welcome TO Admin Panel</a>
                </div>
        </header>
        <!--Car List-->
        <div class="heading" id="Search">
                       <span>How Its Work</span>
                       <h3>[Refference Number is Compalsary for payment]</h3><br><br><br>
                       <h3>Enter Reference No to Get Details</h3> 
        </div>
        <div class="service-container" >
            
                        <form action="" method="post">
        
                        <div class="box">
                                <input type="text" name="userid" id="in" placeholder="Enter REF-00000000" required>
                                <input type="submit" name="search" class=n_btn value="Get Info"> 
                        </form>
                        <table>
                                <tr>
                                        <th>Car</th>
                                        <th>Pick Date</th>
                                        <th>Return Date</th>
                                        <th>Rents For Day</th>
                                        <th>Dates</th>
                                        <th>Total Amount</th>
                                        <th>Refference NO(*)</th>
                                </tr><br>
                        

                        <?php
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,'golden_car');

                        

                        if(isset($_POST['search']))
                        {
                            $id = $_POST['userid'];

                            $query = "SELECT * FROM `cars` where ref_id='$id' ";
                            $query_run = mysqli_query($connection,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
                            <tr>
                                <td><?php echo $row['car']; ?></td>
                                <td><?php echo $row['pick_date']; ?></td>
                                <td><?php echo $row['return_date']; ?></td>
                                <td><?php echo $row['day_rent']; ?></td>
                                <td><?php echo $row['dif_date']; ?></td>
                                <td><?php echo $row['rent']; ?></td>
                                <td><?php echo $row['ref_id']; ?></td>
                                <td><a href="delete-process.php?userid=<?php echo $row["id"]; ?>">Delete</a></td>
                            </tr>

                            <?php
                            }
                        }
                        ?>
                        </table>
                        </div>
                </div>


                <form action="" method="post">
        
                        <div class="box">
                                
                                <input type="submit" name="no" class=nn_btn value="Show Cars"> 
                        </form>

                        <table>
                                <tr>
                                        <th>Car</th>
                                        <th>Pick Date</th>
                                        <th>Return Date</th>
                                        <th>Rents For Day</th>
                                        <th>Dates</th>
                                        <th>Total Amount</th>
                                        <th>Refference NO(*)</th>
                                </tr><br>
                        

                        <?php
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,'golden_car');

                        

                        if(isset($_POST['no']))
                        {
                            

                            $query = "SELECT * FROM `cars` ";
                            $query_run = mysqli_query($connection,$query);

                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
                            <tr>
                                <td><?php echo $row['car']; ?></td>
                                <td><?php echo $row['pick_date']; ?></td>
                                <td><?php echo $row['return_date']; ?></td>
                                <td><?php echo $row['day_rent']; ?></td>
                                <td><?php echo $row['dif_date']; ?></td>
                                <td><?php echo $row['rent']; ?></td>
                                <td><?php echo $row['ref_id']; ?></td>
                                <td><a href="delete-process.php?userid=<?php echo $row["id"]; ?>">Delete</a></td>
                            </tr>

                            <?php
                            }
                        }
                        ?>
                        </table>
                

        </section>
</body>
</html>