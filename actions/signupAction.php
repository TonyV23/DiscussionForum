<?php

    require "../actions/db_connect.php";

    if(isset($_POST["validate"])){
        if(!empty($_POST["pseudo"]) && !empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["password"])){
            
            $pseudoUser = htmlspecialchars($_POST["pseudo"]);
            $nameUser = htmlspecialchars($_POST["name"]);
            $surnameUser = htmlspecialchars($_POST["surname"]);
            $passwordUser = password_hash($_POST["password"],PASSWORD_DEFAULT);

            $checkIfUserAlreadyExists = $dbConnect -> prepare("SELECT pseudo_user FROM users_table WHERE pseudo_user = ?");
            $checkIfUserAlreadyExists->execute(array($pseudoUser));

            if ($checkIfUserAlreadyExists -> rowCount() == 0){

                $insertUserOnTheWebSite = $dbConnect -> prepare("INSERT INTO users_table(pseudo_user,name_user,surname_user,password_user)VALUES(?,?,?,?)");
                $insertUserOnTheWebSite -> execute(array($pseudoUser,$nameUser,$surnameUser,$passwordUser));

                $getInfosOfThisUser = $dbConnect -> prepare("SELECT id_user,pseudo_user,name_user,surname_user FROM users_table WHERE name_user=? and surname_user=?");
                $getInfosOfThisUser -> execute(array($pseudoUser,$nameUser,$surnameUser));

                $userInfos = $getInfosOfThisUser -> fetch();

                // authentication user on website
                $_SESSION["auth"] = true;
                $_SESSION["id_user"] = $userInfos["id_user"];
                $_SESSION["pseudo_user"] = $userInfos["pseudo_user"];
                $_SESSION["name_user"] = $userInfos["name_user"];
                $_SESSION["surname_user"] = $userInfos["surname_user"];

                header("Location : index.php");

            }else
                $errorMessageRegister = "User already exists on the website";


        }else
            $errorMessage = "Please complete all fields !";    
    }