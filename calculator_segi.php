<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CGPA CALCULATOR SEGI</title>

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

    <!--Navbar-->
    <?php require_once('includes/calculator_navbar.php') ?>
    <!-- End Navbar-->

    <!-- Content Start Here -->

    <!-- calculate_calculator Section-->
    <?php require_once('includes/calculate_calculator.php') ?>
    <!-- End calculate_calculator Section-->

    <div class="container" style="margin-top:50px; margin-bottom: 20px;">
        <div class="col-sm-12" style="text-align:center;">
            <img id="logo" src="/static/images/segiLogo.png" alt="" width="125px;" style="margin-top:40px;">
            <h2 style="font-weight: bold; margin-top: 10px;">CGPA Calculator SEGI University</h2>
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
                            <h4 class="card-title"><b>Current Cumulative GPA</b></h4>

                            <!-- Text -->
                            <p class="card-text">If you are new student no need to fill this section.</p>

                            <div class="row">
                                <div class="col-sm-6" id="formspace">
                                    <!-- Cumulative GPA Input -->
                                    <input class=" input form-control" type="number" step="0.01" min="0.00" max="4.00"
                                        name="cgpa" value="<?php echo $cgpa;?>" placeholder="Cumulative GPA">
                                </div>
                                <div class="col-sm-6">
                                    <!-- Total Credit Hours Input -->
                                    <input class=" input1 form-control" type="number" min="0" name="tch"
                                        value="<?php echo $tch;?>" placeholder="Total Credit Hours">
                                </div>
                            </div>

                            <!-- Title -->
                            <h4 class="card-title"><b>Subjects Taken This Semester</b></h4>

                            <!-- Text -->
                            <p class="card-text">Fill Grade and Credit Hours Only.</p>

                            <!-- Field 1 -->
                            <p class="card-text" style="text-align:left; margin-bottom: 3px;">SUBJECT 1</p>
                            <div class="row" id="space">
                                <div class="col-sm-3" id="formspace">
                                    <!-- Grade Input -->
                                    <select class="browser-default custom-select dropdown1" name="grade1"
                                        onchange="pFunction1()">
                                        <option value="">Grade</option>
                                        <option value="4.00"
                                            <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                                        <option value="3.70"
                                            <?php if (isset($grade) && $grade=="3.70") echo "checked";?>>A-</option>
                                        <option value="3.30"
                                            <?php if (isset($grade) && $grade=="3.30") echo "checked";?>>B+</option>
                                        <option value="3.00"
                                            <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                                        <option value="2.70"
                                            <?php if (isset($grade) && $grade=="2.70") echo "checked";?>>B-</option>
                                        <option value="2.30"
                                            <?php if (isset($grade) && $grade=="2.30") echo "checked";?>>C+</option>
                                        <option value="2.00"
                                            <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                                        <option value="1.70"
                                            <?php if (isset($grade) && $grade=="1.70") echo "checked";?>>C-</option>
                                        <option value="1.30"
                                            <?php if (isset($grade) && $grade=="1.30") echo "checked";?>>D+</option>
                                        <option value="1.00"
                                            <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                                        <option value="0.00"
                                            <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
                                    </select>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Points Input -->
                                    <input class="form-control" id="pInput1" type="text" placeholder="Points" disabled>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Credit Hours Input -->
                                    <input class="form-control" id="ch1" name="ch1" min="0" type="number"
                                        onchange="gpFunction1()" value="<?php echo $ch1;?>" placeholder="Credit Hours">
                                </div>
                                <div class="col-sm-3">
                                    <!-- Grade Points Input -->
                                    <input class="form-control" id="gpInput1" type="text" placeholder="Grade Points"
                                        disabled>
                                </div>
                            </div>
                            <!-- End Field 1 -->

                            <!-- Field 2 -->
                            <p class="card-text" style="text-align:left; margin-bottom: 3px;">SUBJECT 2</p>
                            <div class="row" id="space">
                                <div class="col-sm-3" id="formspace">
                                    <!-- Grade Input -->
                                    <select class="browser-default custom-select dropdown2" name="grade2"
                                        onchange="pFunction2()">
                                        <option value="">Grade</option>
                                        <option value="4.00"
                                            <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                                        <option value="3.70"
                                            <?php if (isset($grade) && $grade=="3.70") echo "checked";?>>A-</option>
                                        <option value="3.30"
                                            <?php if (isset($grade) && $grade=="3.30") echo "checked";?>>B+</option>
                                        <option value="3.00"
                                            <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                                        <option value="2.70"
                                            <?php if (isset($grade) && $grade=="2.70") echo "checked";?>>B-</option>
                                        <option value="2.30"
                                            <?php if (isset($grade) && $grade=="2.30") echo "checked";?>>C+</option>
                                        <option value="2.00"
                                            <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                                        <option value="1.70"
                                            <?php if (isset($grade) && $grade=="1.70") echo "checked";?>>C-</option>
                                        <option value="1.30"
                                            <?php if (isset($grade) && $grade=="1.30") echo "checked";?>>D+</option>
                                        <option value="1.00"
                                            <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                                        <option value="0.00"
                                            <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
                                    </select>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Points Input -->
                                    <input class="form-control" id="pInput2" type="text" placeholder="Points" disabled>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Credit Hours Input -->
                                    <input class="form-control" id="ch2" name="ch2" min="0" type="number"
                                        onchange="gpFunction2()" value="<?php echo $ch2;?>" placeholder="Credit Hours">
                                </div>
                                <div class="col-sm-3">
                                    <!-- Grade Points Input -->
                                    <input class="form-control" id="gpInput2" type="text" placeholder="Grade Points"
                                        disabled>
                                </div>
                            </div>
                            <!-- End Field 2 -->

                            <!-- Field 3 -->
                            <p class="card-text" style="text-align:left; margin-bottom: 3px;">SUBJECT 3</p>
                            <div class="row" id="space">
                                <div class="col-sm-3" id="formspace">
                                    <!-- Grade Input -->
                                    <select class="browser-default custom-select dropdown3" name="grade3"
                                        onchange="pFunction3()">
                                        <option value="">Grade</option>
                                        <option value="4.00"
                                            <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                                        <option value="3.70"
                                            <?php if (isset($grade) && $grade=="3.70") echo "checked";?>>A-</option>
                                        <option value="3.30"
                                            <?php if (isset($grade) && $grade=="3.30") echo "checked";?>>B+</option>
                                        <option value="3.00"
                                            <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                                        <option value="2.70"
                                            <?php if (isset($grade) && $grade=="2.70") echo "checked";?>>B-</option>
                                        <option value="2.30"
                                            <?php if (isset($grade) && $grade=="2.30") echo "checked";?>>C+</option>
                                        <option value="2.00"
                                            <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                                        <option value="1.70"
                                            <?php if (isset($grade) && $grade=="1.70") echo "checked";?>>C-</option>
                                        <option value="1.30"
                                            <?php if (isset($grade) && $grade=="1.30") echo "checked";?>>D+</option>
                                        <option value="1.00"
                                            <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                                        <option value="0.00"
                                            <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
                                    </select>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Points Input -->
                                    <input class="form-control" id="pInput3" type="text" placeholder="Points" disabled>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Credit Hours Input -->
                                    <input class="form-control" id="ch3" name="ch3" min="0" type="number"
                                        onchange="gpFunction3()" value="<?php echo $ch3;?>" placeholder="Credit Hours">
                                </div>
                                <div class="col-sm-3">
                                    <!-- Grade Points Input -->
                                    <input class="form-control" id="gpInput3" type="text" placeholder="Grade Points"
                                        disabled>
                                </div>
                            </div>
                            <!-- End Field 3 -->

                            <!-- Field 4 -->
                            <p class="card-text" style="text-align:left; margin-bottom: 3px;">SUBJECT 4</p>
                            <div class="row" id="space">
                                <div class="col-sm-3" id="formspace">
                                    <!-- Grade Input -->
                                    <select class="browser-default custom-select dropdown4" name="grade4"
                                        onchange="pFunction4()">
                                        <option value="">Grade</option>
                                        <option value="4.00"
                                            <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                                        <option value="3.70"
                                            <?php if (isset($grade) && $grade=="3.70") echo "checked";?>>A-</option>
                                        <option value="3.30"
                                            <?php if (isset($grade) && $grade=="3.30") echo "checked";?>>B+</option>
                                        <option value="3.00"
                                            <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                                        <option value="2.70"
                                            <?php if (isset($grade) && $grade=="2.70") echo "checked";?>>B-</option>
                                        <option value="2.30"
                                            <?php if (isset($grade) && $grade=="2.30") echo "checked";?>>C+</option>
                                        <option value="2.00"
                                            <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                                        <option value="1.70"
                                            <?php if (isset($grade) && $grade=="1.70") echo "checked";?>>C-</option>
                                        <option value="1.30"
                                            <?php if (isset($grade) && $grade=="1.30") echo "checked";?>>D+</option>
                                        <option value="1.00"
                                            <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                                        <option value="0.00"
                                            <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
                                    </select>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Points Input -->
                                    <input class="form-control" id="pInput4" type="text" placeholder="Points" disabled>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Credit Hours Input -->
                                    <input class="form-control" id="ch4" name="ch4" min="0" type="number"
                                        onchange="gpFunction4()" value="<?php echo $ch4;?>" placeholder="Credit Hours">
                                </div>
                                <div class="col-sm-3">
                                    <!-- Grade Points Input -->
                                    <input class="form-control" id="gpInput4" type="text" placeholder="Grade Points"
                                        disabled>
                                </div>
                            </div>
                            <!-- End Field 4 -->

                            <!-- Field 5 -->
                            <p class="card-text" style="text-align:left; margin-bottom: 3px;">SUBJECT 5</p>
                            <div class="row" id="space">
                                <div class="col-sm-3" id="formspace">
                                    <!-- Grade Input -->
                                    <select class="browser-default custom-select dropdown5" name="grade5"
                                        onchange="pFunction5()">
                                        <option value="">Grade</option>
                                        <option value="4.00"
                                            <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                                        <option value="3.70"
                                            <?php if (isset($grade) && $grade=="3.70") echo "checked";?>>A-</option>
                                        <option value="3.30"
                                            <?php if (isset($grade) && $grade=="3.30") echo "checked";?>>B+</option>
                                        <option value="3.00"
                                            <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                                        <option value="2.70"
                                            <?php if (isset($grade) && $grade=="2.70") echo "checked";?>>B-</option>
                                        <option value="2.30"
                                            <?php if (isset($grade) && $grade=="2.30") echo "checked";?>>C+</option>
                                        <option value="2.00"
                                            <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                                        <option value="1.70"
                                            <?php if (isset($grade) && $grade=="1.70") echo "checked";?>>C-</option>
                                        <option value="1.30"
                                            <?php if (isset($grade) && $grade=="1.30") echo "checked";?>>D+</option>
                                        <option value="1.00"
                                            <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                                        <option value="0.00"
                                            <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
                                    </select>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Points Input -->
                                    <input class="form-control" id="pInput5" type="text" placeholder="Points" disabled>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Credit Hours Input -->
                                    <input class="form-control" id="ch5" name="ch5" min="0" type="number"
                                        onchange="gpFunction5()" value="<?php echo $ch5;?>" placeholder="Credit Hours">
                                </div>
                                <div class="col-sm-3">
                                    <!-- Grade Points Input -->
                                    <input class="form-control" id="gpInput5" type="text" placeholder="Grade Points"
                                        disabled>
                                </div>
                            </div>
                            <!-- End Field 5 -->

                            <!-- Field 6 -->
                            <p class="card-text" style="text-align:left; margin-bottom: 3px;">SUBJECT 6</p>
                            <div class="row" id="space">
                                <div class="col-sm-3" id="formspace">
                                    <!-- Grade Input -->
                                    <select class="browser-default custom-select dropdown6" name="grade6"
                                        onchange="pFunction6()">
                                        <option value="">Grade</option>
                                        <option value="4.00"
                                            <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                                        <option value="3.70"
                                            <?php if (isset($grade) && $grade=="3.70") echo "checked";?>>A-</option>
                                        <option value="3.30"
                                            <?php if (isset($grade) && $grade=="3.30") echo "checked";?>>B+</option>
                                        <option value="3.00"
                                            <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                                        <option value="2.70"
                                            <?php if (isset($grade) && $grade=="2.70") echo "checked";?>>B-</option>
                                        <option value="2.30"
                                            <?php if (isset($grade) && $grade=="2.30") echo "checked";?>>C+</option>
                                        <option value="2.00"
                                            <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                                        <option value="1.70"
                                            <?php if (isset($grade) && $grade=="1.70") echo "checked";?>>C-</option>
                                        <option value="1.30"
                                            <?php if (isset($grade) && $grade=="1.30") echo "checked";?>>D+</option>
                                        <option value="1.00"
                                            <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                                        <option value="0.00"
                                            <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
                                    </select>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Points Input -->
                                    <input class="form-control" id="pInput6" type="text" placeholder="Points" disabled>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Credit Hours Input -->
                                    <input class="form-control" id="ch6" name="ch6" min="0" type="number"
                                        onchange="gpFunction6()" value="<?php echo $ch6;?>" placeholder="Credit Hours">
                                </div>
                                <div class="col-sm-3">
                                    <!-- Grade Points Input -->
                                    <input class="form-control" id="gpInput6" type="text" placeholder="Grade Points"
                                        disabled>
                                </div>
                            </div>
                            <!-- End Field 6 -->

                            <!-- Field 7 -->
                            <p class="card-text" style="text-align:left; margin-bottom: 3px;">SUBJECT 7</p>
                            <div class="row" id="space">
                                <div class="col-sm-3" id="formspace">
                                    <!-- Grade Input -->
                                    <select class="browser-default custom-select dropdown7" name="grade7"
                                        onchange="pFunction7()">
                                        <option value="">Grade</option>
                                        <option value="4.00"
                                            <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                                        <option value="3.70"
                                            <?php if (isset($grade) && $grade=="3.70") echo "checked";?>>A-</option>
                                        <option value="3.30"
                                            <?php if (isset($grade) && $grade=="3.30") echo "checked";?>>B+</option>
                                        <option value="3.00"
                                            <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                                        <option value="2.70"
                                            <?php if (isset($grade) && $grade=="2.70") echo "checked";?>>B-</option>
                                        <option value="2.30"
                                            <?php if (isset($grade) && $grade=="2.30") echo "checked";?>>C+</option>
                                        <option value="2.00"
                                            <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                                        <option value="1.70"
                                            <?php if (isset($grade) && $grade=="1.70") echo "checked";?>>C-</option>
                                        <option value="1.30"
                                            <?php if (isset($grade) && $grade=="1.30") echo "checked";?>>D+</option>
                                        <option value="1.00"
                                            <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                                        <option value="0.00"
                                            <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
                                    </select>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Points Input -->
                                    <input class="form-control" id="pInput7" type="text" placeholder="Points" disabled>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Credit Hours Input -->
                                    <input class="form-control" id="ch7" name="ch7" min="0" type="number"
                                        onchange="gpFunction7()" value="<?php echo $ch7;?>" placeholder="Credit Hours">
                                </div>
                                <div class="col-sm-3">
                                    <!-- Grade Points Input -->
                                    <input class="form-control" id="gpInput7" type="text" placeholder="Grade Points"
                                        disabled>
                                </div>
                            </div>
                            <!-- End Field 7 -->

                            <!-- Field 8 -->
                            <p class="card-text" style="text-align:left; margin-bottom: 3px;">SUBJECT 8</p>
                            <div class="row" id="space">
                                <div class="col-sm-3" id="formspace">
                                    <!-- Grade Input -->
                                    <select class="browser-default custom-select dropdown8" name="grade8"
                                        onchange="pFunction8()">
                                        <option value="">Grade</option>
                                        <option value="4.00"
                                            <?php if (isset($grade) && $grade=="4.00") echo "checked";?>>A</option>
                                        <option value="3.70"
                                            <?php if (isset($grade) && $grade=="3.70") echo "checked";?>>A-</option>
                                        <option value="3.30"
                                            <?php if (isset($grade) && $grade=="3.30") echo "checked";?>>B+</option>
                                        <option value="3.00"
                                            <?php if (isset($grade) && $grade=="3.00") echo "checked";?>>B</option>
                                        <option value="2.70"
                                            <?php if (isset($grade) && $grade=="2.70") echo "checked";?>>B-</option>
                                        <option value="2.30"
                                            <?php if (isset($grade) && $grade=="2.30") echo "checked";?>>C+</option>
                                        <option value="2.00"
                                            <?php if (isset($grade) && $grade=="2.00") echo "checked";?>>C</option>
                                        <option value="1.70"
                                            <?php if (isset($grade) && $grade=="1.70") echo "checked";?>>C-</option>
                                        <option value="1.30"
                                            <?php if (isset($grade) && $grade=="1.30") echo "checked";?>>D+</option>
                                        <option value="1.00"
                                            <?php if (isset($grade) && $grade=="1.00") echo "checked";?>>D</option>
                                        <option value="0.00"
                                            <?php if (isset($grade) && $grade=="0.00") echo "checked";?>>F</option>
                                    </select>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Points Input -->
                                    <input class="form-control" id="pInput8" type="text" placeholder="Points" disabled>
                                </div>
                                <div class="col-sm-3" id="formspace">
                                    <!-- Credit Hours Input -->
                                    <input class="form-control" id="ch8" name="ch8" min="0" type="number"
                                        onchange="gpFunction8()" value="<?php echo $ch8;?>" placeholder="Credit Hours">
                                </div>
                                <div class="col-sm-3">
                                    <!-- Grade Points Input -->
                                    <input class="form-control" id="gpInput8" type="text" placeholder="Grade Points"
                                        disabled>
                                </div>
                            </div>
                            <!-- End Field 8 -->

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

                        <!-- result_calculator Section-->
                        <?php require_once('includes/result_calculator.php') ?>
                        <!-- End result_calculator Section-->

                    </div>
                </div>
                <!-- End Card 1 -->

                <!-- Card 2 -->
                <div class="card" style="margin-top: 30px;">

                    <!-- Card content -->
                    <div class="card-body" style="min-height:150px; max-height:auto;">

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
                    <h4 class="card-title" style="text-align: center;">This grade conversion table is used at SEGI
                        University</h4>
                    <table class="table table-bordered" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>Letter</th>
                                <th>Marks</th>
                                <th>Grade Point</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Letter">A</td>
                                <td data-label="Marks">80-100</td>
                                <td data-label="Grade Points">4.00</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">A-</td>
                                <td data-label="Marks">75-79</td>
                                <td data-label="Grade Points">3.70</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">B+</td>
                                <td data-label="Marks">70-74</td>
                                <td data-label="Grade Points">3.30</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">B</td>
                                <td data-label="Marks">65-69</td>
                                <td data-label="Grade Points">3.00</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">B-</td>
                                <td data-label="Marks">60-64</td>
                                <td data-label="Grade Points">2.70</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">C+</td>
                                <td data-label="Marks">55-59</td>
                                <td data-label="Grade Points">2.30</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">C</td>
                                <td data-label="Marks">50-54</td>
                                <td data-label="Grade Points">2.00</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">C-</td>
                                <td data-label="Marks">45-49</td>
                                <td data-label="Grade Points">1.70</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">D+</td>
                                <td data-label="Marks">40-44</td>
                                <td data-label="Grade Points">1.30</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">D</td>
                                <td data-label="Marks">35-39</td>
                                <td data-label="Grade Points">1.00</td>
                            </tr>
                            <tr>
                                <td data-label="Letter">F</td>
                                <td data-label="Marks">0-34</td>
                                <td data-label="Grade Points">0.00</td>
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

    <script src="calculator.js"></script>
</body>

</html>