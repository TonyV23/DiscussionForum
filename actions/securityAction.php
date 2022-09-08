<?php
    //code for authentication security
    session_start();
    if(!isset($_SESSION["auth"])) { header("Location : login.php"); }
