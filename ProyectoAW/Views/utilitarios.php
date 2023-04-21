<?php 
include_once '../Controllers/loginController.php';

if(session_status()==PHP_SESSION_NONE) {
  session_start();
}

function MostrarHead (){
    echo '
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movate</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-festava-live.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/line-icons.css">
    <link rel="stylesheet" href="dist/css/owl.carousel.css">
    <link rel="stylesheet" href="dist/css/owl.theme.css">
    <link rel="stylesheet" href="dist/css/nivo-lightbox.css">
    <link rel="stylesheet" href="dist/css/magnific-popup.css">
    <link rel="stylesheet" href="dist/css/slicknav.css">
    <link rel="stylesheet" href="dist/css/animate.css">
    <link rel="stylesheet" href="dist/css/main.css">    
    <link rel="stylesheet" href="dist/css/responsive.css">
</head>
    ';
}


function MostrarHeader(){
  if($_SESSION["CorreoElectronico"] == null){
    header("Location: ../Views/login.php");
  }
    echo '
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            Festava Live
        </a>

        <a href="ticket.html" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">Artists</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_4">Schedule</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_5">Pricing</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_6">Contact</a>
                </li>
            </ul>

            <a href="ticket.html" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>
        </div>
    </div>
</nav>

    ';
}

function MostrarContactUs(){
    echo'
    <footer class="site-footer">
    <div class="site-footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h2 class="text-white mb-lg-0">Festava Live</h2>
                </div>

                <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                    <ul class="social-icon d-flex justify-content-lg-end">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-twitter"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-apple"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-instagram"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-youtube"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-pinterest"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-4 pb-2">
                <h5 class="site-footer-title mb-3">Links</h5>

                <ul class="site-footer-links">
                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Home</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">About</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Artists</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Schedule</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Pricing</a>
                    </li>

                    <li class="site-footer-link-item">
                        <a href="#" class="site-footer-link">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <h5 class="site-footer-title mb-3">Have a question?</h5>

                <p class="text-white d-flex mb-1">
                    <a href="tel: 090-080-0760" class="site-footer-link">
                        090-080-0760
                    </a>
                </p>

                <p class="text-white d-flex">
                    <a href="mailto:hello@company.com" class="site-footer-link">
                        hello@company.com
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                <h5 class="site-footer-title mb-3">Location</h5>

                <p class="text-white d-flex mt-3 mb-2">
                    Silang Junction South, Tagaytay, Cavite, Philippines</p>

                <a class="link-fx-1 color-contrast-higher mt-3" href="#">
                    <span>Our Maps</span>
                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="16" cy="16" r="15.5"></circle>
                            <line x1="10" y1="18" x2="16" y2="12"></line>
                            <line x1="16" y1="12" x2="22" y2="18"></line>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12 mt-5">
                    <p class="copyright-text">Copyright © 2036 Festava Live Company</p>
                    <p class="copyright-text">Distributed by: <a href="https://themewagon.com">ThemeWagon</a></p>
                </div>

                <div class="col-lg-8 col-12 mt-lg-5">
                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Terms &amp; Conditions</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Privacy Policy</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Your Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
    ';
}


Function MostrarJS(){
    echo'
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="dist/js/jquery-min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/jquery.mixitup.js"></script>
    <script src="dist/js/nivo-lightbox.js"></script>
    <script src="dist/js/owl.carousel.js"></script>    
    <script src="dist/js/jquery.stellar.min.js"></script>    
    <script src="dist/js/jquery.nav.js"></script>    
    <script src="dist/js/scrolling-nav.js"></script>    
    <script src="dist/js/jquery.easing.min.js"></script>    
    <script src="dist/js/smoothscroll.js"></script>    
    <script src="dist/js/jquery.slicknav.js"></script>     
    <script src="dist/js/wow.js"></script>   
    <script src="dist/js/jquery.vide.js"></script>
    <script src="dist/js/jquery.counterup.min.js"></script>    
    <script src="dist/js/jquery.magnific-popup.min.js"></script>    
    <script src="dist/js/waypoints.min.js"></script>    
    <script src="dist/js/form-validator.min.js"></script>
    <script src="dist/js/contact-form-script.js"></script>   
    <script src="dist/js/main.js"></script>


    ';
}


?>

