<?php include "../actions/users/loginAction.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "../includes/head.php" ?>
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
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        
        <button type="submit" class="btn btn-primary" name="validate">Login</button>
        <br><br>
        <a href="signup.php"><p>You don't have an account? do you want to subscribe to the forum</p></a>
    </form>    

</body>
</html>