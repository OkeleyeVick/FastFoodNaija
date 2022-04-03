<?php

error_reporting(0);

$errors = array('email'=>'', 'username'=>'', 'password'=>'', 'cpassword'=>'');

    if (isset($_POST['submit'])){

        require 'config.php';
    
        $email = htmlspecialchars($_POST['email']);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $cpassword = htmlspecialchars($_POST['cpassword']);
    
        if(empty($email)){
            $errors['email'] = "Email cannot be empty!";
        }
        if(empty($username)){
            $errors['username'] = "Username cannot be empty!";
        }
        if(empty($password)){
            $errors['password'] = "Password cannot be empty!";
        }
        if(empty($cpassword)){
            $errors['cpassword'] = "Password cannot be empty!";
        }else{
            if ($password === $cpassword){
                $sql = "SELECT Email FROM users WHERE Email='$email'";
                $result = mysqli_query($connect, $sql);
                if (mysqli_num_rows($result) > 0){
                    $errors['email'] = "Email exists already, please use a new email";
                }else{
                    $sql = "INSERT INTO users(Email, Username, Password) VALUES('$email', '$username', '$password')";
                    $result = mysqli_query($connect, $sql);
                    echo "<script>alert('New account created successfully')</script>;";
                    $email = "";
                    $username = "";
                    $password = "";
                    $cpassword = ""; 
                }
            }
            else{
                $errors['cpassword'] = "Passwords do not match!";
                
            }
        }
        
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Register</title>
</head>
<body>
<style>
*{
    padding: 0;
    margin: 0;
}
a{
    text-decoration: none;
    color:chocolate;
    font-family: sans-serif;
}
body{
    background-color: rgb(126, 161, 192, .1);
    display: flex;
    justify-content: center;
    align-items: center;
}
.container{
    height: auto;
    width: 350px;
    padding: 15px 25px;
    background-color: antiquewhite;
    border-radius: 12px;
    position: relative;
    align-items: center;
}
.login-section form div{
    width: 100%;
    margin: 23px 0 0 0;
}
.login-section form div div{
    color: red;
    font-family: sans-serif;
    margin: 6px 0 0 10px;
    font-size: 13px;
}
form div label{ 
    padding-left: 10px;
    letter-spacing: 1px;
    font-size: 17px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
input::placeholder{
    color: rgb(153, 153, 153, 0.5);
    font-size: 14px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.login-section form div input:not([name="submit"]){
    font-size: 13px;
    display: block;
    width: 100%;
    height: 40px;
    border-radius: 20px;
    padding: 20px;
    margin-top: 5px;
    border: none;
}
.login-section form div input:focus{
    border: 1px solid chocolate;
    outline:none;
}
div p{
    text-align: center;
    font-size: 16px;
    font-family: Arial;
}
/* div a{
    color:chocolate;
} */
[type="submit"]{
    margin-top: 60px;
    background-color: chocolate;
    color: #fff;
    display: block;
    width: 100%;
    font-size: 16px;
    font-family: sans-serif;
    height: 40px;
    justify-content: center;
    border-radius: 30px;
    border: 1px solid transparent;
}

</style>

    <div class="container">
        <div class="login-section">
            <form action="" method="post">
                <div>
                    <label for="">Email:</label>
                    <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
                    <div class="error"><?php echo $errors['email'] ?></div>
                </div>
                <div>
                    <label for="">Username:</label>
                    <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
                    <div class="error"><?php echo $errors['username'] ?></div>
                </div>
                <div>
                    <label for="">Password:</label>
                    <input type="text" name="password" placeholder="Password" value="<?php echo $password; ?>">
                    <div class="error"><?php echo $errors['password'] ?></div>
                </div>
                <div>
                    <label for="">Confirm Password:</label>
                    <input type="text" name="cpassword" placeholder="Confirm password" value="<?php echo $cpassword; ?>">
                    <div class="error"><?php echo $errors['cpassword'] ?></div>
                </div>
                <div>
                    <input type="submit" name="submit" value="Register">
                </div>
                <div>
                    <p>Already have an account? <a href="login_page.php">Sign In</a></p>
                </div>
            </form>
           
        </div>
    </div>
    
    

</body>
</html>