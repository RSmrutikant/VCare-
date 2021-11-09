<!doctype html>
<html lang="en">

<head>
    <!-- header link Integration -->
    <?php
    include "./Components/header-links.php";
    ?>
    <link rel="stylesheet" href="./Assets/Css/smartclinic.css">
    <title>VCarePlus | Smart-clinic</title>

</head>

<body>
    <div class="body">
        <!-- Dynamic Navbar -->
        <?php
        $page = 'services';
        include "./Components/Nav.php";
        ?>

        <div class="container page-body">
            <section class="section section-1">
                <div class="row flex-column-reverse flex-lg-row d-flex justify-content-evenly align-items-center text-left">
                    <div class=" p-4 body-content col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <h2 id="">
                            Visit A Smart <br> Clinic Near You</h2>
                        <small class="small-text">A truly
                            virtual
                            visit with no
                            effect on care
                            quality</small><br>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#clinicModal" class="page-btn">Schedule a Visit</button>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 justify-content-center">
                        <img class="section-img" src="./Assets/Images/section-1.png" alt="">
                    </div>
                </div>
            </section>



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
                                          <a href="https://maps.app.goo.gl/d88Y74eoPZfCNYps5"><p class="card-text"><img src="./Assets/Images/address.png" alt="">&nbsp; 2-511 Ray Lawson Blvd Brampton Ontario. L6Y0A2</p></a>
                                            <p class="card-text"><i class="fas fa-phone" style="color:#917cff; font-size:large; margin-right: 5px"></i><a style="color: #000;" href="tel:19054507447">1 905 450 7447</a></p>
                                            <p class="card-text"><img src="./Assets/Images/fax.png" alt="">&nbsp; 905 450 2425</p>
                                            <p class="card-text"><img src="./Assets/Images/email.png" alt="">&nbsp;<a style="color: #000;" href="mailto:nanaksarpharmachoice593@gmail.com">nanaksarpharmachoice593@gmail.com</a></p>
                                        </div>
                                        <div class="clinic">
                                            <div class="title">
                                                <h3>Contact no.</h3>
                                                <h4><a href="tel:19054507447">1 905 450 7447</a></h4>
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
                                            <a href="https://maps.app.goo.gl/7eP18rebB696ZcM57"><p class="card-text"><img src="./Assets/Images/address.png" alt="">&nbsp; 7-9889 Hwy 48 Markham Ontario. L6E 0B7</p></a>
                                            <p class="card-text"><i class="fas fa-phone" style="color:#917cff; font-size:large; margin-right: 5px"></i> <a style="color: #000;" href="tel:19052943295">1 905 294 3295</a></p>
                                            <p class="card-text"><img src="./Assets/Images/fax.png" alt="">&nbsp; 905 294 2974</p>
                                            <p class="card-text"><img src="./Assets/Images/email.png" alt="">&nbsp; <a style="color: #000;" href="mailto:markhamack.pharmacy@gmail.com">markhamack.pharmacy@gmail.com</a></p>
                                        </div>
                                        <div class="clinic">
                                            <div class="title">
                                                <h3>Contact no.</h3>
                                                <h4><a href="tel:19052943295">1 905 294 3295</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 d-flex justify-content-center">
                                    <div class="clinic-container text-wrap">
                                        <input type="checkbox" id="checkbox3">
                                        <label for="checkbox3"></label>
                                        <div class="clinic-info">
                                            <h3>Four Winds Roots Pharmacy</h3><br>
                                            <a href="https://maps.app.goo.gl/BTD1egnyw56Bkb5a9"><p class="card-text"><img src="./Assets/Images/address.png" alt="">&nbsp; 3932 Keele St
                                                Toronto
                                                Ontario. M3J1N8</p></a>
                                            <p class="card-text"><i class="fas fa-phone" style="color:#917cff; font-size:large; margin-right: 5px"></i> <a style="color: #000;" href="tel:14163988200">1 416 398 8200</a></p>
                                            <p class="card-text"><img src="./Assets/Images/fax.png" alt="">&nbsp; 416 398 6745</p>
                                            <p class=" card-text"><img src="./Assets/Images/email.png" alt="">&nbsp; <a style="color: #000;" href="mailto:pcdotty@gmail.com">pcdotty@gmail.com</a></p>
                                        </div>
                                        <div class="clinic">
                                            <div class="title">
                                                <h3>Contact no.</h3>
                                                <h4><a href="tel:14163988200">1 416 398 8200</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="section section-2">
                <div class="">
                    <h2 class="visit_smart_clinic">Why Visit Smart Clinics?</h2>
                    <small class="card-text">VCarePlus is establishing Virtual Smart Clinics in Ontario that are:</small>
                </div>
                <div class="row d-flex justify-content-center align-content-center mt-4">
                    <div class="col-sm-4">
                        <div class="card section-2-card">
                            <img class="section-2-icons" src="./Assets/Icons/section-2.1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Located in pharmacies for a one-stop medical visit</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card section-2-card">
                            <img class="section-2-icons" src="./Assets/Icons/section-2.2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Amenable to house-call arrangement</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="card section-2-card">
                            <img class="section-2-icons" src="./Assets/Icons/section-2.5.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Integrated with medical peripherals that enable doctors to examine patients
                                    in real-time</p>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <section class="section section-3">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 justify-content-center">
                        <img class="section-img" src="./Assets/Images/section-3.png" alt="">
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 body-content">
                        <h2 class="visit_smart_clinic">VCarePlus' Smart Clinics</h2>
                        <small class="small-text">VCarePlus' Smart Clinics (powered by AMD Telemedicine) is an all-in-one,
                            direct-to-consumer telehealth
                            platform that enables the
                            highest level of accessible, high-quality, and cost-effective health management. Our smart
                            clinics provide virtual care
                            visits and so much more:</small><br>
                <style>
                    .lon{
                   
                    position: relative;
                    bottom: 28px;
                    left: 27px;
                    }

                </style>
                        <div class="mt-4">
                            <li class="section-3-list"><div class="lon">Virtual version of the traditional in-person visit without impacting the quality of care.</div></li>
                            <li class="section-3-list"><div class="lon">A two way secured patient/physician communication.</div></li>
                            <li class="section-3-list"><div class="lon">Real time streaming of patient’s vitals and more using advanced medical equipment.</div></li>
                            <li class="section-3-list"><div class="lon">Convenient, accurate and no waiting room.</div></li>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section-4" style="margin-top: 5em;">
                <div class="row d-flex flex-column-reverse flex-lg-row justify-content-center align-items-center">
                    <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 body-content">
                        <h2 class="visit_smart_clinic">VCarePlus’ Clinics <br>
                           Now In Your Neighborhood</h2>
                        <small class="small-text">VCarePlus extends an invitation to all practitioners and entrepreneurs in the Healthcare sector, to become a part of the bold and rapid global movement by making healthcare accessible.</small><br>
                        <a href="./contact.php"><button class="page-btn">Know more</button></a>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 justify-content-center">
                        <img class="section-img" src="./Assets/Images/section-4.png" alt="">
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Footer Integration -->
    <?php
    include "./Components/Footer.php";
    ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="./Assets/JS/Main.js"></script>

</body>

</html>