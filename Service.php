<!DOCTYPE html>
<html lang="en">

<head>
    <!-- header link Integration -->
    <?php
    include "./Components/header-links.php";
    ?>
    <title>Vcareplus | Service</title>
    <link rel="stylesheet" href="./Assets/Css/Service.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  
</head>

<body>
    <div class="body">
        <!-- Dynamic Navbar -->
        <?php
        $page = 'services';
        include "./Components/Nav.php";
        ?>
        <div class="container">


            <!-- 1st image section -->
            <div class="row flex-column-reverse flex-lg-row d-flex justify-content-center align-items-center min_hight mt-15 ">
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6"><br><br><br>
                    <h2 class="left-heading">Primary Care</h2>
                    <p>Trusted excellence from Doctors and
                        clinicians who care.</p>

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul style="margin: 0px !important;" class="disease_name">
                                    <li><a style="color: #6e20ff;" href="./disease.php#headach">Headache</a></li>
                                    <li><a style="color: #6e20ff;" href="./disease.php#blood_pressre">High Blood pressure</a></li>
                                    <li><a style="color: #6e20ff;" href="./disease.php#Allergies">Allergies</a></li>
                                    <li> <a style="color: #6e20ff;" href="./disease.php#Acne">Acne/skin condition</a></li>
                                    <li> <a style="color: #6e20ff;" href="./disease.php#Bronchitis">Bronchitis</a></li>
                                    <li> <a style="color: #6e20ff;" href="./disease.php#Cold">Common cold</a></li>
                                    <li> <a style="color: #6e20ff;" href="./disease.php#Flu">Flu</a></li>
                                    <li><a style="color: #6e20ff;" href="./disease.php#Gout">Gout</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="disease_name">
                                    <li><a style="color: #6e20ff;" href="./disease.php#Diarrhea">Diarrhea</a></li>
                                    <li><a style="color: #6e20ff;" href="./disease.php#Constipation">Constipation</a></li>
                                    <li><a style="color: #6e20ff;" href="./disease.php#Heartburn">Heartburn</a></li>
                                    <li><a style="color: #6e20ff;" href="./disease.php#Diabetes">Diabetes</a></li>
                                    <li><a style="color: #6e20ff;" href="./disease.php#Earache">Earache</a> </li>
                                    <li><a style="color: #6e20ff;" href="./disease.php#Eye infections">Eye infections </a></li>
                                    <li> <a style="color: #6e20ff;" href="./disease.php#Sexual">Sexual health</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <img class="w-100 img-fluid" src="./Assets/Images/Group 380.png" alt="img">
                </div>
            </div>

            <!-- 3rd image section -->
            <div class="row flex-column-reverse flex-lg-row d-flex justify-content-center align-items-center gy-5 min_hight">
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <h2>Consult A Doctor Online</h2>
                    <p class="service_paragraph">Our licensed medical doctors are available to see you from a phone tablet or computer.</p>
                </div>
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <img class="w-100 img-fluid" src="./Assets/Images/home1.png"" alt=" img">
                </div>
            </div>
            <!-- 4th image section -->
            <div class="row align-items-center gy-5 justify-content-evenly min_hight">
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <img class="w-100 img-fluid" src="./Assets/Images/home2.png" alt="img">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h2>Visit A Smart Clinic Near You</h2>
                    <p class="service_paragraph">Our Smart Clinics are located in pharmacies for a complete examination.
                        Visit a local Smart Clinic for your convenient one-stop medical visit.</p>
                </div>
            </div>
            <!-- 5th image section -->
            <div class="row flex-column-reverse flex-lg-row d-flex justify-content-center align-items-center justify-content-evenly gy-5 min_hight">
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <h2>Call a Doctor At Home</h2>
                    <p class="service_paragraph">House calls for homebound patients. Get diagnosed in the comfort of your home.</p>
                </div>
                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6">
                    <img class="w-100 img-fluid" src="./Assets/Images/home3.png" alt="img">
                </div>
            </div>
            <!-- service section end -->

            <!-- section2 clients -->
            <!-- <section class="feedback mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>Our Clients Love Us</h2>
                        <p class="client-para">Here’s what they have to say.</p>
                    </div>
                </div>
                <div class="row mt-4 service-card">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card clients-card">
                            <div class="card-body">
                                <p class="card-text">I would be lost without online consultant.
                                    Nice work on your online consultant. Not
                                    able to tell you how happy I am with online
                                    consultation.</p>
                                <div class="row d-flex">
                                    <img src="./Assets/Images/image 2.png" class="col-4 col-lg-3" alt="img">
                                    <div class="col-8 mt-3">
                                        <h6 class="">Dwaine V.</h6>
                                        <div class="">
                                            <i class="fa fa-star" id="act"></i>
                                            <i class="fa fa-star" id="act"></i>
                                            <i class="fa fa-star" id="act"></i>
                                            <i class="fa fa-star" id="act"></i>
                                            <i class="fa fa-star" id="emt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 .offset-md-1 .offset-sm-0 col-sm-12">
                        <div class="card clients-card">
                            <div class="card-body">
                                <p class="card-text">I would be lost without online consultant.
                                    Nice work on your online consultant. Not
                                    able to tell you how happy I am with online
                                    consultation.</p>

                                <div class="row d-flex">
                                    <img src="./Assets/Images/image 2.png" class="col-4 col-lg-3" alt="img">
                                    <div class="col-8 mt-3">
                                        <h6 class="">Dwaine V.</h6>
                                        <div class="">
                                            <i class="fa fa-star" id="act"></i>
                                            <i class="fa fa-star" id="act"></i>
                                            <i class="fa fa-star" id="act"></i>
                                            <i class="fa fa-star" id="act"></i>
                                            <i class="fa fa-star" id="emt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 .offset-md-1 .offset-sm-0 col-sm-12">
                        <div class="card clients-card">
                            <div class="card-body">
                                <p class="card-text">I would be lost without online consultant.
                                    Nice work on your online consultant. Not
                                    able to tell you how happy I am with online
                                    consultation.</p>
                                <div class="row d-flex">
                                    <img src="./Assets/Images/image 2.png" class="col-4 col-lg-3" alt="img">
                                    <div class="col-8 mt-3">
                                        <h6 class="">Dwaine V.</h6>
                                        <div class="">
                                            <i class="fa fa-star" id="act"></i>
                                            <i class="fa fa-star" id="act"></i>
                                            <i class="fa fa-star" id="act"></i>
                                            <i class="fa fa-star" id="act"></i>
                                            <i class="fa fa-star" id="emt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
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