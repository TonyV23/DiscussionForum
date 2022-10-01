<?php
    require "../actions/db_connect.php";
    require "../actions/questions/publishQuestionAction.php";
    require "../actions/users/securityAction.php" ;
?>
<!DOCTYPE html>
<html lang="en">
<?php include "../includes/head.php" ;?>
<body>
    <?php include "../includes/navbar.php"; ?>
    <br><br><br><br>
    <form class="container" method="POST">
        <?php 
            if (isset($errorMessage)){ echo "<p>".$errorMessage."</p>";}
            elseif(isset($successMessage)){ echo "<p>".$successMessage."</p>";}
        ?>

        <div class="mb-3">
            <label for="title" class="form-label">Question title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Question content</label>
            <textarea type="text" class="form-control" name="content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="validate">Publish Question</button>
    </form>    
</body>
</html>