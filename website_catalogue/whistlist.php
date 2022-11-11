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
    <link rel="stylesheet" href="css/responsivenew.css" />
    <link rel="stylesheet" href="css/mobile_style.css" />
    <link rel="icon" href="images/favicon-ico.png" sizes="32x32" />
    <link rel="icon" href="images/favicon-ico.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="images/favicon-ico.png" />
    <meta name="msapplication-TileImage" content="images/favicon-ico.png" />
    <style>
        icon-shape {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            vertical-align: middle;
        }

        .icon-sm {
            width: 2rem;
            height: 2rem;
            
        }
    </style>
</head>
<body class="index-page">
    <div class="container-fluid site-fluid">
        <section class="header-section">
            <div class="container container-85 reset-padding">
                <?php include 'includes/mobile-menu.php'; ?>
                <header class="site-header site-navbar site-navbar-target overlay-header">
                    <?php include 'includes/header.php'; ?>
                </header>
            </div>
        </section>
        
        <!-- top animation -->
        <section class="whistlist-slide-section">
            <div class="container container-90 reset-padding">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators whislist-carousel-indicator">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/slide-1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide-1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/slide-1.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a> -->
                </div>
              
            </div>

        </section>
        <!-- end top animation -->
        <!-- maintaince-section -->

        
        
        <div id="main" class="accordian-top-section ">
        
            <div class="accordion" id="faq">
                            <div class="card mb-5">
                                <div class="card-header container container-90 reset-padding" id="faqhead1">
                                    <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                                    aria-expanded="true" aria-controls="faq1"><label class="title">Maintenance <span style="color:#FFFFFF;">(Optional)</span></label></a>
                                </div>

                                <div id="faq1" class="collapse show container container-90 reset-padding accordian-first-sec" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body ">
                                        <h2>CHOOSE ONE</h2>
                                    <div class="form-check ">
                                        
                                        <input class="form-check-input radio__real" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                        Yearly subscription at XX$
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                        Monthly subscription at XX$
                                        </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-5">
                                <div class="card-header container container-90 reset-padding  accordian-second " id="faqhead2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                    aria-expanded="true" aria-controls="faq2"><label class="title">Lorem ipsum<span class="title-span">(6)</span></label></a>
                                    
                                </div>

                                <div id="faq2" class="collapse container container-90 reset-padding" aria-labelledby="faqhead2" data-parent="#faq">
                                <button type="button" class="template-button">Go to Templates</button>
                                    <div class="card-body">
                                        <div class="row reset-margin">
                                                <div class="col-6"><h2 class="accordian-sub-title">LOREM IPSUM</h2></div>
                                                <div class="col-6">
                                                    <div class="input-group searchBox">
                                                        <input class="form-control reset-padding " type="text" id="myFilter" placeholder="Search for more templates..." aria-label="Search">
                                                    <div class="input-group-append align-self-center">
                                                            <span class="fa fa-search form-control-feedback searchicon" id="basic-text1"></span>
                                                    </div>
                                                    </div>
                                                </div>
                                        </div>      
                                    
                                        <div class="row slider-acordien-view reset-margin">
                                            <div class="col-2 accoridan-slider-sec reset-padding"><img src="images/accoridanimage1.jpg" class="mw-100">
                                                    <div class="form-group checkboxTop-block ">
                                                        <label class="contactform-check--label block-color">
                                                            <input class="contactform-check--input" type="checkbox" value="option1">
                                                            <span class="checkmark"></span>
                                                            <span class="checked-color">Starter Kit</span>
                                                        </label>
                                                        </div>
                                            </div>
                                            <div class="col-2 accoridan-slider-sec reset-padding"><img src="images/accordianimage-2.jpg" class="mw-100">
                                                    <div class="form-group checkboxTop-block ">
                                                        <label class="contactform-check--label block-color">
                                                            <input class="contactform-check--input" type="checkbox" value="option1">
                                                            <span class="checkmark"></span>
                                                            <span class="checked-color">Coming Soon Page</span>
                                                        </label>
                                                    </div>
                                            </div>
                                            <div class="col-2 accoridan-slider-sec  reset-padding"><img src="images/accordianimage-3.jpg" class="mw-100">
                                                    <div class="form-group checkboxTop-block ">
                                                        <label class="contactform-check--label block-color">
                                                            <input class="contactform-check--input" type="checkbox" value="option1">
                                                            <span class="checkmark"></span>
                                                            <span class="checked-color">Coming Soon Page</span>
                                                        </label>
                                                    </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-5">
                                <div class="card-header container container container-90 accordian-third reset-padding " id="faqhead3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                    aria-expanded="true" aria-controls="faq3"><label class="title">Lorem ipsum<span class="title-span">(6)</span></label></a>
                                </div>

                                <div id="faq3" class="collapse container container container-90 reset-padding" aria-labelledby="faqhead3" data-parent="#faq">
                                    <button type="button" class="template-button">Go to Meeting room</button>
                                    <div class="card-body">
                                        <div class="row reset-margin">
                                                    <div class="col-6 p-0"><h2 class="accordian-sub-title">LOREM IPSUM</h2></div>
                                                    <div class="col-6 p-0">
                                                        <div class="input-group searchBox">
                                                            <input class="form-control reset-padding " type="text" id="myFilter" placeholder="Search for more templates..." aria-label="Search">
                                                        <div class="input-group-append align-self-center ">
                                                                <span class="fa fa-search form-control-feedback searchicon" id="basic-text1"></span>
                                                        </div>
                                                        </div>
                                                    </div>
                                        </div> 
                                        <div class="col accoridan-slider-sec reset-padding">
                                            <div class="form-group checkboxTop-block ">
                                                <label class="contactform-check--label block-color">
                                                    <input class="contactform-check--input" type="checkbox" value="option1">
                                                    <span class="checkmark"></span>
                                                    <span class="checked-color">Starter Kit</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group checkboxTop-block mt-2 ">
                                                <label class="contactform-check--label block-color">
                                                       <input class="contactform-check--input" type="checkbox" value="option1">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-color">Starter Kit</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr style="border-top:1px solid #707070;">
                                            <div class="row reset-margin">
                                                    <div class="col-6 p-0"><h2 class="accordian-sub-title">Add ons</h2></div>
                                                    <div class="col-6 p-0 text-right">
                                                        <i class="fa fa-question-circle" style="font-size:24px;color:#3EBDCC"></i>
                                                    </div>
                                            </div> 
                                            <div class="form-group checkboxTop-block ">
                                                <label class="contactform-check--label block-color">
                                                    <input class="contactform-check--input" type="checkbox" value="option1">
                                                    <span class="checkmark"></span>
                                                    <span class="checked-color">Reservation Tablet</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group checkboxTop-block mt-2 ">
                                                <label class="contactform-check--label block-color">
                                                       <input class="contactform-check--input" type="checkbox" value="option1">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-color">Wireless Presentation Pod</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>        
                                            </div>
                                            <div class="form-group checkboxTop-block mt-2 ">
                                                <label class="contactform-check--label block-color">
                                                       <input class="contactform-check--input" type="checkbox" value="option1">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-color">Wireless Presentation Pod</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>        
                                            </div>
                                            <div class="form-group checkboxTop-block mt-2 ">
                                                <label class="contactform-check--label block-color">
                                                       <input class="contactform-check--input" type="checkbox" value="option1">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-color">Wired LAN for desktop (6 persons)</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>        
                                            </div>
                                            <div class="form-group checkboxTop-block mt-2 ">
                                                <label class="contactform-check--label block-color">
                                                       <input class="contactform-check--input" type="checkbox" value="option1">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-color">Wireless Internet guest access</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>         
                                            </div>
                                            <div class="form-group checkboxTop-block mt-2 ">
                                                <label class="contactform-check--label block-color">
                                                       <input class="contactform-check--input" type="checkbox" value="option1">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-color">2nd Meeting Room Screen</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>        
                                            </div>
                                        </div>

                                             
                                        
                                    </div>
                                </div>
                                
                            </div>

                            
                            <div class="card mb-8">
                                <div class="card-header container container container-90 accordian-third reset-padding " id="faqhead5">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                                    aria-expanded="true" aria-controls="faq5"><label class="title">Infrastructure & Security</label><span class="title-span">(6)</span></a>
                                </div>

                                <div id="faq5" class="collapse container container container-90 reset-padding" aria-labelledby="faqhead4" data-parent="#faq">
                                    <button type="button" class="template-button">Go to Infrastructure</button>
                                    <div class="card-body">
                                        <div class="row reset-margin">
                                                    <div class="col-6 p-0"><h2 class="accordian-sub-title">LOREM IPSUM</h2></div>
                                                    <div class="col-6 p-0">
                                                        <div class="input-group searchBox">
                                                            <input class="form-control reset-padding " type="text" id="myFilter" placeholder="Search for more templates..." aria-label="Search">
                                                        <div class="input-group-append align-self-center ">
                                                                <span class="fa fa-search form-control-feedback searchicon" id="basic-text1"></span>
                                                        </div>
                                                        </div>
                                                    </div>
                                        </div> 
                                        <div class="col accoridan-slider-sec reset-padding">
                                            <div class="form-group checkboxTop-block ">
                                                <label class="contactform-check--label block-color">
                                                    <input class="contactform-check--input" type="checkbox" value="option1">
                                                    <span class="checkmark"></span>
                                                    <span class="checked-color">Starter Kit</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group checkboxTop-block mt-2 ">
                                                <label class="contactform-check--label block-color">
                                                       <input class="contactform-check--input" type="checkbox" value="option1">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-color">Starter Kit</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr style="border-top:1px solid #707070;">
                                            <div class="row reset-margin">
                                                    <div class="col-6 p-0"><h2 class="accordian-sub-title">Add ons</h2></div>
                                                    <div class="col-6 p-0 text-right">
                                                        <i class="fa fa-question-circle" style="font-size:24px;color:#3EBDCC"></i>
                                                    </div>
                                            </div> 
                                            <div class="form-group checkboxTop-block ">
                                                <label class="contactform-check--label block-color">
                                                    <input class="contactform-check--input" type="checkbox" value="option1">
                                                    <span class="checkmark"></span>
                                                    <span class="checked-color">Reservation Tablet</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group checkboxTop-block mt-2 ">
                                                <label class="contactform-check--label block-color">
                                                       <input class="contactform-check--input" type="checkbox" value="option1">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-color">Wireless Presentation Pod</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>        
                                            </div>
                                            <div class="form-group checkboxTop-block mt-2 ">
                                                <label class="contactform-check--label block-color">
                                                       <input class="contactform-check--input" type="checkbox" value="option1">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-color">Wireless Presentation Pod</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>        
                                            </div>
                                            <div class="form-group checkboxTop-block mt-2 ">
                                                <label class="contactform-check--label block-color">
                                                       <input class="contactform-check--input" type="checkbox" value="option1">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-color">Wired LAN for desktop (6 persons)</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>        
                                            </div>
                                            <div class="form-group checkboxTop-block mt-2 ">
                                                <label class="contactform-check--label block-color">
                                                       <input class="contactform-check--input" type="checkbox" value="option1">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-color">Wireless Internet guest access</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>         
                                            </div>
                                            <div class="form-group checkboxTop-block mt-2 ">
                                                <label class="contactform-check--label block-color">
                                                       <input class="contactform-check--input" type="checkbox" value="option1">
                                                        <span class="checkmark"></span>
                                                        <span class="checked-color">2nd Meeting Room Screen</span>
                                                </label>
                                                <div class="d-flex justify-content-between">
                                                    <p class="meeting-para">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                                                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                                                        consetetur 

                                                    </p>    
                                                    <div class="input-group justify-content-end align-items-center" style="max-width:150px;">
                                                        <div class="id-box">
                                                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
                                                            Qty: <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                                                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
                                                        </div>
                                                    </div>
                                                </div>        
                                            </div>
                                        </div>

                                             
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="container container-90 text-right">
                            <button type="button" class="btn btn-primary btn-c2d-primary-md mt-5" data-toggle="modal" data-target="#exampleModal-1">Submit</button>
                        </div>
                        
            
        </div>
       
        <!-- footer -->
        <section class="footer-section">
            <?php  include 'includes/footer.php'; ?>
        </section>

    </div>
    <?php include 'model-v2.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/mobile_menu.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
        function incrementValue(e) {
            e.preventDefault();
            var fieldName = $(e.target).data('field');
            var parent = $(e.target).closest('div');
            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

            if (!isNaN(currentVal)) {
                parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
            } else {
                parent.find('input[name=' + fieldName + ']').val(0);
            }
        }

        function decrementValue(e) {
            e.preventDefault();
            var fieldName = $(e.target).data('field');
            var parent = $(e.target).closest('div');
            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

            if (!isNaN(currentVal) && currentVal > 0) {
                parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
            } else {
                parent.find('input[name=' + fieldName + ']').val(0);
            }
        }

        $('.input-group').on('click', '.button-plus', function(e) {
            incrementValue(e);
        });

        $('.input-group').on('click', '.button-minus', function(e) {
            decrementValue(e);
        });
    </script>
    
   
</body>
</html>