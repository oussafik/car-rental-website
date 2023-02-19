<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Find a car with chosen parametrs</title>
		<script defer src="dist/bundle.js"></script>
		<link rel="icon" href="images/bar-icon.png">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<header class="header">

			<div id="menu-btn" class="fas fa-bars"></div>
		
			<a href="#" class="logo"> <span>Data&nbsp;</span>wheels </a>
		
			<nav class="navbar">
				<a href="index.php#home">home</a>
				<a href="index.php#vehicles">vehicles</a>
				<a href="index.php#services">services</a>
				<a href="index.php#featured">featured</a>
				<a href="index.php#reviews">reviews</a>
				<a href="index.php#contact">contact</a>
				<a href="#">Research</a>
			</nav>
		
			<div id="login-btn">
				<button class="btn">login</button>
				<i class="far fa-user"></i>
			</div>
		
		</header> 
		<main class="main">
			<section class="search">
				<br><br>
				<h2 class="heading-secondary heading-secondary--big margin-bottom-big">Find a perfect car!</h2>
				<h2 class="heading-secondary margin-bottom-small">Choose parametrs:</h2>
				<form class="search__form">
					<div class="search__row">
						<div class="search__box">
							<label class="search__label" for="make">Make</label>
              <select class="select select--smaller" id="make">
                <option value="">Select</option>
                <option value="Audi">Audi</option>
                <option value="BMW">BMW</option>
                <option value="Mercedes Benz">Mercedes Benz</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Ford">Ford</option>
                <option value="Dodge">Dodge</option>
              </select>
						</div>
						<div class="search__box">
							<label class="search__label" for="year">Year</label>
              <select class="select select--smaller" id="year">
                <option value="">Select</option>
              </select>
						</div>
						<div class="search__box">
							<label class="search__label" for="min">Min Price</label>
							<select class="select select--smaller" id="min">
                <option value="">Select</option>
                <option value="20000">20,000</option>
                <option value="30000">30,000</option>
                <option value="40000">40,000</option>
                <option value="50000">50,000</option>
                <option value="60000">60,000</option>
                <option value="70000">70,000</option>
                <option value="80000">80,000</option>
                <option value="90000">90,000</option>
              </select>
						</div>
						<div class="search__box">
							<label class="search__label" for="max">Max Price</label>
              <select class="select select--smaller" id="max">
                <option value="">Select</option>
                <option value="20000">20,000</option>
                <option value="30000">30,000</option>
                <option value="40000">40,000</option>
                <option value="50000">50,000</option>
                <option value="60000">60,000</option>
                <option value="70000">70,000</option>
                <option value="80000">80,000</option>
                <option value="90000">90,000</option>
              </select>
						</div>
					</div>
					<div class="search__row">
						<div class="search__box">
							<label class="search__label" for="doors">Doors</label>
                <select class="select select--bigger" id="doors">
                  <option value="">Select</option>
                  <option value="2">2</option>
                  <option value="4">4</option>
                </select>
						</div>
						<div class="search__box">
							<label class="search__label" for="transmission">Transmission</label>
                <select class="select select--bigger" id="transmission">
                  <option value="">Select</option>
                  <option value="automatic">Automatic</option>
                  <option value="manual">Manual</option>
                </select>
						</div>
						<div class="search__box">
							<label class="search__label" for="color">Color</label>
              <select class="select select--bigger" id="color">
                <option value="">Select</option>
              	<option value="Black">Black</option>
                <option value="Blue">Blue</option>
                <option value="White">White</option>
                <option value="Red">Red</option>
              </select>
						</div>
					</div>
				</form>
			</section>
			<section class="cars">
				<h2 class="heading-secondary">Available cars:</h2>
				<div class="cars__container" id="cars-container">
				</div>
			</section>
		</main>
		<footer class="footer">
			<span>© All Rights Reserved.</span>
			<span>Data Wheels</span>
		</footer>
	</body>
</html>
