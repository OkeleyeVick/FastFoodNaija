<?php






?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Tamil:wght@400;500&family=Poppins&display=swap" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <style>
        @font-face {
    font-family: 'Open Sans';
    src: url('css/OpenSans-Regular.ttf');
}
:root{
    --blue: rgba(15,115,238,255);
    --font1: 'Poppins';
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
.container-fluid {
    position: relative;
    left: -25%;
    display: flex;
    bottom: -10%;
    justify-content: center;
    height: 82%;
    align-items: center;
    border-radius: 10px;
    width: 26%;
    background-color: #fff;
    padding: 20px;
}
.input-group:nth-child(1) {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    justify-content: left;
}
.input-group:nth-child(1) h4{
    margin: 0 0 0 6%;
    padding: 1rem 0 0 0;
    font-size: 1.4rem;
    color: var(--blue);
}
form{
    margin-top: 2.7pc;
}
.input-group {
    margin: 10px auto;
    position: relative;
    color: #aaa;
    left: 0px;
    justify-content: center;
}
.input-group>.form-control{
    position: relative;
    min-width: 100%;
    font-size: 13;
    margin: 0.1rem 0;
    padding: 0.4rem 1.5rem 0.4rem 0.375rem;
    border-radius: 0.25rem !important;
}
.input-group>.form-control:focus{
    border: 2px solid var(--blue);
    box-shadow: none;
}
.input-group>.form-control::placeholder{
    color: #adb5bd;
}
.submit a {
    text-transform: uppercase;
    position: relative;
    font-size: 13px;
    width: 100%;
    text-align: center;
}
.input-group .fas {
    top: 32%;
    right: 7px;
    font-size: 13;
}
.input-group .fa-eye {
    visibility: hidden;
}
.agreement > div > p{
    font-size: 13px;
    color: #333;
}
.login p {
    font-size: 14px;
}
.login{
    margin-top: 1.2rem;
}
@media (min-width: 320px) and (max-width: 575.98px){
    /* small screens */
    body{
        background: whitesmoke;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    form{
        margin-top: 2.6pc;
    }
        .container-fluid{
        background: #fff;
        border-radius: 10px;
        bottom: unset;
        left: unset;
        width: 90%;
        height: 90%;
    }
    .input-group:nth-child(1) {
        position: absolute;
    }
    .input-group:nth-child(1) h4{
        margin: 0 0 0 7%;
        font-size: 1rem;
    }
    .input-group input{
        font-size: .77rem;
    }
    .input-group .fas{
        top: 33%;
        right: 7px; 
        font-size: .7rem;
    }
    .input-group a, .agreement > div > p{
        font-size: 11px;
    }
    .submit a {
        font-size: 11px;
    }
    .login p {
        font-size: 12px;
    }
    .login{
        margin-top: 1.2rem;
    }
    
}

    </style>
    <div class="container-fluid col-10 col-lg-4">
        <form action="" method="">
            <div class="input-group col-8 col-md-10">
                <h4>Register</h4>
            </div>
            <div class="input-group col-8 col-md-10">
                <input type="text" class="form-control" placeholder="Firstname" aria-label="firstname" aria-describedby="basic-addon1">
            </div>
            <div class="input-group col-8 col-md-10">
                <input type="text" class="form-control" placeholder="Lastname" aria-label="lastname" aria-describedby="basic-addon1">
            </div>
            <div class="input-group col-8 col-md-10">
                <input type="text" class="form-control" placeholder="Username" aria-label="username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group col-8 col-md-10">
                <input type="text" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group col-8 col-md-10">
                <input type="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="basic-addon1">
                <i class="fas fa-eye-slash position-absolute"></i>
                <i class="fas fa-eye position-absolute"></i>
            </div>
            <div class="input-group col-8 col-md-10">
                <input type="password" class="form-control" placeholder="Confirm password" aria-label="password" aria-describedby="basic-addon1">
                <i class="fas fa-eye-slash position-absolute"></i>
                <i class="fas fa-eye position-absolute"></i>
            </div>
            <div class="agreement">
                <div><p>By clicking on Sign up, you agree to Food<span class="text-primary">Express</span>'s <a href="" class="text-primary">terms & conditions</a> and <a href="">privacy policy</a></p> 
                </div>
            </div>
            <div class="submit justify-content-center col-12">
                <a class="btn btn-primary" href="" type="submit">Submit</a>
            </div>
            <div class="login text-center text-black-50">
                <p>Already have an account? &nbsp; <a href="" style="text-decoration: underline;">Login here</a></p>
            </div>
        </form>
        
    </div>









    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/control.js"></script>

</body>
</html>