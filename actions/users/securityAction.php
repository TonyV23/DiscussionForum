<?php
    //code for authentication security
    if(!isset($_SESSION["auth"])) { header("Location : login.php"); }
