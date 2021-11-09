<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "./Components/header-links.php";
    ?>
    <link rel="stylesheet" href="./Assets/Css/style.css">
</head>

<body>
    <!-- form -->
    <div class="d-flex justify-content-center vertical-center-row" style="padding:2%">
        <div class="warpper">
            <input class="radio" id="one" name="group" type="radio" checked>
            <input class="radio" id="two" name="group" type="radio">
            <input class="radio" id="three" name="group" type="radio">
            <div class="tabs">
                <label class="tab" id="one-tab" for="one">Providers
                    Join Us</label>
                <label class="tab" id="two-tab" for="two">Pharmacy
                    Join Us</label>
            </div>
            <div class="panels">
                <div class="panel" id="one-panel">
                    <div class="form-body p-4 row d-flex align-content-center rounded-3 shadow-md" style="background-color: #fff;">
                        <form id="frmProviders" method="post">
                            <div class="row">

                                <div class="col-sm-6  col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required minlength="3" pattern="[A-Za-z]{3,30}" title="Please enter only character">
                                        <label for="first_name">First Name</label>

                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required pattern="[A-Za-z]{3,30}" title="Please enter only character">
                                        <label for="last_name">Last Name</label>

                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" title="Please entervalid mail e.g: example@mail.com">
                                        <label for="email">Email Address</label>

                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Phone" minlength="10" maxlength="10" title="Phone no must be 10 digits">
                                        <label for="phone">Phone Number</label>

                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="city" name="city" required placeholder="City" pattern="[A-Za-z]{4,50}" minlength="4" title="City name contains minimum  4 characters">
                                        <label for="city">City</label>

                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <select class="form-select form-select-lg" aria-label="country" required id="country" name="country">
                                        <option selected>Canada</option>
                                        <option value="1">USA</option>
                                        <option value="2">U.K</option>
                                        <option value="3">Austarlia</option>
                                        <option value="4">India</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <select class="form-select form-select-lg" aria-label="disease" required id="disease" name="disease">
                                        <option selected>Trauma</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
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
                                <button type="submit" id="btnProvidersSubmit" class="w-100 btn page-btn">Let's Begin</button>
                            </div>
                        </form>

                    </div>

                </div>

                <div class="panel" id="two-panel">
                    <div class="form-body p-4 row d-flex align-content-center rounded-3 shadow-md" style="background-color: #fff;">
                        <form id="frmPharmacy" method="post">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="first_name_phar" name="first_name" required placeholder="First Name">
                                        <label for="first_name_phar">First Name</label>
                                        <span style="font-size: 15px; color:blue; font-weight:300;" id="phar_fname_error" class="form-text"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="last_name_phar" name="last_name" required placeholder="Last Name">
                                        <label for="last_name_phar">Last Name</label>
                                        <span style="font-size: 15px; color:blue; font-weight:300;" id="phar_lname_error" class="form-text"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email_phar" name="email" required placeholder="Email">
                                        <label for="email_phar">Email Address</label>
                                        <span style="font-size: 15px; color:blue; font-weight:300;" id="phar_email_error" class="form-text"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="phone_phar" name="phone" required placeholder="Phone no.">
                                        <label for="phone_phar">Phone Number</label>
                                    </div>
                                    <span style="font-size: 15px; color:blue; font-weight:300;" id="phar_phone_error" class="form-text"></span>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="city_phar" name="city" required placeholder="City">
                                        <label for="city_phar">City</label>
                                    </div>
                                    <span style="font-size: 15px; color:blue; font-weight:300;" id="phar_city_error" class="form-text"></span>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <select class="form-select form-select-lg" aria-label="Default select example" required id="country_phar" name="country">
                                        <option selected>Canada</option>
                                        <option value="1">USA</option>
                                        <option value="2">U.k</option>
                                        <option value="3">Austarlia</option>
                                        <option value="4">India</option>
                                    </select>
                                </div>
                                <div class="col-sm-12 ">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="address" name="address" required placeholder="Address">
                                        <label for="address">Address</label>
                                    </div>
                                    <span style="font-size: 15px; color:blue; font-weight:300;" id="address_error" class="form-text"></span>
                                </div>
                                <div class="col-sm-12 col-lg-12">
                                    <div class="mb-3">
                                        <textarea class="form-control" style="height: 100px;" placeholder="Message" id="message_phar" name="message" required minlength="15" rows="3"></textarea>
                                    </div>
                                </div>
                                <button type="submit" id="btnPharmacySubmit" class="w-100 page-btn btn">Let's Begin</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script type="text/javascript">
        $(document).ready(function() {
            // form submit
            $('#frmProviders').submit(function(e) {
                e.preventDefault();

                // alert('hii')
                $("#btnProvidersSubmit").attr('disabled', true);
                var data = new FormData(document.getElementById("frmProviders"));
                // console.log(data);
                $.ajax({
                    url: "../dbConnectivity.php?oper=2",
                    type: "post",
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        var result = jQuery.parseJSON(response);
                        if (result.dbStatus == 'SUCCESS') {
                            alert(result.dbMessage);
                            $("#btnProvidersSubmit").removeAttr('disabled');
                            $('#frmProviders').trigger('reset');
                            $("#btnProvidersSubmit").attr('disabled', false);
                        } else if (result.dbStatus == 'FAILURE') {
                            alert(result.dbMessage);
                            $("#btnProvidersSubmit").removeAttr('disabled');
                            $('#frmProviders').trigger('reset');
                            $("#btnProvidersSubmit").attr('disabled', false);
                        }
                    }
                });
            });
            // form submit
            $('#frmPharmacy').submit(function(e) {
                e.preventDefault();
                var res = validatePharmacy();
                if (res) {
                    $("#btnPharmacySubmit").attr('disabled', true);
                    var data = new FormData(document.getElementById("frmPharmacy"));
                    // console.log(data);
                    $.ajax({
                        url: "../dbConnectivity.php?oper=3",
                        type: "post",
                        data: data,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            var result = jQuery.parseJSON(response);
                            if (result.dbStatus == 'SUCCESS') {
                                alert(result.dbMessage);
                                $("#btnPharmacySubmit").removeAttr('disabled');
                                $('#frmPharmacy').trigger('reset');
                                $("#btnPharmacySubmit").attr('disabled', false);
                            } else if (result.dbStatus == 'FAILURE') {
                                alert(result.dbMessage);
                                $("#btnPharmacySubmit").removeAttr('disabled');
                                $('#frmPharmacy').trigger('reset');
                                $("#btnPharmacySubmit").attr('disabled', false);
                            }
                        }
                    });
                }
            });

            // Pharmacy form validation
            function validatePharmacy() {
                var fname = document.getElementById('first_name_phar').value;
                var lname = document.getElementById('last_name_phar').value;
                var contact = document.getElementById('phone_phar').value;
                var email = document.getElementById('email_phar').value;
                var city = document.getElementById('city_phar').value;
                var address = document.getElementById('address').value;
                var message = document.getElementById('message_phar').value;

                if (fname.length == " ") {
                    document.getElementById('phar_fname_error').innerHTML = "Enter valid first name";
                    return false;
                }
                if (fname.length < 4) {
                    document.getElementById('phar_fname_error').innerHTML = "name must be greater than 4 character ";
                    return false;
                }
                if (!isNaN(fname)) {
                    document.getElementById('phar_fname_error').innerHTML = "only characters are allowed";
                    return false;
                }
                if (lname.length == " ") {
                    document.getElementById('phar_lname_error').innerHTML = " Enter valid last name";
                    return false;
                }
                if (lname.length < 4) {
                    document.getElementById('phar_lname_error').innerHTML = "name must be greater than 4 character ";
                    return false;
                }
                if (!isNaN(lname)) {
                    document.getElementById('phar_lname_error').innerHTML = "only characters are allowed";
                    return false;
                }
                if (email == "") {
                    document.getElementById('phar_email_error').innerHTML = "Please Enter your mail id";
                    return false;
                }
                if (email.indexOf('@') <= 0) {
                    document.getElementById('phar_email_error').innerHTML = "invalid position of @";
                    return false;
                }
                if ((email.charAt(email.length - 4) != '.') && (email.charAt(email.length - 3) != '.')) {
                    document.getElementById('phar_email_error').innerHTML = "invalid '.' position";
                    return false;
                }
                if (contact == "") {
                    document.getElementById('phar_phone_error').innerHTML = "Please Enter phone no";
                    return false;
                }
                if (isNaN(contact)) {
                    document.getElementById('phar_phone_error').innerHTML = "only numbers are allowed";
                    return false;
                }
                if (contact.length != 10) {
                    document.getElementById('phar_phone_error').innerHTML = "no must be 10 digit only";
                    return false;
                }
                if (city.length == " ") {
                    document.getElementById('phar_city_error').innerHTML = "Enter valid name";
                    return false;
                }
                if (city.length < 2) {
                    document.getElementById('phar_city_error').innerHTML = "City name must be greater than 2 character ";
                    return false;
                }
                if (!isNaN(city)) {
                    document.getElementById('phar_city_error').innerHTML = "Only characters are allowed";
                    return false;
                }
                if (address.length == " ") {
                    document.getElementById('address_error').innerHTML = "Enter valid name";
                    return false;
                }
                if (address.length < 10) {
                    document.getElementById('address_error').innerHTML = "City name must be greater than 10 character ";
                    return false;
                }

                return true;
            }

        });
    </script>

</body>

</html>