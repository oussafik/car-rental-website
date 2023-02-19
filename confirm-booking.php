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
                <div class="col s12">
                <a href="booking-page.html" class="breadcrumb">Go Back</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="main-head white-text">
        <h2>Booking</h2>
    </div>
</div>    
</div>


<div class="confirm-booking-page">
    <div class="container">
        <div class="row">
            <div class="notice">
               
                <div class="notice-head amber darken-3">
                    <h3>COMPLETE  BOOKING</h3>
                </div>
                <div class="notice-content orange accent-1">
                    <h5>Upon completing this reservation enquiry, you will receive-</h5>
                    <ul class="booking-details">
                        <li>Your Appointment letter, to be presented at the time of payment at our work place</li>
                        <li>Your rental voucher to produce on arrival at the rental desk</li>
                        <li>A toll-free customer support number</li>
                    </ul>
                    <p>We are sending all the related information regarding this booking at your registered mobile number and email address.<br>Please do check for the further procedure.</p>
                </div>  
                   
                       
                    <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn cnf-btn bg-clr modal-trigger" href="#modal1">Continue</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal green lighten-4">
    <div class="modal-content center-align">
      <h4 class="greet-head">Confirmation</h4>
      <p class="greet-content">Your appointment for car reservation has been booked successfully !</p>
      <p class="greet">Thankyou</p>
    </div>
    <div class="modal-footer green lighten-4">
      <a href="user_index.php" class="modal-close waves-effect waves-green btn-flat">New Booking</a>
      <a href="" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
                
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
