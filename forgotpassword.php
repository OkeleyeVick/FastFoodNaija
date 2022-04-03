<?php

if(isset($_POST['submit'])){

    require_once 'config.php';

    $email = htmlspecialchars($_POST["email"]);
   

    if (empty($email)){
        echo "Email cannot be empty";
    }
    else{
        $sql = "SELECT Email, Username, Password FROM users WHERE Email = '$email' ";
        $result = mysqli_query($connect, $sql);
        if ($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            echo "<script> alert('Username and Password is " . $row["Username"] . " and " . $row["Password"] . " respectively!');</script>";
        }
        else{
            echo "Your email is not registered with us";
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
    <title>Password Recovery</title>
</head>
<style>
*{
    padding: 0;
    margin: 0;
}
a{
    text-decoration: none;
    font-family: sans-serif;
    color:chocolate;
}
div p{
    text-align: center;
    font-size: 16px;
    font-family: Arial;
}
body{
    background-color: rgb(126, 161, 192, .1);
    display: flex;
    justify-content: center;
    align-items: center 
    
}
.container{
    height: 300px;
    width: 300px;
    padding: 15px 25px;
    background-color: antiquewhite;
    border-radius: 14px;
    position: relative;
}
.login-section form div{
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
    width: 95%;
    height: 20px;
    padding: 10px;
    border-radius: 15px;
    margin-top: 5px;
    border: none;
}
.login-section form div input:focus{
    border: 1px solid chocolate;
    outline:none;
}
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

<body>
    <div class="container">
        <div class="login-section">
            <form action="" method="post">
                <div>
                    <label for="">Enter your email:</label>
                    <input type="text" name="email" placeholder="Email" value="<?php #echo $email; ?>">
                    <!-- <div class="error"><?php echo $errors['email'] ?></div> -->
                </div>
                <div>
                    <input type="submit" name="submit" value="Submit">
                </div>
                <div>
                    <p> Remember Password? <a href="login_page.php">Login Here</a></p>
                </div>
            </form>  
        </div>  
    </div>
    
</body>
</html>