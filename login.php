<?php
    
    error_reporting(0);
    if(isset($_POST['submit'])){

        session_start();
        include_once 'config.php';

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);


        if (empty($email) && empty($password)){
            echo "<script>alert('You have not input all fields')</script>";
        }else{
            if(empty($email) || empty($password)){
                echo "<script>alert('One field is empty')</script>";
            }else{
                $sql = "SELECT * FROM customers WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if (!$row['email'] == $email){
                    echo "<script>alert('Email does not exist with us')</script>";
                }else{
                    if ($row['password'] !== $password){
                        echo "<script>alert('You entered a wrong password')</script>";
                    }else{
                        header('Location: index.php');
                    }
                }  
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
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>FoodExpress Login</title>
</head>
<body>
<style>
    @font-face {
    font-family: Poppins;
    src: url('css/Poppins-Regular.ttf');
    }
    :root{
        --blue: rgba(15,115,238,255);
        --font: Poppins;
    }
    *{
        padding: 0;
        margin: 0;
    }
    body{
        background-image: url("images/background.jpg");
        background-repeat: no-repeat;
        background-position: center center;
        background-size:cover;
        background-attachment: fixed;
        display: flex;
        align-items: center;
        height: 100vh;
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
    .preloader{
        width: 100%;
        height: 100vh;
        position: fixed;
        /* z-index: 3;
        background: url('images/preloader.gif'); */
        background-size: 22%;
        background-position: center center;
        background-repeat: no-repeat;
        /* background-color: whitesmoke; */
    }
    .container-fluid {
        height: 80%;
        border-radius: 10px;
        width: 26%;
        background-color: #f8f9fa;
        padding: 20px 0;
        position: relative;
        left: -25%;
    }
    .container-fluid form {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
    }
    .input-group {
        width: 80%;
        margin: 10px auto;
        position: relative;
        display: flex;
        align-items: center;
        color: #aaa;
        justify-content: center;
    }
    .input-group h3{
        color: var(--blue);
        font-size: 1.6rem;
    }
    .input-group:first-of-type{
        justify-content: left;
    }
    .input-group:focus-within {
        color: #666;
    }
    input {
        border-radius: 5px !important;
        margin: 0;
        width: 100%;
        font-size: 13px;
        border: 1px solid #aaa;
        padding: 10px 25px 10px 30px;
        height: 100%;
        outline: none;
        font-family: var(--font);
        transition: .1s all ease-in;
    }
    input:focus {
        border: 2px solid var(--blue);
    }
    .input-group .fas {
        position: absolute;
        top: 35%;
        right: 2.5%;
        font-size: .8rem;
        font-weight: normal;
    } 
    .input-group .icon-lock_outline{
        font-size: 1.2rem;
        position: absolute;
        position: absolute;
        left: 8px;
        top: 48%;
    }
    .input-group .fas:nth-child(1) {
        position: absolute;
        left: 10px;
        top: 30%;
        font-size: 1rem;
    }
    .input-group .fa-eye {
        right: 10px;
    }
    .input-group .fa-eye-slash {
        right: 10px;
        visibility: hidden;
    }
    .input-group .fa-eye-slash, .input-group .fa-eye{
        cursor: pointer;
    } 
    .input-group .btn{
        border-radius: 5px;
        font-size: .8rem;
        width: 100%;
        font-family: var(--font);
        background-color: var(--blue);
    }
    .input-group .btn:focus{
        box-shadow: none;
    }
    .input-group span{
    font-family: var(--font);
    font-size: .8rem;
    }

    @media (min-width: 768px) and (max-width: 991.98px){
        .container-fluid {
            width: 45%;
            position: relative;
            left: unset;
        }
        .input-group {
            width: 80%;
        }
        .input-group h3 {
            font-size: 1.4rem;
        }
    }

    @media (min-width: 320px) and (max-width: 575.98px){
        .preloader{
            background-size: 50% !important;
        }
        .container-fluid {
            height: 80%;
            width: 90%;
            padding: 1.2rem;
            position: relative;
            left: unset;
        }
        .input-group {
            margin: .7pc auto;
            width: 100%;
        }
        .input-group:first-of-type{
            margin: 0.7pc 0;
        }
        .input-group h3{
            font-size: 1.2rem;
        }
        .input-group .fas {
            top: 35%;
            right: 3%;
        }
        .input-group .fas:nth-child(1) {
            font-size: .9rem;
            top: 35%;
        } 
        .input-group .icon-lock_outline{
            font-size: 1.09rem;
            top: 51%;
        }
    }

</style>
    <div class="preloader">
    </div>
    <div class="container-fluid">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div class="input-group col-8 col-md-10">
                <h3>Login</h3>
            </div>
            <div class="input-group col-8 col-md-10">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Email" name="email" value="<?php echo $email?>" autocomplete="on">
            </div>
            <div class="input-group col-8 col-md-10">
                <i class="icon-lock_outline"></i>
                <input type="password" placeholder="Password" name="password" value="<?php echo $password ?>" id="password">
                <i class="fas fa-eye"></i>
                <i class="fas fa-eye-slash"></i>
            </div>
            <div class="input-group justify-content-center col-12">
                <input class="btn btn-primary" type="submit" name="submit"></input>
            </div>
            <div class="input-group justify-content-center col-8 col-md-10">
                <span class="text-black-50">Forgot password?<a href="#"> Click here</a>/<a href="register.php">Register here</a></span>
            </div>
        </form>
    </div>
    



    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/control.js"></script>
    <script>
    //         $(window).on("load", function(){
    //     $('.preloader').fadeOut();
    // })
    $(document).ready(function(){
        let showEye = $(document.getElementsByClassName('fa-eye'));
        let hideEye = $(document.getElementsByClassName('fa-eye-slash'));
        let password = $(document.getElementById('password'));
        let passwordInput = $(document.querySelector('[type="password"]'));
        
        $(showEye).on('click', function(){
            if($(password).attr('type') === 'password'){
                $(password).attr('type', 'text');
                showEye.css({
                    visibility: 'hidden'
                })
                hideEye.css({
                    visibility: 'visible'
                })
            }else{
                $(password).attr('type', 'password');
            }  
            })
            $(hideEye).on('click', function(){
                if($(password).attr('type') === 'text'){
                    $(password).attr('type', 'password');
                    showEye.css({
                        visibility: 'visible'
                    })
                    hideEye.css({
                        visibility: 'hidden'
                    })
                }else{
                    $(password).attr('type', 'password');
                }  
            })

           
           
            
        
        
    })
    </script>

</body>
</html>
