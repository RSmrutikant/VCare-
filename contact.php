<!doctype html>
<html lang="en">

<head>
    <!-- header link Integration -->
    <?php
    include "./Components/header-links.php";
    ?>
    <link rel="stylesheet" href="./Assets/Css/contact.css">

    <title>Vcareplus | ContactUs</title>

    <style>

    </style>
</head>

<body>
    <div class="body">
        <!-- Dynamic Navbar -->
        <?php
        $page = 'contact';
        include "./Components/Nav.php";
        ?>

        <div class="container" style="background:#F9F9FF;">

            <div class="row align-items-center justify-content-evenly" style="margin-top: 5%; padding-block: 5%;">
                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
                    <br><br><br>
                    <img class="w-100 img-fluid" src="./Assets/Images/contact.png" alt="img">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h2 class="header-text-right">Contact Us</h2>
                    <p>Contact us by completing the form below and one of our experts will reach out to you.</p>


                    <div class="container d-flex vertical-center-row" style="padding:2%">
                        <div class="row d-flex align-content-center rounded-3 shadow-md" style="background-color: #fff; padding:5%">
                            <!-- contact us form -->
                            <form id="frmContactUs" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required minlength="3" pattern="[A-Za-z]{3,30}" title="Please enter only character">
                                            <label for="first_name">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required pattern="[A-Za-z]{3,30}" title="Please enter only character">
                                            <label for="last_name">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" title="Please entervalid mail e.g: example@mail.com">
                                            <label for="email">Email Address</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Phone" minlength="10" maxlength="10" title="Phone no must be 10 digits">
                                            <label for="phone">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="city" name="city" required placeholder="City" pattern="[A-Za-z]{4,50}" minlength="4" title="City name contains minimum  4 characters">
                                            <label for="city">City</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-select form-select-lg" aria-label="country" required id="country_list" name="country">
                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <textarea class="form-control" style="height: 100px;" placeholder="Message" id="message" name="message" required minlength="15" rows="3"></textarea>

                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" id="btnContactus" class="w-100 btn page-btn">Let's Begin</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Footer Integration -->
        <div>
        </div>
    </div>
    <?php
    include "./Components/Footer.php";
    ?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="./Assets/JS/Main.js"></script>
    <script src="./Assets/JS/validation.js"></script>


</body>

</html>