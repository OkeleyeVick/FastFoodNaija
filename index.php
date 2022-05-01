<?php
 
    include_once('config.php');

    session_start();
    if (!isset($_SESSION['user_email'])){
        echo "<script>alert('You are a guest')</script>";
    }else{
        echo "<script>alert('You are a user who has successfully logged in')</script>";

    }
    if (isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        if (empty($email)){
            echo "<script>alert('Email cannot be empty')</script>";
        }else{
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
            if (!$email){
                echo "<script>alert('This is not an email type')</script>";
            }else{
                $sql = "SELECT email FROM `user-email` WHERE email = '$email';";
                $result = mysqli_query($conn, $sql);
                if($result -> num_rows > 0){
                    echo "<script>alert('Email already exists')</script>";
                }else{
                    $sql = "INSERT INTO `user-email`(email) VALUE('$email')";
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        echo "<script>alert('Email successfully subscribed')</script>";
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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>FoodExpress</title>
</head>
<body>

<style>
    @font-face {
 font-family: Poppins;
 src:url('../css/Poppins-Regular.ttf');
}
    @font-face {
 font-family: Poppins;
 src:url('css/Poppins-Regular.ttf');
}
:root{
    --blue: rgba(15,115,238,255);
    --lightgrey1: #2a2a2a;
    --dark: #010101;
    --lightgrey2: #181818;
    --font1: Poppins;
    --white: #fff;
}
*{
    padding: 0;
    margin: 0;
    font-family: var(--font1);
}
a{
    text-decoration: none !important;
}
h1, h2, h3, h4, h5, h6{
    font-weight: normal;
}
ul, li{
    list-style-type: none;
    list-style: none;
}
body{
    position: relative;
    overflow-x: hidden;
    background-color: var(--lightgrey2) !important;
}

.clip-path{
    top: -7%;
    right: -22%;
    width: 60vw;
    position: absolute;
    background-color: var(--blue);
    height: 130vh;
    z-index: -1;
    border-radius: 50%;;
}
.body .side-images-left,
.body .side-images-right{
    width: auto;
}
.body .side-images-left{
    width: auto;
    top: 46pc;
    z-index: 1;
}
.body .side-images-left > div > div:nth-child(1){
    padding: 0;
}
.body .side-images-left > div > div:nth-child(1) img{
    width: 175px;
}
.body .side-images-left > div > div:nth-child(2){
    padding: 1rem;
    border-radius: 0 14px 14px 0;
    display: block;
    text-align: center;
}
.body .side-images-left > div{
    align-items: stretch;
}
.body .side-images-right{
    width: auto;
    top: 72.5pc;
    z-index: 1;
    right: 0;
}
.body .side-images-right > div > div:nth-child(2){
    padding: 0;
}
.body .side-images-right > div > div:nth-child(2) img{
    width: 175px;
}
.body .side-images-right > div > div:nth-child(1){
    padding: 1rem;
    border-radius: 14px 0 0 14px;
    display: block;
    text-align: center;
}
.body .side-images-right > div{
    align-items: stretch;
    justify-content: flex-end;
    margin: 0 auto;
}

.body .about *, .body .promo * , .body .description *, .body .menu *, .body .footer *{
    color: var(--white);
}
.container-fluid{
    top: -10px;
    z-index: 1;
    /* background-color: #fff; */
    padding: 0 10px;
}
.container-fluid .search-bar{
    width: 500px;
    display: flex;
    align-items: stretch;
}
.container-fluid .search-bar i{
    font-size: 13px;
    color: #aaa;
    top: 33%;
    left: 2%;
}
.container-fluid .search-bar a{
    border-radius: 2px 5px 5px 2px;
    font-size: 14px;
    margin-left: 3.5px;
}
.container-fluid .search-bar a:focus{
    box-shadow: none;
}
.container-fluid .search-bar:focus-within i,
.container-fluid .search-bar:focus-within input{
   color: #333;
}
.container-fluid input{
    font-size: 13px;
    color: #aaa;
    width: 100%;
    padding: 5px 0 3px 30px;
    border-radius:  5px 2px 2px 5px;
    outline: none;
    border: 1px solid white;
    transition: .2s ease-in;
}
.container-fluid input:focus{
    border: 2px solid var(--blue);
}
.container-fluid .logo1 ul{
    width: 350px;
    display: flex;
    justify-content: space-evenly;
    margin: 0 20px 0 0;
    padding: 0;
}
.container-fluid .logo1 ul li{
    margin: 0;
    position: relative;
    display: flex;
    align-items: center;
}
.container-fluid .logo1 ul i{
    font-size: 16px;
    color: #fff;
    margin-top: 5px;
}
.container-fluid .logo1 ul li a{
    text-decoration: none;
    font-size: 14px;
    margin: 4px 6px 0 6px;
    color: #fff;
}
.container-fluid .logo1 ul li ul{
    text-align: center;
    width: 110px;
    position: absolute;
    top: 105% ;
    background: var(--white);
    left: -20px;
    display: none;
    z-index: 1;
    padding: 3px 5px 3px;
}
.container-fluid .logo1 ul li:hover ul{
    display: block;
}
.container-fluid .logo1 ul li ul li{
    float: left;
    display: block;
    width: 100%;  
    line-height: 1.6rem;
    transition: .1s ease-in-out;
}
.container-fluid .logo1 ul li ul li:hover{
    background:rgba(13, 107, 221, .8);
}
.container-fluid .logo1 ul li ul li:hover a{
    color: var(--white);
}
.container-fluid .logo1 ul li ul li a{
    font-size: 13px;  
    color: var(--blue);
}

/* styles for body section */
.body .container > div > div > img{
    width: 70%;
}
.body .description * p{
    font-size: .8rem;
}
.body .description > div{
    margin: 10px 0;
    align-items: baseline;
}
.body .description ul{
    padding: 0;
    margin: 0;
}
.body .description ul li{
    display: inline-block;
    margin: 30px 30px 0 0;
    text-align: center;
}
.body .description ul li i{
    font-size: 1.8rem;
}
.body .description div p a{
    background: var(--blue);
    color: var(--white);
    font-family: var(--font1);
    border-radius: 0.2rem;
    padding: 0.4rem 1.3rem;
    font-size: .9rem;
}
.body .description ul li h6{
    margin-top: 2rem;
    font-size: .8rem;
}
.body .appetizer{
    justify-content: space-around;
    margin: 100px 0;
}
.body .appetizer .card-holder{
    padding: 1rem;
    border-radius: .8rem;
}
.body .appetizer .card-holder .image{
    overflow: hidden;
    height: auto;
}
.body .appetizer .card-holder .image img {
    position: absolute;
    width: 150px;
}
.body .appetizer .card-holder:nth-child(1){
    background-color: green;
}
.body .appetizer .card-holder:nth-child(2){
    background-color: #ffbb03;
}
.body .appetizer .card-holder:nth-child(3){
    background-color: red;
}
.body .appetizer .card-holder:nth-child(1) .image img {
    left: -100px;
    bottom: -50px;
    width: 290px;
}
.body .appetizer .card-holder:nth-child(2) .image img {
    left: -50px;
    bottom: -20px;
    width: 180px;
}
.body .appetizer .card-holder:nth-child(3) .image img {
    left: -50px;
    bottom: -40px;
    width: 200px;
}
.body .appetizer .card-holder .card-description *{
    color: #fff;    
}
.body .appetizer .card-holder .card-description h3{
    font-family: unset;
    font-weight: bolder;
    font-size: 120%;
    margin: 0;
}
.body .appetizer .card-holder .card-description p{
    font-family: var(--font1);
    font-size: 11px;
    margin: 5px 0 0 0;
}

.body hr{
    color: grey;
}

.body .promo{
    justify-content: space-evenly;
    align-items: center;
    margin: 100px 0;
}
.body .promo .card-holder{
    background: var(--lightgrey1);
    padding: 1rem;
    border-radius: .8rem;
}
.body .promo .card-holder .card-description{
    text-align: left;
}
.body .promo .card-holder .card-description p:first-of-type{
    font-family: var(--font1);
    margin: 0 0 1.1rem 0;
}
.body .promo .card-holder .card-description p:last-of-type{
    font-size: .7rem;
    padding-top: 4px;
    font-family: var(--font1);
}
.body .promo .card-holder .card-description h3{
    margin: 0;
    font-family: unset;
    font-weight: bolder;
    font-size: 120%;
}
.body .promo .card-holder .card-description a{
    font-size: .8rem;
    background-color: var(--blue);
    padding: 0.375rem .75rem;
    color: var(--white);
    border-radius: .3rem;
}
.body .promo .card-holder .image img{
    width: 100px;
}
.body .promo .card-holder .image{
    margin: 20 auto 0 auto;
}
.body .promo .card-holder:first-child .image img{
    width: 180px;
    position: absolute;
    transform: translate(-20%, 1%);
}
.body .menu{
    padding: 70px 0;
    margin: 0 auto;
}
.body .menu > div:nth-child(2) > div {
    justify-content: right !important;
}
.body .menu > div > div > li {
    background-color: var(--lightgrey1);
    padding: 0.375rem .75rem;
    border-radius: 5px;
    text-align: center;
    margin: 0 10px;
    cursor: pointer;
    font-size: .9rem;
}                                      
.body .menu > div > div > li.active {
    background-color: var(--blue);
}                  
.body .menu > div > div > li:hover {
    background-color: var(--blue);
}  
.body .menu .foods > div > div:nth-child(1){
    text-align: center;
    margin-bottom: 1.1rem;
}
.body .menu .foods > div > div:nth-child(1) [src="images/coke.png"]{
    width: 160px;
    padding: 0rem 2rem;
}
.body .menu .foods > div > div:nth-child(1) [src="images/burger4.png"]{
    width: 150px;
    padding: 1.1rem 1rem;
}
.body .menu .foods > div > div:nth-child(1) [src="images/fries2.png"]{
    width: 180px;
    padding: 1.1rem 2rem;
}
.body .menu .foods > div > div:nth-child(1) img{
    width: 140px;
    border-radius: 0.8rem;
    background-color: var(--lightgrey1);
    padding: 1.2rem 2rem;
}
.body .menu .foods > div > div:nth-child(2) s{
    color: grey;
    font-size: 12px;
}
.body .menu .foods > div > div:nth-child(2) h4{
    font-family: var(--font1);
    letter-spacing: 1;
    font-weight: bold;
    font-size: 1rem;
    text-transform: uppercase;
}
.body .menu .foods > div > div:nth-child(2) p{
    font-family: var(--font1);
    font-size: .8rem;
    margin: 0 auto;
}
.body .menu .foods > div > div:nth-child(2) > div > div:nth-child(2) a{
    font-family: var(--font1);
    font-size: .8rem;
    border-radius: 5px;
    color: var(--white);
    background-color: var(--blue);
    padding: .375rem .75rem;
}
.body .menu .foods > div > div:nth-child(2) > div > div:nth-child(2) a:hover{
    background-color: rgb(13, 107, 221);
}


.body .about{
    padding: 4pc 0;
}
.body .about > .manager-comment{
    align-items: center;
}
.body .about > .manager-comment > .position-relative{
    overflow: hidden;
    height: 250px;
} 
.body .about > div > div > img{
    width: 270px;
    z-index: -1;
    position: absolute;
    top: 0;
    left: 0; 
}


.body .pre-footer .brand a img{
    width: 150px;
}
.body .container-fluid{
    background-color: rgb(16, 16, 16);
    padding: 6pc 0;
}
.body .pre-footer{
    background-color: var(--lightgrey1);
    margin: 0;
    padding: 1pc 7pc;
}
.body .pre-footer h5{
    font-size: .9rem;
    font-weight: 600;
    word-spacing: 1px;
    letter-spacing: .5px;
    color: var(--white);
}
.body .pre-footer p{
    font-size: .7rem;
    color: rgb(201, 200, 200);
}
.body .pre-footer .newsletter form{
    position: relative;
    display: flex;
    align-items: stretch;
    width: 100%;
}
.body .pre-footer .newsletter form > i{
    position: absolute;
    color: #6c757d;
    top: 49%;
    left: 6px;
    font-size: 1.1rem;
}
.body .pre-footer .newsletter form input{
    font-size: .9rem;
    padding: .5rem .5rem .5rem 1.7rem;
    width: 125%;
    color: initial;
    outline: none;
    border: 1px solid white;
    border-radius: 4px 0 0 4px;
    transition: .2s ease-in-out;
}
.body .pre-footer .newsletter form input:focus{
    border: 2px solid var(--blue);
}
.body .pre-footer .newsletter form button{
    display: grid;
    color: white;
    align-items: center;
    border-radius: 4px;
    position: relative;
    margin-left: -5px;
}
.body .pre-footer .newsletter form input:focus-within{
    color:#343a40;
}
.body .footer{
    margin: 100px 0;
}

.body .footer .container > div > div:nth-child(1)
.body .footer .container > div > div:nth-child(2){
    display: none;
}
.body .footer .container > div > div:nth-child(3) div{
    width: 100%;
}
.body .footer .container > div > div:nth-child(3) div li{
    display: inline-block;
    position: relative;
    width: 13%;
}
.body .footer .container > div > div:nth-child(3) div li span{
    font-size: 10px;
    position: absolute;
    display: none;
    bottom: -1.5rem;
    left: -0.6rem;
}
.body .footer .container > div > div * a, .body .footer .container > div > div * i{
    transition: .1s ease-out;
}
.body .footer .container > div > div:nth-child(3) div li:hover span{
    display: block;
    color: var(--blue);
}
.body .footer .container > div > div {
    padding-left: 6%;
}
.body .footer .container > div > div > div h4{
    font-size: 1rem;
    font-weight: 600;
    text-transform: uppercase;
    color: #ffff;
}
.body .footer .container > div > div:not(.body .footer .container > div > div:nth-child(3)) li a{
    font-size: .8rem;
}
.body .footer .container > div > div:nth-child(3) div li:hover i, 
.body .footer .container > div > div:not(.body .footer .container > div > div:nth-child(3)) li a:hover{
    color: var(--blue);
}
.body .footer .container > div > div > h4{
    font-size: .9rem;
    text-transform: uppercase;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 600;
    letter-spacing: .2px;
}
.body .footer .container > div > div > div{
    margin-top: 1.5pc;
}
.rights{
    margin: 0 auto;
    text-align: center;
    padding: 0;
}
.rights h4{
    color: grey;
    margin: 0;
    font-size: 14px;
}



/* styles for extra large screens above 1199px eg laptop*/
@media (min-width: 1200px){
    .body{
        position: relative;      
    }
}


/* styles for large screens above 991px eg desktops*/
@media (min-width: 992px) and (max-width: 1199.98px){
    .clip-path{
        display: none;
    }
}
/* styles for medium screens above 767px eg tablets*/
@media (min-width: 768px) and (max-width: 991.98px){
    .clip-path{
        display: none;
    }
}
/* styles for small screens above 576px eg phone*/
@media (min-width: 576px) and (max-width: 767.98px){
    .clip-path{
        display: none;
    }
}
/* styles for extra small screens above 320px eg smaller phones*/
@media (min-width: 320px) and (max-width: 575.98px){
    h1, h2, h3, h4, h5, h6, p, s, a{
        font-family: var(--font1) !important;
    }
    h1, h2, h3, h4{
        font-size: 14px !important;
    }
    h5{
        font-size: 12px !important;
    }
    p,a{
        font-size: 11px;
    }
    .container-fluid{
        padding: 0 !important;
        height: auto;
    }
    .clip-path{
        display: none;
    }
    .body .side-images-left{
        top: 27.5%;
    }
    .brand a img{
        width: 60%;
    }
    .body .side-images-left > div > div:nth-child(1) img {
        width: 125px;
    }
    .body .side-images-left{
        top: 32.4%;
    }
     .body .side-images-right{
        top: 19% !important;
        right: 0;
    }
    .body .side-images-right > div > div:nth-child(2) img {
        width: 160px;
    }
    .container-fluid * i{
        color: var(--white);
    }
    .container-fluid  button,  .container-fluid .brand, .container-fluid .logos{
        width: 32%;
    }
    .container-fluid button{
        justify-content: flex-start;
    }
    .container-fluid .brand{
        justify-content: center;
    }
    .container-fluid .logos{
        justify-content: flex-end;
        padding-right: 10px;
    }
    .container-fluid .logo1{
        display: none;
    }
    .container-fluid .search-bar{
        display: none;
    }
    .container-fluid .d-flex .logos{
        display: block;
    }
    .container-fluid .logos i{
        font-size: 18px;
    }
    .container-fluid .logos div{
        margin: 0 7px;
    }
    .container-fluid button i{
        font-size: 24px;
    }
    .container-fluid button:focus, 
    .offcanvas .offcanvas-header button:focus, .container-fluid .searchBar a:focus{
        box-shadow: none;
    }
    .container-fluid .searchBar{
        width: 90%;
        margin: 0 auto;
        top: -9px;
    }
    .container-fluid .searchBar .position-absolute{
        font-size: 18px;
        color: #999;
        top: 15px;
        left: 9px;
    }
    .container-fluid .searchBar input {
        background: #f6f7f9;
        padding: 5px 0 5px 30px;
        color: #ccc;
        transition: .2s ease-in;
        border-radius: 3px;
    }
    .container-fluid .searchBar:focus-within i,
    .container-fluid .searchBar:focus-within input{
        color: #333;
    }
    .container-fluid .searchBar:focus-within a i{
        color: #fff;
    }
    .offcanvas.show {
        width: 85%;
    }
    .offcanvas-header{
        border-bottom: 1px solid #ccc;
    }
    .offcanvas-header .offcanvas-title{
        display: inherit;
        font-size: 1.25rem !important;
        font-weight: 600;
    }
    .offcanvas-body {
        position: relative;
    }
    .offcanvas .navigation {
        position: absolute;
        width: 90%;
        display: flex;
        flex-direction: column;
        top: 7%;
        left: 0;
        padding-left: 30px;
    }
    .offcanvas .navigation div{
        line-height: 2.6rem;
        align-items: center;
        display: flex;
    }
    .offcanvas .navigation div:nth-child(7), .offcanvas .navigation div:nth-child(8){
        justify-content: center;
    }
    .offcanvas .navigation div i{
        font-size: 17px;
        color: #444;
    }
    .offcanvas .navigation div li a{
        margin-left: 1.2rem;
        font-size: 12px;
    }
    .offcanvas .navigation div:nth-child(6) {
        border-bottom: 1px solid #ccc;
    }
    .offcanvas .navigation div:nth-child(7),
    .offcanvas .navigation div:nth-child(8){
        margin-top: 20px;
    }
    .offcanvas .navigation div:nth-child(7) li,
    .offcanvas .navigation div:nth-child(8) li{
        width: 100%;
        text-align: center;
        border-radius: 5px;
        font-size: .9rem;
    }
    .offcanvas .navigation div:nth-child(7) li{
        background-color: var(--blue);
    }
    .offcanvas .navigation div:nth-child(7) li a{
        color: #fff;
    }
    .offcanvas .navigation div:nth-child(7) li a,
    .offcanvas .navigation div:nth-child(8) li a{
        margin: 0;
    }
    .offcanvas .navigation div:nth-child(8) li{
        border: 2px solid #ccc;
    }
    .offcanvas .navigation div:nth-child(8) li:focus{
        background-color: var(--blue);
    }
    .offcanvas .offcanvas-header button{
        background: none;
        opacity: 1;
        transform: rotateZ(-90deg);
        font-size: 24px;
    }

    /* styles for body */

    .body * i {
        font-size: 16px;
    }
    .body .description > div,.body .container .burger{
        text-align: center;
    }
    .body .burger img {
        width: 150px;
    }
    .body .appetizer {
        margin: 50px auto;
    }
    .body .appetizer .card-holder{
        margin: .7rem 0;
        padding: .8rem;
        border-radius: .8rem;
    }
    .body .appetizer .card-holder:nth-child(1) .image img {
        left: -60px;
        bottom: -30px;
        width: 190px;
    }
    .body .appetizer .card-holder:nth-child(2) .image img {
        width: 140px;
    }
    .body .appetizer .card-holder:nth-child(3) .image img {
        left: -25px;
        bottom: -40px;
        width: 150px;
    }

    .body .appetizer .card-holder .card-description p {
        -webkit-line-clamp: 5;
        overflow: hidden;
        /* text-overflow: ellipsis; */
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }

    .body .promo .card-holder{
        margin: 20px 0;
    }
    .body .promo .card-holder .card-description p:first-of-type {
        margin: 0 0 0.5rem 0;
        font-size: 13px !important;
    }
    .body .promo .card-holder .card-description h3 {
        font-size: 14px;
    }
    .body .promo .card-holder:first-child .image img {
        width: 150px;
        transform: translate(-20%, 10%);
    }

    .body .promo .card-holder .image img {
        width: 90px;
        transform: translate(0px, 10px);
    }
    .body .menu{
        padding: 1pc 0;
        display: block !important;
        margin-top: 6pc;
    }
    .body .menu > div:nth-child(2) > div {
        justify-content: space-evenly !important;
        margin: 0 auto;
    }
    .body .menu .foods > div > div:nth-child(2) s {
        font-size: 10;
    }
    .body .menu > div > div > li {
        padding: 0.375rem 1rem;
        width: auto;
        font-size: 10px;
        margin: 0;
    }
    .body .foods, .body .beverages, .body .snacks{
        margin: 10px 0;
    }
    .body .menu .foods > div > div:nth-child(1) img {
        width: 100px;
    }
    .body .menu .foods > div > div:nth-child(1) [src="images/fries2.png"] {
    width: 120px;
    }
    .body .menu .foods > div > div:nth-child(1) [src="images/fries2.png"] {
        width: 105px;
        padding: 1.1rem 1.5rem;
    }
    .body .menu .foods > div > div:nth-child(2) h4 {
        margin: 0;
    }
    .body .menu .foods > div > div:nth-child(1) [src="images/burger4.png"] {
        width: 80px;
        padding: 0.7rem 0rem;
    }
    .body .menu .foods > div > div:nth-child(1) [src="images/coke.png"] {
        width: 100px;
        padding: 0rem 1rem;
    }
    .body .menu .foods > div > div:nth-child(2) s {
        font-size: 10;
    }
    .body .menu .foods > div > div:nth-child(2) > div > div:nth-child(2) a {
        font-size: .6rem !important;
    }
    
    .body .description div p a {
        justify-content: center;
        margin: 0 auto;
        display: flex;
        padding: 0.375rem 0.75em;
        text-align: center;
        align-items: center;
        width: 50%;
    }
    .body .description ul {
        margin: 30px 0;
    }
    .body .description ul li {
        margin: 0 10px;
    }
    .body .description ul li i {
        font-size: 1rem;
    }
    .body .description ul li h6 {
        margin-top: 1rem;
        font-size: .6rem;
    }
    .body .description > div {
        margin: 5px 0;
    }
    .body .about{
        padding: 1pc 0;
    }
    .body .about > div > div > img {
        width: 120px;
        position: absolute;
        top: 25%;
        left: 0;
    }
    .body .footer{
        margin: 0pc 0 1pc 0;
        background-color: #161515;
    }
    .body .footer .container > div > div {
        padding-left: 0%;
        margin-top: 5%;
    }
    .body .footer .container > div > div:nth-child(3) div li {
        width: 9%;
    }
    .footer .container > div .brand a img{
        width: 120px;
    }
    .footer .container > div .newsletter form{
        display: flex;
        align-items: stretch;
        position: relative;
        width: 80%;
    }
    .footer .container > div .newsletter form a {
        text-align: center;
        padding: 0.375rem 0.75rem;
        display: grid;
        align-items: center;
        border-radius: 2px;
    }
    .footer .container > div .newsletter form a i{
        font-size: 16px;
    }
    .footer .container > div .newsletter input{
        font-size: 12px;
        padding: .37rem .1rem .37rem 1.4rem;
        width: 100%;
        outline: none;
        border: 1px solid #fff;
        border-radius: 2px;
        color: #000;
    }
    .footer .container > div .newsletter form i:not(.newsletter form a i){
        font-size: 14px;
        position: absolute;
        color: grey;
        top: 50%;
        left: 2%;
    }
    .body .footer .container > div > div > div{
        margin-top: .5pc;
    }
    .body .footer p{
        margin: 0;
    }















}
    </style>
    <div class="clip-path">
    </div>
    <!-- <div class="preloader">
    </div> -->
        <!-- Header starts -->

        <div class="container-fluid d-block d-lg-flex justify-content-between align-items-center ">
            <button class="btn d-inline-flex d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"aria-controls="offcanvasWithBothOptions"><i class="icon-menu"></i>
            </button>
            <div class="brand d-inline-flex">
                <a href=""><img src="images/logo.png" width="85px" alt=""></a>
            </div>
            <div class="search-bar position-relative">
                <i class="fas fa-search position-absolute"></i>
                <input type="text" autocomplete="on" placeholder="Search for products and categories">
                <a class="btn btn-primary" href="">Search</a>
            </div>
            <div class="logo1">
                <ul>
                    <li>
                        <i class="icon-shopping_cart"></i>
                        <a href="">Cart</a>
                        <i class="icon-keyboard_arrow_down"></i>
                        <ul>
                            <li><a href="">Cart list</a></li>
                            <li><a href="">Saved Items</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="icon-question-circle-o"></i>
                        <a href="">Help</a>
                        <i class="icon-keyboard_arrow_down"></i>
                        <ul>
                            <li><a href="">FAQs</a></li>
                            <li><a href="">Support</a></li>
                            <li><a href="">Privacy</a></li>
                            <li><a href="">Terms</a></li>
                            <li><a href="">Condtions</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="icon-user-o"></i>
                        <a href="">Account</a>
                        <i class="icon-keyboard_arrow_down"></i>
                        <ul>
                            <li><a href="">Login</a></li>
                            <li><a href="">Sign Up</a></li>
                            <li><a href="">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="logos d-inline-flex d-lg-none">
                <div>
                    <i class="icon-shopping_cart"></i>
                </div>
                <div>
                    <i class="icon-user-o"></i>
                </div>
            </div>
            <div class="searchBar d-flex align-items-stretch d-lg-none position-relative">
                <i class="icon-search2 position-absolute"></i>
                <input type="text" autocomplete="on" placeholder="Search...">
                <a href="" class="btn" style="transform: rotateZ(-180deg); font-size: 20px; background-color: rgba(15,115,238,255); display: flex;align-items: center;color:white; border-radius:3x; margin-left: 5px"><i class="icon-keyboard_backspace"></i></a>
            </div>
        </div>
        
        
        <!-- Header ends -->

        <div class="offcanvas offcanvas-start d-lg-none" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" style="font-size: 1.5rem;" id="offcanvasWithBothOptionsLabel">Food <div style="color: rgba(15,115,238,255);">Express</div></h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon-vertical_align_top"></i></button>
            </div>
            <div class="offcanvas-body">
                <div class="navigation">
                    <div>
                        <i class="icon-person_outline"></i>
                        <li><a href="">Account</a></li>
                    </div>
                    <div>
                        <i class="icon-notifications_none"></i>
                        <li><a href="">Notification</a></li>
                    </div>
                    <div>
                        <i class="icon-money"></i>
                        <li><a href="">Make money</a></li>
                    </div>
                    <div>
                        <i class="icon-handshake-o"></i>
                        <li><a href="">Partner with us</a></li>
                    </div>
                    <div>
                        <i class="icon-help_outline"></i>
                        <li><a href="">Help</a></li>
                    </div>
                    <div>
                        <i class="icon-build"></i>
                        <li><a href="">Settings</a></li>
                    </div>
                    <div>
                        <li><a href="">Sign up</a></li>
                    </div>
                    <div>
                        <li><a href="">Log in</a></li>
                    </div>
            </div>
            </div>
        </div>

        <!-- Body starts -->
        <style>
            .preloader{
                width: 100%;
                height: 100vh;
                position: fixed;
                z-index: 3;
                background: url('images/preloader.gif');
                background-size: 22%;
                background-position: center center;
                background-repeat: no-repeat;
                background-color: whitesmoke;
            }
            @media (min-width: 320px) and (max-width: 575.98px){
            /* small screens */
            .preloader{
                background-size: 50% !important;
            }
            .body .side-images-left > div > div:nth-child(1) img {
                width: 125px !important;
            }
            .footer .container > div .newsletter form a i{
                font-size: 16px !important;
            }
        }
        </style>
        <div class="body position-relative">
            <div class="side-images-left position-absolute">
                <div class="col-11 row">
                    <div class="col-6"><img src="images/shared-pizza.jpg" alt=""></div>
                    <div class="note col-5" style="background-color: #ffbb03;">
                        <p>Get 20% OFF OUR SALES </p>
                        <i class="fas fa-hamburger"></i>
                    </div>
                </div>
            </div>
            <div class="side-images-right position-absolute">
                <div class="col-12 col-md-11 row">
                    <div class="note col-4 col-md-5" style="background-color: #ffbb03;">
                        <p>Get 20% OFF OUR SALES </p>
                        <i class="fas fa-hamburger"></i>
                    </div>
                    <div class="col-5"><img src="images/fries1.jpg" alt=""></div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="burger col-md-5">
                        <img src="images/food2.png" class="img-fluid" alt="">
                    </div>
                    <div class="description d-block col-md-6">
                        <div>
                            <h2>THE FASTEST FOOD DELIVERY SERVICE YOU CAN COUNT ON</h2>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat obcaecati aliquam qui minus adipisci. Autem accusantium repellendus voluptates sapiente nemo.</p>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    <i class="icon-local_bar"></i>
                                    <h6>Delicious</h6>
                                </li>
                                <li>
                                    <i class="icon-restaurant_menu"></i>
                                    <h6>Delicious</h6>
                                </li>
                                <li>
                                    <i class="icon-truck"></i>
                                    <h6>Delicious</h6>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p> Start your order 
                                <a href="">HERE</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="appetizer row col-md-12">
                    <div class="col-md-3 row col-10 card-holder">
                        <div class="image col-6 position-relative"><img src="images/burger4.png" alt=""></div>
                        <div class="card-description col-6">
                            <h3>FOOD</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis esse maiores excepturi dolorem!</p>
                        </div>
                    </div>
                    <div class="col-md-3 row col-10 card-holder">
                        <div class="image col-6 position-relative"><img src="images/fries.png" alt=""></div>
                        <div class="card-description col-6">
                            <h3>SNACKS</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos reiciendis dignissimos libero accusamus.</p>
                        </div>
                    </div>
                    <div class="col-md-3 row col-10 card-holder">
                        <div class="image col-6 position-relative"><img src="images/coke.png" alt=""></div>
                        <div class="card-description col-6">
                            <h3>BEVERAGES</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem perferendis expedita quas fugiat!</p>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="promo row col-md-12">
                    <div class="col-md-4 row col-12 card-holder">
                        <div class="card-description col-7">
                            <p>Payday Promo</p>
                            <h3>GET A 10% DISCOUNT ON PAYDAY WEEK</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem perferendis expedita quas fugiat!</p>
                            <a href="">Order Now</a>
                        </div>
                        <div class="image col-5 position-relative">
                            <img src="images/food1.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 row col-12 card-holder">
                        <div class="card-description col-7">
                            <p>Beverage offer</p>
                            <h3>ORDER TWO COKES, GET ONE FREE</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem perferendis expedita quas fugiat!</p>
                            <a href="">Order Now</a>
                        </div>
                        <div class="image col-5 position-relative">
                            <img src="images/beverage2.png" alt="">
                        </div>
                    </div>
                </div>

    <hr>
               
                <div class="menu container row col-12 justify-content-center 
                justify-content-md-start">
                    <div class="col-10 col-md-6 text-center text-md-start">
                        <h3>MENU</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veritatis perspiciatis dolores quisquam nulla voluptatibus est fugiat sed animi nam.</p>
                    </div>
                    <div class="container col-12 p-0">
                        <div class="row col-12 my-4 my-md-5">
                            <li class="col-2 col-md-1" data-filter="all">All</li>
                            <li class="col-2 col-md-1" data-filter="foods">Foods</li>
                            <li class="col-2 col-md-1" data-filter="snacks">Snacks</li>
                            <li class="col-2 col-md-1" data-filter="beverages">Beverages</li>
                        </div>
                        <div class="row justify-content-evenly col-12 foods">
                            <div class="item col-6 col-md-4 col-lg-3 foods">
                                <div><img src="images/burger.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 snacks">
                                <div><img src="images/fries2.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 foods">
                                <div><img src="images/burger.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 foods">
                                <div><img src="images/burger4.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 foods">
                                <div><img src="images/burger4.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 beverages">
                                <div><img src="images/coke.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 beverages">
                                <div><img src="images/coke.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 foods">
                                <div><img src="images/burger.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 foods">
                                <div><img src="images/burger4.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 snacks">
                                <div><img src="images/fries2.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 beverages">
                                <div><img src="images/coke.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 snacks">
                                <div><img src="images/fries2.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 foods">
                                <div><img src="images/burger.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 foods">
                                <div><img src="images/burger4.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 snacks">
                                <div><img src="images/fries2.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-6 col-md-4 col-lg-3 beverages">
                                <div><img src="images/coke.png" alt=""></div>
                                <div class="description text-center">
                                    <h4>Burger</h4>
                                    <p class="col-8">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    <div class="row justify-content-evenly">
                                        <div class="col-12 col-md-6 row align-items-center"><s class="col-5">$14.00</s>
                                            <h4 class="col-5">$10.00</h4>
                                        </div>
                                        <div class="col-10 col-md-6 py-2 py-md-0"><a href="">Add to Cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about col-12 row justify-content-center justify-content-md-end">
                    <div class="col-10 col-md-6 text-center text-md-end">
                        <h3>ABOUT US</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veritatis perspiciatis dolores quisquam nulla voluptatibus est fugiat sed animi nam.</p>
                    </div>
                    <div class="manager-comment row col-12">
                        <div class="col-4 position-relative">
                            <img src="images/burger.png" alt="">
                        </div>
                        <div class="col-8">
                            <h3>GOOD FOOD MAKES A GOOD DAY</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo sapiente qui quasi commodi totam? Illum animi excepturi suscipit corporis error quod necessitatibus iste numquam praesentium.</p>
                            <h5>Okeleye Victor, CEO</h5>
                        </div>
                        <div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Body Ends -->
    
        <div class="pre-footer d-none d-md-flex row col-12 justify-content-md-around align-items-md-center">
            <div class="brand d-none d-md-block col-4 text-md-start">
                <a href=""><img src="images/logo.png" alt=""></a>
            </div>
            <div class="newsletter col-md-5 text-md-center">
                <h5>NEW TO FOOD<span class="text-primary">EXPRESS</span> ?</h5>
                <p>Subscribe to our newsletter to get updates on our latest offers!</p>
                <form action="" method="post" class="col-12 col-md-6 justify-content-md-center">
                    <i class="icon-mail_outline"></i>
                    <input type="email" name="email" placeholder="Enter E-mail address">
                    <button type="submit" name="submit" class="icon-long-arrow-right" style="background: rgb(15,115,238); padding: 0.375rem 1rem; margin-left: 5px;color: white;outline: none; border: 0; border-radius: 3px;"></button>
                </form>
            </div>
        </div>
        <div class="footer">
           
            <div class="container">
                <div class="row col-12 d-md-flex justify-content-md-evenly align-items-md-top mx-auto">
                    <div class="brand d-block d-md-none">
                        <a href=""><img src="images/logo.png" alt=""></a>
                    </div>
                    <div class="newsletter d-block d-md-none">
                        <p>Subscribe to our newsletter to get updates on our latest offers!</p>
                        <form action="" method="post" class="col-6 justify-content-center">
                            <i class="icon-mail_outline"></i>
                            <input type="email" name="email" placeholder="Enter E-mail address">
                            <button type="submit" name="submit" class="icon-long-arrow-right" style="background: rgb(15,115,238); padding: 0.375rem 1rem; margin-left: 5px;color: white;outline: none; border: 0; border-radius: 3px;"></button>
                        </form>
                    </div>
                    <div class="col-12 col-md-3">
                        <h4>Food<span style="color:rgb(15,115,238);">Express</span></h4>
                        <div class="list-unstyled ">
                            <h4>Join us on</h4>
                            <li><a href=""><i class="fab fa-twitter"></i></a><span>Twitter</span></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a><span>Youtube</span></li>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a><span>Facebook</span></li>
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a><span>LinkedIn</span></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a><span>Instagram</span></li>
                            <li><a href=""><i class="fab fa-whatsapp"></i></a><span>Whatsapp</span></li>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-3">
                        <h4>Let us help you</h4>
                        <div>
                            <li><a href="">Help Center</a></li>
                            <li><a href="">Payment Method</a></li>
                            <li><a href="">How to Make an Order</a></li>
                            <li><a href="">Delivery Options</a></li>
                            <li><a href="">Report a Product</a></li>
                            <li><a href=""></a></li>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <h4>Make money with Food<span class="text-primary">Express</span></h4>
                        <div>
                            <li><a href="">Become a Delivery Agent</a></li>
                            <li><a href="">Become a Logistic Service partner</a></li>  
                            <li><a href="">Create awareness for your food brand</a></li>
                            <li><a href="">Become a FoodExpress Vendor Service Provider</a></li>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <h4>Quick Links</h4>
                        <div>
                            <li><a href="#">About</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Help & Support</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Contact</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          
    </div>
    
    <div class="position-relative rights container-fluid" style="background-color: rgb(16, 16, 16);"><h4>All Rights reserved | 2022</h4></div>
    
  
    
    
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/control.js"></script>
    <script>
    //     $(window).on("load", function(){
    //     $('.preloader').fadeOut(4000);
    // })
    </script>
</body>
</html>