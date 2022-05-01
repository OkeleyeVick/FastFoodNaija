<?php
    error_reporting(0);
    if(isset($_POST['submit'])){
    
    session_start();

    include_once('config.php');

        $firstname = ucfirst(mysqli_real_escape_string($conn, $_POST['firstname']));
        $lastname = ucfirst(mysqli_real_escape_string($conn, $_POST['lastname']));
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

        if (empty($firstname) && empty($lastname) && empty($username) && empty($email) && empty($password) && empty($cpassword)){
            echo "<script>alert('You have not filled the form!')</script>"; 
        }else{
            if (empty($firstname)){
                echo "<script>alert('firstname cannot be empty')</script>";
            }else{
                if (empty($lastname)){
                    echo "<script>alert('lastname cannot be empty')</script>";
                }else{
                    if (empty($username)){
                        echo "<script>alert('username cannot be empty')</script>";
                    }else{
                        if (empty($password) || empty($cpassword)){
                            echo "<script>alert('Password cannot be empty')</script>";
                        }else{
                            if (empty($email)){
                                echo "<script>alert('email cannot be empty')</script>";
                            }else{
                                $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                                if (!$email){
                                    echo "<script>alert('Please enter correct valid email')</script>";
                                }
                                else{
                                    if ($cpassword == $password){
                                        $sql = "SELECT * FROM customers WHERE email = '$email'";
                                        $result = mysqli_query($conn, $sql);
                                        if($result -> num_rows > 0){
                                            echo "<script>alert('Email has been taken')</script>";
                                        } else{
                                            $sql = "INSERT INTO customers (firstname, lastname,  username, email, password) 
                                                    VALUES ('$firstname','$lastname','$username','$email','$password')";
                                            $result = mysqli_query($conn, $sql);
                                            if ($result){
                                                $_SESSION["user_email"] = $email;
                                                header('Location: index.php');
                                            }
                                        }
                                    }else{
                                        echo "<script>alert('Passwords do not match')</script>";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
       
        
        
       
        // CREATE TABLE customers (
        //     id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        //     firstname VARCHAR(255) NOT NULL, 
        //     lastname VARCHAR(255) NOT NULL, 
        //     username VARCHAR(255) NOT NULL, 
        //     password VARCHAR(255) NOT NULL, 
        //     cpassword VARCHAR(255) NOT NULL
        // )

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>FoodExpress Register</title>
</head>
<body>
    <style>
        @font-face {
            font-family: Poppins;
            src: url('css/Poppins-Regular.ttf');
        }
        :root{
            --blue: rgba(15,115,238,255);
            --font1: Poppins;
        }
        *{
            padding: 0;
            margin: 0;
            font-family: var(--font1);
        }
        body{
            background-image: url("images/fastfoodbg.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-size:cover;
            background-attachment: fixed;
            display: grid;
            height: 100vh;
            align-items: center;
        }
        a{
            text-decoration: none;
        }
        h1, h2, h3, h4, h5, h6{
            font-weight: normal;
        }
        ul, li{
            list-style-type: none;
            list-style: none;
        }
        * p{
            margin: 0;
        }
        .preloader{
            width: 100%;
            height: 100vh;
            position: fixed;
            z-index: unset;
            display: none;
            background: url('images/preloader.gif');
            background-size: 22%;
            background-position: center center;
            background-repeat: no-repeat;
            background-color: whitesmoke;
        }
        .container-fluid {
            position: relative;
            left: -25%;
            bottom: 0;
            height: 85vh;
            border-radius: 10px;
            width: 26%;
            background-color: #fff;
            padding: 20px;
        }
        .input-header h4{
            margin: 0 0 10px 5%;
            padding: 0;
            font-size: 1.2rem;
            color: var(--blue);
        }
        form{
            height: 100%;
            display: grid;
        }
        .input-group {
            margin: 0 auto;
            position: relative;
            color: #aaa;
            margin-bottom: 1px;
        }
        .input-group .error{
            padding: 0;
        }
        .input-group .error > p{
            font-size: 12px;
            margin: 0;
            padding: 0 0 0 5px;
            visibility: hidden;
        }
        .input-group input{
            position: relative;
            min-width: 100%;
            padding: 0.4rem 1.5rem 0.4rem 0.375rem;
            border-radius: 0.19rem !important;
            outline: none;
            font-size: 13px !important;
            color: #666;
            border: 1px solid #bbb;
        }
        .input-group input:focus{
            border: 2px solid var(--blue);
            box-shadow: none;
        }
        .input-group input::placeholder{
            color: #aeb0b1;
            font-size: 13px;
        }
        .input-group .fas {
            font-size: 14px;
            font-weight: lighter;
            position: absolute;
            right: 14px;
            top: 20%;
            padding: 0;
            width: 10px !important;
            display: unset;
            color: #888;
            cursor: pointer;
        }
        .input-group .fa-eye {
            visibility: hidden;
        }
        .input-group .fa-eye:focus {
            color: #222;
        }
        form> div:nth-child(2){
            margin-top: -5pc;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: space-evenly;
        }
        .agreement > div > p{
            font-size: 12px;
            color: #333;
        }
        .submit .btn {
            text-transform: uppercase;
            position: relative;
            font-size: 13px;
            width: 100%;
            text-align: center;
        }
        .submit .btn:focus{
            box-shadow: none;
        }
        .login p {
            font-size: 14px;
        }
        @media (min-width: 320px) and (max-width: 575.98px){
            /* small screens */
            body{
                background: whitesmoke;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .preloader{
                background-size: 50% !important;
            }
            .container-fluid{
                background: #fff;
                border-radius: 10px;
                bottom: unset;
                left: unset;
                width: 90%;
                height: 90%;
                padding: 14px;
            }
            .input-header h4{
                margin: 0 0 10px 7%;
                font-size: 1rem;
            }
            .input-group input{
                font-size: .77rem;
            }
            .input-group input::placeholder{
                font-size: 11px;
            }
            .input-group .fas{
                top: 23%;
                right: 12px;
                font-size: .8rem;
            }
            .input-group a, .agreement > div > p, .submit .btn{
                font-size: 11px;
            }
            form > div:nth-child(2) {
                margin-top: -4pc;
            }
            .login p {
                font-size: 12px;
            }
            
    }

    </style>
    <div class="preloader">
    </div>
    <div class="container-fluid col-10 col-lg-4">
        <form action="register.php  " method="POST">
            <div>
                <div class="input-header text-start row col-8 col-md-10">
                    <h4>Register</h4>
                </div>
                <div class="input-group row col-8 col-md-10">
                    <input type="text" class="" placeholder="Firstname" name="firstname" value="<?php echo $firstname?>" autocomplete="off">
                    <div class="error col-12 row text-start">
                        <p class="text-danger">Hello</p>
                    </div>
                </div>
                <div class="input-group row col-8 col-md-10">
                    <input type="text" class="" placeholder="Lastname" name="lastname" value="<?php echo $lastname?>" autocomplete="off">
                    <div class="error col-12 row text-start">
                        <p class="text-danger">Hello</p>
                    </div>
                </div>
                <div class="input-group row col-8 col-md-10">
                    <input type="text" class="" placeholder="Email" name="email" value="<?php echo $email?>" autocomplete="off">
                    <div class="error col-12 row text-start">
                        <p class="text-danger">Hello</p>
                    </div>
                </div>
                <div class="input-group row col-8 col-md-10">
                    <input type="text" class="" placeholder="Username" name="username" value="<?php echo $username?>" autocomplete="off">
                    <div class="error col-12 row text-start">
                        <p class="text-danger">Hello</p>
                    </div>
                </div>
                <div class="input-group row col-8 col-md-10">
                    <input type="password" class="password" placeholder="Password" name="password" value="<?= $password?>" autocomplete="off">
                    <i class="fas fa-eye-slash position-absolute"></i>
                    <i class="fas fa-eye position-absolute"></i>
                    <div class="error col-12 row text-start">
                        <p class="text-danger">Hello</p>
                    </div>
                </div>
                <div class="input-group row col-8 col-md-10">
                    <input type="password" class="password" placeholder="Confirm password" name="cpassword" value="<?php echo $cpassword?>" autocomplete="off">
                    <i class="fas fa-eye-slash position-absolute"></i>
                    <i class="fas fa-eye position-absolute"></i>
                    <div class="error col-12 row text-start">
                        <p class="text-danger">Hello</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="agreement">
                    <div><p>By clicking on Sign up, you agree to Food<span class="text-primary">Express</span>'s <a href="" class="text-primary">terms & conditions</a> and <a href="">privacy policy</a></p> 
                    </div>
                </div>
                <div class="submit justify-content-center col-12">
                    <button class="btn btn-primary" href="" type="submit" name="submit">Register</button>
                </div>
                <div class="login text-center text-black-50">
                    <p>Already have an account? &nbsp; <a href="" style="text-decoration: underline;">Login here</a></p>
                </div>
            </div>
        </form>
        
    </div>









    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/control.js"></script>
    <script>
        $(window).on("load", function(){
        $('.preloader').fadeOut();
    })

    $(document).ready(function(){
        const showEye = $(document.getElementsByClassName("fa-eye"));
        const hideEye = $(document.getElementsByClassName("fa-eye-slash"));
        const getPassword = $(document.querySelector("[type='password'"));

        hideEye.on('click', function(){
            if(getPassword.attr('type') === 'password'){
                getPassword.attr('type', 'text');
                hideEye.css({
                    visibility: 'hidden'
                });
                showEye.css({
                    visibility: 'visible'
                })
            }else{
                getPasword.attr('type', 'password');
            }
        })
        showEye.on('click', function(){
            if(getPassword.attr('type') === 'text'){
                getPassword.attr('type', 'password');
                hideEye.css({
                    visibility: 'visible'
                });
                showEye.css({
                    visibility: 'hidden'
                })
            }else{
                getPassword.attr('type', 'password');
            }

        })

    })


    </script> 

</body>
</html>