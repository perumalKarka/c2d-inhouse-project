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
<body>
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
        <section class="request-form">
        <h2 class="form-heading">Request for a new sector</h2>
            <div class="container container-70 ">
            
        <form class="form-container">
                <div class="form-group request-form">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                </form>
</div>

        </section>  
        
        


        <!-- footer -->
        <section class="footer-section">
            <?php  include 'includes/footer.php'; ?>
        </section>
    </div>

    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/mobile_menu.js"></script>
    <script src="js/main.js"></script>
</body>
</html>