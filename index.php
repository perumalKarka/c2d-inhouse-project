
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Accueil | C2D</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/mobile_style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/responsive-new.css" />
    <style>
      .carousel-fade-1 .carousel-item {
        display: block;
        opacity: 0;
        transition: opacity 3s ease-in-out;
      }
      .carousel-fade-2 .carousel-item {
        display: block;
        opacity: 0;
        transition: opacity 3s ease-in-out;
      }
      .carousel-fade-1 .carousel-item.active {
        opacity: 1;
      }
      .carousel-fade-2 .carousel-item.active {
        opacity: 1;
      }
      
      .carousel,
      .carousel-inner,
      .carousel-item {
        width: 100%;
        height: 100%;
      }

      
    </style>
    <link rel="icon" href="images/favicon-ico.png" sizes="32x32" />
    <link rel="icon" href="images/favicon-ico.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="images/favicon-ico.png" />
    <meta name="msapplication-TileImage" content="images/favicon-ico.png" />
  </head>
  <body class="page-home fr-site">
    <div class="container-fluid reset-padding">
          <section class="banner--with--content homepage--banner" style="background-image: url('images/homepage_banner.jpg');">
              <div class="top-sticky-bar text-center">
                <p>site web en cours de construction, la mise à jour va être sympa :-)</p>
              </div>
              <div class="container container-1280 reset-padding">
                <?php include 'includes/mobile-menu.php'; ?>
                <header class="site-header site-navbar site-navbar-target">
                    <?php include 'includes/header.php'; ?>
                </header>
                <div class="banner-content">
                  <div class="banner-row row reset-margin">
                    <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 banner-left-col">
                      <h1>Vos souhaits se réalisent avec nous </h1>
                      <p>Entreprise dynamique, nous fournissons des services pour faire du monde numérique un meilleur endroit. </p>
                      <a href="services.php" class="btn btn-primary btn-c2d-primary">Découvrir toutes nos solutions</a>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12 banner-right-col overlap-group">
                      <img src="images/home-banner-circle_450x450.png" class="bg-circle-shape-pattern d-none d-xl-block"/>
                      <div class="rectangle-152 carousel carousel-fade carousel-fade-1" data-ride="carousel" >
                        <div role="listbox" class="carousel-inner">
                          <img class="desoved-img carousel-item active" src="images/Rectangle_152.png" />    
                          <img class="desoved-img carousel-item" src="images/home-slide-03.png" />
                          <img class="desoved-img carousel-item" src="images/home-slide-04.png" />
                        </div>  
                        
                        <img class="plushover-icon plushover-icon-1" src="images/home-page-plus.png" data-toggle="tooltip" data-placement="right" data-html="true" title="Billing Software" />
                        <img class="plushover-icon plushover-icon-2" src="images/home-page-plus.png" data-toggle="tooltip" data-placement="right" data-html="true" title="Data structure" />
                        <img class="plushover-icon plushover-icon-3" src="images/home-page-plus.png" data-toggle="tooltip" data-placement="right" data-html="true" title="Digital Analysis" />
                        <img class="plushover-icon plushover-icon-4" src="images/home-page-plus.png" data-toggle="tooltip" data-placement="right" data-html="true" title="Medical Kit" />
                        <img class="plushover-icon plushover-icon-5" src="images/home-page-plus.png" data-toggle="tooltip" data-placement="right" data-html="true" title="Key Value" />
                        <div class="searchhoverPopup">
                          <input type="text" placeholder="Search" />
                        </div>
                      </div>
                      <div class="rectangle-151 carousel carousel-fade carousel-fade-2 d-none d-lg-block" data-ride="carousel" >
                        <div role="listbox" class="carousel-inner">
                          <img class="desoved-img carousel-item active" src="images/Rectangle_151.png" />    
                          <img class="desoved-img carousel-item" src="images/home_slide_09.png" />
                          <img class="desoved-img carousel-item" src="images/home-slide-02.png" />
                        </div>
                        <img class="plushover-icon plushover-icon-1" src="images/home-page-plus.png" data-toggle="tooltip" data-placement="right" data-html="true" title="Billing Software" />
                        <img class="plushover-icon plushover-icon-2" src="images/home-page-plus.png" data-toggle="tooltip" data-placement="right" title="Desktop App" />
                        <img class="plushover-icon plushover-icon-3" src="images/home-page-plus.png" data-toggle="tooltip" data-placement="right" title="Web App" />
                        <div class="searchhoverPopup">
                          <input type="text" placeholder="Search" />
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>

              <!--<div class="banner-site-icon text-right">
                <img src="images/banner_logo.png" />
              </div>-->
          </section>
          <section class="what-we-do">
            <div class="container container-1280">
              <div class="we-do-title--area">
                <h2>Venez découvrir nos solutions</h2>
                <!--<p>Become a digital professional by joining with us</p>-->
              </div>
              <div class="we-do--row-wrapper">
                  <div class="we-do--row row reset-margin">
                    <div class="col-lg-4 col-md-4 col-sm-4 we-do--picture we-do--leftarea reset-padding carousel carousel-fade carousel-fade-1" data-ride="carousel">
                      <div role="listbox" class="carousel-inner we-do--picture-inner">    
                        <img src="images/we-do-img-1.jpg" class="carousel-item active img-fluid" />
                        <img src="images/we-do-img-2.jpg" class="carousel-item img-fluid" />
                        <img src="images/we-do-img-3.jpg" class="carousel-item img-fluid" />
                      </div>
                      <div class="pic-emp-box"></div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 we-do--content we-do--rightarea we-do--space-measurement text-left">
                      <h3>Solutions pour télétravailleurs </h3>
                      <p>Nous proposons à vos salariés un environnement ergonomique et sécurisé pour travailler dans les meilleures conditions en dehors de vos locaux.</p>
                      <a href="home_office.php" class="btn btn-outline-primary btn-outline-we-do">En Savoir Plus</a>
                    </div>
                  </div>
                  <!--<hr class="d-block d-sm-none d-md-none d-lg-none d-xl-none"/>-->
                  <div class="we-do--row row reset-margin">
                    <div class="col-lg-8 col-md-8 col-sm-8 we-do--content we-do--leftarea we-do--space-measurement text-left">
                      <h3>Solutions pour petites enterprises</h3>
                      <p>Des propositions pensées pour vous et adaptées à votre développement, votre croissance et vos ambitions. </p>
                      <a href="small_business.php" class="btn btn-outline-primary btn-outline-we-do">En Savoir Plus</a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 we-do--picture we-do--rightarea reset-padding carousel carousel-fade carousel-fade-1" data-ride="carousel">
                        <div role="listbox" class="carousel-inner we-do--picture-inner">
                            <img src="images/we-do-img-4.png" class="carousel-item active img-fluid" />
                            <img src="images/we-do-img-5.png" class="carousel-item img-fluid" />
                            <img src="images/we-do-img-6.png" class="carousel-item img-fluid" />
                        </div>
                        <div class="pic-emp-box"></div>
                    </div>
                  </div>
                  <!--<hr class="d-block d-sm-none d-md-none d-lg-none d-xl-none"/>-->
                  <div class="we-do--row row reset-margin">
                    <div class="col-lg-4 col-md-4 col-sm-4 we-do--picture we-do--leftarea reset-padding carousel carousel-fade carousel-fade-1" data-ride="carousel">
                        <div role="listbox" class="carousel-inner we-do--picture-inner">
                            <img src="images/we-do-img-7.jpg" class="carousel-item active img-fluid" />
                            <img src="images/we-do-img-8.png" class="carousel-item img-fluid" />
                            <img src="images/we-do-img-9.png" class="carousel-item img-fluid" />
                        </div>
                        <div class="pic-emp-box"></div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 we-do--content we-do--rightarea we-do--space-measurement text-left">
                      <h3>Nos services avancés </h3>
                      <p>Nos solutions peuvent intégrer la haute disponibilité et s’inscrire dans votre plan de reprise d’activité. Elles sont façonnées pour une prise en main progressive par vos collaborateurs.</p>
                      <a href="services.php" class="btn btn-outline-primary btn-outline-we-do">En Savoir Plus</a>
                      <!-- <button type="button" class="btn btn-outline-primary btn-outline-we-do">En Savoir Plus</button> -->
                    </div>
                  </div>
              </div>
              
            </div>
          </section>

          <section class="homepageService text-center">
            <div class="container container-1070">
              <h2>Nos offres et services</h2>
              <p>Nous avons une large gamme de services pour répondre à vos besoins et aider votre entreprise à se développer avec le numérique. </p>
              <a href="services.php" class="btn btn-primary btn-c2d-primary"><span>Découvrir toutes nos solutions</span></a>
            </div>
          </section>

          <section class="how-do-we-do">
            <div class="row reset-margin">
              <h2 class="d-block d-sm-none mb-howdo-section-title">How Do We Do</h2>         
              <div class="col-xl-7 col-md-12 col-sm-12 how-do-bg-img">
                <div class="how-do-bg-containerwrapper d-none d-sm-block">
                  <h2>Sécurité dès la conception</h2>
                  <p>Nous sommes une entreprise dynamique qui évolue avec son temps pour vous fournir et optimiser des services du monde numérique.  </p>
                  <a href="how_we_work.php" class="btn btn-primary btn-c2d-primary-md">En Savoir Plus </a>
                </div>
              </div>
              <div class="col-xl-5 col-md-12 col-sm-12 how-do-content-section">
                  <div class="how-do--icon-box d-none d-sm-block">
                    <img src="images/home_service_do_we_do.png" class="compound-icon" />
                  </div>
                  <div class="how-do--contentarea">
                    <div class="row content-area--row align-items-end reset-margin">
                      <div class="col-lg-7 col-md-6 col-sm-12 how-do-content-description reset-padding">
                          <h4 class="main--heading">
                            <span class="d-none d-sm-block">Nous Pensons </span>
                            <span class="d-block d-sm-none">Secure by Design</span>
                          </h4>
                          <p class="main--para d-block d-sm-none">We are a dynamic brand evolving to provide services to make the digital world a better place to encounter with.</p>
                          <img src="images/securebydesign.png" class="d-block d-sm-none main--compound-icon" />
                          <div class="how-do--short-describe">
                            <h6>Sécurité dès la conception</h6>
                            <p>La sécurité est imaginée et intégrée dès la conception de chacune de nos propositions. </p>
                          </div>
                          <div class="how-do--short-describe">
                            <h6>Solutions adaptable </h6>
                            <p>Nos solutions et notre accompagnement s’adaptent tout au long de votre croissance.</p>
                          </div>
                          <div class="how-do--short-describe">
                            <h6>Sur mesure</h6>
                            <p>Nos solutions répondent à la mesure de vos exigences. </p>
                          </div>
                          <div class="how-do--short-describe">
                            <h6>Empathie</h6>
                            <p>Nous nous mettons à votre place et nous comprenons votre quotidien. </h6>
                          </div>
                          <a href="how_we_work.php" class="btn btn-primary btn-c2d-primary mt-3 d-block d-sm-none">Know More</a>
                      </div>
                      <div class="col-lg-5 col-md-6 col-sm-12 how-do-content-random-images reset-padding">
                          <!--<img src="images/how-we-do-random-technologies.png" />-->
                      </div>
                    </div>

                  </div>
              </div>
            </div>
          </section>
          <!-- Hide for french page
          <section class="clients-list">
            <div class="container container-1160">
                <div class="client-slider owl-carousel owl-theme">
                  <div class="item">
                    <img src="images/phone2000.png" />  
                  </div>
                  <div class="item">
                    <img src="images/gms.png" />
                  </div>
                  <div class="item">
                    <img src="images/phone2000.png" />  
                  </div>
                  <div class="item">
                    <img src="images/gms.png" />
                  </div>
                  <div class="item">
                    <img src="images/phone2000.png" />  
                  </div>
                  <div class="item">
                    <img src="images/gms.png" />
                  </div>
                  <div class="item">
                    <img src="images/phone2000.png" />  
                  </div>
                  <div class="item">
                    <img src="images/gms.png" />
                  </div>
                  <div class="item">
                    <img src="images/phone2000.png" />  
                  </div>
                  <div class="item">
                    <img src="images/gms.png" />
                  </div>
                </div>
            </div>
          </section>

          <section class="Testimonials">
            <div class="container container-1160">
              <div class="row reset-margin">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 testimonialSlides">
                    <div class="teamMember-lists owl-carousel">
                      <div class="item">
                        <div class="c2d-teamMember-row row">
                          <div class="c2d-teamMember--thumbnail col-lg-4 col-md-4 col-5 reset-padding">
                            <img src="images/team-member-1.png" class="teamMember--img rounded-circle"/>
                          </div>
                          <div class="c2d-teamMember--name-designation col-lg-8 col-md-8 col-6">
                            <h5 class="memberName">Mr. Matthews</h5>
                            <p class="memberDesignation">CEO, Phone 2000</p>
                          </div>
                        </div>
                        <div class="memberQuotes">
                          <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque tortor,
                            dictumst viverra laoreet auctor amet egestas justo. Interdum platea “</p>
                        </div>
                      </div>
                      <div class="item">
                        <div class="c2d-teamMember-row row">
                          <div class="c2d-teamMember--thumbnail col-lg-4 col-md-4 col-5 reset-padding">
                            <img src="images/team-member-1.png" class="teamMember--img rounded-circle"/>
                          </div>
                          <div class="c2d-teamMember--name-designation col-lg-8 col-md-8 col-6">
                            <h5 class="memberName">Mr. Matthews</h5>
                            <p class="memberDesignation">CEO, Phone 2000</p>
                          </div>
                        </div>
                        <div class="memberQuotes">
                          <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque tortor,
                            dictumst viverra laoreet auctor amet egestas justo. Interdum platea “</p>
                        </div>
                      </div>
                      <div class="item">
                        <div class="c2d-teamMember-row row">
                          <div class="c2d-teamMember--thumbnail col-lg-4 col-md-4 col-5 reset-padding">
                            <img src="images/team-member-1.png" class="teamMember--img rounded-circle"/>
                          </div>
                          <div class="c2d-teamMember--name-designation col-lg-8 col-md-8 col-6">
                            <h5 class="memberName">Mr. Matthews</h5>
                            <p class="memberDesignation">CEO, Phone 2000</p>
                          </div>
                        </div>
                        <div class="memberQuotes">
                          <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque tortor,
                            dictumst viverra laoreet auctor amet egestas justo. Interdum platea “</p>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 testimonialContents align-self-center">
                  <h3>We’ve worked with big and small alike.</h3>
                  <img src="images/phone2000.png" class="icon" />
                  <img src="images/gms.png" class="icon" />
                </div>
              </div>
            </div>
          </section>
          -->
        <?php  include 'includes/highlighted-footer.php'; ?>        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <?php  include 'includes/footer.php'; ?>
    
    </div>

            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="js/owl.carousel.js"></script>
            <script src="js/jquery.sticky.js"></script>
            <script src="js/mobile_menu.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
