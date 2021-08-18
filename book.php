<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Book</title>
    <link rel="stylesheet" href="assets/css/style3.css"/>
</head>
<body>
<?php
    require('dbconnect.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        $username = $_SESSION['username'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $Mnumber1 = $_POST['Mnumber1'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $crmatch = $_POST['crmatch'];
        $no_seat = $_POST['no_seat'];
        $podium = $_POST['podium'];


        
        $query    = "INSERT into `book` (username,fname,mname,lname,Mnumber1,gender,email,crmatch,no_seat,podium)
                     VALUES ('$username','$fname','$mname','$lname','$Mnumber1','$gender','$email','$crmatch','$no_seat','$podium')";
        $result   = mysqli_query($conn, $query); 


        if ($result) {
            $price =1250;
            $totalPrice = $price*($no_seat*$podium);
            echo "<div class='form'>
                  <h3>Seat Booked successfully</h3><br/>";
                  echo "You have booked ",$no_seat,"seat at Podium No ",$podium;
                  echo "<br>";
                  echo "The total price of your tickets are Rs.",$totalPrice;
                  echo "<br>";
                  echo "Fill in your card details and said amount money will be deducted from your bank";
            echo "<p class='link'>Click here to <a href='payment.php'>Pay</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>

                  </div>";
                  echo ("Error: ".mysqli_error($conn) );
        }

    } else {
?>
    <form class="form" action="" method="post">
        
     <fieldset>        
        <legend><strong>Book Your Seat</strong></legend>  
            First name: <br><br><input type="text"  placeholder="First name" name="fname" class="login-input" required><br> 
            Middle name: <br><br><input type="text"  placeholder="Middle name" name="mname" class="login-input" required><br> 
            Last name: <br><br><input type="text" placeholder="Last name"  name="lname" class="login-input" required><br> 
            Mobile no: <br><br><input type="number"  placeholder="Mobile number" name="Mnumber1" class="login-input" required><br> 
        
            Gender:<input type="radio" name="gender" value="female">Female <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="other">Other<br> <br><!--
            Gender: <input type="text" placeholder="Male,Female,Other"  name="gender" class="login-input"><br>--> 
            Email: <br><br><input type="email"  placeholder="eg. XYZ@gmail.com" name="email" class="login-input" required><br>
            Select Match: <input type="radio" name="crmatch" value="Ind vs Aus" required>India vs Aus <input type="radio" name="crmatch" value="NZ vs Pak">NZ vs Pak <input type="radio" name="crmatch" value="Eng vs SA">Eng vs SA<input type="radio" name="crmatch" value="NZ vs Ban">NZ vs Ban<br> <br>
            Enter No of Seat: <br><br><input type="number"  placeholder="No of seat" name="no_seat" class="login-input" required><br> 
            Select Podium: <input type="radio" name="podium" value="1" required>1 <input type="radio" name="podium" value="2">2 <input type="radio" name="podium" value="3">3<input type="radio" name="podium" value="4">4<br> <br>

            <input type="submit" name="submit" value="Submit" class="login-button">


    </fieldset> 
 

    
</form> 
<?php
    }
?>
</body>
</html>