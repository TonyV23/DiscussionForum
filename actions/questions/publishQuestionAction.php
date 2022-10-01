<?php
        if(isset($_POST["validate"])){
        if(!empty($_POST["title"] && !empty($_POST["content"]))){
            
            $question_title = htmlspecialchars($_POST["title"]);
            $question_content = nl2br(htmlspecialchars($_POST["content"]));
            $question_date = date("m/d/Y");
            $question_id_author = $_SESSION["id"];
            $question_pseudo_author = $_SESSION["pseudo"];

            $insertQuestionOnWebSite = $dbConnect->prepare("INSERT INTO users_question(q_title,q_content,q_id_author,q_pseudo_author,q_date)VALUES(?,?,?,?,?)");
            $insertQuestionOnWebSite -> execute(array($question_title,$question_content,$question_id_author,$question_pseudo_author,$question_date));
            
            $successMessage = "Your question has been posted"; 


        }else
            $errorMessage = "Please fill all fields";
    }