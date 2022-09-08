<?php
    session_start();
    
    try {
        $dbConnect =  new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root','');
    }catch(Exception $e) {
        die('An error was found : '.$e->getMessage());
    }

