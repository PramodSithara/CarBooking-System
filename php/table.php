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
    margin-left:1058px;
    margin-bottom: 12px;
}

#in{
    margin-left:852px;
    width: 189px;
    height: 30px;
}

.heading{
    margin-top:68px;
}
.newsletter a h2:hover{
    color:#474fa0;    
}

</style>





</head>
<body>
        <header>
                <a href="#" class="logo"><i class='bx bxs-car'></i></a>
        
                <div class="bx bx-menu" id="menu-icon"></div>

                <ul class="navbar">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#Search">Search</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#reviews">Reviews</a></li>
                </ul>
                <div class="header-btn">
                        <a href="#" class="sign-in">Welcome Back !</a>
                </div>
        </header>
        <section class="home" id="home">
                <div class="text">
                      <h1><span>Looking</span> for <br>rent a car</h1>
                      <p>With Quality & Expertise Our Market Experience<br> Guarantees The Best Deals Around!</p>                   
                </div>

                
        </section>
        <!--Car List-->
        <div class="heading" id="Search">
                       <span>How Its Work</span>
                       <h2>Click Calculate Button to get Details</h2>
                       <h3>[Refference Number is Compalsary for payment]</h3> 
        </div>
        <div class="service-container" >
            
                        <form action="" method="post">
        
                        <div class="box">
                                <input type="submit" name="search" class=n_btn value="Calculate"> 
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

                        //tranfer value
                        session_start(); 
                        $myVar = $_SESSION['$vb'];
                        /////////////////////////////////////


                        if(isset($_POST['search']))
                        {
                            /*$id = $_POST['id'];*/

                            $query = "SELECT * FROM `cars` where ref_id='$myVar' ";
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
                            </tr>

                            <?php
                            }
                        }
                        ?>
                        
                        </table>
                        </div>
                </div>
        </section>
        
        <section class="about" id="about">
                <div class="heading">
                        <span>About Us</span>
                        <h1>Best Customer Experience <br> From Top Rated Dealers</h1>
                </div>
                <div class="about-container">
                        <div class="about-img">
                                <img src="../pic/about.jpg" alt="">
                        </div>
                        <div class="about-text">
                                <span>About Us</span>
                                <p>GOLDEN CAR RENTAL company was established 5 years ago. Through the years the company gained a well-established reputation for its commitment to offer quality, timely and unparalleled customer service.</p>
                                <p>Since our clientele is diversified, we offer a wide selection of new models starting from small city cars, medium sized, automatic and luxury cars able to satisfy or give mobile solution at any of your professional or private needs. All car models we provide, are new and in excellent condition.</p>
                                <p>The head office of our car rental company is situated in Kandy. You can Book Car through our web portal and you should come to take vehicle in our head office</p>
                                <a href="#" class="btn">Learn More</a>
                        </div>
                </div>
        </section>
        <section class="reviews" id="reviews">
                <div class="heading">
                        <span>Reviews</span>
                        <h1>Whats Our Customer Say</h1>
                </div>
                <div class="reviews-container">
                      <div class="box">
                        <div class="rev-img">
                                <img src="../pic/rev.jpg" alt="">
                        </div>
                        <h2>Pramod S Jayansiri</h2>
                        <div class="stars">
                              <i class="bx bxs-star"></i>
                              <i class="bx bxs-star"></i>
                              <i class="bx bxs-star"></i>
                              <i class="bx bxs-star"></i>
                              <i class="bx bxs-star"></i>  
                        </div>
                        <p>Everything worked out wonderful. We had read about this company on a forum. The car was delivered to the hotel on time and the price is fair. We received a friendly briefing and the car itself was in perfect condition. We rented it on Kandy. Any time again.</p>
                      </div>
                 <!-----------------------------------------reviews-->     
                      <div class="box">
                        <div class="rev-img">
                                <img src="../pic/rev2.jpg" alt="">
                        </div>
                        <h2>Kavindi Sandipani</h2>
                        <div class="stars">
                              <i class="bx bxs-star"></i>
                              <i class="bx bxs-star"></i>
                              <i class="bx bxs-star"></i>
                              <i class="bx bxs-star"></i>
                              <i class="bx bxs-star-half"></i>  
                        </div>
                        <p>Before arriving, they were really helpful via email with the doubts and questions. When we arrived, they were already waiting for us. Gave us the car (really new and clean). Everything was great. Best choice in Kandy.</p>
                      </div>
                <!-----------------------------------------reviews-->       
                      <div class="box">
                        <div class="rev-img">
                                <img src="../pic/rev3.jpg" alt="">
                        </div>
                        <h2>Viraj jayasinghe</h2>
                        <div class="stars">
                              <i class="bx bxs-star"></i>
                              <i class="bx bxs-star"></i>
                              <i class="bx bxs-star"></i>
                              <i class="bx bxs-star"></i>
                              <i class="bx bxs-star-half"></i>  
                        </div>
                        <p>Comfortable, reliable and friendly service. Very happy with Golden for transfer to northern side of Kandy (1+ hour). Will recommend to friends and definitely use again!.</p>
                      </div>
                </div>
        </section>
        <!--Nwsletter-->
        <section class="newsletter">
                <a href="../feedbacks/feedback.html"><h2>Contact US</h2></a>
        </section>
        <div class="copyright">
                <p>&#169; Golden Car All Right Reserved</p>
                <div class="social">
                        <a href="#"><i class="bx bxl-facebook"></i></a>
                        <a href="#"><i class="bx bxl-twitter"></i></a>
                        <a href="#"><i class="bx bxl-instagram"></i></a>
                </div>
        </div>

        <!--Scroll Reaver-->
        <script src="https://unpkg.com/scrollreveal"></script>
        
        <script src="../js/main.js"></script>
</body>


<html>