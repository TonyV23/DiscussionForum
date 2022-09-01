<?php
    // connection details
    
    $host = "mysql:host=localhost";
    $dbname = "FORUM";
    $charset = "utf8";
    $dbUser = "root";
    $dbPassword = "";

    try {$dbConnect =  new PDO('$host;$dbname;$charset;', $dbUser,$dbPassword);}
    catch(Exception $e) {die('An error was found :'.$e->getMessage());}

