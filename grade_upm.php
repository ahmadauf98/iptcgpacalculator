<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GRADE TARGET UPM</title>

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
        }

        #space {
            margin-bottom: 3%;
        }

        @media only screen and (max-width: 600px) {
            #formspace {
                margin-bottom: 3%;
            }

            #space {
                margin-bottom: 15%;
            }

            #spacecol {
                margin-bottom: 5%;
            }

            #button {
                margin-top: -6%;
            }
        }
    </style>

</head>

<body>

    <!-- calculate_grade.php -->
    <?php require_once('includes/calculate_grade.php')?>
    <!-- End calculate_grade.php -->

    <!-- Navbar -->
    <?php require_once('includes/grade_navbar.php')?>
    <!-- End Navbar-->

    <!-- Content Start Here -->
    <div class="container" style="margin-top:50px; margin-bottom: 20px;">
        <div class="col-sm-12" style="text-align:center;">
            <img id="logo" src="/static/images/upmLogo.png" alt="" width="150px;" style="margin-top:40px;">
            <h2 style="font-weight: bold; margin-top: 10px;">Grade Target Universiti Putra Malaysia</h2>
        </div>
        <div class="row">
            <div class="col-sm-8" id="spacecol">
                <!-- Card -->
                <div class="card">

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Form -->
                        <form class="text-center" style="color: #cea8a8;" id="Form" method="post"
                            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                            <!-- Title -->
                            <h4 class="card-title"><b>Final Exam</b></h4>

                            <!-- Text -->
                            <p class="card-text">Please fill all fields.Thank You.</p>

                            <div class="row">
                                <div class="col-sm-6" id="formspace">
                                    <!-- Weightage Percentage Input -->
                                    <input class="input form-control" type="number" min="1" max="100" name="pfe1"
                                        placeholder="Weightage Percentage" value="<?php echo $pfe1;?>">
                                </div>
                                <div class="col-sm-6">
                                    <!-- Total Marks Hours Input -->
                                    <input class="input1 form-control" type="number" min="1" max="100" name="tme1"
                                        placeholder="Total Marks" value="<?php echo $tme1;?>">
                                </div>
                            </div>

                            <!-- Title -->
                            <h4 class="card-title"><b>Carrymark</b></h4>

                            <!-- Text -->
                            <p class="card-text">If you are only get carrymark by grade, please assume your mark based
                                on minimum mark in table below and Total Marks: 100.</p>

                            <div class="row" id="space">
                                <div class="col-sm-4" id="formspace">
                                    <!-- Weightage Percentage Input -->
                                    <input class="input2 form-control" type="number" min="0" max="100" name="wpc1"
                                        placeholder="Weightage Percentage" value="<?php echo $wpc1;?>">
                                </div>
                                <div class="col-sm-4" id="formspace">
                                    <!-- Credit Hours Input -->
                                    <input class="input3 form-control" type="number" min="1" max="100" name="tm1"
                                        placeholder="Marks" value="<?php echo $tm1;?>">
                                </div>
                                <div class="col-sm-4">
                                    <!-- Grade Points Input -->
                                    <input class="input4 form-control" type="number" min="1" max="100" name="tmc1"
                                        placeholder="Total Marks" value="<?php echo $tmc1;?>">
                                </div>
                            </div>

                            <!-- Title -->
                            <h4 class="card-title"><b>Carrymark</b></h4>

                            <div class="row" id="space">
                                <div class="col-sm-12" id="formspace">
                                    <!-- Cumulative GPA Input -->
                                    <select class="browser-default custom-select input5" name="tg1">
                                        <option selected>Your Grade Target</option>
                                        <option value="80" <?php if (isset($tg1) && $tg1=="80") echo "checked";?>>A
                                        </option>
                                        <option value="75" <?php if (isset($tg1) && $tg1=="75") echo "checked";?>>A-
                                        </option>
                                        <option value="70" <?php if (isset($tg1) && $tg1=="70") echo "checked";?>>B+
                                        </option>
                                        <option value="65" <?php if (isset($tg1) && $tg1=="65") echo "checked";?>>B
                                        </option>
                                        <option value="60" <?php if (isset($tg1) && $tg1=="60") echo "checked";?>>B-
                                        </option>
                                        <option value="55" <?php if (isset($tg1) && $tg1=="55") echo "checked";?>>C+
                                        </option>
                                        <option value="50" <?php if (isset($tg1) && $tg1=="50") echo "checked";?>>C
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Submit button -->
                                    <button class="btn btn-success btn-block my-4" type="submit">Submit</button>
                                </div>
                                <div class="col-sm-6" id="button">
                                    <!-- Submit button -->
                                    <button class="btn btn-danger btn-block my-4" type="submit"
                                        onclick="clearForm()">Reset</button>
                                </div>
                            </div>
                            <!-- End button -->
                        </form>
                        <!-- Form -->
                    </div>
                </div>
                <!-- Card -->
            </div>

            <div class="col-sm-4">

                <!-- Card 1 -->
                <div class="card">

                    <!-- Card content -->
                    <div class="card-body" style="min-height:300px; max-height:auto;">

                        <!-- Title -->
                        <h4 class="card-title"><b>Result</b></h4>
                        <!-- Grade Transformation -->
                        <?php 
                        if ($tg1 == 80) {
                            $grade = 'A';
                          }
                          elseif ($tg1 == 75) {
                            $grade = 'A-';
                          }
                          elseif ($tg1 == 70) {
                            $grade = 'B+';
                          }
                          elseif ($tg1 == 65) {
                            $grade = 'B';
                          }
                          elseif ($tg1 == 60) {
                            $grade = 'B-';
                          }
                          elseif ($tg1 == 55) {
                            $grade = 'C+';
                          }
                          else{
                            $grade = 'C';
                          }
                        ?>
                        <!-- End Grade Transformation -->

                        <!-- result_grade.php -->
                        <?php require_once('includes/result_grade.php')?>
                        <!-- End result_grade.php -->

                    </div>
                </div>
                <!-- End Card 1 -->

                <!-- Card 2 -->
                <div class="card" style="margin-top: 30px;">

                    <!-- Card content -->
                    <div class="card-body" style="min-height:255px; max-height:auto;">

                        <!-- Title -->
                        <h4 class="card-title" style="text-align: center;"><b>Share This Website</b></h4>

                        <div class="row" style="justify-content:center;">
                            <!--Facebook-->
                            <a
                                href="https://www.facebook.com/sharer/sharer.php?u=https://iptcgpacalculator.herokuapp.com">
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

        <div class="col-sm-13" style="margin-top: 30px;">
            <!-- Card -->
            <div class="card">

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title" style="text-align: center;">This grade conversion table is used at Universiti
                        Putra Malaysia (UPM)</h4>
                    <table class="table table-bordered" style="text-align: center;">
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
                                <td data-label="Marks">75-79</td>
                                <td data-label="Minimum Marks">75</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">B+</td>
                                <td data-label="Marks">70-74</td>
                                <td data-label="Minimum Marks">70</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">B</td>
                                <td data-label="Marks">65-69</td>
                                <td data-label="Minimum Marks">65</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">B-</td>
                                <td data-label="Marks">60-64</td>
                                <td data-label="Minimum Marks">60</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">C+</td>
                                <td data-label="Marks">55-59</td>
                                <td data-label="Minimum Marks">55</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">C</td>
                                <td data-label="Marks">50-54</td>
                                <td data-label="Minimum Marks">50</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- Card -->
        </div>
    </div>


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

    <script src="grade.js"></script>
</body>

</html>