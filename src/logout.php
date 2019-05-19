<?php
    session_start();
    session_destroy();
    session_unset();
    header('location: ../home/regform/Login_v15/vendor/login.php');

?>
