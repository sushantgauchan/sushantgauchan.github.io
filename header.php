<?php
/**
 * Created by PhpStorm.
 * User: Sushant Gauchan
 * Date: 6/9/2018
 * Time: 7:20 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>

    <!------------------------ Meta Starts ---------------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo_icons/primestore_logo_small_red.png">

    <meta property="og:title" content=""/>
    <meta property="og:type"   content="website" />
    <meta property="og:url"    content="" />
    <meta property="og:site_name" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:image:alt" content="">
    <meta property="og:description" content="">
    <!------------------------- Meta Ends ----------------------->


    <!----------------------- Fonts Starts ---------------------->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!------------------------ Fonts Ends ----------------------->


    <!-------------------- Components Starts -------------------->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bowercomponent/slick-theme.css" rel="stylesheet">
    <link href="css/bowercomponent/slick.css" rel="stylesheet">
    <link href="css/bowercomponent/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="css/bowercomponent/lightbox.min.css" rel="stylesheet">
    <!--------------------- Components Ends --------------------->


    <!-------------------- Site Style Starts -------------------->
    <link href="css/global.css" rel="stylesheet">
    <link href="css/thestyles.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--------------------- Site Style Ends --------------------->

    <!---------------------- Script Starts ---------------------->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!----------------------- Script Ends ----------------------->

</head>
<body class="announcement-visible">

<!------------------------------------- Wrapper Starts ------------------------------------->
<div id="wrapper">

    <!------------------------------------ Menu Cart Starts ------------------------------------>
    <div id="main-overlay"></div>
    <div id="side-cart">
        <div class="cart-title">
            <h2>Shopping Cart</h2>
            <div class="common-close-container">  <!-- Close button for mobile size -->
                <i class="fa fa-times"></i>
            </div>
        </div>

        <div class="cart-content">
            <div class="cart-product-container">
                <div class="cart-product-item">
                    <div class="inner">
                        <div class="image-container">
                            <div class="image">
                                <img src="img/devices/acc/razer_lancehead.png">
                            </div>
                        </div>
                        <div class="text-container">
                            <div class="name-color-wrapper">
                                <h1>Razer Lance Head</h1>
                                <p>Color: Black</p>
                            </div>
                            <div class="price-quantity-wrapper">
                                <div class="quantity-container">
                                    <input type="text" value="1">
                                </div>
                                <div class="price-container">
                                    <p>Rs: 10,000</p>
                                </div>
                            </div>
                        </div>
                        <i class="fa fa-close" id="remove_from_cart"></i>
                    </div>
                </div>
                <div class="cart-product-item">
                    <div class="inner">
                        <div class="image-container">
                            <div class="image">
                                <img src="img/devices/laptop/mbp13.png">
                            </div>
                        </div>
                        <div class="text-container">
                            <div class="name-color-wrapper">
                                <h1>Apple Macbook Pro 13'</h1>
                                <p>Color: Black</p>
                            </div>
                            <div class="price-quantity-wrapper">
                                <div class="quantity-container">
                                    <input type="text" value="1">
                                </div>
                                <div class="price-container">
                                    <p>Rs: 1,98,000</p>
                                </div>
                            </div>
                        </div>
                        <i class="fa fa-close" id="remove_from_cart"></i>
                    </div>
                </div>
                <div class="cart-product-item">
                    <div class="inner">
                        <div class="image-container">
                            <div class="image">
                                <img src="img/devices/acc/razer_lancehead.png">
                            </div>
                        </div>
                        <div class="text-container">
                            <div class="name-color-wrapper">
                                <h1>Razer Lance Head</h1>
                                <p>Color: Black</p>
                            </div>
                            <div class="price-quantity-wrapper">
                                <div class="quantity-container">
                                    <input type="text" value="1">
                                </div>
                                <div class="price-container">
                                    <p>Rs: 10,000</p>
                                </div>
                            </div>
                        </div>
                        <i class="fa fa-close" id="remove_from_cart"></i>
                    </div>
                </div>
                <div class="cart-product-item">
                    <div class="inner">
                        <div class="image-container">
                            <div class="image">
                                <img src="img/devices/laptop/mbp13.png">
                            </div>
                        </div>
                        <div class="text-container">
                            <div class="name-color-wrapper">
                                <h1>Apple Macbook Pro 13'</h1>
                                <p>Color: Black</p>
                            </div>
                            <div class="price-quantity-wrapper">
                                <div class="quantity-container">
                                    <input type="text" value="1">
                                </div>
                                <div class="price-container">
                                    <p>Rs: 1,98,000</p>
                                </div>
                            </div>
                        </div>
                        <i class="fa fa-close" id="remove_from_cart"></i>
                    </div>
                </div>
            </div>
            <div class="side-cart-action">
                <div class="side-cart-total">
                    <div class="total-item">
                        <p>Sub Total</p>
                    </div>
                    <div class="total-item">
                        <p>Rs: 2,00,000</p>
                    </div>
                </div>
                <a href="checkout_page.php" class="pr-btn square-border">Checkout</a>
            </div>

           <!-- <div class="cart-empty">
                <p>The Cart is Empty</p>
                <a href="shop_list_page.php" class="pr-btn square-border">Shop Now</a>
            </div>-->
        </div>
    </div>

    <div id="mobile-navigation">
        <div class="user-bar">
            <h1>Prime Store</h1>
            <p>A complete store</p>
            <ul>
                <li><a href="#">Sign In ></a></li>
            </ul>
            <div class="common-close-container">
                <i class="fa fa-times"></i>
            </div>
        </div>

        <div class="mobile-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Mobile</a>
                    <ul>
                        <li><a href="#">Smart Phone</a>
                            <ul>
                                <li><a href="shop_list_page.php">Iphone</a></li>
                                <li><a href="shop_list_page.php">Samsung</a></li>
                                <li><a href="shop_list_page.php">Oppo</a></li>
                                <li><a href="shop_list_page.php">Vivo</a></li>
                            </ul>
                        </li>
                        <li><a href="shop_list_page.php">Bar Phone</a></li>
                        <li><a href="shop_list_page.php">Accessories</a></li>
                        <li><a href="shop_list_page.php">Head Phone</a></li>
                    </ul>
                </li>
                <li><a href="shop_list_page.php">Electronics</a></li>
                <li><a href="about_page.php">About</a></li>
                <li><a href="blog_list_page.php">Blog</a></li>
                <li><a href="contact_page.php">Contact</a></li>
            </ul>
        </div>

    </div>
    <!------------------------------------- Menu Cart Ends ------------------------------------->

    <!--------------------------------- Header Wrapper Starts ---------------------------------->
    <header id="header-wrapper">
        <div class="announcement-bar">
            <div class="announcement-message">
                <p><i class="fa fa-gift"></i>SALE 20% off all. Use code <a href="product_detail.php">SHOP NOW</a> </p>
            </div>

      <!--     <div class="announcement-image">
                <a href="product_detail.php">
                    <img src="img/tise/header-strip.png">
                </a>
            </div>
-->
            <div class="close">
                <i class="fa fa-times"></i>
            </div>
        </div>

        <div class="top-header">
            <div class="custom-container">
                <div class="block-container">
                    <div class="left-block">
                        <div class="mobile-menu-toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="right-block">
                        <div class="right-inner">
                            <div class="right-block-item search-item add-ul-design">
                                <ul>
                                    <li>
                                        <i class="fa fa-search"></i>
                                    </li>
                                </ul>

                            </div>
                            <div class="right-block-item logo-item">
                                <a href="index.php">
                                    <ul>
                                        <li><img src="img/logo_icons/primestore_logo_small.png"></li>
                                        <li>Prime Store</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="right-block-item login-item add-ul-design">
                                <ul>
                                    <li id="header-user">
                                        <a href="login.php">
                                            <span class="text">Log in</span>
                                            <i class="fa fa-user"></i>
                                        </a>
                                    </li>
                                    <li id="cart-toggle">
                                        <span class="text">Cart</span>
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="cart-number">3</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="search-form">
                            <form>
                                <input type="text" placeholder="Search For Products">
                            </form>
                            <div class="form-times">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="bottom-header">
            <div class="custom-container">
                <div class="nav-container">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="#">Mobile</a>
                            <div class="menu-dropdown">
                                <ul>
                                    <li>
                                        <a href="#">Smart Phones</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Apple</a></li>
                                            <li><a href="shop_list_page.php">Samsung</a></li>
                                            <li><a href="shop_list_page.php">Huwawe</a></li>
                                            <li><a href="shop_list_page.php">Opps</a></li>
                                            <li><a href="shop_list_page.php">MI</a></li>
                                            <li><a href="shop_list_page.php">Lg</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Bar Phones</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Colors</a></li>
                                            <li><a href="shop_list_page.php">Oppo</a></li>
                                            <li><a href="shop_list_page.php">Vivo</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Mobile Accessories</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Covers</a></li>
                                            <li><a href="shop_list_page.php">Skins</a></li>
                                            <li><a href="shop_list_page.php">Ear Phones</a></li>
                                            <li><a href="shop_list_page.php">Battery</a></li>
                                            <li><a href="shop_list_page.php">Tempered Glass</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Headphones</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Earphones</a></li>
                                            <li><a href="shop_list_page.php">Bluetooth earphones</a></li>
                                            <li><a href="shop_list_page.php">Headphones</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Headphones</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Earphones</a></li>
                                            <li><a href="shop_list_page.php">Bluetooth earphones</a></li>
                                            <li><a href="shop_list_page.php">Headphones</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Headphones</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Earphones</a></li>
                                            <li><a href="shop_list_page.php">Bluetooth earphones</a></li>
                                            <li><a href="shop_list_page.php">Headphones</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Others</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Earphones</a></li>
                                            <li><a href="shop_list_page.php">Bluetooth earphones</a></li>
                                            <li><a href="shop_list_page.php">Headphones</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Phone</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Earphones</a></li>
                                            <li><a href="shop_list_page.php">Bluetooth earphones</a></li>
                                            <li><a href="shop_list_page.php">Earphones</a></li>
                                            <li><a href="shop_list_page.php">Headphones</a></li>
                                            <li><a href="shop_list_page.php">Bluetooth earphones</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Others</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Earphones</a></li>
                                            <li><a href="shop_list_page.php">Bluetooth earphones</a></li>
                                            <li><a href="shop_list_page.php">Headphones</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Phone</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Earphones</a></li>
                                            <li><a href="shop_list_page.php">Bluetooth earphones</a></li>
                                            <li><a href="shop_list_page.php">Earphones</a></li>
                                            <li><a href="shop_list_page.php">Headphones</a></li>
                                            <li><a href="shop_list_page.php">Bluetooth earphones</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <li>
                            <a href="shop_list_page.php">Electronics</a>
                            <div class="menu-dropdown">
                                <ul>
                                    <li>
                                        <a href="#">Smart Phones</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Apple</a></li>
                                            <li><a href="shop_list_page.php">Samsung</a></li>
                                            <li><a href="shop_list_page.php">Huwawe</a></li>
                                            <li><a href="shop_list_page.php">Opps</a></li>
                                            <li><a href="shop_list_page.php">MI</a></li>
                                            <li><a href="shop_list_page.php">Lg</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Bar Phones</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Colors</a></li>
                                            <li><a href="shop_list_page.php">Oppo</a></li>
                                            <li><a href="shop_list_page.php">Vivo</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Mobile Accessories</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Covers</a></li>
                                            <li><a href="shop_list_page.php">Skins</a></li>
                                            <li><a href="shop_list_page.php">Ear Phones</a></li>
                                            <li><a href="shop_list_page.php">Battery</a></li>
                                            <li><a href="shop_list_page.php">Tempered Glass</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Headphones</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Earphones</a></li>
                                            <li><a href="shop_list_page.php">Bluetooth earphones</a></li>
                                            <li><a href="shop_list_page.php">Headphones</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Headphones</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Earphones</a></li>
                                            <li><a href="shop_list_page.php">Bluetooth earphones</a></li>
                                            <li><a href="shop_list_page.php">Headphones</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Headphones</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Earphones</a></li>
                                            <li><a href="shop_list_page.php">Bluetooth earphones</a></li>
                                            <li><a href="shop_list_page.php">Headphones</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Others</a>
                                        <ul>
                                            <li><a href="shop_list_page.php">Earphones</a></li>
                                            <li><a href="shop_list_page.php">Bluetooth earphones</a></li>
                                            <li><a href="shop_list_page.php">Headphones</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="about_page.php">About</a></li>
                        <li><a href="blog_list_page.php">Blog</a></li>
                        <li><a href="contact_page.php">Contact Us</a></li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="mobile-header">

        </div>
    </header>
    <!---------------------------------- Header Wrapper Ends ----------------------------------->



    <!-------------------------------- Content Wrapper Starts ---------------------------------->
    <div id="content-wrapper">

