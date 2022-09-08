<?php
    require "../actions/db_connect.php";

    if(isset($_POST["validate"])){
        if(!empty($_POST["pseudo"]) && !empty($_POST["password"])){
                
            $pseudoUser = htmlspecialchars($_POST["pseudo"]);
            $passwordUser = htmlspecialchars($_POST["password"]);
            
            $checkIfUserExists = $dbConnect ->prepare("SELECT * FROM users_table WHERE pseudo_user=?");
            $checkIfUserExists->execute(array($pseudoUser));

            if ($checkIfUserExists->rowCount() > 0){
                
                $usersInfos = $checkIfUserExists->fetch();
                if (password_verify($pseudoUser,$usersInfos["password_user"])){
                    
                    // authentication user on website
                    $_SESSION["auth"] = true;
                    $_SESSION["id"] = $userInfos["id_user"];
                    $_SESSION["pseudo"] = $userInfos["pseudo_user"];
                    $_SESSION["name"] = $userInfos["name_user"];
                    $_SESSION["surname"] = $userInfos["surname_user"];
                    
                    // redirection to homepage
                    header("Location : ../pages/index.php");
                    
                }else
                    $errorMessage = "Your password is incorrect";
            }else
                $errorMessage = "Your nickname is incorrect !";
        }else
            $errorMessage = "Please complete all fields !";    
    }