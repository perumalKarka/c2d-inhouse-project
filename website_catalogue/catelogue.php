<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | Website catalogue | C2D</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="css/js-offcanvas.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/filter.css" />
    <link rel="stylesheet" href="css/responsivenew.css" />
    <link rel="stylesheet" href="css/mobile_style.css" />
    <link rel="icon" href="images/favicon-ico.png" sizes="32x32" />
    <link rel="icon" href="images/favicon-ico.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="images/favicon-ico.png" />
    <meta name="msapplication-TileImage" content="images/favicon-ico.png" />

    <style type="text/css">
       
        .delete_sidebar_wish {
            height: 100%;
            width: 0;
            position:absolute;
            z-index: 1;
            top: 0;
            left: 0;
            overflow-x: hidden;
            transition: 0.5s;
        }
        .wishlist-container .no-gutters{
            display:flex;
        }
        .delete_sidebar_wish .wish-icon-box{
            height:46%;
            border-radius:9px;
            position: relative;
            
        }
        .wish-icon-box i{
            color:#fff;
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            font-size:21px;
        }
        .wish-remove-bx{
            background:#FF3D00;
            margin-bottom: 10%;
        }
        .wish-close-bx{
            background:#d1d1d1;
        }
        .clear-filter-tag{
            font-size: 12px;
            line-height: 14px;
            text-transform: uppercase;
            color: #F4A41D;
            cursor: pointer;
        }
        .clear-filter-tag:hover{
            color: #F4A41D;
        }
        .catelogue-page.has-offcanvas--visible .slide-show-recent_cardview{
            display:none;
        }
        @media (min-width: 360px) {
            .wishlist-bar h2{
                font-size:15px;
                line-height:22px;
                letter-spacing: 2px;
                padding: 15px 0;
            }
            .wishlist-container .card-title {
                font-size: 15px;
                line-height: 20px;
                margin: 0px 0 2px 0;
            }
            .wishlist-container .card-text {
                font-size: 12px;
                line-height: 22px;
                margin: 0 0 12% 0;
            }
            .wishlist-container .remove,
            .wishlist-container .preview {
                font-size: 10px;
                width: 40%;
                padding: 2px 1.5px;
                text-align: center;
                border-radius: 3px;
            }
            .wishlist-container .card{
                margin-top: 40px;
            }
            .wish-visit{
                font-size: 16px;
                line-height: 30px;
            }
            .wish-checkout {
                font-size: 16px;
                width: 40%;
                padding: 4px 0;
                border-radius: 4px;
            }
            .wishlist-bar{
                width:80%;
            }
            .wishlist-container .card-img{
                height:auto;
            }
        }
        @media (min-width: 575px) {
            .wishlist-bar{
                width:480px;
            }
            .wishlist-container .card{
                margin-top: 45px;
            }
            .wish-visit{
                font-size: 16px;
                line-height: 30px;
            }
            .wish-checkout {
                font-size: 16px;
                width: 40%;
                padding: 4px 0;
                border-radius: 4px;
            }
            .wishlist-container .card-text {
                margin: 0 0 32% 0;
            }
        }
        @media (min-width: 768px) {
            .wishlist-bar h2{
                font-size:18px;
                line-height:26px;
                letter-spacing: 2px;
                padding: 20px 0;
            }
            .wishlist-container .card-title {
                font-size: 18px;
                line-height: 25px;
                margin: 0px 0 3px 0;
            }
            .wishlist-container .card-text {
                font-size: 14px;
                line-height: 24px;
                margin: 0 0 28% 0;
            }
            .wishlist-container .remove,
            .wishlist-container .preview {
                font-size: 13px;
                width: 45%;
                padding: 3px 0;
                text-align: center;
                border-radius: 4px;
            }
            .wishlist-container .card{
                margin-top: 50px;
            }
            .wish-visit{
                font-size: 17px;
                line-height: 30px;
            }
            .wish-checkout {
                font-size: 17px;
                width: 40%;
                padding: 4px 0;
                border-radius: 5px;
            }
        }
        @media (min-width: 992px) {
            .wishlist-container .card-text{
                margin: 0 0 13% 0;
            }
        }
        @media (min-width: 1200px) {
            .wishlist-bar h2{
                font-size:22px;
                line-height:30px;
                letter-spacing: 3px;
                padding: 25px 0;
            }
            .wishlist-container .card-title {
                font-size: 22px;
                font-family: 'robotoregular';
                line-height: 30px;
                font-weight: bold;
                color: #ffffff;
                margin: 0px 0 4px 0;
            }
            .wishlist-container .card-text {
                font-size: 18px;
                font-family: 'robotolight';
                line-height: 30px;
                color: #ffffff;
                margin: 0 0 40px 0;
            }
            .wishlist-container .remove {
                font-size: 18px;
                width: 100px;
                padding: 4px 0;
                text-align: center;
                border-radius: 6px;
            }
            .wishlist-container .preview {
                color: #ffffff;
                font-size: 18px;
                width: 100px;
                padding: 4px 0;
                border-radius: 6px;
            }
            .wishlist-container .card{
                margin-top: 60px;
            }
            .wish-visit{
                font-size: 24px;
                line-height: 40px;
            }
            .wish-checkout {
                font-size: 24px;
                width: 200px;
                padding: 4px 0;
                border-radius: 8px;
            }
            .wishlist-container .card-img {
                height: 143px;
            }
        }
    </style>
</head>

<body class="catelogue-page">
    <main class="container-fluid site-fluid c-offcanvas-content-wrap" role="main">
        <section class="header-section">
            <div class="container container-85 reset-padding">
                <?php include 'includes/mobile-menu.php'; ?>
                <header class="site-header site-navbar site-navbar-target overlay-header">
                    <?php include 'includes/header.php'; ?>
                </header>
            </div>
        </section>
        <!-- top section -->
        <section class="catalogue-firstSection mb-5">
            <div class="container container-90 reset-padding">
                <div class="row reset-margin">
                    <div class="col--md-6 col-xl-7 col-lg-12 catelogue-left-sub__title reset-padding">
                        <p class="reset-margin">Lorem ipsum dolor sit amet, consetetur</p>
                    </div>
                    <div class="col-md-6 col-xl-5 col-lg-12 catelogue-right-searchbar align-self-end reset-padding ">
                        <div class="input-group searchBox">
                            <input class="form-control reset-padding mb-2" type="text" id="myFilter" placeholder="Search for your type of business..." aria-label="Search">
                            <div class="input-group-append align-self-center mb-2">
                                <span class="fa fa-search form-control-feedback searchicon" id="basic-text1"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        
        <!-- filter section -->
        <section class="filtersection">
            <div class="container container-90 reset-padding">
                <div class="row filter-option reset-margin">
                    <div class="col-7 col-md-12 col-lg-9 align-self-center p-0">
                        <nav class="wrapper navbar navbar-expand-md rounded d-none d-md-block">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar">

                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item dropdown megamenu-li">
                                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-12">
                                                    <ul id="my_UL" class="d-flex filter-option-lists">
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Monopage">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Monopage</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Multipage">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Multipage</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="nav-item dropdown megamenu-li">
                                        <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Business Type</a>
                                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown02">
                                            <input type="text" id="myInput" class="myfilter_textbox" onkeyup="myFilter()" placeholder="Search for your preference" />
                                            <div class="row m-0">
                                                <div class="col-sm-4 col-lg-3 col-xl-4 p-0">
                                                    <h3 class="cat-sub-title">B2C</h3>
                                                    <ul id="b2c_UL" class="row filter-option-lists m-0">
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Grocery Shop">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Grocery Shop</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Financial Services">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Financial Services</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Wine Shop">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Wine Shop</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Plumbing Services">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Plumbing Services</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Automotive">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Automotive</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Movers & Packers">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Movers & Packers</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4 col-lg-3 col-xl-4 pl-4 pr-4">
                                                    <h3 class="cat-sub-title">Category 2</h3>
                                                    <ul id="cat2_UL" class="row myUL filter-option-lists m-0">
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Communications">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Communications</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Transport Services">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Transport Services</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Postal Services">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Postal Services</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Aviation">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Aviation</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Pharmaceuticals">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Pharmaceuticals</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Food Services">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Food Services</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4 col-lg-3 col-xl-4 p-0">
                                                    <h3 class="cat-sub-title">Category 3</h3>
                                                    <ul id="cat3_UL" class="row filter-option-lists m-0">
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Cosmetics">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Cosmetics</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Tourism & Hospitality">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Tourism & Hospitality</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="E-commerce site">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">E-commerce site</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Real Estate">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Real Estate</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Banking Services">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Banking Services</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Healthcare">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Healthcare</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-sm-4 col-lg-3 col-xl-4 p-0">
                                                    <h3 class="cat-sub-title">Health</h3>
                                                    <ul id="health_UL" class="row filter-option-lists m-0">
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Physiotheraphy">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Physiotheraphy</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-lg-12 col-xl-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Dentist">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Dentist</span>
                                                            </label>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="nav-item dropdown megamenu-li">
                                        <a class="nav-link dropdown-toggle" href="" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Color Schemee</a>
                                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown03">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-12">
                                                    <ul class="d-flex filter-option-lists">
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Blue">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color"><img src="images/colo-blue.png" class="img-color-pic" />Blue</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Green">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color"><img src="images/colo-green.png" class="img-color-pic" />Green</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="White">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color"><img src="images/colo-white.png" class="img-color-pic" />White</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Brown">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color"><img src="images/colo-brown.png" class="img-color-pic" />Brown</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Black">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color"><img src="images/colo-black.png" class="img-color-pic" />Black</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown megamenu-li">
                                        <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Style</a>
                                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown04">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-12">
                                                    <ul class="d-flex filter-option-lists">
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Minimal">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Minimal</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Masculine">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Masculine</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Nature-inspired">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Nature-inspired</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Feminine">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Feminine</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Grungy">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Grungy</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="nav-item megamenu-li liked-li">
                                        <a class="nav-link">
                                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Liked <span class="badge badge-light">10</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                                <div class="tagsBoxDropdown">
                                    <div class="tagsBox">
                                        <input type="text" data-role="tagsinput" id="tagsinput" name="tags" class="form-control">
                                    </div>
                                    <div class="d-none d-md-block d-xl-none tab-apply-bar">
                                            <div class="row m-0">
                                                <a class="col filter-bar text-center">Close</a>
                                                <a class="col apply-filter text-center">Apply</a>
                                            </div>
                                    </div>
                                </div>
                            </div>

                        </nav>

                        <nav class="d-block d-md-none header-nav">
                            
                            
                            <div class="hamburger">
                                <label class="filter-bar filter-open-bar">
                                    <img src="images/menu-filter-bar.svg" />
                                    Filters
                                </label>
                                <a class="nav-link">
                                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Liked 
                                </a>
                                <div class="filter-hamburger-head">
                                    <label class="lab-title">Filters</label>
                                    <a class="clear-filter-tag">Clear all</a>
                                </div>
                                <div class="filter-close-bar">
                                    <div class="row m-0">
                                        <a class="col filter-bar text-center">Close</a>
                                        <a class="col apply-filter text-center">Apply</a>
                                    </div>
                                </div>
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg> -->
                            </div>
                            <ul class="menu">
                                <li class="has-submenu">
                                    <a href="#" class="active">Categories</a>
                                    <input type="text" id="myInput" class="myfilter_textbox" onkeyup="myFilter()" placeholder="Search by Categorise" />
                                    <ul class="sub-menu filter-option-lists active" id="sports-sub" style="padding-top:16vh;">
                                        <li class="sub-title">
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Monopage">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Monopage</span>
                                            </label>
                                        </li>
                                        <li class="sub-title">
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Multipage">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Multipage</span>
                                            </label>
                                        </li>

                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Business Type</a>
                                    <input type="text" id="myInput-tab" class="myfilter_textbox" onkeyup="myTabFilter()" placeholder="Search by Business" />
                                    <ul id="b2c_tabUL" class="sub-menu filter-option-lists" style="padding-top:16vh;">
                                        <h3 class="title">Category 1</h3>
                                        <li class="sub-title">
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Wine Shop">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Wine Shop</span>
                                            </label>
                                        </li>
                                        <li class="sub-title">
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Automotive">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Automotive</span>
                                            </label>
                                        </li>
                                        <li class="sub-title">
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Financial Services">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Financial Services</span>
                                            </label>
                                        </li>
                                        <li class="sub-title">
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Plumbing Services">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Plumbing Services</span>
                                            </label>
                                        </li>
                                        <li class="sub-title">
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Movers & Packers">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Movers & Packers</span>
                                            </label>
                                        </li>
                                        <h3 class="title">Category 2</h3>
                                        <li class="sub-title">
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Postal Services">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Postal Services</span>
                                            </label>
                                        </li>
                                        <li class="sub-title">
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Pharmaceuticals">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Pharmaceuticals</span>
                                            </label>
                                        </li>
                                        <li class="sub-title">
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Transport Services">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Transport Services</span>
                                            </label>
                                        </li>
                                        <li class="sub-title">
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Aviation">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Aviation</span>
                                            </label>
                                        </li>
                                        <li class="sub-title">
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Cosmetics">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Cosmetics</span>
                                            </label>
                                        </li>
                                        <li class="sub-title">
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="E-commerce site">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">E-commerce site</span>
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Color Scheme</a>
                                    <input type="text" id="myInput-tab" class="myfilter_textbox" onkeyup="myTabFilter()" placeholder="Search by Color" />
                                    <ul id="color_tabUL" class="sub-menu filter-option-lists" style="padding-top:16.5vh;">
                                        <li>
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Blue">
                                                <span class="checkmark"></span>
                                                <span class="checked-color"><img src="images/colo-blue.png" class="img-color-pic" />Blue</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Green">
                                                <span class="checkmark"></span>
                                                <span class="checked-color"><img src="images/colo-green.png" class="img-color-pic" />Green</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="White">
                                                <span class="checkmark"></span>
                                                <span class="checked-color"><img src="images/colo-white.png" class="img-color-pic" />White</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Brown">
                                                <span class="checkmark"></span>
                                                <span class="checked-color"><img src="images/colo-brown.png" class="img-color-pic" />Brown</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Black">
                                                <span class="checkmark"></span>
                                                <span class="checked-color"><img src="images/colo-black.png" class="img-color-pic" />Black</span>
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Style</a>
                                    <input type="text" id="myInput" class="myfilter_textbox" onkeyup="myFilter()" placeholder="Search by Style" />
                                    <ul class="sub-menu filter-option-lists" style="padding-top:17.5vh;">
                                        <li>
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Minimal">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Minimal</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Masculine">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Masculine</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Nature-inspired">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Nature-inspired</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Feminine">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Feminine</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="contactform-check--label block-color">
                                                <input class="contactform-check--input" type="checkbox" value="Grungy">
                                                <span class="checkmark"></span>
                                                <span class="checked-color">Grungy</span>
                                            </label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            
                        </nav>  

                    </div>
                    <div class="col-5 col-md-12 col-lg-3 request p-0">
                        <button type="button" class="request-sector" data-toggle="modal" data-target="#exampleModal">Request a new sector</button>
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->
                    </div>
                </div>
            </div>


        </section>

        <!-- card section -->
        <section class="cardsection">
            
            <div class="container container-90 reset-padding">
            <h2 class= "d-block d-md-none">Lorem ipsum dolor sit amet (17)</h2>
                <div class="row catelogu_template_item reset-margin">
                    <div class="card_block col-xl-6 col-lg-4 col-md-6 reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                                <i class="fa fa-bookmark"></i>
                                <i class="fa fa-thumbs-up like "></i>

                            </div>
                            <div class="card_body mt-3">
                                <ul class="badge-lists">
                                    <li class="badge badge-light">Minimal</li>
                                    <li class="badge badge-light">Classic</li>
                                </ul>
                                <span class="like-counts-text">1245 likes</span>
                                <a class="badge_box_content" href="javascript:void(0)" data-toggle="modal" data-target="#badge_box_lists">view more</a>
                                <h3>We must give title here</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, consetetur sadipscing elitr,consetetur sadipscing elitr, Lorem ipsum dolor sit amet, consetetur sadipscing elitr, consetetur sadipscing elitr,consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                <div class="row reset-margin">
                                    <div class="col-6 reset-padding">
                                        <span class="color-choice reset-margin">Color choice</span>
                                        <ul class="d-flex color-selector mt-2">
                                            <li style="background: #9D4EDD;"></li>
                                            <li style="background: #FF570A;"></li>
                                            <li style="background: #6EC630;"></li>
                                            <li style="background: #EAAB3D;"></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 d-none d-xl-block  reset-padding"><button type="button" class="preview live_preview reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button></div>

                                </div>
                                <div class="row card-last-button-sec ">
                                    
                                    <button type="button" class="preview live_preview d-block d-xl-none customize reset-margin" data-toggle="modal" data-target="#exampleModal-1">Customize</button>
                                    <button type="button" class="preview live_preview d-block d-xl-none  reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-xl-6 col-lg-4 col-md-6 reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                                <i class="fa fa-bookmark"></i>
                                <i class="fa fa-thumbs-up  "></i>
                            </div>
                            <div class="card_body mt-3">
                                <ul class="badge-lists">
                                    <li class="badge badge-light">Minimal</li>
                                    <li class="badge badge-light">Classic</li>
                                </ul>
                                <span class="like-counts-text">1245 likes</span>
                                <a class="badge_box_content" href="javascript:void(0)" data-toggle="modal" data-target="#badge_box_lists">view more</a>
                                <h3>We must give title here</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                <div class="row reset-margin">
                                    <div class="col-6 reset-padding">
                                        <span class="color-choice reset-margin">Color choice</span>
                                        <ul class="d-flex color-selector mt-2">
                                            <li style="background: #9D4EDD;"></li>
                                            <li style="background: #FF570A;"></li>
                                            <li style="background: #6EC630;"></li>
                                            <li style="background: #EAAB3D;"></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 d-none d-xl-block reset-padding"><button type="button" class="preview live_preview reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button></div>
                                </div>
                                <div class="row card-last-button-sec ">
                                   
                                    <button type="button" class="preview live_preview d-block d-xl-none customize reset-margin" data-toggle="modal" data-target="#exampleModal-1">Customize</button>
                                    <button type="button" class="preview live_preview d-block d-xl-none  reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-xl-6 col-lg-4 col-md-6 reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                                <i class="fa fa-bookmark"></i>
                                <i class="fa fa-thumbs-up "></i>
                            </div>
                            <div class="card_body mt-3">
                                <ul class="badge-lists">
                                    <li class="badge badge-light">Minimal</li>
                                    <li class="badge badge-light">Classic</li>
                                </ul>
                                <span class="like-counts-text">1245 likes</span>
                                <a class="badge_box_content" href="javascript:void(0)" data-toggle="modal" data-target="#badge_box_lists">view more</a>
                                <h3>We must give title here</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                <div class="row reset-margin">
                                    <div class="col-6 reset-padding">
                                        <span class="color-choice reset-margin">Color choice</span>
                                        <ul class="d-flex color-selector mt-2">
                                            <li style="background: #9D4EDD;"></li>
                                            <li style="background: #FF570A;"></li>
                                            <li style="background: #6EC630;"></li>
                                            <li style="background: #EAAB3D;"></li>
                                        </ul>
                                    </div>
                                    <div class="col-6  d-none d-xl-block reset-padding"><button type="button" class="preview live_preview reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button></div>
                                </div>
                                <div class="row card-last-button-sec ">
                                    
                                    <button type="button" class="preview live_preview d-block d-xl-none customize reset-margin" data-toggle="modal" data-target="#exampleModal-1">Customize</button>
                                    <button type="button" class="preview live_preview d-block d-xl-none  reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-xl-6 col-lg-4 col-md-6 reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                                <i class="fa fa-bookmark"></i>
                                <i class="fa fa-thumbs-up  "></i>
                            </div>
                            <div class="card_body mt-3">
                                <ul class="badge-lists">
                                    <li class="badge badge-light">Minimal</li>
                                    <li class="badge badge-light">Classic</li>
                                </ul>
                                <span class="like-counts-text">1245 likes</span>
                                <a class="badge_box_content" href="javascript:void(0)" data-toggle="modal" data-target="#badge_box_lists">view more</a>
                                <h3>We must give title here</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                <div class="row reset-margin">
                                    <div class="col-6 reset-padding">
                                        <span class="color-choice reset-margin">Color choice</span>
                                        <ul class="d-flex color-selector mt-2">
                                            <li style="background: #9D4EDD;"></li>
                                            <li style="background: #FF570A;"></li>
                                            <li style="background: #6EC630;"></li>
                                            <li style="background: #EAAB3D;"></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 d-none d-xl-block reset-padding"><button type="button" class="preview live_preview reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button></div>
                                </div>
                                <div class="row card-last-button-sec ">
                                    
                                    <button type="button" class="preview live_preview d-block d-xl-none customize reset-margin" data-toggle="modal" data-target="#exampleModal-1">Customize</button>
                                    <button type="button" class="preview live_preview d-block d-xl-none  reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-xl-6 col-lg-4 col-md-6 reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                                <i class="fa fa-bookmark"></i>
                                <i class="fa fa-thumbs-up  "></i>
                            </div>
                            <div class="card_body mt-3">
                                <ul class="badge-lists">
                                    <li class="badge badge-light">Minimal</li>
                                    <li class="badge badge-light">Classic</li>
                                </ul>
                                <span class="like-counts-text">1245 likes</span>
                                <a class="badge_box_content" href="javascript:void(0)" data-toggle="modal" data-target="#badge_box_lists">view more</a>
                                <h3>We must give title here</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                <div class="row reset-margin">
                                    <div class="col-6 reset-padding">
                                        <span class="color-choice reset-margin">Color choice</span>
                                        <ul class="d-flex color-selector mt-2">
                                            <li style="background: #9D4EDD;"></li>
                                            <li style="background: #FF570A;"></li>
                                            <li style="background: #6EC630;"></li>
                                            <li style="background: #EAAB3D;"></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 d-none d-xl-block reset-padding"><button type="button" class="preview live_preview reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button></div>
                                </div>
                                <div class="row card-last-button-sec ">
                                    
                                    <button type="button" class="preview live_preview d-block d-xl-none customize reset-margin" data-toggle="modal" data-target="#exampleModal-1">Customize</button>
                                    <button type="button" class="preview live_preview d-block d-xl-none  reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-xl-6 col-lg-4 col-md-6 reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                                <i class="fa fa-bookmark"></i>
                                <i class="fa fa-thumbs-up "></i>
                            </div>
                            <div class="card_body mt-3">
                                <ul class="badge-lists">
                                    <li class="badge badge-light">Minimal</li>
                                    <li class="badge badge-light">Classic</li>
                                </ul>
                                <span class="like-counts-text">1245 likes</span>
                                <a class="badge_box_content" href="javascript:void(0)" data-toggle="modal" data-target="#badge_box_lists">view more</a>
                                <h3>We must give title here</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                <div class="row reset-margin">
                                    <div class="col-6 reset-padding">
                                        <span class="color-choice reset-margin">Color choice</span>
                                        <ul class="d-flex color-selector mt-2">
                                            <li style="background: #9D4EDD;"></li>
                                            <li style="background: #FF570A;"></li>
                                            <li style="background: #6EC630;"></li>
                                            <li style="background: #EAAB3D;"></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 d-none d-xl-block reset-padding"><button type="button" class="preview live_preview reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button></div>
                                </div>
                                <div class="row card-last-button-sec ">
                                    
                                    <button type="button" class="preview live_preview d-block d-xl-none customize reset-margin" data-toggle="modal" data-target="#exampleModal-1">Customize</button>
                                    <button type="button" class="preview live_preview d-block d-xl-none  reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-xl-6 col-lg-4 col-md-6  reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                                <i class="fa fa-bookmark"></i>
                                <i class="fa fa-thumbs-up "></i>
                            </div>
                            <div class="card_body mt-3">
                                <ul class="badge-lists">
                                    <li class="badge badge-light">Minimal</li>
                                    <li class="badge badge-light">Classic</li>
                                </ul>
                                <span class="like-counts-text">1245 likes</span>
                                <a class="badge_box_content" href="javascript:void(0)" data-toggle="modal" data-target="#badge_box_lists">view more</a>
                                <h3>We must give title here</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                <div class="row reset-margin">
                                    <div class="col-6 reset-padding">
                                        <span class="color-choice reset-margin">Color choice</span>
                                        <ul class="d-flex color-selector mt-2">
                                            <li style="background: #9D4EDD;"></li>
                                            <li style="background: #FF570A;"></li>
                                            <li style="background: #6EC630;"></li>
                                            <li style="background: #EAAB3D;"></li>
                                        </ul>
                                    </div>
                                    <div class="col-6  d-none d-xl-block reset-padding"><button type="button" class="preview live_preview reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button></div>
                                </div>
                                <div class="row card-last-button-sec ">
                                    
                                    <button type="button" class="preview live_preview d-block d-xl-none customize reset-margin" data-toggle="modal" data-target="#exampleModal-1">Customize</button>
                                    <button type="button" class="preview live_preview d-block d-xl-none  reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-xl-6 col-lg-4 col-md-6  reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                                <i class="fa fa-bookmark"></i>
                                <i class="fa fa-thumbs-up "></i>
                            </div>
                            <div class="card_body mt-3">
                                <ul class="badge-lists">
                                    <li class="badge badge-light">Minimal</li>
                                    <li class="badge badge-light">Classic</li>
                                </ul>
                                <span class="like-counts-text">1245 likes</span>
                                <a class="badge_box_content" href="javascript:void(0)" data-toggle="modal" data-target="#badge_box_lists">view more</a>
                                <h3>We must give title here</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                <div class="row reset-margin">
                                    <div class="col-6 reset-padding">
                                        <span class="color-choice reset-margin">Color choice</span>
                                        <ul class="d-flex color-selector mt-2">
                                            <li style="background: #9D4EDD;"></li>
                                            <li style="background: #FF570A;"></li>
                                            <li style="background: #6EC630;"></li>
                                            <li style="background: #EAAB3D;"></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 d-none d-xl-block reset-padding"><button type="button" class="preview live_preview reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button></div>
                                </div>
                                <div class="row card-last-button-sec ">
                                    
                                    <button type="button" class="preview live_preview d-block d-xl-none customize reset-margin" data-toggle="modal" data-target="#exampleModal-1">Customize</button>
                                    <button type="button" class="preview live_preview d-block d-xl-none  reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-xl-6 col-lg-4  d-none  d-lg-block d-xl-none  reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                                <i class="fa fa-bookmark"></i>
                                <i class="fa fa-thumbs-up "></i>
                            </div>
                            <div class="card_body mt-3">
                                <ul class="badge-lists">
                                    <li class="badge badge-light">Minimal</li>
                                    <li class="badge badge-light">Classic</li>
                                </ul>
                                <span class="like-counts-text">1245 likes</span>
                                <a class="badge_box_content" href="javascript:void(0)" data-toggle="modal" data-target="#badge_box_lists">view more</a>
                                <h3>We must give title here</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                <div class="row reset-margin">
                                    <div class="col-6 reset-padding">
                                        <span class="color-choice reset-margin">Color choice</span>
                                        <ul class="d-flex color-selector mt-2">
                                            <li style="background: #9D4EDD;"></li>
                                            <li style="background: #FF570A;"></li>
                                            <li style="background: #6EC630;"></li>
                                            <li style="background: #EAAB3D;"></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 d-none d-xl-block reset-padding"><button type="button" class="preview live_preview reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button></div>
                                </div>
                                <div class="row card-last-button-sec ">
                                    
                                    <button type="button" class="preview live_preview d-block d-xl-none customize reset-margin" data-toggle="modal" data-target="#exampleModal-1">Customize</button>
                                    <button type="button" class="preview live_preview d-block d-xl-none  reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-xl-6 col-lg-4 d-none  d-lg-block d-xl-none  reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                                <i class="fa fa-bookmark"></i>
                                <i class="fa fa-thumbs-up "></i>
                            </div>
                            <div class="card_body mt-3">
                                <ul class="badge-lists">
                                    <li class="badge badge-light">Minimal</li>
                                    <li class="badge badge-light">Classic</li>
                                </ul>
                                <span class="like-counts-text">1245 likes</span>
                                <a class="badge_box_content" href="javascript:void(0)" data-toggle="modal" data-target="#badge_box_lists">view more</a>
                                <h3>We must give title here</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                <div class="row reset-margin">
                                    <div class="col-6 reset-padding">
                                        <span class="color-choice reset-margin">Color choice</span>
                                        <ul class="d-flex color-selector mt-2">
                                            <li style="background: #9D4EDD;"></li>
                                            <li style="background: #FF570A;"></li>
                                            <li style="background: #6EC630;"></li>
                                            <li style="background: #EAAB3D;"></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 d-none d-xl-block reset-padding"><button type="button" class="preview live_preview reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button></div>
                                </div>
                                <div class="row card-last-button-sec ">
                                    
                                    <button type="button" class="preview live_preview d-block d-xl-none customize reset-margin" data-toggle="modal" data-target="#exampleModal-1">Customize</button>
                                    <button type="button" class="preview live_preview d-block d-xl-none  reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-xl-6 col-lg-4 d-none  d-lg-block d-xl-none  reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                                <i class="fa fa-bookmark"></i>
                                <i class="fa fa-thumbs-up "></i>
                            </div>
                            <div class="card_body mt-3">
                                <ul class="badge-lists">
                                    <li class="badge badge-light">Minimal</li>
                                    <li class="badge badge-light">Classic</li>
                                </ul>
                                <span class="like-counts-text">1245 likes</span>
                                <a class="badge_box_content" href="javascript:void(0)" data-toggle="modal" data-target="#badge_box_lists">view more</a>
                                <h3>We must give title here</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                <div class="row reset-margin">
                                    <div class="col-6 reset-padding">
                                        <span class="color-choice reset-margin">Color choice</span>
                                        <ul class="d-flex color-selector mt-2">
                                            <li style="background: #9D4EDD;"></li>
                                            <li style="background: #FF570A;"></li>
                                            <li style="background: #6EC630;"></li>
                                            <li style="background: #EAAB3D;"></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 d-none d-xl-block reset-padding"><button type="button" class="preview live_preview reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button></div>
                                </div>
                                <div class="row card-last-button-sec ">
                                    
                                    <button type="button" class="preview live_preview d-block d-xl-none customize reset-margin" data-toggle="modal" data-target="#exampleModal-1">Customize</button>
                                    <button type="button" class="preview live_preview d-block d-xl-none  reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-xl-6 col-lg-4 d-none  d-lg-block d-xl-none  reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                                <i class="fa fa-bookmark"></i>
                                <i class="fa fa-thumbs-up "></i>
                            </div>
                            <div class="card_body mt-3">
                                <ul class="badge-lists">
                                    <li class="badge badge-light">Minimal</li>
                                    <li class="badge badge-light">Classic</li>
                                </ul>
                                <span class="like-counts-text">1245 likes</span>
                                <a class="badge_box_content" href="javascript:void(0)" data-toggle="modal" data-target="#badge_box_lists">view more</a>
                                <h3>We must give title here</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                <div class="row reset-margin">
                                    <div class="col-6 reset-padding">
                                        <span class="color-choice reset-margin">Color choice</span>
                                        <ul class="d-flex color-selector mt-2">
                                            <li style="background: #9D4EDD;"></li>
                                            <li style="background: #FF570A;"></li>
                                            <li style="background: #6EC630;"></li>
                                            <li style="background: #EAAB3D;"></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 d-none d-xl-block reset-padding"><button type="button" class="preview live_preview reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button></div>
                                </div>
                                <div class="row card-last-button-sec ">
                                    
                                    <button type="button" class="preview live_preview d-block d-xl-none customize reset-margin" data-toggle="modal" data-target="#exampleModal-1">Customize</button>
                                    <button type="button" class="preview live_preview d-block d-xl-none  reset-margin" data-toggle="modal" data-target="#exampleModal-1">Live Preview</button>
                                </div>

                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </section>
        <!-- page nation -->
        <section class="website-pagenation">
            <div class="container container-90 reset-padding" style="overflow:hidden;">
                <nav aria-label="Page navigation example website-pagenation-nav">
                    <ul class="pagination website-pagenation-nav_ul reset-margin">
                        <li class="page-item website-pagenation-nav_ul_li">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item section-num"><a class="page-link" href="#">1</a></li>
                        <li class="page-item section-num"><a class="page-link" href="#">2</a></li>
                        <li class="page-item section-num"><a class="page-link" href="#">3</a></li>
                        <li class="page-item section-num"><a class="page-link" href="#">4</a></li>
                        <li class="page-item section-num"><a class="page-link" href="#">5</a></li>
                        <li class="page-item section-num">
                            <a class="page-link reset-margin" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- slide show -->
        <section class="slide-show-recent_cardview">
            <div id="owl_slide_1" class="container container-90 reset-padding">
                <h2 class="card_subtitle">Lorem ipsum dolor sit amet, consetetur</h2>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                </div>
            </div>
            <div id="owl_slide_2" class="container container-90 reset-padding">
                <h2 class="card_subtitle">Lorem ipsum dolor sit amet, consetetur</h2>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                    <div class="item">
                        <img src="images/card-image-1.png">
                    </div>
                </div>
            </div>
            
        </section>




        <!-- footer -->
        <section class="footer-section">
            <?php include 'includes/footer.php'; ?>
        </section>
    </main>

    <?php
    include 'includes/sidebar.php';
    include 'model.php';
    ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

    <script src="js/modernizr.js"></script>
    <script src="js/js-offcanvas.pkgd.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/mobile_menu.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
        
        
        
        function equalheight() {
            var maxHeight = 0;
            $('.catelogu_template_item .card_block').each(function (index) {
                
                $(this).find('.card_body p').height('auto');
                $(this).find('.card_body p').each(function (index) {
                    if($(this).height() > maxHeight){
                        maxHeight = $(this).height();
                    }
                });
                $(this).find('.card_body p').height(maxHeight);
            });
        }
        $(document).ready(function () {
            equalheight();
        });

        $(window).bind("resize", equalheight);
        
        $(document).ready(function(){
            $(".wishlist-container .remove").each(function(inde, item){
                $(item).click(function(event) {
                    
                    $(this).next().hide();
                    if ($(window).width() >= 575) {
                        $(this).parent().parent().prev().parent().prev().css({
                            'width' : '70px'
                        });
                    }
                    else{
                        $(this).parent().parent().prev().parent().prev().css({
                            'width' : '15%'
                        });
                    }
                    $(this).parent().parent().prev().parent().css({
                        'margin-left' : '18%',
                    });
                    $(this).hide();
                    event.preventDefault();
                });
            });

            $(".wish-close-bx").each(function(inde, item){
                $(item).click(function(event) {
                    $(this).parent().css({
                        'width' : '0'
                    });
                    $(this).parent().next().css({
                        'margin-left' : '0'
                    });
                    $(this).parent().next().find('.card-link.preview').show();
                    $(this).parent().next().find('.card-link.remove').show();
                });
            });

            
        });
        // $.myjQuery = function() {
        //     console.log($(this))
        // };
        // function closeNav(){
        //     $.myjQuery();
        // }
        
        $(document).ready(function() {

            $('.owl-carousel').owlCarousel({
                loop: true,
                navText:['<img src="images/ios-arrow-forward.png" />','<img src="images/ios-arrow-backward.png" />'],
                margin: 10,
                responsiveClass: true,
                nav:true,
                dots:false,
                responsive: {
                  0: {
                    items: 2
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 3,
                    loop: false,
                    margin: 20
                  }
                }
              });

            // breakpoint and up
            $(window).resize(function() {
                if ($(window).width() >= 980) {
                    $(".megamenu").on("click", function(e) {
                        e.stopPropagation();
                    });
                }
            });
            $(document).on('change', '#file', function() {
                filePreview(this);
            });


            function filePreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    var url = URL.createObjectURL(input.files[0]);
                    var img = new Image();
                    img.src = url;
                    img.onload = function() {
                        $(".pr-W").html(this.width);
                        $(".pr-H").html(this.height);
                        $(".fl-type").html(input.files[0].type)
                    }

                    reader.onload = function(e) {
                        $('#imgPreview + img').remove();
                        $('#imgPreview').after('<img src="' + e.target.result + '" class="pic-view" style="max-width:100%"/>');
                    };
                    reader.readAsDataURL(input.files[0]);
                    $('.img-preview').show();
                } else {
                    $('#imgPreview + img').remove();
                    $('.img-preview').hide();

                }


            }
        });

        $(function() {

            var rotation = 0;
            $("#rright").click(function() {
                rotation = (rotation - 90) % 360;
                $(".pic-view").css({
                    'transform': 'rotate(' + rotation + 'deg)'
                });
                $(".pic-view").parent().height($(".pic-view").height())
                if (rotation != 0) {
                    $(".pic-view").css({
                        'height': 'auto',
                        'max-width': '100%'
                    });
                } else {
                    $(".pic-view").css({
                        'height': 'auto',
                        'max-width': '100%'
                    });
                }
                $('#rotation').val(rotation);
                $('.pr-W').html("");
                $('.pr-W').html($(".pic-view").width());
                $('.pr-H').html("");
                $('.pr-H').html($(".pic-view").height());
                // $(".pic-view").css({'height': $(".pic-view").height()});


            });

            $("#rleft").click(function() {
                rotation = (rotation + 90) % 360;
                $(".pic-view").css({
                    'transform': 'rotate(' + rotation + 'deg)'
                });
                $(".pic-view").parent().height($(".pic-view").height())
                if (rotation != 0) {
                    $(".pic-view").css({
                        'height': 'auto',
                        'max-width': '100%'
                    });
                } else {
                    $(".pic-view").css({
                        'height': 'auto',
                        'max-width': '100%'
                    });
                }
                $('#rotation').val(rotation);
                $('.pr-W').html("");
                $('.pr-W').html($(".pic-view").width());
                $('.pr-H').html("");
                $('.pr-H').html($(".pic-view").height());
            });


            $(document).on("create.offcanvas", function(e) {
                var dataOffcanvas = $(e.target).data('offcanvas-component');
                console.log(dataOffcanvas);
                dataOffcanvas.onOpen = function() {
                    console.log('Callback onOpen');
                };
                dataOffcanvas.onClose = function() {
                    console.log('Callback onClose');
                };

            });

            var leftOffcanvas;

            function openOffcanvas() {
                leftOffcanvas.open();
            }
            window.openOffcanvas = openOffcanvas;

            $('#left').on("create.offcanvas", function(e) {
                leftOffcanvas = $(this).data('offcanvas-component');
                console.log(leftOffcanvas);
            });

            $('.js-open-offcanvas').on('click', function() {
                openOffcanvas();
            });

            $(document).trigger("enhance");

            $('.tab-apply-bar .filter-bar').on('click', function() {
                $(".dropdown-menu.megamenu,.dropdown.megamenu-li").removeClass("show");
                $(".navbar-nav").removeClass("active")
            });
            
            //attatch click event to the checkbox, then, based on the checked checkboxes to add value to the tags input.
            var filterDiv = $(".filter-option").width();
            $(".dropdown-menu.megamenu").width(filterDiv);
            $(".bootstrap-tagsinput").width(filterDiv);
            $(".tab-apply-bar").css("width", filterDiv);
            $('.dropdown-menu,.tagsBoxDropdown').on("click.bs.dropdown", function(e) {
                e.stopPropagation();
            });

            $('.dropdown').on('show.bs.dropdown', function() {
                $(this).parents('.navbar-nav').addClass('active');
                
                var checkboxDiv = $(this).find('.megamenu').height();
                $(".tagsBoxDropdown").css("top", checkboxDiv + 91);
                if ($(window).width() < 1200) {
                    $(this).find('.megamenu').height(checkboxDiv+100);
                }
                
            });
            $('.dropdown').on('hide.bs.dropdown', function() {
                $(this).parents('.navbar-nav').removeClass('active');
                $(".tagsBoxDropdown").css("top", "48px");
            });

            $(".wrapper input[type='checkbox']").each(function(inde, item){
                $(item).click(function() {
                    var checkedvalue = [];
                    $(".wrapper input[type='checkbox']:checked").each(function(index, ele) {
                        checkedvalue.push($(ele).val());
                    })
                    
                    if(checkedvalue.length == 1 && $(".tagsBoxDropdown .bootstrap-tagsinput").find( ".least-ele").length == 0){
                        $(".tagsBoxDropdown .bootstrap-tagsinput").last().append("<a href='javascript:;' class='clear-filter-tag least-ele' onclick='filter_remover();'>Clear All</a>");
                    }
                    else if(checkedvalue.length == 0){
                        $(".tagsBoxDropdown .bootstrap-tagsinput").find( ".least-ele").remove();
                    }

                    var result = checkedvalue.join(",");
                    $("#tagsinput").tagsinput('removeAll');
                    $("#tagsinput").tagsinput('add', result);

                });
            });


            //trace the tag remove event, then, based on the tags to checked/unchecked the checkbox
            $("#tagsinput").on('itemRemoved', function() {
                var valarray = [];
                valarray = $("#tagsinput").val().split(",");
                if($("#tagsinput").val() == ''){
                    $(".tagsBoxDropdown .bootstrap-tagsinput").find( ".least-ele").remove();
                }
                
                
                $(".wrapper input[type='checkbox']").each(function(index, item) {
                    if (jQuery.inArray($(item).val(), valarray) != -1) {
                        $(item).prop("checked", true);
                    } else {
                        $(item).prop("checked", false);
                    }
                });
            });

        });

        
        $("body").on("click", ".clear-filter-tag", function() {
            
            $(".contactform-check--label input[type='checkbox']").each(function(inde, item){
                $(item).prop('checked', false);
            });
        });

        function filter_remover(){
            $(".contactform-check--label input[type='checkbox']").each(function(inde, item){
                $(item).prop('checked', false);
            });
            $("#tagsinput").tagsinput('removeAll');
            $(".tagsBoxDropdown .bootstrap-tagsinput").find( ".least-ele").remove();
        }

        function myTabFilter() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput-tab");
            filter = input.value.toUpperCase();
            
            b2c_ul = document.getElementById("b2c_tabUL");
            b2c_li = b2c_ul.getElementsByTagName("li");
            for (i = 0; i < b2c_li.length; i++) {
                a = b2c_li[i].getElementsByTagName("label")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    b2c_li[i].style.display = "";
                } else {
                    b2c_li[i].style.display = "none";
                }
            }

            color_ul = document.getElementById("color_tabUL");
            color_li = color_ul.getElementsByTagName("li");
            for (i = 0; i < color_li.length; i++) {
                a = color_li[i].getElementsByTagName("label")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    color_li[i].style.display = "";
                } else {
                    color_li[i].style.display = "none";
                }
            }
        }
        function myFilter() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            b2c_ul = document.getElementById("b2c_UL");
            b2c_li = b2c_ul.getElementsByTagName("li");
            for (i = 0; i < b2c_li.length; i++) {
                a = b2c_li[i].getElementsByTagName("label")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    b2c_li[i].style.display = "";
                } else {
                    b2c_li[i].style.display = "none";
                }
            }

            cat2_ul = document.getElementById("cat2_UL");
            cat2_li = cat2_ul.getElementsByTagName("li");
            for (i = 0; i < cat2_li.length; i++) {
                a = cat2_li[i].getElementsByTagName("label")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    cat2_li[i].style.display = "";
                } else {
                    cat2_li[i].style.display = "none";
                }
            }

            cat3_ul = document.getElementById("cat3_UL");
            cat3_li = cat3_ul.getElementsByTagName("li");
            for (i = 0; i < cat3_li.length; i++) {
                a = cat3_li[i].getElementsByTagName("label")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    cat3_li[i].style.display = "";
                } else {
                    cat3_li[i].style.display = "none";
                }
            }

            health_ul = document.getElementById("health_UL");
            health_li = health_ul.getElementsByTagName("li");
            for (i = 0; i < health_li.length; i++) {
                a = health_li[i].getElementsByTagName("label")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    health_li[i].style.display = "";
                } else {
                    health_li[i].style.display = "none";
                }
            }


        }
    </script>
    <script src="js/filter.js"></script>
</body>

</html>