<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CGPA CALCULATOR</title>

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

        #spacecontainer {
            margin-top: 10%;
            margin-bottom: 5%;
        }

        @media only screen and (max-width: 1024px) {
            #spacecontainer {
                margin-top: 15%;
            }

            #textmargin {
                margin-bottom: 10%;
            }
        }

        @media only screen and (max-width: 768px) {
            #textmargin {
                margin-bottom: 22%;
            }
        }

        @media only screen and (max-width: 700px) {
            #spacecontainer {
                margin-top: 30%;
            }

            #spacebottom {
                margin-bottom: 5%;
            }

        }
    </style>

</head>

<body>

    <!-- Popcash Ads -->
    <script type="text/javascript">
        var uid = '244335';
        var wid = '503021';
    </script>
    <script type="text/javascript" src="//cdn.popcash.net/pop.js"></script>
    <!-- End Popcash Ads -->

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
                        <a class="nav-link" href="index.php" class="item">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="landingGrade.php" class="item">Grade Target</a>
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

    <div class="container" id="spacecontainer">
        <div class="col-sm-12" style="text-align: center; margin-bottom: 5%;">
            <h1><b>CGPA CALCULATOR</b></h1>
        </div>
        <div class="row">
            <!-- Public University -->
            <div class="col-sm-6" id="spacebottom">
                <!-- Card -->
                <div class="card">

                    <!-- Card content -->
                    <div class="card-body" style="text-align: center;">

                        <!-- Title -->
                        <h2 class="card-title"><b>Public University</b></h2>
                        <!-- Text -->
                        <p class="card-text">A public university is a university that is publicly owned or receives
                            significant public funds through a national or subnational government.</p>
                        <!-- Button -->
                        <!--Dropdown primary-->
                        <div class="dropdown">

                            <!--Trigger-->
                            <button class="btn grey darken-4 text-white dropdown-toggle btn-block" type="button"
                                id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Select</button>

                            <!--Menu-->
                            <div class="dropdown-menu dropdown-primary dropdown-menu-right"
                                style="height:200px; overflow-y:auto;">
                                <a class="dropdown-item" href="calculator_um.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/umicon.ico" alt=""
                                        width="20px" height="20px">
                                    Universiti Malaya (UM)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_upm.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/upmicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Putra Malaysia (UPM)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_uitm.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/uitmicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Teknologi Mara (UITM)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_utm.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/utmicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Teknologi Malaysia (UTM)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_ukm.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/ukmicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Kebangsaan Malaysia (UKM)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_uia.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/uiaicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Islam Antarabangsa (UIA)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_usm.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/usmicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Sains Malaysia (USM)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_ump.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/umpicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Malaysia Pahang (UMP)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_umk.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/umkicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Malaysia Kelantan (UMK)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_umt.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/umticon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Malaysia Terengganu (UMT)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_upsi.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/upsiicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Pendidikan Sultan Idris (UPSI)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_unimas.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/unimasicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Malaysia Sarawak (Unimas)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_ums.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/umsicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Malaysia Sabah (UMS)</a>
                            </div>
                        </div>
                        <!--/Dropdown primary-->

                    </div>

                </div>
                <!-- Card -->

            </div>
            <!-- Private University -->
            <div class="col-sm-6" id="spacebottom">
                <!-- Card -->
                <div class="card">

                    <!-- Card content -->
                    <div class="card-body" style="text-align: center;">

                        <!-- Title -->
                        <h2 class="card-title"><b>Private University</b></h2>
                        <!-- Text -->
                        <p class="card-text" id="textmargin">Private universities (and private colleges) are typically
                            not operated by
                            governments.</p>
                        <!-- Button -->
                        <!--Dropdown primary-->
                        <div class="dropdown">

                            <!--Trigger-->
                            <button class="btn grey darken-4 text-white dropdown-toggle btn-block" type="button"
                                id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Select</button>

                            <!--Menu-->
                            <div class="dropdown-menu dropdown-primary dropdown-menu-right"
                                style="height:200px; overflow-y:auto;">
                                <a class="dropdown-item" href="calculator_utp.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/utpicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Petronas (UTP)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_unikl.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/uniklicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Kuala Lumpur (Unikl)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_taylor.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/taylorsicon.ico"
                                        alt="" width="20px" height="20px">
                                    Taylor's University </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_uniten.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/unitenicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Tenaga Nasional (Uniten)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_unisel.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/uniselicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Selangor (Unisel)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_kdu.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/kduicon.ico"
                                        alt="" width="20px" height="20px">
                                    KDU University</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_segi.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/segiicon.ico"
                                        alt="" width="20px" height="20px">
                                    SEGI University</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_utar.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/utaricon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Tunku Abdul Rahman (UTAR)</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="calculator_unirazak.php"
                                    style="color:black; padding-right: 30px;"><img src="/static/icons/unirazakicon.ico"
                                        alt="" width="20px" height="20px">
                                    Universiti Tun Abdul Razak (UNIRAZAK)</a>
                            </div>
                        </div>
                        <!--/Dropdown primary-->

                    </div>

                </div>
                <!-- Card -->
            </div>
        </div>

        <div class="col-sm-13">
            <!-- Card 2 -->
            <div class="card" style="margin-top: 30px; padding-bottom: 1%;">

                <!-- Card content -->
                <div class="card-body" style="min-height:150px; max-height:auto;">

                    <!-- Title -->
                    <h4 class="card-title" style="text-align: center; margin-top: 1%;"><b>Share This Website</b></h4>

                    <div class="row" style="justify-content:center;">
                        <!--Facebook-->
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://iptcgpacalculator.herokuapp.com">
                            <button type="button" class="btn btn-md blue darken-4 text-white btn-fb"><i
                                    class="fab fa-facebook-f pr-1"></i>
                                Facebook</button></a>

                        <!--Twitter-->
                        <a
                            href="https://twitter.com/intent/tweet?text=Hello guys, check this out: https://iptcgpacalculator.herokuapp.com">
                            <button type="button" class="btn btn-md blue darken-1 text-white btn-tw"><i
                                    class="fab fa-twitter pr-1"></i>
                                Twitter</button></a>

                        <!--Reddit-->
                        <a href="http://www.reddit.com/submit?url=https://iptcgpacalculator.herokuapp.com">
                            <button type="button" class="btn btn-md orange darken-4 text-white btn-reddit"><i
                                    class="fab fa-reddit-alien pr-1"></i>
                                Reddit</button></a>

                        <!--Whatsapp-->
                        <a
                            href="https://wa.me/whatsappphonenumber/?text=Hello guys, check this out: https://iptcgpacalculator.herokuapp.com">
                            <button type="button" class="btn btn-md green darken-4 text-white btn-whatsapp"><i
                                    class="fab fa-whatsapp pr-1"></i>
                                Whatsapp</button></a>

                        <!--Linkedin-->
                        <a href="https://www.linkedin.com/cws/share?url=https://iptcgpacalculator.herokuapp.com">
                            <button type="button" class="btn btn-md blue darken-3 text-white btn-li"><i
                                    class="fab fa-linkedin-in pr-1"></i>
                                Linkedin</button></a>
                    </div>
                </div>
            </div>
            <!-- End Card 2 -->
        </div>
    </div>

    <!-- Content End Here -->



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