<?php 
    session_start();
    extract($_POST);
    if (isset($btn)) {
        $con = mysqli_connect('localhost:3308', 'root', '', 'location');
        $query = "INSERT INTO reservation values(null,'$pickuploctaion', '$dropofflocation', '$pickupdate','$dropoffdate', '$pickuptime')";
        $result = mysqli_query($con, $query);
        echo "<script>alert('Good job!!')</script>";
        header('location:confirm-booking.php');
    }
    else
    {
      echo"<script>alert('VUILLER REMPLIRE LA FORMULAIRE!!')</script>";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DataWheels</title>
    
  
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300&display=swap" rel="stylesheet">
    
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="./image/fav.ico"/>
    
    <!-- Import materialize icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="./css/materialize.min.css">
    
    <!--Import main stylesheet-->
    <link rel="stylesheet" href="css/style_booking.css">
       
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
</head>
<body>

<div class="loader-bg">
   <div class="loader">
   <p class="center-align white-text ltext">Loading...</p>
    <div class="progress lbg">
      <div class="indeterminate pbg"></div>
  </div>
  </div>
  </div>

<div class="header-page dcar-page">
   <div class="navigation-area">
    <header>
         <nav class="top-nav z-depth-0">
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo">Data<span>Wheels</span></a>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="user_index.php#home">Home</a></li>
                    <li><a href="user_index.php#Vehicles">Vehicles</a></li>
                    <li><a href="user_index.php#Services">Services</a></li>
                    <li><a href="user_index.php#Featured">Featured</a></li>
                    <li><a href="user_index.php#Reviews">Reviews</a></li>
                    <li><a href="user_index.php#Contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        
    </header>
</div>
   
<div class="container wrap-header-content dcar-header-content">
    <div class="row">
        <nav class="bread dcar-bread">
            <div class="nav-wrapper">
            </div>
        </nav>
    </div>
    <div class="main-head white-text">
        <h2>Booking</h2>
    </div>
</div>    
</div>

<div class="booking-page">
    <div class="container">
        <div class="rw">
            <div class="booking-section col l12">
               
                <form class="row bpage-trip-form" action="" method="POST">
                  <div class="booking-section">
                        <h4 class="bpage-heads">Make your trip</h4>
                        <div class="divider"></div>
                   </div>

                   <div class="bpage-trip-section">
                       
                   <div class="pick row">
                    <div class="bpage-pickup minput col l12 m12 s12">
                    <h6 class="bpage-trip-head">ID : <?= $_SESSION['id'] ?></h6>
                    
                    </div>
                    </div>
                   
                   <div class="pick row">
                    <div class="bpage-pickup minput col l12 m12 s12">
                    <h6 class="bpage-trip-head">Pick-Up Location</h6>
                    <input type="text"  name="pickuploctaion" class="" placeholder="City,Airport,Station,etc" required>
                    </div>
                    </div>
                    
                    <div class="drop row">
                    <div class="bpage-dropoff minput col l12 m12 s12">
                    <h6 class="bpage-trip-head">Drop-Off Location</h6>
                    <input type="text"   class="" name="dropofflocation" placeholder="City,Airport,Station,etc" required>
                    </div>
                    </div>
                    
                    <div class="date row">
                    <div class="bpage-pick-date minput col l6 m6 s6">
                        <h6 class="bpage-trip-head">Pick-up Date</h6>
                        <input type="text" name="pickupdate"class="datepicker" placeholder="Date" required>
                    </div>
                    
                    <div class="bpage-drop-date minput col l6 m6 s6">
                        <h6 class="bpage-trip-head">Drop-off Date</h6>
                        <input type="text"  name="dropoffdate" class="datepicker" placeholder="Date" required>
                    </div>
                    </div>
                    
                    <div class="time row">
                    <div class="bpage-time minput col l12 m12 s12">
                        <h6 class="bpage-trip-head">Pick-up Time</h6>
                        <input type="text"  name="pickuptime" class="timepicker" placeholder="Time" required>
                    </div>
                    </div>
                    
                    </div>
             
               
            <!-- <div class="bpage-customer">    
                    <div class="customer-details-section">
                        <h4 class="bpage-heads">Customer Information</h4>
                        <div class="divider"></div>
                    </div>
                    <div class="bpage-customer-details">
                       
                        <div class="gender row">
                        <p class="male minput col l2">
                             <label>
                                <input name="gender" type="radio" required><span>Mr</span>
                            </label>
                        </p>
                        <p class=" female minput col l2">
                            <label>
                                <input name="gender" type="radio" required><span>Ms</span>
                            </label>
                        </p>
                        </div>
                        
                        <div class="name row">
                            <div class="input-field minput col l6 m6 s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="fname" type="text" class="validate" required>
                            <label for="fname">First Name</label>
                            </div>
                            
                            <div class="input-field minput col l6 m6 s6">
                            <input id="lname" type="text" class="validate" required>
                            <label for="lname">Last Name</label>
                            </div>
                        </div>
                        
                        <div class="bpage-email row">
                            <div class="input-field minput col l6 m6 s6">
                            <i class="material-icons prefix">mail</i>
                            <input id="email" type="email" class="validate" required>
                            <label for="email">Email</label>
                            <span class="helper-text" data-error="wrong" data-success="right"></span>
                            </div>
                            <div class="input-field minput col l6 m6 s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate" required>
                            <label for="icon_telephone">Telephone</label>
                            </div>
                        </div>
                        
                        <div class="bpage-address row">
                            <div class="input-field minput col l12 m12 s12">
                            <i class="material-icons prefix">map</i>
                            <input id="address" type="text" class="validate" required>
                            <label for="address">Address</label>
                            </div>
                        </div>
                        
                        <div class="zip-code row">
                           <div class="input-field minput col l6 m6 s6">
                            <i class="material-icons prefix">location_city</i>
                            <input id="city" type="text" class="validate" required>
                            <label for="city">City</label>
                            </div>
                           
                            <div class="input-field minput col l6 m6 s6">
                            <i class="material-icons prefix">subtitles</i>
                            <input id="zip" type="text" class="validate" required>
                            <label for="zip">ZipCode</label>
                            </div>
                        </div>
                    </div> -->
                    
                    <div class="accepting row">
                        <p class="minput col l6 m8 s12">
                        <label>
                        <input type="checkbox" required>
                        <span>I accept all information and payments etc.</span>
                        </label>
                        </p>
                          
                        <!-- Modal Trigger -->  
                        <!-- <button class="btn waves-effect waves-light minput bg-clr col l4 offset-l2 m4 s8 offset-s2" type="submit" name="btn">Book Now
                        </button> -->
                        
                        <input type="submit"  name="btn" value="BOOK NOW" class="btn">
                    </div>
                
                </div>
                </form>
            </div>
        </div>
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







<!--JavaScript at end of body for optimized loading-->
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/autoroad-main.js"></script>




</body>
</html>
