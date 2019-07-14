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
     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143688410-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143688410-1');
</script>
</head>

<body>
    <!-- Navigation Bar Section-->
    <div class="ui inverted top fixed menu" id="navbar">
        <div class="item" id="imgLogo">
            <img src="Logo.png">
        </div>
        <a href="index.php" class="item" id="nav">Home</a>
        <a href="landingpage1.php" class="item" id="nav">Grade</a>
        <div class="ui right floated inverted simple dropdown item" id="dropdown">
            Contact
            <i class="dropdown icon"></i>
            <div class="menu">
                <a href="https://www.facebook.com/ahmadauf.nasruddin" class="item" id="dropdown1">
                    <i class="facebook icon"></i> Facebook</a>
                <a href="https://twitter.com/Auf2098" class="item" id="dropdown1">
                    <i class="twitter icon"></i> Twitter</a>
                <a href="https://www.instagram.com/ahmadauf2098/" class="item" id="dropdown1">
                    <i class="instagram icon"></i> Instagram</a>
            </div>
        </div>
    </div>

    <!-- Content Section-->
    <div class="ui inverted vertical masthead center aligned segment" id="landing1">
        <div class="ui text container">
            <h1>CGPA CALCULATOR</h1>
            <p>REMINDER: To IOS user, please use chrome browser. Thank You!</p>
            <h4 class="ui inverted header" style="font-size: 35px;"> Select University :
            </h4>

            <div class="ui simple dropdown item" id="navl">
                <div style="font-size: 20px; margin-right: 30px; padding:5px 8px; border: solid 2px white; border-radius:5%;" id="navbar">
                    <i class="dropdown icon"></i> Public University
                </div>
                <div class="menu" id="menu">
                    <a href="umCalculator.php" style="color:black;" class="item"><img src="umicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Malaya</a>
                    <a href="upmCalculator.php" style="color:black;" class="item"><img src="upmicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Putra Malaysia</a>
                    <a href="uitmCalculator.php" style="color:black;" class="item"><img src="uitmicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Teknologi Mara</a>
                    <a href="utmCalculator.php" style="color:black;" class="item"><img src="utmicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Teknologi Malaysia</a>
                    <a href="ukmCalculator.php" style="color:black;" class="item"><img src="ukmicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Kebangsaan Malaysia</a>
                    <a href="uiaCalculator.php" style="color:black;" class="item"><img src="uiaicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Islam Antarabangsa</a>
                    <a href="usmCalculator.php" style="color:black;" class="item"><img src="usmicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Sains Malaysia</a>
                </div>
            </div>
            <div class="ui simple dropdown item" id="navl">
                <div style="font-size: 20px; margin-right: 30px; padding:5px 8px; border: solid 2px white; border-radius:5%;">
                    <i class="dropdown icon"></i> Private University
                </div>
                <div class="menu" id="menu">
                    <a href="utpCalculator.php" style="color:black;" class="item"><img src="utpicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Petronas</a>
                    <a href="uniklCalculator.php" style="color:black;" class="item"><img src="uniklicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Kuala Lumpur</a>
                    <a href="taylorCalculator.php" style="color:black;" class="item"><img src="taylorsicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Taylors University </a>
                    <a href="uniklCalculator.php" style="color:black;" class="item"><img src="unitenicon.ico" alt=""
                            height="20px" style="margin: 1px 3px 0 0">
                        Universiti Tenaga Nasional</a>
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
</body>

</html>