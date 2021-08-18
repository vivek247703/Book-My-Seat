<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style2.css"/>
</head>
<body>


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
                if(isset($_POST['remember'])){
                setcookie('usercookie',$username,time()+86400);
                setcookie('passwordcookie',$password,time()+86400);

                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: dashboard.php");
                }else{
                    header("location: dashboard.php");
                }
            } 
            else{
                ?>
                <script>
                    alert("invalid Credentials");
                    location.replace('login.php');
                </script>
                <?php
            }
        }
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" value="<?php if(isset($_COOKIE['usercookie'])) {echo $_COOKIE['usercookie'];} ?>" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" value="<?php if(isset($_COOKIE['passwordcookie'])) {echo $_COOKIE['passwordcookie'];}?>" placeholder="Password"/>
        <input type="submit" value="submit" name="submit" class="login-button"/>
        <input type="checkbox" name="remember"/>Remember me
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>

</body>
</html>