<?php 

    session_start();
    unset($_SESSION['user_login']);
    unset($_SESSION['admin_login']);
                unset($_SESSION['logged_in']);
    header('location: index.php');

?>