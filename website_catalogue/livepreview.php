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
    <link rel="stylesheet" href="css/mobile_style.css" />
    <link rel="icon" href="images/favicon-ico.png" sizes="32x32" />
    <link rel="icon" href="images/favicon-ico.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="images/favicon-ico.png" />
    <meta name="msapplication-TileImage" content="images/favicon-ico.png" />
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
        <!-- live preview -->
        <section class="livepreview-firstSection">
            <div class="container container-90 reset-padding">
                <div class="row">
                    <div class="col-6 live-preview-left-sub__title reset-padding"><p class="reset-margin">Lorem ipsum dolor sit amet, consetetur</p></div>
                    <div class="col-6 live-preview-right-sub__title align-self-end reset-padding ">
                       <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p> 
                    </div>
                        
                </div>
            </div>
        </section> 
        <!-- prview-filter -->
        <section class="filtersection">
            <div class="container container-90 reset-padding">
                <div class="row filter-option reset-margin">
                    <div class="col-6 reset-padding">
                    </div>
                    <div class="col-6 preview-button reset-padding">
                    <button type="button" class="like-button"><i class="fa fa-thumbs-up "></i> Like template</button>

                    <button type="button" class="whistlist-button"><i class="fa fa-bookmark"></i>Add to Wishlist</button>
                    <button type="button" class="copyright-button" ><i class="fa fa-copyright"></i>Buy Copyright*</button>
                    
                    </div>
                </div>
            </div>
        </section> 
        <!-- body condent preview -->
        <section class="body-condent">
            <img src="images/image.jpg" class="body-condent-image">
        </section>
        
        


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
</body>
</html>