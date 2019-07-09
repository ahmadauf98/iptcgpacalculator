<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Subject Grade USM</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="uplogo.png" type="image/x-icon">
  <link rel="shortcut icon" href="uplogo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
  <script type="text/javascript"
    src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-5649677793317740",
      enable_page_level_ads: true
    });
  </script>
</head>

<body>
  <?php 
$pfe1 = $tme1 = $wpc1 = $tm1 = $tmc1 = $tg1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$pfe1 = test_input($_POST["pfe1"]);
$tme1 = test_input($_POST["tme1"]);
$wpc1 = test_input($_POST["wpc1"]);
$tm1 = test_input($_POST["tm1"]);
$tmc1 = test_input($_POST["tmc1"]);
$tg1 = test_input($_POST["tg1"]);

$totalPercentage = $pfe1 + $wpc1;
$carrymark = ($tm1/$tmc1) * $wpc1;
$examination = $tg1-$carrymark;
$targetmark = ($examination/$pfe1)*$tme1;

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
  <div class="ui inverted top fixed menu" id="navbar">
    <div class="item" id="imgLogo">
      <img src="Logo.png">
    </div>
    <a href="index.php" class="item" id="nav">Home</a>
    <a href="landingpage.php" class="item" id="dropdown">Calculator</a>

    <div class="ui inverted simple dropdown item" id="dropdown1">
      Public University
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item" id="dropdown1"><a href="umGrade.php" style="color:black;"><img src="umicon.ico" alt=""
              height="20px" style="margin: 1px 3px 0 0">
            Universiti Malaya (UM)</a></div>
        <div class="item" id="dropdown1"><a href="upmGrade.php" style="color:black;"><img src="upmicon.ico" alt=""
              height="20px" style="margin: 1px 3px 0 0">
            Universiti Putra Malaysia (UPM)</a></div>
        <div class="item" id="dropdown1"><a href="uitmGrade.php" style="color:black;"><img src="uitmicon.ico"
              alt="" height="20px" style="margin: 1px 3px 0 0">
            Universiti Teknologi Mara (UITM)</a></div>
        <div class="item" id="dropdown1"><a href="utmGrade.php" style="color:black;"><img src="utmicon.ico" alt=""
              height="20px" style="margin: 1px 3px 0 0">
            Universiti Teknologi Malaysia (UTM)</a></div>
        <div class="item" id="dropdown1"><a href="ukmGrade.php" style="color:black;"><img src="ukmicon.ico" alt=""
              height="20px" style="margin: 1px 3px 0 0">
            Universiti Kebangsaan Malaysia (UKM)</a></div>
        <div class="item" id="dropdown1"><a href="uiaGrade.php" style="color:black;"><img src="uiaicon.ico"
              alt="" height="20px" style="margin: 1px 3px 0 0">
            Universiti Islam Antarabangsa Malaysia (UIAM)</a></div>
        <div class="item active" id="dropdown1"><a href="usmGrade.php" style="color:black;"><img src="usmicon.ico" alt=""
              height="20px" style="margin: 1px 3px 0 0">
            Universiti Sains Malaysia (USM)</a></div>
      </div>

    </div>
    <div class="ui inverted simple dropdown item" id="dropdown1">
      Private University
      <i class="dropdown icon"></i>
      <div class="menu">
      <div class="item" id="dropdown1"><a href="uniklGrade.php" style="color:black;"><img src="uniklicon.ico"
              alt="" height="20px" style="margin: 1px 3px 0 0">
            Universiti Kuala Lumpur (Unikl)</a></div>
        <div class="item" id="dropdown1"><a href="unitenGrade.php" style="color:black;"><img src="unitenicon.ico"
              alt="" height="20px" style="margin: 1px 3px 0 0">
            Universiti Tenaga Nasional (Uniten)</a></div>

      </div>
    </div>

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

  <div class="ui inverted grid ui container">
    <div class="sixteen wide column">
      <br>
      <img id="logo" src="usmLogo.png" alt="" width="125px;">
      <h1>Grade Target (Universiti Sains Malaysia)</h1>
    </div>
    <div class="two wide column">
    </div>
    <div class="twelve wide column">
      <form class="ui inverted form segment" id="Form" method="post"
        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p>P/s: Please fill all fields.Thank You!</p>
        <div class="Examination">
          <h3>Final Exam</h3>

          <div class="two fields">

            <div class="field">
              <label>Weightage Percentage:</label>
              <input class="input" type="number" min="1" max="100" name="pfe1" placeholder="Weightage Percentage"
                value="<?php echo $pfe1;?>">
            </div>

            <div class="field">
              <label>Total Marks:</label>
              <input class="input1" type="number" min="1" max="100" name="tme1" placeholder="Total Marks"
                value="<?php echo $tme1;?>">
            </div>
          </div>
        </div><br>

        <div class="Carrymark">
          <h3>Carrymark</h3>
          <p>P/s: If you are only get carrymark by grade, please assume your mark based on minimum mark in table below and Total Marks: 100.</p>
          <div class="two fields">

            <div class="field">
              <label>Weightage Percentage:</label>
              <input class="input2" type="number" min="0" max="100" name="wpc1" placeholder="Weightage Percentage"
                value="<?php echo $wpc1;?>">
            </div>

            <div class="field">
              <label>Marks:</label>
              <input class="input3" type="number" min="1" max="100" name="tm1" placeholder="Marks"
                value="<?php echo $tm1;?>">
            </div>

            <div class="field">
              <label>Total Marks:</label>
              <input class="input4" type="number" min="1" max="100" name="tmc1" placeholder="Total Marks"
                value="<?php echo $tmc1;?>">
            </div>



          </div>
        </div><br>

        <div class="Final Subject">
          <h3>Grade Target</h3>

          <div class="field">

            <div class="field">
              <label>Grade:</label>
              <select class="ui dropdown1" name="tg1">
                <option value="">Select</option>
                <option value="80" <?php if (isset($tg1) && $tg1=="80") echo "checked";?>>A</option>
                <option value="70" <?php if (isset($tg1) && $tg1=="70") echo "checked";?>>A-</option>
                <option value="64" <?php if (isset($tg1) && $tg1=="64") echo "checked";?>>B+</option>
                <option value="58" <?php if (isset($tg1) && $tg1=="58") echo "checked";?>>B</option>
                <option value="52" <?php if (isset($tg1) && $tg1=="52") echo "checked";?>>B-</option>
                <option value="46" <?php if (isset($tg1) && $tg1=="46") echo "checked";?>>C+</option>
                <option value="40" <?php if (isset($tg1) && $tg1=="40") echo "checked";?>>C</option>
              </select>
            </div>


          </div>
        </div><br>


        <input class="ui green submit button" id="button" type="submit" name="submit" value="Calculate" />
        <input class="ui grey submit button" id="button" type="submit" name="reset" value="Reset"
          onclick="clearForm()" />
      </form>

      <?php
//Grade Transformation
if ($tg1 == 80) {
  $grade = 'A';
}
elseif ($tg1 == 70) {
  $grade = 'A-';
}
elseif ($tg1 == 64) {
  $grade = 'B+';
}
elseif ($tg1 == 58) {
  $grade = 'B';
}
elseif ($tg1 == 52) {
  $grade = 'B-';
}
elseif ($tg1 == 46) {
  $grade = 'C+';
}
else{
  $grade = 'C-';
}


//Print Output
    if ($pfe1 == null && $tme1 == null && $wpc1 == null && $tm1 == null && $tmc1 == null && $tg1 == null) {
      echo "";
    }
    else if ($pfe1 == null || $tme1 == null || $wpc1 == null || $tm1 == null || $tmc1 == null || $tg1 == null) {
      echo "Please fill all fields. Thank you!";
    }
    else if ($totalPercentage === 100) {
      if ($examination > $tme1) {
        echo "Result:"."<br><br>";
        echo "Sorry, with your current carrymark you wont able to get ".$grade.". Please target grade below ".$grade.". Thank you.";
      }
      else{
        echo "Result:"."<br><br>";
        echo "In order to get ".$grade.", you need to score at least ".$targetmark." out of ".$tme1." in your final exam. Goodluck!";
      }
    }
    else {
      echo "Please make sure sum both weightage is 100%.";
    }
 
?>
      <div id="course-info">
        <h3>This grade conversion table is used at Universiti Sains Malaysia (USM)</h3>
        
        <table class="ui inverted fixed single line celled table ">
          <thead>
            <tr>
              <th>Letter</th>
              <th>Marks</th>
              <th>Minimum Marks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Letter">A</td>
              <td data-label="Marks">80-100</td>
              <td data-label="Minimum Marks">80</td>
            </tr>
            <tr>
              <td data-label="Letter">A-</td>
              <td data-label="Marks">70-79</td>
              <td data-label="Minimum Marks">70</td>
            </tr>
            <tr>
              <td data-label="Letter">B+</td>
              <td data-label="Marks">64-69</td>
              <td data-label="Minimum Marks">64</td>
            </tr>
            <tr>
              <td data-label="Letter">B</td>
              <td data-label="Marks">58-63</td>
              <td data-label="Minimum Marks">58</td>
            </tr>
            <tr>
              <td data-label="Letter">B-</td>
              <td data-label="Marks">52-57</td>
              <td data-label="Minimum Marks">52</td>
            </tr>
            <tr>
              <td data-label="Letter">C+</td>
              <td data-label="Marks">46-51</td>
              <td data-label="Minimum Marks">46</td>
            </tr>
            <tr>
            <td data-label="Letter">C</td>
            <td data-label="Marks">40-45</td>
            <td data-label="Minimum Marks">40</td>
            </tr>
          </tbody>
        </table>

        <div>
          <div class="ui centered mobile leaderboard test ad" data-text="Mobile Leaderboard"></div>
        </div>
      </div>
    </div>
    <div class="two wide column"></div>
  </div>



  <div class="ui inverted vertical footer segment" id="footer">
    <div class="ui center aligned container">
      <div class="ui stackable inverted divided grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Public University</h4>
          <div class="ui inverted link list">
            <a href="umGrade.php" class="item">Universiti Malaya</a>
            <a href="upmGrade.php" class="item">Universiti Putra Malaysia</a>
            <a href="uitmGrade.php" class="item">Universiti Teknologi Mara</a>
            <a href="utmGrade.php" class="item">Universiti Teknologi Malaysia</a>
            <a href="ukmGrade.php" class="item">Universiti Kebangsaan Malaysia</a>
            <a href="uiamGrade.php" class="item">Universiti Islam Antarabangsa Malaysia</a>
            <a href="usmGrade.php" class="item">Universiti Sains Malaysia</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Private University</h4>
          <div class="ui inverted link list">
          <a href="uniklGrade.php" class="item">Universiti Kuala Lumpur</a>
            <a href="unitenGrade.php" class="item">Universiti Tenaga Nasional</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Social Media</h4>
          <div class="ui inverted link list">
            <a href="https://www.facebook.com/ahmadauf.nasruddin" class="item">
              <i class="facebook icon"></i> Facebook</a>
            <a href="https://twitter.com/Auf2098" class="item">
              <i class="twitter icon"></i> Twitter</a>
            <a href="https://www.instagram.com/ahmadauf2098/" class="item">
              <i class="instagram icon"></i> Instagram</a>
            <a href="https://www.linkedin.com/in/ahmad-auf-b9aa09185/" class="item">
              <i class="linkedin icon"></i> LinkedIn</a>
          </div>
        </div>
        <div class="seven wide column">
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
  <a href="#" id="scroll" style="display: none;"><span></span></a>
  <script src="js1.js"></script>
</body>

</html>