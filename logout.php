<?php
    session_start();
    unset($_SESSION['error_msg']);
    unset($_SESSION['name']);
    header("Location:login.php");
?>