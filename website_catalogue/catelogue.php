<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | Website catalogue | C2D</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/theme-model.css" />
    <link rel="stylesheet" href="css/mobile_style.css" />
    <link rel="icon" href="images/favicon-ico.png" sizes="32x32" />
    <link rel="icon" href="images/favicon-ico.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="images/favicon-ico.png" />
    <meta name="msapplication-TileImage" content="images/favicon-ico.png" />
</head>
<body class="catelogue-page">
    <div class="container-fluid site-fluid">
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
                    <div class="col-6">
                    </div>
                    <div class="col-6 request">
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
                                    <div class="col-6 reset-padding"><button type="button" class="preview reset-margin" >Live Preview</button></div>
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
                                    <div class="col-6 reset-padding"><button type="button" class="preview reset-margin" >Live Preview</button></div>
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
                                    <div class="col-6 reset-padding"><button type="button" class="preview reset-margin" >Live Preview</button></div>
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
                                    <div class="col-6 reset-padding"><button type="button" class="preview reset-margin" >Live Preview</button></div>
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
                                    <div class="col-6 reset-padding"><button type="button" class="preview reset-margin" >Live Preview</button></div>
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
				        <--Left and right controls -->
						 <a class="carousel-control-prev slide_position prev-section" href="#demo_2" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
					    <a class="carousel-control-next slide_position next-section" href="#demo_2" data-slide="next"><span class="carousel-control-next-icon"></span></a>
                </div>
            </div>
        </section>
        
        


        <!-- footer -->
        <section class="footer-section">
            <?php  include 'includes/footer.php'; ?>
        </section>
    </div>
    <?php include 'model.php'; ?>

    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/mobile_menu.js"></script>
    <script src="js/main.js"></script>
</body>
</html>