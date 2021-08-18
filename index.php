<!DOCTYPE HTML>

<html>
	<head>
		<title>Stadium Seat Booking System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="index is-preload">
		<?php
		$login = false;
		$showError = false;
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			include 'dbconnect.php';
			$username = $_POST["username"];
			$password = $_POST["password"]; 
			
			 
			// $sql = "Select * from users where username='$username' AND password='$password'";
			$sql = "Select * from users where username='$username'";
			$result = mysqli_query($conn, $sql);
			$num = mysqli_num_rows($result);
			if ($num == 1){
				while($row=mysqli_fetch_assoc($result)){
					if (password_verify($password, $row['password'])){ 
						$login = true;
						session_start();
						$_SESSION['loggedin'] = true;
						$_SESSION['username'] = $username;
						header("location: dashboard.php");
					} 
					else{
					  ?>
					  <script>
						  alert("invalid Credentials");
						  location.replace('index.php');
					  </script>
					  <?php
						
					}
				}
			}
		}
     else {
?>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index.php">Stadium <span>Seat Booking System</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="#">Welcome</a></li>
							<li class="submenu">
								<a href="#">Menu</a>
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="login.php">Book Tickets</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</li>
							<li><a href="registration.php" class="button primary">Sign Up</a></li>
						</ul>
					</nav>
					<div style="float:right;padding-top: 10px;">
                    <button style="background-color:none;"><a href="mainbot.php" style="color:white;">chat with us</a></button>
	                </div>
				</header>

			<!-- Banner -->
				<section id="banner">

					
					<div class="inner" >

						<div class="login-content">
			<form action="" method="post">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" name="username" placeholder="Username" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" name="password" placeholder="password" class="input">
            	   </div>
            	</div>
            	<br>
            	<input type="submit" name="submit" class="btn" value="Login">
            </form>
        </div>

					</div>

				</section>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<?php
    }
?>
	</body>
</html>