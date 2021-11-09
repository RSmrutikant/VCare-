<footer class="footer-distributed  fot " style="background-color: #F1F3FF; padding-top:2%;">
    <div class="content1">
        <br>
        <div class="footer-left">
            <a href="index.php"><img src="./Assets/Images/logo.png"></a>
        </div>
        <div class="footer-center">

        </div>


        <div class="footer-right">
            <p class="footer-company-about">


            <ul class="footer-list">
                <li> <span class="fot_head">Company</span></li>
                <li><a href="./About.php"> About Us </a></li>
                <li><a href="./Service.php"> Services </a></li>
            </ul>

            </p>

        </div>
        <div class="footer-right">
            <p class="footer-company-about">


            <ul class="footer-list">
                <li> <span class="fot_head">Quick links</span></li>
                <li><a href="./smart-clinic.php"> Smart Clinic </a></li>
                <li><a href="./HouseCall.php"> House Calls </a></li>
                <li><a href="./Doctor-on-call.php"> Doctor On Call </a></li>
            </ul>

            </p>

        </div>
        <div class="footer-right">
            <p class="footer-company-about">

            <ul class="footer-list">
                <li> <span class="fot_head">Support</span></li>
                <li><a href="./contact.php"> Contact us </a></li>
                <li><a href="./index.php"> VCarePlus </a></li>
            </ul>
            </p>

        </div>
        <div class="footer-right">
            <p class="footer-company-about">

            <ul class="footer-list">
                <li> <span class="fot_head">Follow us</span></li>
                <li><a href="https://www.facebook.com/GalileoLifeSciencesInc"><i class="fab fa-facebook-square"></i> Facebook </a></li>
                <li><a href="https://www.instagram.com/galileolife/"><i class="fab fa-instagram"></i> Instagram </a></li>
                <li><a href="https://www.linkedin.com/company/galileo-life"><i class="fab fa-linkedin"></i> Linkedin </a></li>
                <li><a href="https://twitter.com/GalileoLife"><i class="fab fa-twitter"></i> Twitter </a></li>


            </ul>
            </p>
        </div>
    </div>
</footer>
<!-- jquery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

       <!-- Dynamic Country dropdown -->
<script>
    $(document).ready(function () {
        $.ajax({
        url: 'dbConnectivity.php?oper=country',
        type:"get",
        success: function(response) {
            var res = jQuery.parseJSON(response);
            var options = "<option selected>Select Country</option>";
            if (res.dbStatus == "SUCCESS") { 
                $.each(res.aaData,function(i, data) {

                    if(data.name == 'Canada')
                        options += "<option selected value='"+data.iso3+"' selected>"+data.name+"</option>";

                    else
                        options += "<option value='"+data.iso3+"'>"+data.name+"</option>";
                //   options += "<option value= '"+data.iso3+"'>"+data.name+"</option>";
                });
                $("#country_list").html(options);
                $("#country_list_provider").html(options);
                $("#country_phar").html(options);      
                }
        },
        error:function(response) {
            alert('Something went wrong....');
        }
        });
    });
</script>