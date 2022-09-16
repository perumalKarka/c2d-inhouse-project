<footer>
            <div class="container-fluid" style="padding:0 20px">
              <div class="row reset-margin">
                <div class="footer-col-1 col-lg-6 col-md-5 col-sm-12 align-self-center reset-padding">
                  <div class="widget widget_menu">
                    <div class="widget-content">
                      
                      <nav class="menu-categories-container">
                        <ul id="menu-category" class="menu">
                          <li class="menu-item"><a href="underconstruction.php">Politique de confidentialité</a></li>
                          <li class="menu-item"><a href="underconstruction.php  ">Conditions generales d’utilisation</a></li>
                        </ul>
                      </nav>
                      <div class="d-block d-sm-none text-center mt-4">
                        <!--<form class="input-group-lg input-group c2d-newsletter-form" id="c2d-newsletter">
                              <input type="text" id="email" class="form-control" placeholder="Vous désirez être contacté ?" aria-label="Recipient's username" aria-describedby="button-addon2">
                              <div class="input-group-append"><button class="btn c2d-newsletter-btn" id="submit"> <b>Envoyer</b></button>
                              </div>
                              <label id="info"></label>
                        </form>-->
                        <p class="mb-copyright">Copyright (c) 2021 Converge2digital. All Rights Reserved</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="footer-col-2 col-lg-6 col-md-7 col-sm-12 reset-padding d-none d-sm-block">
                    <div class="row text-center justify-content-center reset-margin">
                        <div class="col-xl-8 col-lg-12">
                          <form class="input-group-lg input-group c2d-newsletter-form" id="c2d-newsletter">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Vous désirez être contacté ?" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append"><button class="btn c2d-newsletter-btn" id="submit"> <b>Envoyer</b></button>
                                </div>
                                <label id="info"></label>
                          </form>
                        </div> 
                        <div class="col-xl-4 col-lg-12 align-self-center">
                            <p class="web-copyright">(c) Converge2Digital </p>
                        </div>   
                    </div>
                </div>
                
                
              </div>
            
            </div>
</footer>
<a href="javascript:void(0)" id="scrollBtn" >
  <img src="images/scroll-top.png" />
</a>
<div class="mobile-fixed-footer container-fluid d-block d-md-none">
  <div class="mobile-fixed-row  row reset-margin">
    <div class="home-holder holder col reset-padding">
      <a class="tap-holder" href="index.php">
        <span class="holder-span">
          <img src="images/homeicon.svg" class="holder-icon"/>
          <img src="images/sm-homeg.svg" class="active-holder-icon" />
        </span>
        <label class="label">Home</label>
      </a>
    </div>
    <div class="wish-holder holder col reset-padding">
      <a class="tap-holder" href="make_wish.php">
        <span class="holder-span">
            <img src="images/makewish-icon.svg" class="holder-icon"/>
            <img src="images/sm-logocg.svg" class="active-holder-icon" />
        </span>
        <label class="label">Wish</label>
      </a>      
    </div>
    <div class="service-holder holder col reset-padding">
      <a class="tap-holder" href="services.php">
        <span class="holder-span">
              <img src="images/servicebox.svg" class="holder-icon"/>
              <img src="images/sm-serviceg.svg" class="active-holder-icon" />
        </span>
        <label class="label">Services</label>
      </a>  
    </div>
  </div>
</div>
<script async src="https://www.google.com/recaptcha/api.js?render=6LeUxRMdAAAAABcqsJPchw5fAy1DWPLMlzMT9q8q"></script>
<script type="text/javascript">
    $(document).ready(function() {
            var form = $("#c2d-newsletter");
            var email = $('#email');
            var subject = '';
            var message = '';
            var info = $('#info');
            var submit = $("#submit");

            /* Mobile view variables */
            var mobileform = $("#c2d-newsletter_mobile");
            var mobileemail = $('#email_mobile');
            var mobilesubject = '';
            var mobilemessage = '';
            var mobileinfo = $('#info_mobile');
            var mobilesubmit = $("#submit_mobile");


                submit.on('click', function(e) {

                  info.html('Loading...').css('background-color', 'red').slideDown();
                  info.css('color','#fff');
                  e.preventDefault();

                  if(validate()) {
                    grecaptcha.ready(function () {
                        grecaptcha.execute('6LeUxRMdAAAAABcqsJPchw5fAy1DWPLMlzMT9q8q', { action: 'contact' }).then(function (token) {
                            var recaptchaResponse = document.getElementById('recaptchaResponse_web');
                            recaptchaResponse.value = token;

                            $.ajax({
                              type: "POST",
                              url: "email.php",
                              data: form.serialize(),
                              dataType: "json"
                            }).done(function(data) {
                              if(data.success) {
                                email.val('');
                                email.css('border', 'none');
                                info.html('Envoyé !').css('background', 'green').slideDown();
                                info.css('color','#fff');
                              }
                              else if(data.captcha){
                                info.html('Quelque chose s\'est mal passé. Veuillez réessayer plus tard.').css('background-color', 'red').slideDown();
                                info.css('color','#fff');
                              }
                              else {
                                info.html('Impossible d\'envoyer votre demande !').css('background-color', 'red').slideDown();
                                info.css('color','#fff');
                              }
                            });
                        });
                    });
                  }
                });

                mobilesubmit.on('click', function(e) {

                  mobileinfo.html('Loading...').css('background-color', 'red').slideDown();
                  mobileinfo.css('color','#fff');
                  e.preventDefault();

                  if(mobilevalidate()) {
                    grecaptcha.ready(function () {
                        grecaptcha.execute('6LeUxRMdAAAAABcqsJPchw5fAy1DWPLMlzMT9q8q', { action: 'contact' }).then(function (token) {
                            var recaptchaResponse = document.getElementById('recaptchaResponse');
                            recaptchaResponse.value = token;

                            $.ajax({
                              type: "POST",
                              url: "mobileemail.php",
                              data: mobileform.serialize(),
                              dataType: "json"
                            }).done(function(data) {
                              if(data.success) {
                                mobileemail.val('');
                                mobileemail.css('border', 'none');
                                mobileinfo.html('Envoyé !').css('background', 'green').slideDown();
                                mobileinfo.css('color','#fff');
                              }
                              else if(data.captcha){
                                mobileinfo.html('Quelque chose s\'est mal passé. Veuillez réessayer plus tard.').css('background-color', 'red').slideDown();
                                mobileinfo.css('color','#fff');
                              }
                              else {
                                mobileinfo.html('Impossible d\'envoyer votre demande !').css('background-color', 'red').slideDown();
                                mobileinfo.css('color','#fff');
                              }
                            });
                        });
                    });
                  }
                });



                function validate() {
                    var valid = true;
                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    var intRegex = /[0-9 -()+]+$/;

                    if($.trim(email.val()) === "") {
                      email.css('border-color', 'red');
                      info.html('Veuillez compléter l\'adresse mail.').css('background-color', 'red').slideDown();
                      info.css('color','#fff');
                      valid = false;
                    }

                    else if(intRegex.test(email.val())) {

                       if((email.val().length < 9) || (!intRegex.test(email.val())))
                        {
                             email.css('border-color', 'red');
                             info.html('Veuillez entrer un numéro de téléphone valide.').css('background-color', 'red').slideDown();
                             info.css('color','#fff');
                             valid = false;
                        }

                    }
                    else{
                        var eml = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                        if (eml.test(email.val()) == false) {
                              email.css('border-color', 'red');
                              info.html('Email invalide').css('background-color', 'red').slideDown();
                              info.css('color','#fff');
                              valid = false;
                        }

                    }


                    return valid;
                }

                function mobilevalidate() {
                    var valid = true;
                    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    var intRegex = /[0-9 -()+]+$/;

                    if($.trim(mobileemail.val()) === "") {
                      mobileemail.css('border-color', 'red');
                      mobileinfo.html('Veuillez compléter l\'adresse mail.').css('background-color', 'red').slideDown();
                      mobileinfo.css('color','#fff');
                      valid = false;
                    }

                    else if(intRegex.test(mobileemail.val())) {

                       if((mobileemail.val().length < 9) || (!intRegex.test(mobileemail.val())))
                        {
                             mobileemail.css('border-color', 'red');
                             mobileinfo.html('Veuillez entrer un numéro de téléphone valide.').css('background-color', 'red').slideDown();
                             mobileinfo.css('color','#fff');
                             valid = false;
                        }

                    }
                    else{
                        var eml = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                        if (eml.test(mobileemail.val()) == false) {
                              mobileemail.css('border-color', 'red');
                              mobileinfo.html('Email invalide').css('background-color', 'red').slideDown();
                              mobileinfo.css('color','#fff');
                              valid = false;
                        }

                    }


                    return valid;
                }
    });
</script>
