<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betwixt Nexus Login Page</title>
</head>
<body>
    <div class="login-div">
        <form action method="POST" action="">
            <ul>
                <li>
                <input type="text" name="username" style="width:160px;"placeholder="Enter your username"/><input type="checkbox" class="rem-box" style="padding-top:50px; margin-left:15px;" value="Remember me"> Remember me
                </li>
                <br>
                <li>
                <input type="password" style="width:160px; padding-top:-25px; margin-top:-45px;" name="password" placeholder="Enter your password"/><button type="submit" href="../front/login.php" style="height:25px; width:45px; background-color:#0275d8; color:white; border-radius:5px;">Login</button>
                </li>
                <br>
                <li>
                Not yet a member?<a href="../public/front/register.php" style="background-color:#ffef00; color:#66757f; border-radius:5px;">Register</a>
                </li>
                <br>
                <li>
                <p class="forgotPassword">Forgot username or password?<a href="forgot_password.php" style="background-color:#bd162c; color:white; border-radius:5px;">Reset</a></p>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>