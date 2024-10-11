<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heera Shea butter</title>
    <title></title>
	<meta name="robots" content="index, follow">

	<link rel="shortcut icon" href="./assets/images/logo.svg" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <?php
    require ('functions.php');
    ?>
</head> 
  <body id=""  class="template-index index-modern">
    <div id="pre-loader">
        <img src="./assets/images/loader.gif" alt="Loading..." />
    </div>
    <div class="page-wrapper">

        <div class="header-7">
            <header class="header animated d-flex align-items-center">
                <div class="container-fluid">
                    <div class="row">
                        

                        <div class="col-4 col-sm-4 col-md-4 d-block d-lg-none mobile-icons">
                         
                            <button type="button"
                                class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                <i class="icon anm anm-times-l"></i>
                                <i class="anm anm-bars-r"></i>
                            </button>
                      
                        </div>
                     
                        <div class="logo col-4 col-sm-4 col-md-4 col-lg-2 align-self-center">
                            <a href="">
                                <img src="./assets/images/logo.svg" alt="" title="" />
                            </a>
                        </div>
                        
                        <div class="col-1 col-sm-1 col-md-1 col-lg-8 align-self-center d-menu-col">
                            <!--Desktop Menu-->
                            <nav class="grid__item" id="AccessibleNav">
                                <ul id="siteNav" class="site-nav medium left hidearrow">
                                    <li class="lvl1 parent megamenu"><a href="index.php">Home</a></li>
                                    <li class="lvl1 parent megamenu"><a href="product.php">Our Products</a></li>
                                    <li class="lvl1 parent megamenu"><a href="about-us.php">About Us</a></li>
                                    <li class="lvl1 parent megamenu"><a href="faqs.php">FAQs</a></li>
                                    <li class="lvl1 parent megamenu"><a href="contact-us.php">Contact Us</a></li>
                                </ul>
                            </nav>
                        
                        </div>

                        <div class="col-4 col-sm-4 col-md-4 col-lg-2 align-self-center icons-col text-right">

                
                        <div class="header-cart iconset"> 
                            <a href="javascript:void(0);" class="site-header__cart btn-minicart" data-toggle="modal"
                                data-target="#minicart-drawer">
                                <i class="icon anm anm-bag-l"></i>
                                <span class="site-cart-count">0</span>
                            </a>
                        </div>
                    
                        </div>
                    </div>
                </div>
            </header>
            <div class="topbar-slider clearfix">
                <div class="container-fluid">
                    <div class="marquee-text">
                        <div class="top-info-bar d-flex">
                            <div class="flex-item center"><a href="our-products/">WELCOME TO HEERA SHEA –
                                    HAND-WHIPPED WITH LOVE!</a></div>
                            <div class="flex-item center"><a href="our-products/"><b>NOURISH, SOOTHE, AND PROTECT
                                        YOUR SKIN NATURALLY</b></a></div>
                            <div class="flex-item center"><a href="our-products/"><b>DISCOVER PURE, HAND-WHIPPED
                                        SHEA BUTTER FOR SENSITIVE SKIN!</b></a></div>
                            <div class="flex-item center"><a href="our-products/">IGNITE YOUR SENSES WITH OUR
                                    SCENTED CANDLES</b></a></div>
                            <div class="flex-item center"><a href="our-products/"><b>ENJOY FAST DELIVERY ON ALL
                                        ORDERS!</b></a></div>
                            <div class="flex-item center"><a href="our-products/"><b>ELEVATE YOUR SKINCARE ROUTINE
                                        WITH OUR BODY OILS!</b></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 parent megamenu"><a href="">Home</a></li>
                <li class="lvl1 parent megamenu"><a href="our-products/">Our Products</a></li>
                <li class="lvl1 parent megamenu"><a href="about-us/">About Us</a></li>
                <li class="lvl1 parent megamenu"><a href="faqs/">FAQs</a></li>
                <li class="lvl1 parent megamenu"><a href="contact-us/">Contact Us</a></li>
            </ul>
        </div>
       
        
<div id="page-content">

<div class="minicart-right-drawer modal right fade" id="minicart-drawer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="cart-drawer" class="block block-cart">
                <a href="javascript:void(0);" class="close-cart" data-dismiss="modal" aria-label="Close">
                    <i class="anm anm-times-r"></i>
                </a>
                <h4>Your cart (<span class="cart-item-count">0</span> Items)</h4>
                <div class="minicart-content">
                    <ul class="clearfix cart-items-list">
                        <!-- Cart items will be dynamically injected here -->
                    </ul>
                </div>
                <div class="minicart-bottom">
                    <div class="subtotal">
                        <span>Total:</span>
                        <span class="product-price cart-total-price">KSH 0.00</span>
                    </div>
                    <button type="button" class="btn proceed-to-checkout">Proceed to Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
