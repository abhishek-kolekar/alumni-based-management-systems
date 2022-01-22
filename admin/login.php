
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" type="text/css" href="style.css"></link>
    </head>
    <body>
<div class ="login-page">
    <div class = "form">
        <div class="login-header">
            <h2>Login</h2>
            <p>Please enter your credentials to login.</p>
        </div>
        <form class="login-form" method = "POST" action="login.php">
            <?php include ('errors.php'); ?>
            <div class ="login-form">
                <input placeholder="Username" type="text" name = "username">
            </div>   
            <div class ="login-form">
                <input placeholder="Password" type="password" name = "password">
            </div>   
            <div class ="login-form">
                <button type="submit" class = "btn" name = "login_user">Login</button>
            </div>
        </form>
    </div>
</div>
    </body>
</html>