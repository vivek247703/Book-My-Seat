<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Update</title>
    <link rel="stylesheet" href="assets/css/style2.css"/>
</head>
<body>


<?php
    require('dbconnect.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['update'])) {
        $username = $_SESSION['username'];
        $id = $_POST['id'];
        $no_seat = $_POST['no_seat'];
        $podium = $_POST['podium'];

        $query    = "UPDATE `book` set no_seat='$no_seat',podium='$podium' WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Updated Successfully</h3><br/>
                  <p class='link'>Click here to <a href='bookings.php'>Go Back</a> again.</p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Couldn't Update ! Re-check Your details</h3><br/>
                  <p class='link'>Click here to <a href='bookings.php'>Go Back</a> again.</p>
                  </div>";
        }
    } else {
?>

    <form class="form" method="post" name="login">
        <h1 class="login-title">Update Booking</h1>
        Enter Ticket ID : <br><br><input type="number" class="login-input" name="id" placeholder="Enter ticket ID to Update" required autofocus="true"/>
        Enter No of Seat: <br><br><input type="number"  placeholder="No of seat" name="no_seat" class="login-input" required><br> 
            Select Podium: <input type="radio" name="podium" value="1" required>1 <input type="radio" name="podium" value="2">2 <input type="radio" name="podium" value="3">3<input type="radio" name="podium" value="4">4<br> <br>
        <input type="submit" value="Update" name="update" class="login-button"/>
  </form>
<?php
    }
?>
</body>
</html>