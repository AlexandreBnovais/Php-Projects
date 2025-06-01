<?php 
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    echo $_SESSION['user'] . "<br>";
    echo $_SESSION['email'] . "<br>";
    echo $_SESSION['password'] . "<br>";
?>