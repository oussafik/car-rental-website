<?php
    session_start();
    if (isset($btn1)) { 
      session_unset();
      session_destroy();
      
          
      header('location:index.php');
      exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./image/fav.ico"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <title>DataWheels</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>Data&nbsp;</span>wheels </a>

    <nav class="navbar">
			<a href="user_index.php">home</a>
			<a href="user_index.php#vehicles">vehicles</a>
			<a href="user_index.php#services">services</a>
			<a href="user_index.php#featured">featured</a>
			<a href="user_index.php#reviews">reviews</a>
			<a href="user_index.php#contact">contact</a>
		</nav>

    
    <div id="login-btn">
        <button class="btn">Profile</button>
        <i class="far fa-user"></i>
    </div>

</header> 
    
<div class="login-form-container">

    
    <span id="close-login-form" class="fas fa-times"></span>

       <form action="" method="POST">
        <h3>INFO</h3>
        <table class="table table-dark text-center">
                <tr>
                    <th>ID</th>
                    <td><?= $_SESSION['id'] ?></td>
                </tr>
                <tr>
                    <th>First Name</th>
                    <td><?= $_SESSION['nom'] ?></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><?= $_SESSION['prenom'] ?></td>
                </tr>
                <tr>
                    <th>City</th>
                    <td><?= $_SESSION['city'] ?></td>
                </tr>
                <tr>
                    <th>PHONE</th>
                    <td><?= $_SESSION['tele'] ?></td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td><?= $_SESSION['email'] ?></td>
                </tr>
            </table>
            <div id="login-btn">
                <button name="btn1" class="btn">Deconnexion</button>
                <i class="far fa-user"></i>
    
            </div>
    </form>

</div>
<br>
  <h1 class="h"> 
    <sub id="sub"></sub><br></h1>

  <br>
  <img class="right" src="image/car-6.png" >
  <br>
  <h1 class="h"> 
    Hyundai Verna
    <sub id="sub"></sub><br></h1>

  <div>
<section>
     <h1 class="h1"> Economic car rental: </h1> <p class="para">At Data Wheels, we find for you 
       the rental car with the best quality / price ratio. If you are looking for a rental car at the best price for your vacations, 
       your business trips or for any other reason, you will find a large selection at your disposal.<br>
       <br>
       Renting a car at the lowest price at Data Wheels is the best way to get around town with a small 
       car but still in comfort and style, you will soon realize how easy it is to go from the beach to the mountains.
</p>
</section>
<br>
  <section>
<h1 class="h1"> features: </h1>
<p class="para">The Hyundai Verna has 1 Diesel Engine and 2 Petrol Engine on offer. 
  The Diesel engine is 1493 cc while the Petrol engine is 1497 cc and 998 cc. 
  It is available with Manual & Automatic transmission.Depending upon the variant and fuel type the Verna has a mileage of 
  17.7 to 25.0 kmpl. 
  The Verna is a 5 seater 4 cylinder car and has length of 4440, width of 1729 and a wheelbase of 2600.<br>
</p></section>
<section>
<h1 class="h1"> Key Specifications of Hyundai Verna: </h1>
<p class="para"><br>
    <img class="right2" src="image/features-car-6.png" >
    <br>
</p>

</section>
</div>

<div>

<aside id="on">
<h4>Online Bookings:</h4>
<p><marquee>You can now book your car at any time. We are here for you 24/7.</marquee></p>
</aside>
</div>
<div>
<aside id="dis">
<h4>Discount Offers:</h4>
<p><marquee>Yahoo! The discount offer of the year is now here. Now you can get PKR Rs 1000 off at booking of any two or more cars. </marquee></p>
</aside>
</div>
<div>
<aside id="big">
  <h3><u class="spelling-error">Don't buy a car when you can rent it! </u></h3>
  <br><h4>COMPLIANCE:</h4><br>
<p>
You decide which employee rents-out which type of vehicle and when. From Directors and Executives, we have the right car for each one of them.</p>
<br><h4>EXPENSE MANAGEMENT:</h4><p>
Your trips are billed to company, with complete online transaction history. So save time on lengthy reimbursement procedures. We will let you re-visit every trip expense incured.</p>
<br><h4>SAFETY AND SECURITY:</h4><br>
<p>
Our partners undergo a detailed screening process, cars are always pre-insured and background checks on drivers are rigid. And when you are on-the-go, we are available online and at roadside to support 24/7.

Lost An Item? Don't worry! Our detailed Transaction History allow us to trace the vehicle and driver at any point in time.<p>
  <br><h4>SUPPORT:</h4><br><p>
All booking are monitored and when you hit the road, we are available online and at roadside to support 24/7.</p>
<br><h4>UNLIMITED CHOICE:</h4><br><p>
Cars for every ocassion and budget. Rent cars by the day or 3 day consecutively.</p>
<br><h4>COMFORT:</h4><br><p>
No more lines, referrals and paper work. Get the car you want when you need it and choose the way you pay.</p>
</aside>
<div id="book-boutton">
<button class="boutton2">
        <a href="booking-page-user.php"><span>Book Now</span></a>
    </button> 
</div>
</div>


<footer>
    <address> Berrechid
    </address>
    <email>
      ensaberrechid2002@gmail.com
      <br>
      &copy; Copyyright 2022, All Right Reserved<br>
       Contact us: 0615958140
    </email>
  </footer>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>