<?php require "../actions/users/signupAction.php" ?>

<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php'; ?>
<body>
    <br><br><br><br>
    <form class="container" method="POST">

        <?php 
            if (isset($errorMessage)){ echo "<p>".$errorMessage."</p>";}
        ?>

        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" class="form-control" name="surname">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        
        <button type="submit" class="btn btn-primary" name="validate">Signup</button>
        <br><br>
        <a href="login.php"><p>I already have an account, login</p></a>
    </form>    
</body>
</html>