<?php
    








?>






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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Tamil:wght@400;500&family=Poppins&display=swap" rel="stylesheet">
    <title>Food Express</title>
</head>
<body>
    <div class="clip-path">
    </div>
    <div class="preloader">
    </div>
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
                            <li><a href="">Terms & Conditions</a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="icon-user-o"></i>
                        <a href="">Account</a>
                        <i class="icon-keyboard_arrow_down"></i>
                        <ul>
                            <li><a href="">Login</a></li>
                            <li><a href="">Sign Up</a></li>
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
                <input type="text" autocomplete="on" placeholder="Search">
                <a href="" class="btn" style="transform: rotateZ(-180deg); font-size: 20px; background-color: rgba(15,115,238,255); display: flex;align-items: center;color:white; border-radius:3x; margin-left: 10px"><i class="icon-keyboard_backspace"></i></a>
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
                z-index: 1;
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
            .side-images-left{
                top: 19.5% !important;
            }
            .body .side-images-left > div > div:nth-child(1) img {
                width: 125px !important;
            }
            .side-images-right{
                display: none;
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
                                    <i class="icon-glass"></i>
                                    <h6>Delicious</h6>
                                </li>
                                <li>
                                    <i class="icon-cutlery"></i>
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
                    <div class="col-md-3 row col-8 card-holder">
                        <div class="image col-6 position-relative"><img src="images/burger4.png" alt=""></div>
                        <div class="card-description col-6">
                            <h3>FOOD</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis esse maiores excepturi dolorem!</p>
                        </div>
                    </div>
                    <div class="col-md-3 row col-8 card-holder">
                        <div class="image col-6 position-relative"><img src="images/fries.png" alt=""></div>
                        <div class="card-description col-6">
                            <h3>SNACKS</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos reiciendis dignissimos libero accusamus.</p>
                        </div>
                    </div>
                    <div class="col-md-3 row col-8 card-holder">
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
                <form action="" class="col-12 col-md-6 justify-content-md-center">
                    <i class="icon-mail_outline"></i>
                    <input type="email" placeholder="Enter E-mail address">
                    <a href="" style="background: rgb(15,115,238); padding: 0.375rem .75rem;"><i class="icon-long-arrow-right"></i></a>
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
                        <form action="" class="col-6 justify-content-center">
                            <i class="icon-mail_outline"></i>
                            <input type="email" placeholder="Enter E-mail address">
                            <a href="" style="background: rgb(15,115,238); padding: 0.375rem .75rem; margin-left: 5px;"><i class="icon-long-arrow-right"></i></a>
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
        $(window).on("load", function(){
        $('.preloader').fadeOut(900);
    })
    </script>
</body>
</html>