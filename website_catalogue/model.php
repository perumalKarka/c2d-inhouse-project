<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">
    <div id="message"></div>
    <div class="modal-dialog container-80 requestform-popup-page">

        <h2 class="form-heading d-block d-sm-block d-md-none d-xl-block">Request for a new sector</h2>
        <div class="modal-content requestmodal_content">
            <div class="requestmodal_content">
                <div class="modal-header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="images/closeicon.png">
                    </button>
                </div>
                <form class="request-popup-form request-model-1">
                    <h2 class="form-heading d-none d-sm-none d-md-block d-xl-none">Request for a new sector</h2>
                    <div class="form-group">
                        <label for="exampleFormControlInput1 formleft-sub-title" class="pb-2">Give a name to the sector that you wish.</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group email-message mt-5 description">
                        <label for="inputAddress" class="pb-2">Describe below how that sector works</label>
                        <textarea class="form-control message" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group email-message mt-5  description">
                        <label for="inputAddress" class="pb-2">How would you like your customer’s to experience that ?</label>
                        <textarea class="form-control message" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group mt-5 form__title__condent">
                        <label for="exampleFormControlInput1 formleft-sub-title" class="pb-2">Can we contact you for further details ?</label>
                        <input type="text" class="form-control emailsec" id="exampleFormControlInput1" placeholder="Your e-mail id here.">
                    </div>

                    <h3 class="request-condent ">This site is protected by reCAPTCHA and the Google<span style="color:white;"> Privacy Policy </span>and <span style="color:white;">Terms of Conditions</span> apply.</h3>
                    <div class="row  roboto-sec reset-margin pt-5">
                        <div class="col-lg-6 col-md-12 robotimage reset-padding g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                        <div class="col-lg-6  col-md-12  submit reset-padding align-self-center"><button type="button" id="success" class="click-mail">submit</button></div>
                    </div>
                </form>
            </div>

        </div>
    </div>


</div>
<!-- logo upload 1-->

<!-- Modal -->
<div class="modal fade logoupload-1" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">

    <div class="modal-dialog container-80 requestform-popup-page logo-upload">
        <div class="modal-content logo-content">
            <div class="row skip-row reset-margin ">
                <div class="col-xl-8 col-lg-12 col-md-12 col-8">
                    <h2 class="form-heading logo-heading">Lorem ipsum dolor sit amet, consetetur </h2>
                </div>
                <div class="col-xl-4 col-4 d-block d-md-none d-xl-block logo-skip reset-padding align-self-center text-right">
                    <a class="btn btn-primary skip " href="#">Skip</a>
                </div>
            </div>
            <div class="requestmodal_content logoupload_content">
                <div class="modal-header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="images/closeicon.png">
                    </button>
                </div>
                <div class="logo-heading">

                    <h2 class="logo-title">Your Logo</h2>
                    <p class="logo-condent pt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea</p>
                </div>
                <hr class="horizontal-line" />

                <div class="upload-logo border-0 ">

                    <form method="post" action="upload.php" enctype="multipart/form-data">
                        <div class="file-upload-wrapper">
                            <input type="file" class="btn btn-primary skip" name="file" id="file" />
                            <input type="hidden" name="rotation" id="rotation" value="0" />
                        </div>
                        <!-- <button type="button" class="btn btn-primary skip" data-dismiss="modal" >Upload logo</button> -->
                        <p class="logo-subcondent d-none d-md-block">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
                        <div class="img-preview" style="display: none;">
                            <h3>Edit your logo</h3>
                            <div class="row m-0">
                                <div class="col-5 col-md-5 edit-panel-tools p-0">
                                    <div class="edit-panel-border">
                                        <div class="editpanel-img-type mb-4">
                                            <label class="fl-name float-left">Image</label>
                                            <label class="fl-type float-right"></label>
                                        </div>
                                        <div class="editpanel-img-size">
                                            <h5 class="mb-2">Original Image Size (px)</h5>
                                            <span class="mr-2">W: <span class="pr-W">700</span></span>|<span class="ml-2">H: <span class="pr-H">300</span></span>
                                        </div>
                                        <hr />
                                        <div class="form-group row m-0 mb-3">
                                            <div class="col-9 col-md-10 col-lg-9 p-0">
                                                <label class="tool-label">Remove Background</label>
                                            </div>
                                            <div class="col-3 col-md-2 col-lg-3 p-0">

                                            </div>
                                        </div>
                                        <div class="form-group row m-0">
                                            <div class="col-4 col-md-4 p-0">
                                                <label class="tool-label">Rotate</label>
                                            </div>
                                            <div class="col-8 col-md-8 p-0">
                                                <span id="rright" class="float-right"><img src="images/right-angle.png" /></span>
                                                <span id="rleft" class="float-right"><img src="images/left-angle.png" /></span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-7 p-0 d-block d-md-none">
                                    <p class="logo-subcondent">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing
                                        elitr, sed diam nonumy eirmod tempor invidunt ut labore
                                        et dolore magna aliquyam erat, sed diam voluptua.
                                        At vero eos et accusam et justo duo dolores et ea rebum.
                                        Stet clita kasd gubergren
                                    </p>
                                </div>

                                <div class="picpreview-col col-md-7 p-0">
                                    <div class="edit-panel-image d-flex align-items-center align-self-stretch">
                                        <div id="imgPreview"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="img-preview-btn-actions mt-4">
                                <button type="button" class="btn btn-primary btn-primary-outline btn-c2d-primary-sm float-left" name="submit" value="Upload">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-c2d-primary-sm float-right" name="submit" value="Upload">Upload</button>
                            </div>

                        </div>


                    </form>


                </div>

            </div>
        </div>

        <div class="modal-content site-name pb-6">
            <div class="requestmodal_content">
                <div class="logo-heading">
                    <h2 class="logo-title">Site/Business Name</h2>
                    <p class="logo-condent pt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor </p>
                </div>
                <hr class="horizontal-line" />
                <form class="request-popup-form logo-popup-form pt-0 pb-0">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control site-search-name" placeholder="Lorem ipsum dolor sit amet," aria-label="Recipient's username" aria-describedby="basic-addon2">

                    </div>
                    <p class="logo-subcondent ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
            </div>
            </form>

        </div>
        <a class="btn btn-primary skip logo-skip d-none d-md-block d-xl-none" href="#">Skip</a>
        <button class="btn  preview site-livepreview-button d-block d-md-block" type="button" id="inputGroupFileAddon04"><a href="livepreview.php" style="color:#fff;">Live preview</a></button>

    </div>







</div>

</div>


<!-- logo upload 2-->

<!-- Modal -->
<div class="modal fade" id="exampleModal-1-a" tabindex="-1" aria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog container-80 requestform-popup-page">


        <div class="modal-content">
            <div class="row skip-row reset-margin ">
                <div class="col-6">
                    <h2 class="form-heading">Lorem ipsum dolor sit amet, consetetur </h2>
                </div>
                <div class="col-6 reset-padding align-self-center text-right">
                    <a class="btn btn-primary skip" href="#">Skip</a>
                </div>
            </div>
            <div class="requestmodal_content">
                <div class="modal-header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="images/closeicon.png">
                    </button>
                </div>
                <div class="logo-heading">

                    <h2 class="logo-title">Your Logo</h2>
                    <p class="logo-condent pt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea</p>
                </div>
                <hr class="horizontal-line" />

                <div class="modal-header upload-logo border-0 ">
                    <button type="button" class="btn btn-primary skip" data-dismiss="modal">Upload logo</button>
                </div>
                <p class="logo-subcondent reset-margin">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
            </div>
        </div>

        <div class="modal-content site-name pb-6">
            <div class="requestmodal_content">
                <div class="logo-heading">
                    <h2 class="logo-title">Site/Business Name</h2>
                    <p class="logo-condent pt-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor </p>
                </div>
                <hr class="horizontal-line" />
                <form class="request-popup-form pt-0 pb-0">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control site-search-name" placeholder="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed" aria-label="Recipient's username" aria-describedby="basic-addon2">

                    </div>
                </form>
                <p class="logo-subcondent reset-margin">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
            </div>
        </div>
    </div>

</div>