<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Delete Booking</title>
    <link rel="stylesheet" href="assets/css/style2.css"/>
</head>
<body>


<?php
    require('dbconnect.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['delete'])) {
        $username = $_SESSION['username'];
        $id = $_POST['id'];

        $query    = "DELETE from `book` WHERE id='$id' and username='$username'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Booking Deleted Successfully</h3><br/>
                  <p class='link'>Click here to <a href='bookings.php'>Go Back</a> again.</p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>The ticket id you entered is incorrect</h3><br/>
                  <p class='link'>Click here to <a href='bookings.php'>Go Back</a> again.</p>
                  </div>";
        }
    } else {
?>

    <form class="form" method="post" name="login">
        <h1 class="login-title">Delete Booking</h1>
        Enter Ticket ID : <br><br><input type="number" class="login-input" name="id" placeholder="Ticket ID" required autofocus="true"/>
        <input type="submit" value="Delete" name="delete" class="login-button"/>
  </form>
<?php
    }
?>
</body>
</html>