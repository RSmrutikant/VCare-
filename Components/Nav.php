<style>
    .fa-angle-down {
        margin-left: 10px;
    }

    .dropbtn {
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 250px;
        z-index: 1;
        left: -90%;
    }

    .dropdown-content a {

        font-size: 20px !important;
        text-decoration: none;
        display: block;
        text-align: start;
        width: 150%;
        line-height: 3.3rem;

    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown_bg {
        position: absolute;
        z-index: -5;
        left: -12%;
    }

    .axa {
        display: flex;
        justify-content: space-around;
    }

    .join_select {
        border: 2px solid red;
    }

    input[type='radio'][name='buttonGroup'] {
        display: none;
    }

    .lab {
        display: inline-block;
        padding: 1px;
        border: 2px solid #917CFF;
        border-radius: 5px;
        background-color: 'white';
        width: 10em;
        text-align: center;
        padding-top: 14px;
        margin-bottom: 15px;
        color: #917CFF;
        font-weight: bold;
    }

    .dropdown-content a span {
        color: #172B52;
    }

    .dropdown-content a span:hover {
        color: #917CFF;
    }

    input[type='radio'][name='buttonGroup']:checked+label {
        background-color: #917CFF;
        color: white
    }

    /* modal close button */
    .clinic-modal-header {
        border-bottom: 0;
    }

    .clinic-modal-header>button {
        position: absolute;
        top: 30px;
        right: 30px;
    }

    .clinic-modal-title {
        margin-left: 2%;
    }

    @media (max-width: 700px) {
        .axa {
            display: inline-block;
            justify-content: space-around;
        }

        .dropdown_bg {
            position: absolute;
            z-index: -5;
            width: 100%;
            left: -4%;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 250px;
            z-index: 1;
            left: -45%;
        }

        .dropdown-content a {

            font-size: 14px !important;
            text-decoration: none;
            display: block;
            text-align: start;
            width: 150%;
            line-height: 2rem !important;

        }
    }
</style>

<nav class="navbar">
    <div class="content">

        <img style="cursor: pointer;" class="logo" onclick="location.href = './index.php';" src="./Assets/Images/logo.png">

        <ul class="menu-list" style="align-items: center;">
            <div class="icon cancel-btn">
                <i class="fas fa-times"></i>
            </div>
            <li class="nav-menu"><a class="<?php if ($page == 'home') {
                                                echo 'activelink';
                                            } ?>" href="./index.php">Home</a></li>
            <li class="nav-menu"><a class="<?php if ($page == 'about') {
                                                echo 'activelink';
                                            } ?>" href="./About.php" href="./About.php">About Us</a></li>
            <div class="dropdown">
                <li class="ser dropbtn nav-menu"><a class="<?php if ($page == 'services') {
                                                                echo 'activelink';
                                                            } ?>" href="#?">Services</a>

                    <div class="dropdown-content text">
                        <img class="dropdown_bg" src="./Assets/Images/Rectangle 186.png">
                        <br>
                        <a href="./Service.php"><span><i class="fas fa-angle-right"></i>&emsp; Primary Services</span></a>
                        <a href="./Doctor-on-call.php"><span><i class="fas fa-angle-right"></i>&emsp; Consult a Doctor Online</span></a>
                        <a href="./Smart-clinic.php"><span><i class="fas fa-angle-right"></i>&emsp; Visit a Smart Clinic near you</span></a>
                        <a href="./doctor_at_home.php"><span><i class="fas fa-angle-right"></i> &emsp; Call a Doctor at Home</span></a>

                    </div>

            </div>
            </li>
            <li class="nav-menu"><a class="<?php if ($page == 'pricing') {
                                                echo 'activelink';
                                            } ?>" href="./pricing_privatepay.php">Pricing</a></li>
            <li class="nav-menu"><a class="<?php if ($page == 'contact') {
                                                echo 'activelink';
                                            } ?>" href="./contact.php">Contact Us</a></li>

            <div class="dropdown">
                <li><a id="myBtn" class="btn1" data-bs-toggle="modal" data-bs-target="#myModal" href="#">Join Us</a></li>

            </div>
            </li>

        </ul>
        <div class="icon menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>

<!-- The Modal -->
<div class="modal joinus-modal" id="myModal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header clinic-modal-header justify-content-right">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="container form-bg d-flex justify-content-center vertical-center-row">
            <div class="warpper">
                <input class="radio" id="one" name="group" type="radio">
                <input class="radio" id="two" name="group" type="radio">
                <input class="radio" id="three" name="group" type="radio" checked>
                <p class="modal-quest" style=" color: #22223f;">Who are you?</p>
                <div class="tabs">

                    <label class="tab" id="three-tab" for="three">Patient
                    </label>
                    <label class="tab" id="one-tab" for="one">Providers
                    </label>
                    <label class="tab" id="two-tab" for="two">Pharmacy
                    </label>
                </div>
                <div class="panels">
                    <div class="panel" id="one-panel">
                        <div class="form-body p-4 row d-flex align-content-center rounded-3 shadow-md" style="background-color: #fff;">
                            <form id="frmProviders" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required minlength="3" pattern="[A-Za-z]{3,30}" title="Please enter only character">
                                            <label for="first_name">First Name</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required pattern="[A-Za-z]{3,30}" title="Please enter only character">
                                            <label for="last_name">Last Name</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" title="Please entervalid mail e.g: example@mail.com">
                                            <label for="email">Email Address</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Phone" minlength="10" maxlength="10" title="Phone no must be 10 digits">
                                            <label for="phone">Phone Number</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="city" name="city" required placeholder="City" pattern="[A-Za-z]{4,50}" minlength="4" title="City name contains minimum  4 characters">
                                            <label for="city">City</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="form-select form-select-lg" aria-label="country" required id="country_list_provider" name="country">
                                            <!-- <option selected>Canada</option>
                                            <option value="1">USA</option>
                                            <option value="2">Brazil</option>
                                            <option value="3">Mexico</option>
                                            <option value="4">Colombia</option>
                                            <option value="5">Argentina</option> -->
                                        </select>
                                    </div>
                                    <!-- <div class="col-lg-6">
                                        <select class="form-select form-select-lg" aria-label="disease" required id="disease" name="disease">
                                            <option selected>Trauma</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div> -->
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="specialty" name="specialty" required aria-describedby="specialty" placeholder="Specialty" minlength="6" title="specialty: atleast 6 alphanumeric character">
                                            <label for="specialty">Specialty</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="licence" name="licence" required aria-describedby="licence" placeholder="Last Name" minlength="6" title="licence: atleast 6 alphanumeric character">
                                            <label for="licence">Licence Jurisdiction</label>

                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <textarea class="form-control" style="height: 100px;" placeholder="Message" id="message" name="message" required minlength="15" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <button type="" class="modal-back-btn closeModal">
                                        < </button>
                                            <button type="submit" id="btnProvidersSubmit" class="popup-submit-btn">Submit</button>
                                </div>
                            </form>

                        </div>

                    </div>

                    <!-- .providers form -->

                    <!-- pharmacy form  -->
                    <div class="panel" id="two-panel">
                        <div class="form-body p-4 row d-flex align-content-center rounded-3 shadow-md" style="background-color: #fff;">
                            <form id="frmPharmacy" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="first_name_phar" name="first_name" placeholder="First Name" required minlength="3" pattern="[A-Za-z]{3,30}" title="Please enter only character">
                                            <label for="first_name_phar">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="last_name_phar" name="last_name" placeholder="Last Name" required minlength="3" pattern="[A-Za-z]{3,30}" title="Please enter only character">
                                            <label for="last_name_phar">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email_phar" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" title="Please entervalid mail e.g: example@mail.com">
                                            <label for="email_phar">Email Address</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="phone_phar" name="phone" required minlength="10" maxlength="10" placeholder="Phone no.">
                                            <label for="phone_phar">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="city_phar" name="city" required placeholder="City" pattern="[A-Za-z]{4,50}" minlength="4" title="City name contains minimum  4 characters">
                                            <label for="city_phar">City</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="form-select form-select-lg" aria-label="Default select example" required id="country_phar" name="country">
                                            <!-- <option selected>Canada</option>
                                            <option value="USA">USA</option>
                                            <option value="UK">U.K</option>
                                            <option value="AUS">Austarlia</option>
                                            <option value="IND">India</option> -->
                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="address" name="address" required placeholder="Address" minlength="6" title="adress must contain: atleast 6 character">
                                            <label for="address">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <textarea class="form-control" style="height: 100px;" placeholder="Message" id="message_phar" name="message" required minlength="15" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <button type="" class="modal-back-btn closeModal">
                                        < </button>
                                            <button type="submit" id="btnPharmacySubmit" class="popup-submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- .pharmacy form -->

                    <!-- patient join us -->
                    <div class="panel" id="three-panel">
                        <div class="form-body p-4 row d-flex align-content-center rounded-3 shadow-md" style="background-color: #fff;">
                            <form id="frmPatientJoinUs" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required minlength="3" pattern="[A-Za-z]{3,30}" title="Please enter only character">
                                            <label for="first_name">First Name</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required pattern="[A-Za-z]{3,30}" title="Please enter only character">
                                            <label for="last_name">Last Name</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" title="Please entervalid mail e.g: example@mail.com">
                                            <label for="email">Email Address</label>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Phone" minlength="10" maxlength="10" title="Phone no must be 10 digits">
                                            <label for="phone">Phone Number</label>
                                        </div>
                                    </div>
                                    <button type="" class="modal-back-btn closeModal">
                                        < </button>
                                            <button type="submit" id="btnPatientJoinUs" class="popup-submit-btn">Submit</button>
                                </div>
                            </form>

                        </div>

                    </div>
                    <!-- .patient join us -->

                </div>
            </div>
        </div>
    </div>
</div>


<!-- jquery -->
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->