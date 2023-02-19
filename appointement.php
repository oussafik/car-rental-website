<?php 
    session_start();
    extract($_POST);
    if (isset($btn)) {
        $con = mysqli_connect('localhost:3308', 'root', '', 'location');
        $query = "SELECT matricule from voiture";
    
    }
    if (isset($btn1)) { 
      session_unset();
      session_destroy();
      
          
      header('location:index1.php');
      exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style_appointement.css">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./image/fav.ico"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <title>DataWheels</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2_appointement.css">
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
        <button class="btn">Login</button>
        <i class="far fa-user"></i>
   
    </div>

</header> 


	<div class="container">
		<div class="container-time">
				<h2 class="heading">Time Open</h2>
				<h3 class="heading-days">Monday-Friday</h3><br>
				<p>8am - 12am (morning)</p>
				<p>2pm - 6pm (afternoon)</p><br>

				<h3 class="heading-days">Saturday and sunday</h3><br>
				<p>7am - 12am (morning)</p>
				<p>1pm - 7pm (afternoon)</p><br>

				<hr>

				<h4 class="heading-phone">Call Us: +212 615-958140</h4>
		</div>

		<div class="container-form">
				<form action="#">
					<h2 class="heading heading-yellow">Schedule Appointment</h2>

					<div class="form-field">
						<p>Your Name</p>
						<input type="text" placeholder="Your Name">
					</div>
					<div class="form-field">
						<p>Your email</p>
						<input type="email" placeholder="Your email">
					</div>
					<div class="form-field">
						<p>Date</p>
						<input type="date">
					</div>
					<div class="form-field">
						<p>Time</p>
						<input type="time">
					</div>
					<div class="form-field">
						<p>How many people?</p>
						<select name="select" id="#">
							<option value="1">1 person</option>
							<option value="2">2 persons</option>
							<option value="3">3 persons</option>
							<option value="4">4 persons</option>
							<option value="5">5 persons</option>
							<option value="5+">5+ persons</option>
						</select>
					</div>

					<button class="btn2">Submit</button>
				</form>
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
	
	

</body>
</html>