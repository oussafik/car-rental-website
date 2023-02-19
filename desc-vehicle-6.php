<?php 
    session_start();
    extract($_POST);
    if (isset($btn)) {
        $con = mysqli_connect('localhost:3308', 'root', '', 'location');
        $query = "SELECT * from client where email = '$email' and password = '$password'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $n = mysqli_num_rows($result);
        if ($n == 0) {
            echo "<script>alert('Email ou mot de passe est incorrecte')</script>";
        }else {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nom'] = $row['nom'];
            $_SESSION['prenom'] = $row['prenom'];
            $_SESSION['tele'] = $row['tele'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['city'] = $row['city'];
            header('location:desc-vehicle-1-user.php');
        }
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
			<a href="index.php">home</a>
			<a href="index.php#vehicles">vehicles</a>
			<a href="index.php#services">services</a>
			<a href="index.php#featured">featured</a>
			<a href="index.php#reviews">reviews</a>
			<a href="index.php#contact">contact</a>
		</nav>
    <div id="login-btn">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
    </div>

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="" method="post">
        <h3>user login</h3>
        <input type="email" name='email' placeholder="email" class="box">
        <input type="password" name='password' placeholder="password" class="box">
        <p> forget your password <a href="#">click here</a> </p>
        <input type="submit" name="btn" value="login" class="btn">
        <p>or login with</p>
        <div class="buttons">
            <a href="#" class="btn"> google </a>
            <a href="#" class="btn"> facebook </a>
        </div>
        <p> don't have an account <a href="create1.php">create one</a> </p>
    </form>

</div>
<br>
  <h1 class="h"> 
    <sub id="sub"></sub><br></h1>

  <br>
  <img class="right" src="image/vehicle-6.png" >
  <br>
  <h1 class="h"> 
    Lamborghini Urus
    <sub id="sub"></sub><br></h1>

  <div>
<section>
     <h1 class="h1"> Automatic car rental: </h1> <p class="para">If you want to try this kind of car or if you are used
          to driving a car with automatic transmission, Data Wheels guarantees you the best price with 
          the best features and models renewed every year. Renting a car with automatic transmission is the best 
          option to enjoy a quiet and comfortable trip. With this kind of car you will be able to 
         concentrate on the scenery knowing that you are driving a very safe car.
      <br>With an automatic car there is no clutch and the car automatically selects the correct gear for the desired speed at that moment. 
      In the city or suburbs, comfort will be guaranteed if you choose to rent a car with an automatic transmission.</p>
</section>
<br>
  <section>
<h1 class="h1"> features: </h1>
<p class="para">The Lamborghini Urus has 1 Petrol Engine on offer. The Petrol engine is 3996 cc. 
  It is available with Automatic transmission.Depending upon the variant and fuel type the Urus has a mileage of 7.87 kmpl. 
  The Urus is a 5 seater 8 cylinder car and has length of 5112mm, width of 2181mm and a wheelbase of 3003mm.
</p></section>
<section>
<h1 class="h1"> Key Specifications of Lamborghini Urus: </h1>
<p class="para"><br>
    <img class="right2" src="image/features-vehicle-6.png" >
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
<br><h4>COMFORT</h4><br><p>
No more lines, referrals and paper work. Get the car you want when you need it and choose the way you pay.</p>
</aside>
<div id="book-boutton">
<button class="boutton2">
        <a href="#"><span>Book Now</span></a>
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