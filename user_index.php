<?php 
    session_start();
    extract($_POST);

    if (isset($btn1)) { 
        session_unset();
        session_destroy();
        
            
        header('location:index.php');
        exit();
    }

        
// ?>

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
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>Data&nbsp;</span>wheels </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#vehicles">vehicles</a>
        <a href="#services">services</a>
        <a href="#featured">featured</a>
        <a href="#reviews">reviews</a>
        <a href="#contact">contact</a>
        <a href="filter_user.php">Research</a>
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


<section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">Rent your car NOW</h3>

    <img data-speed="5" class="home-parallax" src="image/home-img.png" alt="">

    <a data-speed="7" href="#featured" class="btn home-parallax">explore cars</a>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>150+</h3>
            <p>branches</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>4770+</h3>
            <p>cars rent</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>320+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>1500+</h3>
            <p>news cars</p>
        </div>
    </div>

</section>

<section class="vehicles" id="vehicles">

    <h1 class="heading"> popular <span>vehicles</span> </h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/vehicle-1.png" alt="">
                <div class="content">
                    <h3>Ferrari Portofino</h3>
                    <div class="price"> <span>price : </span> 7500DH/Day </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="desc-vehicle-1-user.php" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-2.png" alt="">
                <div class="content">
                    <h3>Ferrari Roma</h3>
                    <div class="price"> <span>price : </span> 4000DH/Day </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="desc-vehicle-2-user.php" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-3.png" alt="">
                <div class="content">
                    <h3>Ferrari 812</h3>
                    <div class="price"> <span>price : </span> 7000DH/Day </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="desc-vehicle-3-user.php" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-4.png" alt="">
                <div class="content">
                    <h3>Ferrari F8 Tributo</h3>
                    <div class="price"> <span>price : </span> 6500DH/Day </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="desc-vehicle-4-user.php" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-5.png" alt="">
                <div class="content">
                    <h3>Ferrari SF90 Stradale</h3>
                    <div class="price"> <span>price : </span> 6000DH/Day </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="desc-vehicle-5-user.php" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-6.png" alt="">
                <div class="content">
                    <h3>Lamborghini Urus</h3>
                    <div class="price"> <span>price : </span> 5500DH/Day </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="desc-vehicle-6-user.php" class="btn">check out</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-car"></i>
            <h3>car selling</h3>
            <p>Choose your rental vehicle from a fleet of more than 500 top brand vehicles that are less than 18 months old and perfectly maintained.</p>
            <a href="#featured" class="btn">Explore cars</a>
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>parts repair</h3>
            <p>To help keep your ride smooth and stable, Data Wheels offers a range of parts repair services for your vehicle</p>
            <a href="appointement.php" class="btn">book an Appointment</a>
        </div>

        <div class="box">
            <i class="fas fa-car-crash"></i>
            <h3>car insurance</h3>
            <p>Because we care about your safety, Data Wheels offers for you a Collision Damage Waiver (CDW) and theft coverage</p>
            <a href="appointement.php" class="btn">book an Appointment</a>
        </div>

        <div class="box">
            <i class="fas fa-car-battery"></i>
            <h3>battery replacement</h3>
            <p>Whether you need a battery tested, a new battery or the terminals cleaned, 
                Data Wheels offers the battery services you need to help keep your starting charging system running efficiently</p>
            <a href="appointement.php" class="btn">book an Appointment</a>
        </div>

        <div class="box">
            <i class="fas fa-gas-pump"></i>
            <h3>oil change</h3>
            <p>Data Wheels helps you select the perfect motor oil based on your individual driving habits and conditions</p>
            <a href="appointement.php" class="btn">book an Appointment</a>
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>We assure you an exemplary accompaniment, as well as a real assistance 24/7, accompanied by an irreproachable service of proximity.</p>
            <a href="appointement.php" class="btn">book an Appointment</a>
        </div>

    </div>

</section>

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> cars </h1>

    <div class="swiper featured-slider">

       <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/car-1.png" alt="">
                <div class="content">
                    <h3>SL Roadster</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">550DH/Day</div>
                    <a href="desc-car-1-user.php" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-2.png" alt="">
                <div class="content">
                    <h3>Nissan Magnite</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">650DH/Day</div>
                    <a href="desc-car-2-user.php" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-3.png" alt="">
                <div class="content">
                    <h3>2016 Ford Focus ST</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">450DH/Day</div>
                    <a href="desc-car-3-user.php" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-4.png" alt="">
                <div class="content">
                    <h3>Audi Q5</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">700DH/Day</div>
                    <a href="desc-car-4-user.php" class="btn">check out</a>
                </div>
            </div>

       </div>

       <div class="swiper-pagination"></div>

    </div>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
 
             <div class="swiper-slide box">
                 <img src="image/car-5.png" alt="">
                 <div class="content">
                     <h3>Kia Sportage</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">750DH/Day</div>
                     <a href="desc-car-5-user.php" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-6.png" alt="">
                 <div class="content">
                     <h3>Hyundai Verna</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">400DH/Day</div>
                     <a href="desc-car-6-user.php" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-7.png" alt="">
                 <div class="content">
                     <h3>Kia Seltos</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">600DH/Day</div>
                     <a href="desc-car-7-user.php" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-8.png" alt="">
                 <div class="content">
                     <h3>Chevrolet Spin</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">900DH/Day</div>
                     <a href="desc-car-8-user.php" class="btn">check out</a>
                 </div>
             </div>
 
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>

<section class="newsletter">
    
    <h3>subscribe for latest updates</h3>
    <p>Subscribe and stay updated with latest offers and news about our car rental agency</p>

   <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
   </form>

</section>

<section class="reviews" id="reviews">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <div class="content">
                    <p>Booking was super-clear and super-fast, all relevant information came up quickly and very accessibly on the screen. We haven't picked up the car yet but this is great so far.</p>
                    <h3>Pacis Leander</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <div class="content">
                    <p>We were given a brand new hybrid Camry. It saved us fuel costs and was a dream to drive. We would definitely deal with Data Wheels again.</p>
                    <h3>Aymane Elouadi</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <div class="content">
                    <p>Great website and easy to navigate. Look forward to picking vehicle</p>
                    <h3>Mouad Bousalem</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <div class="content">
                    <p>very clear what is included rapid response Hope the rest of my holiday goes as smoothly</p>
                    <h3>Khalid El Kassimi</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <div class="content">
                    <p>Brilliant service. Easy to organise and navigate through the website. Well priced vehicles and added insurance to cover any issues. Great experience, will use again.</p>
                    <h3>Oussama Fikri</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-6.png" alt="">
                <div class="content">
                    <p>This was my first time renting a car in Morocco. The process was very smooth, the rental company was great. My kids and I loved our ride!</p>
                    <h3>Hind Fekkak</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us</h1>

    <div class="row">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3336.2808705760135!2d-7.586148185587627!3d33.259138466554745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda63ce6a6c999b5%3A0x9823260201eae931!2sEcole%20Nationale%20des%20Sciences%20Appliqu%C3%A9es%20de%20Berrechid!5e0!3m2!1sfr!2sma!4v1648403180241!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="">
            <h3>get in touch</h3>
            <input type="text" placeholder="your name" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="tel" placeholder="subject" class="box">
            <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

    </div>

</section>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="https://goo.gl/maps/euTJ8wpkpx8kpQrL8" target="_blank"> <i class="fas fa-map-marker-alt"></i> Casablanca </a>
            <a href="https://goo.gl/maps/68SpYifqTHgWVbDE9" target="_blank"> <i class="fas fa-map-marker-alt"></i> Marrakech </a>
            <a href="https://goo.gl/maps/XYkhWv8SBxkP7ysN7" target="_blank"> <i class="fas fa-map-marker-alt"></i> Tanger </a>
            <a href="https://goo.gl/maps/MG6RPMnm8VixX4bX6" target="_blank"> <i class="fas fa-map-marker-alt"></i> Rabat </a>
            <a href="https://goo.gl/maps/d8mZ4zf8GGsedM2x6" target="_blank"> <i class="fas fa-map-marker-alt"></i> Berrechid </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#vehicles"> <i class="fas fa-arrow-right"></i> vehicles </a>
            <a href="#services"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#featured"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#reviews"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#contact"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +212-6108-83239 </a>
            <a href="#"> <i class="fas fa-phone"></i> +212-6159-58140 </a>
            <a href="#"> <i class="fas fa-envelope"></i> ensaberrechid2002@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> &nbsp;Berrechid, Morocco- B.P 218</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="https://www.facebook.com/groups/155494584533785" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://instagram.com/ensaberrechid?utm_medium=copy_link" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com/school/ecole-nationale-des-sciences-appliqu%C3%A9es-de-berrechid/mycompany/" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by ENSA-B Students | all rights reserved </div>

</section>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>