<?php










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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Tamil:wght@400;500&family=Poppins&display=swap" rel="stylesheet">
    <title>Fast Food Naija</title>
</head>
<body>
    <style>
:root{
    --blue: rgba(15,115,238,255);
    --font1: 'Poppins';
}
*{
    padding: 0;
    margin: 0;
}
/* body{
    background-image: url("../images/background.jpg");
    background-repeat: no-repeat;
    background-position: center center;
    background-size:cover;
    background-attachment: fixed;
} */
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
    color: #000;
}
input {
    border-radius: 5px !important;
    margin: 0;
    width: 100%;
    font-size: 13px;
    border: 1px solid #aaa;
    padding: 10px 20px 10px 26px;
    height: 100%;
    outline: none;
    transition: .1s all ease-in;
}
input:focus {
    border: 2px solid var(--blue);
}
.input-group i {
    position: absolute;
    z-index: 1;
    top: 13px;
    font-size: .8rem;
    cursor: pointer;
} 
.input-group i:nth-child(1) {
    position: absolute;
    left: 10px;
    top: 39%;
}
.input-group .fa-eye {
    right: 10px;
    visibility: hidden;
}
.input-group .fa-eye-slash {
    right: 10px;
    /* visibility: hidden; */
}
.input-group a:not(span a){
    border-radius: 5px;
    font-size: .8rem;
    width: 100%;
    font-family: var(--font1);
    background-color: var(--blue);
}
.input-group span{
   font-family: var(--font1);
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
    .input-group i:nth-child(1) {
        font-size: .7rem;
        top: 36%;
    } 
}

</style>
    <div class="container-fluid">
        <form action="">
            <div class="input-group col-8 col-md-10">
                <h3>Login</h3>
            </div>
            <div class="input-group col-8 col-md-10">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Email" autocomplete="off">
            </div>
            <div class="input-group col-8 col-md-10">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Password">
                <i class="fas fa-eye"></i>
                <i class="fas fa-eye-slash"></i>
            </div>
            <div class="input-group justify-content-center col-12">
                <a class="btn btn-primary" type="submit" href="">Submit</a>
            </div>
            <div class="input-group justify-content-center col-8 col-md-10">
                <span class="text-black-50">Forgot password?<a href="#"> Click here</a></span>
            </div>
        </form>
    </div>
    



    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/control.js"></script>

</body>
</html>