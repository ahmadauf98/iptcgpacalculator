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