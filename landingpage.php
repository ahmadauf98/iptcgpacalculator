<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CGPA Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="uplogo.png" type="image/x-icon">
    <link rel="shortcut icon" href="uplogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <!-- Navigation Bar Section-->
    <div class="ui inverted top fixed menu">
        <div class="item">
            <img src="Logo.png">
        </div>
        <a href="index.html" class="item">Home</a>
        <a href="about.html" class="item">About</a>
        <div class="ui right floated inverted simple dropdown item">
            Contact
            <i class="dropdown icon"></i>
            <div class="menu">
                <a href="https://www.facebook.com/ahmadauf.nasruddin" class="item">
                    <i class="facebook icon"></i> Facebook</a>
                <a href="https://twitter.com/Auf2098" class="item">
                    <i class="twitter icon"></i> Twitter</a>
                <a href="https://www.instagram.com/ahmadauf2098/" class="item">
                    <i class="instagram icon"></i> Instagram</a>
            </div>
        </div>
    </div>
    <!-- Content Section-->
    <div class="ui inverted vertical masthead center aligned segment" id="landing">
        <div class="two wide column">
            <div class="ui text container" id="header">
                <h1 class="ui inverted header" style="font-size: 50px;"> Select University :
                </h1>
                <div class="ui simple dropdown item">
                    <div style="font-size: 20px; margin-right: 30px;">
                        <i class="dropdown icon"></i> Public University
                    </div>
                    <div class="menu">
                        <div class="item"><a href="umCalculator.php" style="color:black;"><img src="umicon.ico" alt=""
                                    height="20px" style="margin: 1px 3px 0 0">
                                Universiti Malaya (UM)</a></div>
                        <div class="item"><a href="upmCalculator.php" style="color:black;"><img src="upmicon.ico" alt=""
                                    height="20px" style="margin: 1px 3px 0 0">
                                Universiti Pertanian Malaysia (UPM)</a></div>
                        <div class="item"><a href="uitmCalculator.php" style="color:black;"><img src="uitmicon.ico"
                                    alt="" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Teknologi Mara (UITM)</a></div>
                        <div class="item"><a href="utmCalculator.php" style="color:black;"><img src="utmicon.ico" alt=""
                                    height="20px" style="margin: 1px 3px 0 0">
                                Universiti Teknologi Malaysia (UTM)</a></div>
                        <div class="item"><a href="ukmCalculator.php" style="color:black;"><img src="ukmicon.ico" alt=""
                                    height="20px" style="margin: 1px 3px 0 0">
                                Universiti Kebangsaan Malaysia (UKM)</a></div>
                        <div class="item"><a href="uiaCalculator.php" style="color:black;"><img src="uiaicon.ico" alt=""
                                    height="20px" style="margin: 1px 3px 0 0">
                                Universiti Islam Antarabangsa Malaysia (UIAM)</a></div>
                        <div class="item"><a href="usmCalculator.php" style="color:black;"><img src="usmicon.ico"
                                    alt="" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Sains Malaysia (USM)</a></div>

                    </div>
                </div>
                <div class="ui simple dropdown item">
                    <div style="font-size: 20px; margin-right: 30px;">
                        <i class="dropdown icon"></i> Private University
                    </div>
                    <div class="menu">
                        <div class="item"><a href="utpCalculator.php" style="color:black;"><img src="utpicon.ico"
                                    alt="" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Petronas (UTP)</a></div>
                        <div class="item"><a href="uniklCalculator.php" style="color:black;"><img src="uniklicon.ico"
                                    alt="" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Kuala Lumpur (Unikl)</a></div>
                        <div class="item"><a href="taylorCalculator.php" style="color:black;"><img
                                    src="taylorsicon.ico" alt="" height="20px" style="margin: 1px 3px 0 0">
                                Taylors University </a></div>
                        <div class="item"><a href="uniklCalculator.php" style="color:black;"><img
                                    src="unitenicon.ico" alt="" height="20px" style="margin: 1px 3px 0 0">
                                Universiti Tenaga Nasional (Uniten)</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section-->
    <div class="ui inverted vertical footer segment" id="footer">
        <div class="ui center aligned container">
            <div class="ui stackable inverted divided grid">
                <div class="twelve wide column" id="aadev">
                    <h4 class="ui inverted header">&#9400; All rights reserved 2019 by AA Dev</h4>
                    <p>This website is intended for use as a guide only. Contact your university or institution for
                        exact
                        determination.</p>
                </div>
            </div>
            <div class="ui inverted section divider"></div>
            <img src="Logo.png" class="ui centered mini image">
            <div class="ui horizontal inverted small divided link list">
                <a class="item" href="https://ahmadauf98.github.io/">AA Dev Website</a>
                <a class="item" href="#">Terms and Conditions</a>
                <a class="item" href="#">Privacy Policy</a>
            </div>
        </div>
    </div>

    <script src="js.js"></script>
</body>

</html>