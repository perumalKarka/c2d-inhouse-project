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
    <link rel="stylesheet" href="css/mobile_style.css" />
    <link rel="icon" href="images/favicon-ico.png" sizes="32x32" />
    <link rel="icon" href="images/favicon-ico.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="images/favicon-ico.png" />
    <meta name="msapplication-TileImage" content="images/favicon-ico.png" />

    <style type="text/css">
        
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
                <div class="row">
                    <div class="col-6 catelogue-left-sub__title reset-padding"><p class="reset-margin">Lorem ipsum dolor sit amet, consetetur</p></div>
                    <div class="col-6 catelogue-right-searchbar align-self-end reset-padding ">
                        <div class="input-group searchBox">
                           <input class="form-control reset-padding mb-2" type="text" id="myFilter" placeholder="Search for your type of business..." aria-label="Search">
                            <div class="input-group-append align-self-center mb-2">
                                <span class="fa fa-search form-control-feedback searchicon"id="basic-text1"></span>
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
                    <div class="col-7 align-self-center p-0">
                        <nav class="wrapper navbar navbar-expand-lg rounded">
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
                                                    <ul class="d-flex filter-option-lists">
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
                                            <div class="row m-0">
                                                <div class="col-sm-4 col-lg-4 p-0">
                                                    <h3 class="cat-sub-title">B2C</h3>
                                                    <ul class="row filter-option-lists m-0">
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Grocery Shop">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Grocery Shop</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Financial Services">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Financial Services</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Wine Shop">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Wine Shop</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Plumbing Services">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Plumbing Services</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Automotive">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Automotive</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Movers & Packers">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Movers & Packers</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4 col-lg-4 pl-4 pr-4">
                                                    <h3 class="cat-sub-title">Category 2</h3>
                                                    <ul class="row filter-option-lists m-0">
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Communications">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Communications</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Transport Services">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Transport Services</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Postal Services">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Postal Services</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Aviation">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Aviation</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Pharmaceuticals">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Pharmaceuticals</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Food Services">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Food Services</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4 col-lg-4 p-0">
                                                    <h3 class="cat-sub-title">Category 3</h3>
                                                    <ul class="row filter-option-lists m-0">
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Cosmetics">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Cosmetics</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Tourism & Hospitality">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Tourism & Hospitality</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="E-commerce site">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">E-commerce site</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Real Estate">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Real Estate</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Banking Services">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Banking Services</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Healthcare">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Healthcare</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-sm-4 col-lg-4 p-0">
                                                    <h3 class="cat-sub-title">Health</h3>
                                                    <ul class="row filter-option-lists m-0">
                                                        <li class="col-6 p-0">
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Physiotheraphy">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Physiotheraphy</span>
                                                            </label>
                                                        </li>
                                                        <li class="col-6 p-0">
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
                                        <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Color Schemee</a>
                                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown02">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-12">
                                                    <ul class="d-flex filter-option-lists">
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Blue">
                                                                <span class="checkmark"></span>
                                                                <span class="checked-color">Blue</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Green">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Green</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="White">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">White</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Brown">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Brown</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="contactform-check--label block-color">
                                                                <input class="contactform-check--input" type="checkbox" value="Black">
                                                                    <span class="checkmark"></span>
                                                                    <span class="checked-color">Black</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown megamenu-li">
                                        <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Style</a>
                                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown02">
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
                                  
                                </ul>
                                
                            </div>
                            
                        </nav>
                        
                        <div class="tagsBox">
                                <input type="text" data-role="tagsinput" id="tagsinput" name="tags" class="form-control">
                        </div>
                    </div>
                    <div class="col-5 request p-0">
                    <button type="button" class="request-sector" data-toggle="modal" data-target="#exampleModal">Request a new sector</button>
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->
                    </div>
                </div>
            </div>

            
        </section> 
        <!-- card section -->
        <section class="cardsection">
            <div class="container container-90 reset-padding">
                <div class="row catelogu_template_item reset-margin">
                    <div class="card_block col-6 reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                            <i class="fa fa-bookmark"></i>
                            <i class="fa fa-thumbs-up like "></i>
                            
                            </div>
                            <div class="card_body mt-3">
                                <button type="button"  >MINIMAL</button>
                                <button type="button" style="color:#3EBDCC;">CLASSIC</button>
                                <span>1245 liked this design</span>
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
                                    <div class="col-6 reset-padding"><button type="button" class="preview reset-margin" data-toggle="modal" data-target="#exampleModal-1" >Live Preview</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-6 reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img"> 
                            <i class="fa fa-bookmark"></i>
                            <i class="fa fa-thumbs-up  "></i>
                            </div>
                            <div class="card_body mt-3">
                                <button type="button"  >MINIMAL</button>
                                <button type="button" style="color:#3EBDCC;">CLASSIC</button>
                                <span>1245 liked this design</span>
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
                                    <div class="col-6 reset-padding"><button type="button" class="preview reset-margin" data-toggle="modal" data-target="#exampleModal-1"  >Live Preview</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-6 reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                            <i class="fa fa-bookmark"></i>
                            <i class="fa fa-thumbs-up "></i>
                            </div>
                            <div class="card_body mt-3">
                                <button type="button"  >MINIMAL</button>
                                <button type="button" style="color:#3EBDCC;">CLASSIC</button>
                                <span>1245 liked this design</span>
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
                                    <div class="col-6 reset-padding"><button type="button" class="preview reset-margin"  data-toggle="modal" data-target="#exampleModal-1" >Live Preview</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-6 reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                            <i class="fa fa-bookmark"></i>
                            <i class="fa fa-thumbs-up  "></i>
                            </div>
                            <div class="card_body mt-3">
                                <button type="button"  >MINIMAL</button>
                                <button type="button" style="color:#3EBDCC;">CLASSIC</button>
                                <span>1245 liked this design</span>
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
                                    <div class="col-6 reset-padding"><button type="button" class="preview reset-margin" data-toggle="modal" data-target="#exampleModal-1"  >Live Preview</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-6 reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                            <i class="fa fa-bookmark"></i>
                            <i class="fa fa-thumbs-up  "></i>
                            </div>
                            <div class="card_body mt-3">
                                <button type="button"  >MINIMAL</button>
                                <button type="button" style="color:#3EBDCC;">CLASSIC</button>
                                <span>1245 liked this design</span>
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
                                    <div class="col-6 reset-padding"><button type="button" class="preview reset-margin" data-toggle="modal" data-target="#exampleModal-1"  >Live Preview</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_block col-6 reset-padding">
                        <div class="card website_template">
                            <div class="card_image"><img src="images/cardImages.png" class="card-img">
                             <i class="fa fa-bookmark"></i>
                            <i class="fa fa-thumbs-up "></i>
                            </div>
                            <div class="card_body mt-3">
                                <button type="button"  >MINIMAL</button>
                                <button type="button" style="color:#3EBDCC;">CLASSIC</button>
                                <span>1245 liked this design</span>
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
                                    <div class="col-6 reset-padding"><button type="button" class="preview reset-margin" data-toggle="modal" data-target="#exampleModal-1"  >Live Preview</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page nation -->
        <section class="website-pagenation">
            <div class="container container-90 reset-padding"style="overflow:hidden;">
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
           
            <div id="demo_1" class="container container-90 carousel slide reset-padding " data-ride="carousel">
            <h2 class="card_subtitle">Lorem ipsum dolor sit amet, consetetur</h2>
				<div class="carousel-inner inner-slide">
					<div class="carousel-item">
						<div class="col-md-4 ads"><img src="images/Group 109.png"></div>    
						<div class="col-md-4 ads"><img src="images/Group 1199.png"></div>   
						<div class="col-md-4 ads"><img src="images/Group 109.png"></div>   
					</div>
					<div class="carousel-item active">
						<div class="col-md-4  ads"><img src="images/Group 109.png"></div>    
						<div class="col-md-4  ads"><img src="images/Group 1199.png"></div>   
						<div class="col-md-4  ads"><img src="images/Group 109.png"></div>   
					</div>
					<div class="carousel-item">
						<div class="col-md-4  ads"><img src="images/Group 109.png"></div>    
						<div class="col-md-4  ads"><img src="images/Group 1199.png"> </div>   
						<div class="col-md-4  ads"><img src="images/Group 109.png"></div>   
					</div>
				        <--Left and right controls -->
						 <a class="carousel-control-prev slide_position prev-section" href="#demo_1" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
					    <a class="carousel-control-next slide_position next-section" href="#demo_1" data-slide="next"><span class="carousel-control-next-icon"></span></a>
                </div>
            </div>
            <div id="demo_2" class="container container-90 carousel slide card_slide reset-padding"  style="margin-top:76px;"data-ride="carousel">
            <h2 class="card_subtitle">Lorem ipsum dolor sit amet, consetetur</h2>
				<div class="carousel-inner inner-slide ">
					<div class="carousel-item">
						<div class="col-md-4 ads"><img src="images/Group 109.png"></div>    
						<div class="col-md-4 ads"><img src="images/Group 1199.png"></div>   
						<div class="col-md-4 ads"><img src="images/Group 109.png"></div>   
					</div>
					<div class="carousel-item active">
						<div class="col-md-4  ads"><img src="images/Group 109.png"></div>    
						<div class="col-md-4  ads"><img src="images/Group 1199.png"></div>   
						<div class="col-md-4  ads"><img src="images/Group 109.png"></div>   
					</div>
					<div class="carousel-item">
						<div class="col-md-4  ads"><img src="images/Group 109.png"></div>    
						<div class="col-md-4  ads"><img src="images/Group 1199.png"> </div>   
						<div class="col-md-4  ads"><img src="images/Group 109.png"></div>   
					</div>
				        <!-- Left and right controls -->
						 <a class="carousel-control-prev slide_position prev-section" href="#demo_2" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
					    <a class="carousel-control-next slide_position next-section" href="#demo_2" data-slide="next"><span class="carousel-control-next-icon"></span></a>
                </div>
            </div>
        </section>
        
        


        <!-- footer -->
        <section class="footer-section">
            <?php  include 'includes/footer.php'; ?>
        </section>
    </main>
    
    <?php 
        include 'includes/sidebar.php';
        include 'model.php'; 
    ?>

    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
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
        $(document).ready(function() {

            

            // breakpoint and up  
            $(window).resize(function(){
                if ($(window).width() >= 980){	
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
                    img.onload = function()
                    {
                        $(".pr-W").html(this.width);
                        $(".pr-H").html(this.height);
                        $(".fl-type").html(input.files[0].type)
                    }
                    
                    reader.onload = function (e) {
                        $('#imgPreview + img').remove();
                        $('#imgPreview').after('<img src="'+e.target.result+'" class="pic-view" style="max-width:100%"/>');
                    };
                    reader.readAsDataURL(input.files[0]);
                    $('.img-preview').show();
                }else{
                    $('#imgPreview + img').remove();
                    $('.img-preview').hide();
                    
                }

                
            }
        });

		$( function(){
                
            var rotation = 0;
            $("#rright").click(function() {
                rotation = (rotation -90) % 360;
                $(".pic-view").css({'transform': 'rotate('+rotation+'deg)'});
                $(".pic-view").parent().height($(".pic-view").height())
                if(rotation != 0){
                    $(".pic-view").css({'height': 'auto','max-width':'100%'});
                }else{
                    $(".pic-view").css({'height': 'auto','max-width':'100%'});
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
                $(".pic-view").css({'transform': 'rotate('+rotation+'deg)'});
                $(".pic-view").parent().height($(".pic-view").height())
                if(rotation != 0){
                    $(".pic-view").css({'height': 'auto','max-width':'100%'});
                }else{
                    $(".pic-view").css({'height': 'auto','max-width':'100%'});
                }
                $('#rotation').val(rotation);
                $('.pr-W').html("");
                $('.pr-W').html($(".pic-view").width());
                $('.pr-H').html("");
                $('.pr-H').html($(".pic-view").height());
            });


			$( document ).on( "create.offcanvas", function( e ){
				var dataOffcanvas = $( e.target ).data('offcanvas-component');
				console.log(dataOffcanvas);
				dataOffcanvas.onOpen =  function() {
					console.log('Callback onOpen');
				};
				dataOffcanvas.onClose =  function() {
					console.log('Callback onClose');
				};

			} );

			var leftOffcanvas;
			function openOffcanvas () {
				leftOffcanvas.open();
            }
            window.openOffcanvas = openOffcanvas;

			$( '#left' ).on( "create.offcanvas", function( e ){
				leftOffcanvas = $(this).data('offcanvas-component');
				console.log(leftOffcanvas);
			} );

			$('.js-open-offcanvas').on('click', function () {
                openOffcanvas();
			});

			$( document ).trigger( "enhance" );


            //attatch click event to the checkbox, then, based on the checked checkboxes to add value to the tags input.
            var filterDiv = $(".filter-option").width();
            $(".dropdown-menu.megamenu").width(filterDiv);
            $(".bootstrap-tagsinput").width(filterDiv);
            $(".megamenu-li .dropdown-toggle").each(function (inde, item) {
                $(item).click(function (event) {
                    if(inde == 0){
                        $(".tagsBox").css("top","150px");
                        $(this).next().height("130px");
                    }
                    else{
                        var filterDivHeight = $(this).next().height();
                        $(".tagsBox").css("top",filterDivHeight+80);
                        $(this).next().height(filterDivHeight+100);
                    }
                    
                    if($(this).parent().hasClass('show')){
                        $(".tagsBox").hide();
                    }
                    else{
                        $(".tagsBox").show();
                    }
                });
                
            });

            
            $('.dropdown-menu,.tagsBox,.cardsection,.filter-option .request,.header-section,.catalogue-firstSection').on("click.bs.dropdown", function (e) {  
                e.stopPropagation();                            
            });
            
            $(".wrapper input[type='checkbox']").each(function (inde, item) {
                $(item).click(function () {
                    var checkedvalue = [];
                    $(".wrapper input[type='checkbox']:checked").each(function (index, ele) {
                        checkedvalue.push($(ele).val());
                    })
                    var result = checkedvalue.join(",");
                    $("#tagsinput").tagsinput('removeAll');
                    $("#tagsinput").tagsinput('add', result);

                });
            });
            //trace the tag remove event, then, based on the tags to checked/unchecked the checkbox
            $("#tagsinput").on('itemRemoved', function () {
                var valarray = $("#tagsinput").val().split(",");
                $(".wrapper input[type='checkbox']").each(function (index, item) {
                    if (jQuery.inArray($(item).val(), valarray) != -1) {
                        $(item).prop("checked", true);
                    }
                    else {
                        $(item).prop("checked", false);
                    }
                });
            });

		});
    </script>
</body>
</html>