<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>My Bookings</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

			 
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
				<?php
				require('dbconnect.php');
				$username = $_SESSION['username'];
				$query = "SELECT id,crmatch,no_seat,podium from `book` WHERE username='$username'";
				$result = mysqli_query($conn,$query);
				
				if (mysqli_num_rows($result)>0){
					while($row = mysqli_fetch_array($result)){
						echo "Ticket ID : ".$row["id"];
						echo "<br>";
						echo "Match : ".$row["crmatch"];
						echo "<br>";
						echo "Seats Booked : ".$row["no_seat"];
						echo "<br>";
						echo "Podium : ".$row["podium"];
						echo "<br>";
						$seatno = rand(1,30000);
						
						for ($x=0,$y=$seatno;$x<$row["no_seat"];$x++,$y++){
							
							echo "Seat No ".($x+1)." : ".$y;
							echo "<br>";
						}
						echo "<br><ul class='buttons'>
									<li><a href='deletebooking.php' class='button'>Delete Booking</a></li><br>
									<li><a href='update.php' class='button'>Update Booking</a></li>
								</ul>";
						echo "<br><br>";
					}
				}
				?>
				<footer class="major">
								<ul class="buttons">
									<li><a href="dashboard.php" class="button">Book More</a></li>
								</ul>
							</footer>
			</section>
			
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