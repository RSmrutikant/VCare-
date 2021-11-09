<!doctype html>
<html lang="en">

<head>
    <!-- header link Integration -->
    <?php
    include "./Components/header-links.php";
    ?>

    <link rel="stylesheet" href="./Assets/Css/smartclinic.css">
    <title>Vcareplus | Doctor On Call</title>
  
</head>

<body>
    <div class=".body">
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
                            Consult A <br> Doctor Online</h2>
                        <small class="small-text">Choose a plan, Book an Appointment, See a Practitioner from anywhere or at our Smart Clinic
                        </small><br><br>
                        <a target="_blank" href="https://ca.adracare.com/surl?term=k1o"><button type="button" class="page-btn">Get Started</button></a>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 justify-content-center">
                        <img class="section-img" src="./Assets/Images/doctor_on_call.png" alt="">
                    </div>
                </div>
            </section>
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