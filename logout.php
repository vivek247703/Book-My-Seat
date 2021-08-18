<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        setcookie('usercookie','',time()-86400);
        setcookie('passwordcookie','',time()-86400);
        // Redirecting To Home Page
        header("Location: index.php");
    }
?>