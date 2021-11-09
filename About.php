<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header link Integration -->
    <?php
    include "./Components/header-links.php";
    ?>
    <title>Vcareplus | About</title>
    <link rel="stylesheet" href="./Assets/Css/Service.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


</head>

<body>
    <style>
        .accordion-button::after {
  width: auto;
  height: auto;
  content: "+";
  font-size: 40px;
  background-image: none;
  font-weight: 100;
  color: #1b6ce5;
  transform: rotate(90deg);
}

.accordion-button:not(.collapsed)::after {
  width: auto;
  height: auto;
  background-image: none;
  content: "-";
  font-size: 48px;
  transform: rotate(0deg);
}
</style>

    <!-- banner -->
    <div class="banner">
        <img class="design1" src="./Assets/Images/design1.png">
        <img class="design2" src="./Assets/Images/design2.png">
        <div class="data">
            <h1>Our Goal Is Nothing<br> Short Of A Revolution </h1>
            <br>
            <p>At VCarePlus, we aim to
                revolutionize access to healthcare
                by deploying the latest available technology
                and connecting the medical specialists to the
                patients.</p>

        </div>
    </div> <br><br>

    <div class="body">
        <!-- Dynamic Navbar -->
        <?php
        $page = 'about';
        include "./Components/Nav.php";
        ?>

        <div class="container">

            <!-- 1st image section -->
            <div class="row flex-column-reverse flex-lg-row d-flex justify-content-center align-items-center min_hight mt-15 ">
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6"><br><br><br>
                    <h2 class="left-heading">We Stand For Equality & Equity In Access To Health Care.</h2>
                    <p>Trusted excellence from Doctors and
                        clinicians who care.</p>
                </div>
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <img class="w-100 img-fluid" src="./Assets/Images/Group 330weStand.png" alt="img">
                </div>
            </div>

        </div>
    </div>

    <div class="body">
        <div class="container">

            <!-- 3rd image section -->
            <div class="row  flex-lg-row d-flex justify-content-center align-items-center gy-5 min_hight">
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <img class="w-100 img-fluid" src="./Assets/Images/Group-8.png" alt="img">
                </div>
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <h2>Our Vision</h2>
                    <p class="service_paragraph" style="text-align: justify;">At VCarePlus, we are of the opinion that the future of delivering healthcare will be supplemented by technology and eventually technology and AI will be the key role in the delivery of healthcare. We are convinced that a widow of opportunity exits to be part of the revolution in healthcare. The evolving telehealth technology offers both patients and doctors tremendous advantages such as easier access to primary care doctors/specialists and providing services to patients in rural areas where traditional clinics are scarce. VCarePlus will address the inequity in access to healthcare.</p>
                </div>
            </div>


            <!-- 5th image section -->
            <div class="row flex-column-reverse flex-lg-row d-flex justify-content-center align-items-center justify-content-evenly gy-5 min_hight">
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <h2>Our Mission</h2>
                    <p class="service_paragraph" style="text-align: justify;">To develop a network of VCarePlus Smart Clinics nationally to provide easy access to patients to a virtual clinic in their neighborhood for a convenient in-person visit to be examined by doctors and specialists. In addition to the virtual clinics, VCarePlus is offering house calls for homebound patients and will be expanding this service nationally.</p>
                </div>
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <img class="w-100 img-fluid" src="./Assets/Images/Group-7.png" alt="img">
                </div>
            </div>
        </div>
    </div>


    <div class="accordian-section">
        <img class="right-icon" src="./Assets/Images/design1.png">
        <img class="left-icon" src="./Assets/Images/design2.png">
        <div class="body">
            <div class="container">
                <h2>Our Benefits</h2>
                <p class="benefit_smallheading">At VCarePlus, we are committed to providing care that is respectful, responsive, and professional. Hear’s how:</p>
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <img src="./Assets/Images/patientOB1.png" alt="" style="width: 40px; height: 40px; float: left; margin-inline: 20px" />Patient-Centered
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our focus is on the patient's individual healthcare needs, treating them with dignity and respect, as well as including them in all of their health-related decisions.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <img src="./Assets/Images/doctorob2.png" alt="" style="width: 40px; height: 40px; float: left; margin-inline: 20px" />Easy Access To Specialists
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Tired of waiting in long queues to see a specialist? A few clicks and our primary care doctors can provide you quick access.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <img src="./Assets/Images/OB3.png" alt="" style="width: 40px; height: 40px; float: left; margin-inline: 20px" />Smart Clinics
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Experience a virtual examination by a doctor, through integrated medical devices that will allow the doctor to examine you in real-time. Available only at our smart clinics. </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <!-- Footer Integration -->
    <?php
    include "./Components/Footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./Assets/JS/Main.js"></script>
    <!-- <script src="./Assets/JS/PopupValidation.js"></script> -->

</body>

</html>