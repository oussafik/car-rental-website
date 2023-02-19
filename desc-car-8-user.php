<?php 
    session_start();
    extract($_POST);
    if (isset($btn)) {
      $con = mysqli_connect('localhost:3308', 'root', '', 'location');
      $query = "SELECT * from client where email = '$email' and password = '$password'";
    
    }
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
        <h3>VOS INFO</h3>
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
  <img class="right" src="image/car-8.png" >
  <br>
  <h1 class="h"> 
    Chevrolet Spin
    <sub id="sub"></sub><br></h1>

  <div>
<section>
     <h1 class="h1"> 7-seater minivan rental: </h1> <p class="para">Rent a minivan from Data Wheels and 
       you will discover the best way to travel with a large family or a group of friends. 
       If you rent a minivan with 6 or 7 seats or a minibus with 8 or 9 seats, 
       you won't have to worry about taking several cars and it will cost you less.<br>
      <br>This is probably the best way to travel if you are in a group with family or friends and you want to travel all together. 
      If you rent a minivan, not only will you be able to travel together, but you will also have more space, you will be able 
      to carry your suitcases, your sports equipment or other objects, as well as a greater capacity in terms of the number of passengers. If what you need is space rather than seats to carry more luggage or large cargo, you will also find on our website a selection of mini-vans that will meet your requirements.
      <br><br>
      Whatever your needs, Data Wheels will always be able to offer you the best selection of 6-7 seat minivans.
      </p>
</section>
<br>
  <section>
<h1 class="h1"> features: </h1>
<p class="para">The Chevrolet Spin has 1 Diesel Engine on offer. The Diesel engine is 1298 cc. 
  It is available with the Manual transmission.
</p></section>
<section>
<h1 class="h1"> Key Specifications of Chevrolet Spin: </h1>
<p class="para"><br>
    <img class="right2" src="image/features-car-8.png" >
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
<br><h4>EXPENSE MANAGEMENT:</h4><br><p>
Your trips are billed to company, with complete online transaction history. So save time on lengthy reimbursement procedures. We will let you re-visit every trip expense incured.</p>
<br><h4>SAFETY AND SECURITY:</h4><br>
<p>
Our partners undergo a detailed screening process, cars are always pre-insured and background checks on drivers are rigid. And when you are on-the-go, we are available online and at roadside to support 24/7.

Lost An Item? Don't worry! Our detailed Transaction History allow us to trace the vehicle and driver at any point in time.<p>
  <br> <h4>SUPPORT:</h4><br><p>
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