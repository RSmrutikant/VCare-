<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- owl-carsouel -->
    <link rel="stylesheet" href="./Assets/Css/owl.carousel.min.css">
    <link rel="stylesheet" href="./Assets/CSS/owl.theme.default.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- google fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Red+Hat+Display">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="./Assets/Css/style.css">
    <link rel="stylesheet" href="./Assets/Css/index.css">
    <link href="./Assets/Images/favicon.jpg" rel="icon" />
    <!-- favicons -->

    <title>Vcareplus | Home</title>

</head>

<body>
    <!-- Dynamic Navbar -->
    <?php
    $page = 'home';
    include "./Components/Nav.php";
    ?>


    <!-- section-1 -->
    <section class="section-1 container"style="padding-left: 0px;">
        <div id="main" class="owl-carousel owl-theme section-1-carousel">
            <div class="item">
                <a href="./Doctor-on-call.php">
                    <div class="card section-1-card">
                        <img src="./Assets/Images/home1.png" class="card-img-top" alt="..."><br>
                        <div class="card-body secrion-1-text-body">
                            <h5 class="card-title" style="color: #172B52;">Consult A <br>Doctor Online</h5>
                            <p class="card-text">Our licensed medical doctors are available to see you from a phone tablet
                                or computer.</p>
                            <div class="arrow-btn"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="./Smart-clinic.php">
                    <div class="card section-1-card">
                        <img src="./Assets/Images/home2.png" class="card-img-top" alt="..."><br>
                        <div class="card-body secrion-1-text-body">
                            <h5 class="card-title" style="color: #172B52;">Visit A Smart <br>Clinic Near You</h5>
                            <p class="card-text">Our Smart Clinics are located in pharmacies for a complete examination.</p>
                            <div class="arrow-btn"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="./doctor_at_home.php">
                    <div class="card section-1-card">
                        <img src="./Assets/Images/home3.png" class="card-img-top" alt="..."><br>
                        <div class="card-body secrion-1-text-body">
                            <h5 class="card-title" style="color: #172B52;">Call a Doctor<br> At Home</h5>
                            <p class="card-text">House calls for homebound patients. Get diagnosed in the comfort of your home.</p>
                            <div class="arrow-btn"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <!-- section-2 -->
    <div class="body">
        <section class="section-2 container">
            <h2 class="head">Our Services</h2>
            <div id="nonLoop" class="owl-carousel owl-theme">

                <div class="card" data-city="buda4">
                    <div id="myDIV" class="section-2-card w-100 qw " style="width: 18rem;">
                        <img src="./Assets/Images/medical-kit.png" class="card-img-top section-2-icon" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Primary Care</h5>
                            <p class="card-text small_paragraph" style="text-align: justify;">
                                Our primary care physicians are trained on telehealth to diagnose and treat array of illnesses,
                                <span class="dots">...</span>
                                <span class="more" style="display: none;">
                                    injuries and prescribe medications when appropriate.
                                </span>
                            </p>
                            <button onclick="readMore('buda4')" class="myBtn1">READ MORE</button>

                        </div>
                    </div>
                </div>


                <div class="card" data-city="buda5">
                    <div id="myDIV" class="section-2-card w-100 qw " style="width: 18rem;">
                        <img src="./Assets/Images/medical-kit1.png" class="card-img-top section-2-icon" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Naturopathy</h5>
                            <p class="card-text small_paragraph" style="text-align: justify;">
                                Our naturopathic doctors provide remedies and therapies that are safe and effective, to improve your health and decrease
                                <span class="dots">...</span>
                                <span class="more" style="display: none;">
                                    harmful side effects. Naturopathy treatments work to restore the balance of mind, body, and soul by providing equilibrium to the powerful and inherent healing abilities of your body and to prevent further disease from occurring.
                                </span>
                            </p>
                            <button onclick="readMore('buda5')" class="myBtn1">READ MORE</button>

                        </div>
                    </div>
                </div>
                <div class="card" data-city="buda6">
                    <div id="myDIV" class="section-2-card w-100 qw " style="width: 18rem;">
                        <img src="./Assets/Images/medical-kit3.png" class="card-img-top section-2-icon" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pain Management</h5>
                            <p class="card-text small_paragraph" style="text-align: justify;">
                                Our pain management specialists can diagnose the root cause of your suffering which can be simple or complex,
                                <span class="dots">...</span>
                                <span class="more" style="display: none;">
                                    most instances the cause would be a nerve root irritation from a herniated disc with pain radiating down the leg. More severe cases can require a wide variety of skills and techniques to treat the pain.
                                </span>
                            </p>
                            <button onclick="readMore('buda6')" class="myBtn1">READ MORE</button>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section-3 -->
        <section class="section-3 container">
            <h2 class="head">Our Benefits</h2>
            <div id="nonLoop2" class="owl-carousel owl-theme">
                <div class="card" data-city="buda">
                    <div id="myDIV" class="section-2-card w-100 qw " style="width: 18rem;">
                        <img src="./Assets/Images/Moblie care.png" class="card-img-top section-2-icon" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Patient Centered</h5>
                            <p class="card-text small_paragraph" style="text-align: justify;">
                                Our focus is on the patient's individual healthcare needs, treating them with dignity and
                                respect, as well as including
                                them in all
                                <span class="dots">...</span>
                                <span class="more" style="display: none;">
                                    of their health-related decisions.
                                </span>
                            </p>
                            <button onclick="readMore('buda')" class="myBtn1">READ MORE</button>
                        </div>
                    </div>
                </div>
                <div class="card" data-city="buda1">
                    <div id="myDIV" class="section-2-card w-100 qw" style="width: 18rem;">
                        <img src="./Assets/Images/medical-book.png" class="card-img-top section-2-icon" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Access to Specialists</h5>
                            <P class="card-text small_paragraph" style="text-align: justify;">
                                Tired of waiting in long queues to see a specialist? A few clicks and our primary care
                                doctors can provide you

                                <span class="dots">...</span>
                                <span class="more" style="display: none;">
                                    quick
                                    access
                                </span>

                            </P>
                            <button onclick="readMore('buda1')" class="myBtn1">READ MORE</button>
                        </div>
                    </div>
                </div>
                <div class="card" data-city="buda2">
                    <div id="myDIV" class="section-2-card w-100 qw" style="width: 18rem;">
                        <img src="./Assets/Images/family.png" class="card-img-top section-2-icon" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Smart Clinics</h5>
                            <p class="card-text small_paragraph" style="text-align: justify;">
                                Experience a virtual examination by a doctor, through integrated medical devices that will
                                allow the doctor to examine
                                you in real-time.
                                <span class="dots">...</span>
                                <span class="more" style="display: none;">
                                    Available only at our smart clinics.
                                </span>
                            </p>
                            <button onclick="readMore('buda2')" class="myBtn1">READ MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            // read more read less
            function readMore(city) {
                let dots = document.querySelector(`.card[data-city="${city}"] .dots`);
                let moreText = document.querySelector(`.card[data-city="${city}"] .more`);
                let btnText = document.querySelector(`.card[data-city="${city}"] .myBtn1`);
                let qw = document.querySelector(`.card[data-city="${city}"] .qw`);

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.textContent = "READ MORE";
                    moreText.style.display = "none";

                    qw.classList.toggle("mystyle");
                } else {
                    dots.style.display = "none";
                    btnText.textContent = "READ LESS";
                    moreText.style.display = "inline";
                    qw.classList.toggle("mystyle");
                }
            }
        </script>

    </div>
    <!-- Footer Integration -->
    <?php
    include "./Components/Footer.php";
    ?>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="./Assets/JS/jquery.min.js"></script>
    <script src="./Assets/JS/owl.carousel.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- local file -->
    <script src="./Assets/JS/script.js"></script>
    <script src="./Assets/JS/Main.js"></script>

</body>

</html>