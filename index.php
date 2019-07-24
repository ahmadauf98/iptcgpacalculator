<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IPT CGPA CALCULATOR</title>

    <!-- Tab Icon -->
    <link rel="icon" href="/static/images/uplogo.png" type="image/x-icon">
    <link rel="shortcut icon" href="/static/images/uplogo.png" type="image/x-icon">
    <!-- End Tab Icon -->

    <!-- MD Bootsrap 4 -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/css/mdb.min.css" rel="stylesheet">
    <!-- End MD Bootsrap 4 -->

    <!-- UI Kit Web Framework -->
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit-icons.min.js"></script>
    <!-- End UI Kit Web Framework -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143688410-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-143688410-1');
    </script>
    <!-- End Global site tag (gtag.js) - Google Analytics -->

    <style>
        html,
        body {
            background: #f8f8f8;
            scroll-behavior: smooth;
        }

        #space {
            margin-bottom: 3%;
        }

        #about {
            margin-bottom: 0%;
        }

        @media only screen and (max-width: 600px) {
            #space {
                margin-bottom: 5%;
            }

        }
    </style>

</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top grey darken-4">
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">
                <img src="/static/images/Logo.png" width="65" height="auto" alt="logo">
            </a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Nav" aria-controls="Nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="Nav">
                <ul class="navbar-nav mr-auto" style="text-align:center;">
                    <li class="nav-item">
                        <a class="nav-link" href="#carousel-example-1z" class="item">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#space" class="item">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#timeline" class="item">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" class="item">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav my-2 my-lg-0">
                    <div class="row" style="justify-content: center">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light"
                                href="https://www.facebook.com/ahmadauf.nasruddin">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="https://twitter.com/ahmadauf_">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="https://www.instagram.com/ahmadauf2098">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="https://github.com/ahmadauf98">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        <!-- Collapsible content -->
    </nav>
    <!-- End Navbar-->

    <!-- Content Start Here -->

    <!-- Slideshow Section -->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: 40px;">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
                <img class="d-block w-100" src="/static/images/background.png" alt="First slide">
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <img class="d-block w-100" src="/static/images/background1.png" alt="Second slide">
            </div>
            <!--/Second slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <img class="d-block w-100" src="/static/images/background2.png" alt="Third slide">
            </div>
            <!--/Second slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!-- End Slideshow Section -->

    <div class="container" style="margin-top:50px; margin-bottom: 20px;">
        <div class="row" id="space">

            <div class="col-sm-4" id="space">
                <!-- Card Narrower -->
                <div class="card card-cascade narrower">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="/static/images/cardpic1.JPG" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                        <!-- Title -->
                        <h4 class="font-weight-bold card-title">CGPA CALCULATOR</h4>
                        <!-- Text -->
                        <p class="card-text">You can use this feature to calculate
                            your current semester grade point
                            averages (SGPA) and cumulative grade
                            point averages (CGPA).</p>
                        <!-- Button -->
                        <a class="btn grey darken-4 text-white" href="landingCalculator.php">Click Here</a>

                    </div>

                </div>
                <!-- Card Narrower -->
            </div>
            <div class="col-sm-4" id="space">
                <!-- Card Narrower -->
                <div class="card card-cascade narrower">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="/static/images/cardpic3.JPG" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                        <!-- Title -->
                        <h4 class="font-weight-bold card-title">GRADE TARGET</h4>
                        <!-- Text -->
                        <p class="card-text">This feature is about how many marks
                            do you needed to score during the final
                            examination to get the grade you want.</p>
                        <!-- Button -->
                        <a class="btn grey darken-4 text-white" href="landingGrade.php">Click Here</a>

                    </div>

                </div>
                <!-- Card Narrower -->
            </div>
            <div class="col-sm-4">
                <!-- Card Narrower -->
                <div class="card card-cascade narrower">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="/static/images/cardpic3.JPG" alt="Card image cap">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">

                        <!-- Title -->
                        <h4 class="font-weight-bold card-title">GPA TARGET</h4>
                        <!-- Text -->
                        <p class="card-text">You can use this feature to know GPA that you needed to score based on
                            remaining credit hours to get your final CGPA.</p>
                        <!-- Button -->
                        <a class="btn grey darken-4 disabled">Coming Soon</a>

                    </div>

                </div>
                <!-- Card Narrower -->
            </div>
        </div>
    </div>

    <div class="row" id="timeline">
        <div class="col-sm-12">
            <!-- Card -->
            <div class="card card-image" style="background-image: url(/static/images/backgroundcard.jpg);  background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;">

                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                        <h3 class="card-title text-white pt-2"><strong>Web Timeline</strong></h3>
                        <br>
                        <div class="row d-flex justify-content-center">

                            <!-- Grid column -->
                            <div class="col-xl-7 pb-2">

                                <p class="card-text">Let's figure out how this website keeps upgrading from the
                                    beginning of the deployment until what you see right now. You can see every major
                                    and minor update of this website and most importantly is you can access to the
                                    second last
                                    major update code files through GitHub.</p>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <br>
                        <a class="btn white text-dark darken-4" href="timeline.php"><i class="fas fa-clone left"></i> View Timeline</a>
                    </div>
                </div>

            </div>
            <!-- Card -->

        </div>
    </div>

    <!-- Jumbotron -->
    <div class="jumbotron text-center" id="about">

        <!-- Title -->
        <h3 class="card-title text-dark pt-2"><strong>About</strong></h3>
        <!-- Grid row -->
        <div class="row d-flex justify-content-center">

            <!-- Grid column -->
            <div class="col-xl-7 pb-2">

                <p class="card-text">My intention to build this website is to help university students to calculate
                    their cumulative grade point average (cgpa) and semester grade point average (gpa). There will
                    be
                    more features added to this website in the future. Thank you for supporting my first project
                    (own
                    project).</p>

            </div>
            <!-- Grid column -->
        </div>
    </div>
    <!-- Jumbotron -->




    <!-- Footer -->
    <?php require_once('includes/footer.php') ?>
    <!-- End Footer -->



    <!-- End Content Here -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/js/mdb.min.js"></script>
    <!-- END SCRIPTS -->
</body>

</html>