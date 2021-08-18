<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="dashboard.php">Stadium <span>Seat Booking System</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="#">Welcome <?php echo $_SESSION['username']; ?></a></li>
							<li class="submenu">
								<a href="#">Menu</a>
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="dashboard.php">Book Tickets</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</li>
							<li><a href="logout.php" class="button primary">Logout</a></li>
						</ul>
					</nav>
				</header>

				<section class="wrapper style3 container special">

							<header class="major">
								<h2>Upcoming <strong>Cricket </strong>Matches</h2>
							</header>

							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<a href="#" class="image featured"><img src="images/images (12).jpeg" alt="" /></a>
										<header>
											<h3>India v/s Ausralia</h3>
										</header>
										<p><strong>Match </strong>- 1st T20I</br>
										<strong>Stadium </strong>- Sydney Cricket Ground, Sydney.</br>
										<strong>Stadium Capacity </strong>- 35000</br>
										<strong>Podiums </strong>- 4<br>
										<strong>Date </strong>- 12/12/2020<br>
										<strong>Time </strong>- 09:00 AM IST<br><br>
										<a href="book.php">Book Ticket</a></p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										<a href="#" class="image featured"><img src="images/images (13).jpeg" alt="" /></a>
										<header>
											<h3>Pakistan v/s New Zeland</h3>
										</header>
										<p><strong>Match </strong>- 3rd T20I</br>
										<strong>Stadium </strong>- Wellington Cricket Ground, Wellington.</br>
										<strong>Stadium Capacity </strong>- 30000</br>
										<strong>Podiums </strong>- 4<br>
										<strong>Date </strong>- 15/12/2020<br>
										<strong>Time </strong>- 08:00 AM IST<br><br>
										<a href="book.php">Book Ticket</a></p>
									</section>

								</div>
							</div>
							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<a href="#" class="image featured"><img src="images/images (15).jpeg" alt="" /></a>
										<header>
											<h3>England v/s South Africa</h3>
										</header>
										<p><strong>Match </strong>- 1st Test Match</br>
										<strong>Stadium </strong>- Nelson Mandela Ground, Cape Town.</br>
										<strong>Stadium Capacity </strong>- 25000</br>
										<strong>Podiums </strong>- 4<br>
										<strong>Date </strong>- 18/12/2020<br>
										<strong>Time </strong>- 12:00 PM IST<br><br>
										<a href="book.php">Book Ticket</a></p>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										<a href="#" class="image featured"><img src="images/images (14).jpeg" alt="" /></a>
										<header>
											<h3>Bangladesh v/s New Zeland</h3>
										</header>
										<p><strong>Match </strong>- 1st T20I</br>
										<strong>Stadium </strong>- Hamilton Stadium, Hamilton.</br>
										<strong>Stadium Capacity </strong>- 35000</br>
										<strong>Podiums </strong>- 4<br>
										<strong>Date </strong>- 21/12/2020<br>
										<strong>Time </strong>- 3:00 PM IST<br><br>
										<a href="book.php">Book Ticket</a></p>
									</section>

								</div>
							</div>

							<footer class="major">
								<ul class="buttons">
									<li><a href="bookings.php" class="button">My Bookings</a></li>
								</ul>
							</footer>

						</section>

			<!-- Footer 
				<footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>-->

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>