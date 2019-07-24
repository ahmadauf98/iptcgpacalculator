<?php
    if (empty($totalCredit)|| empty($totalGradePoints)) {
    echo "";
    }

    elseif((empty($grade1) && empty($ch1)) || (empty($grade2) && empty($ch2)) || (empty($grade3) && empty($ch3)) || (empty($grade4) && empty($ch4)) || (empty($grade5) && empty($ch5)) || (empty($grade6) && empty($ch6)) || (empty($grade7) && empty($ch7)) || (empty($grade8) && empty($ch8))){
    echo ""
    }

    else if (empty($cgpa)|| empty($tch) || $cgpa === 0 || $tch === 0) {
    echo "<i>This Semester:</i>"."<br>";
    echo "Total Credits Hours: ".$totalCredit."<br>";
    echo "Total Grade Points: ".$totalGradePoints."<br>";
    echo "This Semester GPA: ".(round($sgpa,2));
  } else {

    echo "<i>Previous Semester(s):</i>"."<br>";
    echo "Credits Hours: ".$tch."<br>";
    echo "Grade Points: ".$tgp."<br>";
    echo "Initial CGPA: ".$cgpa."<br><br>";

    echo "<i>This Semester:</i>"."<br>";
    echo "Credits Hours: ".$totalCredit."<br>";
    echo "Grade Points: ".$totalGradePoints."<br>";
    echo "This Semester GPA: ".(round($sgpa,2))."<br><br>";

    echo "<i>Total:</i>"."<br>";
    echo "Total Credits Hours: ".$ttcredit."<br>";
    echo "Total Grade Points: ".$ttgp."<br>";
    echo "CGPA: ".(round($totalcgpa,2))."<br>";

  }
?>