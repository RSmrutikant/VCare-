<!doctype html>
<html lang="en">

<head>
    <!-- header link Integration -->
    <?php
    include "./Components/header-links.php";
    ?>
    <link rel="stylesheet" href="./Assets/Css/pricing_privatepay.css">
    <title>Vcareplus | Pricing Private Pay Selected</title>

</head>

<body>
    <div class="body">
        <!-- Dynamic Navbar -->
        <?php
        $page = 'pricing';
        include "./Components/Nav.php";
        ?>
        <div class="container page-body">
            <div style="overflow:hidden">
            <div class="col-12">
                    <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-10">
                <h1 class="heading">Select Your Consultation Type</h1>
                    </div>
                    <div class="col-lg-6 col-md-10 col-sm-10" >
                        <div class="free">
                <h5  >Free for OHIP insured patients</h5>
                        </div>
                    </div>
                    </div>
            </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="box toggle removebg">
                              
                                <h3 class="box_heading">General Consult</h3>
                                <p class="pragraph">See a Doctor for common medical conditions </p>
                                <p class="price_visit">$45 / Visit</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="box toggle removebg">
                              
                                <h3 class="box_heading">Prescription Renewal</h3>
                                <p class="pragraph">We do not prescribe narcotics or controlled drugs. </p>
                                <p class="price_visit">$45 / Visit</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="box toggle removebg">
                              
                                <h3 class="box_heading">Specialist Referrals</h3>
                                <p class="pragraph">See a General Practitioner to be referred to an appropriate medical specialist </p>
                                <p class="price_visit">$45 / Visit</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="box toggle removebg">
                              
                                <h3 class="box_heading">Sick Notes and Forms</h3>
                                <p class="pragraph">See a doctor about sick </p>
                                <p class="price_visit">$45 / Visit</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="box toggle removebg">
                              
                                <h3 class="box_heading">Travel Consult </h3>
                                <p class="pragraph">Speak with a Doctor for travel advice. </p>
                                <p class="price_visit">$60 / Visit</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="box toggle removebg">
                              
                                <h3 class="box_heading">House Calls</h3>
                                <p class="pragraph">Call a Doctor, get Diagnosed & Prescribed right at your home.</p>
                                <p class="price_visit">$200 / Visit</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="box toggle removebg">
                              
                                <h3 class="box_heading">Internal Medicine Referral</h3>
                                <p class="pragraph">See a Doctor obtain a referral. </p>
                                <p class="price_visit">$45 / Visit</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="box toggle removebg">
                              
                                <h3 class="box_heading">Urologist Referral</h3>
                                <p class="pragraph">See a Doctor obtain a referral. </p>
                                <p class="price_visit">$45 / Visit</p>
                            </div>
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


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="./Assets/JS/Main.js"></script>
    <script src="./Assets/JS/PopupValidation.js"></script>

</body>

</html>