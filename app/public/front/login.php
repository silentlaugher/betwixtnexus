<?php 
    include_once __DIR__."../../../config/core/session.php";
    include_once __DIR__."../../../config/core/Database.php";
    include_once __DIR__."../../../config/core/utilities.php";

    if(isset($_POST['loginBtn'])){
        //array to hold errors
        $form_errors = array();
    
        //validate
        $required_fields = array('username', 'password');
        $form_errors = array_merge($form_errors, check_empty_fields($required_fields));
    
        if(empty($form_errors)){
    
            //collect form data
            $user = $_POST['username'];
            $password = $_POST['password'];
    
            //check if user exist in the database
            $sqlQuery = "SELECT * FROM users WHERE username = :username";
            $statement = $db->prepare($sqlQuery);
            $statement->execute(array(':username' => $user));
    
           if($row = $statement->fetch()){
               $id = $row['user_id'];
               $hashed_password = $row['password'];
               $username = $row['username'];
    
               if(password_verify($password, $hashed_password)){
                   $_SESSION['user_id'] = $id;
                   $_SESSION['username'] = $username;
                   redirectTo('../public/front/home');

               }else{
                   $result = flashMessage("Your credentials are incorrect. Invalid username or password");
               }
           }else{
             $result = flashMessage("Your credentials are incorrect. Invalid username or password");
           }
    
        }else{
            if(count($form_errors) == 1){
                $result = flashMessage("There is one error in the form");
            }else{
                $result = flashMessage("There are " .count($form_errors). " errors in the form");
            }
        }
    }
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
    <div class="loginHead">
        <?php 
            if(isset($result)) echo $result;
            if(!empty($form_errors)) echo show_errors($form_errors); 
        ?>
    </div>
    <div class="login-div">
        <form action method="POST" action="">
            <ul>
                <li>
                <input type="text" name="username" style="width:160px;"placeholder="Enter your username"/><input type="checkbox" class="rem-box" style="padding-top:50px; margin-left:15px;" value="Remember me"> Remember me
                </li>
                <br>
                <li>
                <input type="password" name="password" style="width:160px; padding-top:-25px; margin-top:-45px;" name="password" placeholder="Enter your password"/><button type="submit" name="loginBtn" href="../front/login.php" style="height:25px; width:45px; background-color:#0275d8; color:white; border-radius:5px;">Login</button>
                </li>
                <br>
                <li>
                Not yet a member?<a href="../public/front/register.php" style="background-color:#ffef00; color:#66757f; border-radius:5px;">Register</a>
                </li>
                <br>
                <li>
                <p class="forgotPassword">Forgot username or password?<a href="../../app/public/front/forgot_password.php" style="background-color:#bd162c; color:white; border-radius:5px;">Reset</a></p>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>