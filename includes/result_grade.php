<?php
if ($pfe1 == null && $tme1 == null && $wpc1 == null && $tm1 == null && $tmc1 == null && $tg1 == null) {
      echo "";
    }
    else if ($pfe1 == null || $tme1 == null || $wpc1 == null || $tm1 == null || $tmc1 == null || $tg1 == null) {
      echo "Please fill all fields. Thank you!";
    }
    else if ($totalPercentage === 100) {
      if ($examination > $tme1) {
        echo "Sorry, with your current carrymark you wont able to get ".$grade.". <b>Please target grade below ".$grade."</b>xx. Thank you.";
      }
      else{
        echo "In order to get ".$grade.", you need to score <b>at least ".$targetmark." out of ".$tme1."</b> in your final exam. Goodluck!";
      }
    }
    else {
      echo "Please make sure sum both weightage is 100%.";
    }
?>