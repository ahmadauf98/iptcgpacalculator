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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="index.css">
</head>

<body>

  <!-- Navigation Bar Section-->
  <div class="ui inverted top fixed menu" id="navbar">
    <div class="item" id="imgLogo">
      <img src="Logo.png">
    </div>
    <a href="index.php" class="item active" id="nav">Home</a>
    <a href="about.php" class="item" id="nav">About</a>
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
  <div class="ui inverted vertical masthead center aligned segment" id="landing">
    <div class="two wide column">
      <div class="ui text container" id="header">
        <h1 class="ui inverted header">
          CGPA CALCULATOR
        </h1>
        <h3>You can use this website to calculate your current semester grade point averages (SGPA) and cumulative grade point averages (CGPA).</h3>
        <a href="landingpage.php">
          <div class="ui massive green button">Explore Now<i class="right arrow icon"></i></div>
        </a>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe quote segment" id="feature">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">

        <div class="column">
          <h2>"New Features!"</h2>
          <p>Want to set your grade target based on you carrymark?</p>
          <a href="landingpage1.php">
          <div class="ui big green button">Check Them Out</div>
        </a>
        </div>

        <div class="column">
          <h2>"AA Dev Website"</h2>
          <p>Let figure out My Website.</p>
          <a href="https://ahmadauf98.github.io">
          <div class="ui big green button">Click Here</div>
        </a>
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
          <p>This website is intended for use as a guide only. Contact your university or institution for exact
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