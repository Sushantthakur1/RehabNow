<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Docmed</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/my.css">

</head>
<body>
<header>
    <div  class="header-area ">
        <div style="background-color: #0b0b0b" id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div id="d1" class="col-xl-20 col-lg-20">

                        <div class="menu_wrap d-none d-lg-block">
                            <div class="menu_wrap_inner d-flex align-items-center justify-content-end">

                                <div class="main-menu">

                                    <nav id="mi">
                                        <ul id="navigation">
                                            <li> <a href="index.html">
                                                    <img src="img/log.png" class="mg">
                                                </a></li>
                                            <li>  </li>

                                            <li class="mine"><a href="index.html">home</a></li>
                                            <li class="mine"><a href="about.html">About</a></li>
                                            <li class="mine"><a href="#">Alcohol <i class="fas fa-caret-down " style="font-size:15px"></i></a>
                                                <ul class="submenu" STYLE="background-color:#7f007f ">
                                                    <li><a href="alchole.html" style="color: #e0e0e0">Blacking Out from Alcohol</a></li>
                                                    <li><a href="stop.html" style="color: #e0e0e0">How to Stop Drinking</a></li>
                                                    <li><a href="CODR.html" style="color: #e0e0e0">Co-Occuring Disorder</a></li>
                                                    <li><a href="aab.html" style="color: #e0e0e0">Alcohol Addiction and Abuse</a></li>

                                                </ul>
                                            </li>
                                            <li class="mine"><a href="#">Drugs <i class="fas fa-caret-down " style="font-size:15px"></i></a>
                                                <ul class="submenu" STYLE="background-color:#7f007f ">
                                                    <li><a href="drugs.html" style="color: #e0e0e0">Drug Classifications</a></li>
                                                    <li><a href="BAR.html" style="color: #e0e0e0">Behavioral Addiction</a></li>
                                                    <li><a href="druginsystem.html" style="color: #e0e0e0">How Long Do Drugs Stay in Your System?</a></li>
                                                </ul>
                                            </li>
                                            <li class="mine"><a href="#">Treatments <i class="fas fa-caret-down " style="font-size:15px"></i></a>
                                                <ul class="submenu" STYLE="background-color:#7f007f ">
                                                    <li><a href="AR.html" style="color: #e0e0e0">Ayurveda Treatment</a></li>
                                                    <li><a href="yoga.html" style="color: #e0e0e0">Yoga and Meditation</a></li>
                                                </ul>
                                            </li>
                                            <li class="mine"><a href="contact.html">Contact</a></li>
                                            <li class="mine"><a href="mip.html">Search <i class="fas fa-map " style="font-size:15px"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="book_room">
                                    <div class="book_btn">
                                        <a class="popup-with-form" href="#test-form" id="sub">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text ">

                            <div class="card">
                                <div class="card-header"><h2>YOUR APPOINTMENT</h2></div>
                                <div class="card-body"><p>Welcome <?php echo $_POST["name"]; ?> you have an appointment with <?php echo $_POST["select"]; ?> on <?php echo $_POST["date"]; ?>
                                        at <?php echo $_POST["time"]; ?></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4 ">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                        <p class="address_text">This is a group project made for EPICS by CSE Batch 2018.
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Help in Areas
                        </h3>
                        <ul class="links">
                            <li><a href="alchole.html" >Blacking Out from Alcohol</a></li>
                            <li><a href="stop.html" >How to Stop Drinking</a></li>
                            <li><a href="CODR.html" >Co-Occuring Disorder</a></li>
                            <li><a href="aab.html" >Alcohol Addiction and Abuse</a></li>

                        </ul>
                        <ul class="links">
                            <li><a href="drugs.html">Drug Classifications</a></li>
                            <li><a href="BAR.html" >Behavioral Addiction</a></li>
                            <li><a href="druginsystem.html" >How Long Do Drugs Stay in Your System?</a></li>

                        </ul>
                        <ul class="links">
                            <li><a href="AR.html" >Ayurveda Treatment</a></li>
                            <li><a href="yoga.html" >Yoga and Meditation</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-4  col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            We’re Available
                        </h3>
                        <ul class="meting_time">
                            <li class="d-flex justify-content-between "><span>Monday - Friday</span> <span>8.00 - 18.00</span></li>
                            <li class="d-flex justify-content-between "><span>Saturday	</span> <span>8.00 - 18.00</span></li>
                            <li class="d-flex justify-content-between "><span>Sunday</span> <span>8.00 - 13.00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/gijgo.min.js"></script>
<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/main.js"></script>
<script>
    $('.datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-calendar"></span>'
        }
    });

    $('.timepicker').timepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-clock-o"></span>'
        }
    });
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>

</body>
</html>