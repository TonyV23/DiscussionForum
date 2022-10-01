<?php
    session_start();
    $_SESSION = [];
    session_abort();
    header("Location : ../../pages/login.php");