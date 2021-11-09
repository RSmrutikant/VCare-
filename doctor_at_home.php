<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header link Integration -->
    <?php
    include "./Components/header-links.php";
    ?>

    <link rel="stylesheet" href="./Assets/Css/Service.css" />
    <link rel="stylesheet" href="./Assets/Css/HouseCall.css" />
    <title>VcarePlus | House On a Call</title>

</head>

<body>
    <!-- Dynamic Navbar -->
    <div class="body">
        <?php
        $page = 'services';
        include "./Components/Nav.php";
        ?>


        <!-- section-1 -->
        <div class="container section-1">
            <div class="row  section-1 flex-column-reverse flex-lg-row d-flex justify-content-center align-items-center gy-5 min_hight ">
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <h2 class="left-heading">Doctor At Home</h2>
                    <p>Call a doctor and get diagnosed at the comfort of your home.</p>

                    <button style="background-color: #917cff;
                    padding:2% 3%;
                    color: white;
                    border-radius: 10px;
                    border: 0;
                    outline: none;
                    font-size:18px;
                    font-weight:700;
                    " data-bs-toggle="modal" data-bs-target="#clinicModal">
                        Schedule A Visit
                    </button>
                </div>
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <img class="w-100 img-fluid" src="Assets\Images\Group 339Doctor_at_home.png" alt="img">
                </div>
            </div>
        </div>

        <!-- schedule a visit Modal -->
        <div class="modal fade clinicListModal" id="clinicModal" tabindex="-1" aria-labelledby="clinicModalLabel" aria-hidden="true">
            <div class="modal-dialog clinic-dialog">

                <div class="modal-content">
                    <div class="modal-header clinic-modal-header justify-content-right">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-title clinic-modal-title">
                        <h3 class="" id="exampleModalLabel">
                            Schedule a Visit
                        </h3>
                        <h6>Select your Clinic</h6>
                    </div>

                    <div class="modal-body clinic-wraper">
                            <div class="row d-flex">
                                <div class="col-sm-4 d-flex justify-content-center">
                                    <div class="clinic-container text-wrap">
                                        <input type="checkbox" id="checkbox">
                                        <label for="checkbox"></label>
                                        <div class="clinic-info">
                                            <h3>Nanaksar Pharmacy</h3><br>
                                            <!-- <a target="_blank" href="https://maps.app.goo.gl/d88Y74eoPZfCNYps5">
                                                <p class="card-text"><img src="./Assets/Images/address.png" alt="">&nbsp; 2-511 Ray Lawson Blvd Brampton Ontario. L6Y0A2</p>
                                            </a> -->
                                            <p class="card-text"><i class="fas fa-phone" style="color:#917cff; font-size:large; margin-right: 5px"></i><a style="color: #000;" href="tel:14164131000">1 416 413 1000</a></p>
                                            <p class="card-text"><img src="./Assets/Images/fax.png" alt="">&nbsp; 905 450 2425</p>
                                            <p class="card-text"><img src="./Assets/Images/email.png" alt="">&nbsp;<a style="color: #000;" href="mailto:housecall@vcareplus.ca">housecall@vcareplus.ca</a></p>
                                        </div>
                                        <div class="clinic">
                                            <div class="title">
                                                <h3>Contact no.</h3>
                                                <h4><a href="tel:14164131000">1 416 413 1000</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex justify-content-center">
                                    <div class="clinic-container text-wrap">
                                        <input type="checkbox" id="checkbox2">
                                        <label for="checkbox2"></label>
                                        <div class="clinic-info">
                                            <h3>Guardian MarkhaMack Pharmacy</h3>
                                            <!-- <a target="_blank" href="https://maps.app.goo.gl/7eP18rebB696ZcM57">
                                                <p class="card-text"><img src="./Assets/Images/address.png" alt="">&nbsp; 7-9889 Hwy 48 Markham Ontario. L6E 0B7</p>
                                            </a> -->
                                            <p class="card-text"><i class="fas fa-phone" style="color:#917cff; font-size:large; margin-right: 5px"></i> <a style="color: #000;" href="tel:19052943295">1 416 413 1000</a></p>
                                            <p class="card-text"><img src="./Assets/Images/fax.png" alt="">&nbsp; 905 294 2974</p>
                                            <p class="card-text"><img src="./Assets/Images/email.png" alt="">&nbsp; <a style="color: #000;" href="mailto:housecall@vcareplus.ca">housecall@vcareplus.ca</a></p>
                                        </div>
                                        <div class="clinic">
                                            <div class="title">
                                                <h3>Contact no.</h3>
                                                <h4><a href="tel:14164131000">1 416 413 1000</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex justify-content-center">
                                    <div class="clinic-container text-wrap">
                                        <input type="checkbox" id="checkbox3">
                                        <label for="checkbox3"></label>
                                        <div class="clinic-info">
                                            <h3>Four Winds Roots Pharmacy</h3>
                                            <!-- <a target="_blank" href="https://maps.app.goo.gl/BTD1egnyw56Bkb5a9">
                                                <p class="card-text"><img src="./Assets/Images/address.png" alt="">&nbsp; 3932 Keele St
                                                    Toronto
                                                    Ontario. M3J1N8</p>
                                            </a> -->
                                            <p class="card-text"><i class="fas fa-phone" style="color:#917cff; font-size:large; margin-right: 5px"></i> <a style="color: #000;" href="tel:14163988200">1 416 413 1000</a></p>
                                            <p class="card-text"><img src="./Assets/Images/fax.png" alt="">&nbsp; 416 398 6745</p>
                                            <p class=" card-text"><img src="./Assets/Images/email.png" alt="">&nbsp; <a style="color: #000;" href="mailto:housecall@vcareplus.ca">housecall@vcareplus.ca</a></p>
                                        </div>
                                        <div class="clinic">
                                            <div class="title">
                                                <h3>Contact no.</h3>
                                                <h4><a href="tel:14164131000">1 416 413 1000</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>


        <!-- section-2 accordian -->
        <div class="accordian-section section-2">
            <div class="container">
                <h2 class="accodian_heading">House Calls & <br>
                    Home Monitoring</h2>
                <p class="accodian_paragraph">VCarePlus provides home monitoring devices for patients with chronic diseases or who have suffered acute strokes. These devices detect changes in normal activities and record data for the health care provider to review.</p>

                <p class="accodian_paragraph">Home monitoring services allow providers to continue tracking vital health care data once a patient is released from the hospital, which has proven to significantly reduce readmission rates. Monitoring programs can remotely collect a broad range of health data, including:</p>
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button">
                                <img src="./Assets/Images/VitalSign.png" alt="" style="width: 30px; float: left; margin-inline: 20px" />Vital signs
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" >
                                <img src="./Assets/Images/Weight.png" alt="" style="width: 30px; float: left; margin-inline: 20px" />Weight
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button">
                                <img src="./Assets/Images/BP.png" alt="" style="width: 30px; float: left; margin-inline: 20px" />Blood pressure
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" >
                                <img src="./Assets/Images/BOL.png" alt="" style="width: 30px; float: left; margin-inline: 20px" />Blood oxygen level
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" >
                                <img src="./Assets/Images/HR.png" alt="" style="width: 30px; float: left; margin-inline: 20px" />Heart rate
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button">
                                <img src="./Assets/Images/Electro.png" alt="" style="width: 30px; float: left; margin-inline: 20px" />Electrocardiogram
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mt-5 accodian_paragraph">This data is transmitted to health care providers, allowing them to act on the information they receive as part of the patient's treatment plan. Remote monitoring keeps people  healthy, allows older and disabled patients to live at home longer, and reduces the number of

                    hospitalizations and readmissions as well as the length of hospital stays. All of these factors improve quality of life and care and lower costs. Telemedicine is bringing back the house call to provide patient-centered, personalized, on-demand care.</p>
            </div>
        </div>
    </div>
  <!-- section-2 accordian -->
  <!-- <div class="accordian-section section-2">
            <div class="container">
                <h2 class="accodian_heading">House Calls & <br>
                    Home Monitoring</h2>
                <p class="accodian_paragraph">VCarePlus provides home monitoring devices for patients with chronic diseases or who have suffered acute strokes. These devices detect changes in normal activities and record data for the health care provider to review.</p>

                <p class="accodian_paragraph">Home monitoring services allow providers to continue tracking vital health care data once a patient is released from the hospital, which has proven to significantly reduce readmission rates. Monitoring programs can remotely collect a broad range of health data, including:</p>
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <img src="./Assets/Images/VitalSign.png" alt="" style="width: 30px; float: left; margin-inline: 20px" />Vital signs
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <img src="./Assets/Images/Weight.png" alt="" style="width: 30px; float: left; margin-inline: 20px" />Weight
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <img src="./Assets/Images/BP.png" alt="" style="width: 30px; float: left; margin-inline: 20px" />Blood pressure
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <img src="./Assets/Images/BOL.png" alt="" style="width: 30px; float: left; margin-inline: 20px" />Blood oxygen level
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <img src="./Assets/Images/HR.png" alt="" style="width: 30px; float: left; margin-inline: 20px" />Heart rate
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <img src="./Assets/Images/Electro.png" alt="" style="width: 30px; float: left; margin-inline: 20px" />Electrocardiogram
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mt-5 accodian_paragraph">This data is transmitted to health care providers, allowing them to act on the information they receive as part of the patient's treatment plan. Remote monitoring keeps people  healthy, allows older and disabled patients to live at home longer, and reduces the number of

                    hospitalizations and readmissions as well as the length of hospital stays. All of these factors improve quality of life and care and lower costs. Telemedicine is bringing back the house call to provide patient-centered, personalized, on-demand care.</p>
            </div>
        </div>
    </div> -->
    <!-- Footer Integration -->
    <?php
    include "./Components/Footer.php";
    ?>

    <!-- Bootstrap Js -->
    <script src="./Assets/JS/Main.js"></script>
    <script src="./Assets/JS/PopupValidation.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>