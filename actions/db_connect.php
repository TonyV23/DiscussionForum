<?php
    
    try {
        session_start();
        $dbConnect =  new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root','');
    }catch(Exception $e) {
        die('An error was found : '.$e->getMessage());
    }

