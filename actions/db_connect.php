<?php
    session_start();
    // connection details
    
    $databaseName = "forum";
    $charset = "utf8";
    $dbUser = "root";
    $dbPassword = "";

    try {$dbConnect =  new PDO('mysql:host=localhost;$dbname=$databaseName;$charset;', $dbUser,$dbPassword);}
    catch(Exception $e) {die('An error was found : '.$e->getMessage());}

