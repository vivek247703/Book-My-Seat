<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/style2.css"/>
</head>
<body>
<?php
    require('dbconnect.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $cpassword = stripslashes($_REQUEST['cpassword']);
        $cpassword = mysqli_real_escape_string($conn, $cpassword);
        $create_datetime = date("Y-m-d H:i:s");
        
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
        
        $emailquery = "select * from users where email = '$email'";
        $queryies = mysqli_query($conn,$emailquery);
        $emailcount = mysqli_num_rows($queryies);
        if($emailcount>0){
           echo "<h3>Email Already Exist,Please Try With Another Email Id</h3><br/>
           <p class='link'>Click here to <a href='registration.php'>Register Again</a></p>";
           
        }
        else{
            $query    = "INSERT into `users` (username, password, email)
                     VALUES ('$username','$pass','$email')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>register</a> again.</p>
                  </div>";
                  echo ("Error: ".mysqli_error($conn) );
        }
    }}else{
       
        
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="password" class="login-input" name="cpassword" placeholder="Confirm Password">

        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>