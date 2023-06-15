<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions</title>
    <link href="bar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
    </style>
</head>

<body style="background-image: url(tcsc_bg.jpg);">
    <div class="container bg-light mx-auto">
    <div>
            <center><img src="banner.jpg" alt="" height="200x" width="auto"></center>
            </div>
        <div class="">
                     

            <div class="bar">
                <hr>
                    <ul>
                      <li><a href="home.php"><label>HOME</label></a></li>
                      <li><a href="from.php"><label>Admission</label></a>
                       
                       <!--
                       <div class="sub-manu-1">
                            <ul>
                                <li><a href="#"><label>Degree</label></a></li>
                                <li><a href="#"><label>Courses</label></a></li>
                                <li><a href="#"><label>Admission</label></a></li>
                            </ul>                           
                        </div>
                         -->
                      </li>
                      <li><a href="About.php"><label>About US</label></a></li>
                    </ul>
                <hr>               
            </div>
            <br>
            <h1>
                <center>Admission Form</center>
            </h1>
            <form action="data.php" method="post" enctype="multipart/form-data">
                <div class="row">

                    <label class=""><b> FULL NAME</b></label><br><br>
                    <div class="col">
                        <input class="form-control" type="text" name="First" placeholder="FIRST">
                    </div>
                    <div class="col">
                        <!--<label>MIDDLE NAME</label><br><br>-->
                        <input class="form-control" type="text" name="MiddleName" placeholder="MIDDLE">
                    </div>
                    <div class="col">
                        <!-- <label>LAST NAME</label><br><br>-->
                        <input class="form-control" type="txet" name="LastName" placeholder="LAST">
                    </div>


                </div><br>

                <div class="row">
                    <div class="col">
                        <input class="form-control" text="Age" name="Age" placeholder="Age">
                    </div>
                    <div class="col">
                        <input class="form-control" text="email" name="Email" placeholder="Email">
                    </div>

                    <div class="col">
                        <input class="form-control" text="tel" name="tel" placeholder="Phone Number">
                    </div>

                </div><br>
                <div class="row">
                    <div class="col">
                        <input class="form-control" type="date" name="dob" placeholder="dob">
                    </div>

                    <div class="col mt-3">
                        <!--<label>Gender :</label><br>-->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="g" value="gender">
                            <label class="form-check-label" for="radio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="g" value="gender">
                            <label class="form-check-label" for="radio1">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="g" value="gender">
                            <label class="form-check-label" for="radio1">Other</label>
                        </div>
                    </div>
                </div><br>

                <div class="row">
                    <label><b>FATHER NAME</b></label><br><br>
                    <div class="col">
                        <input class="form-control" type="text" name="fathernamefirst" placeholder="FIRT">
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" name="fathernamelast" placeholder="LAST">
                    </div>
                    <div class="col">
                        <input class="form-control" text="tel" name="fathertel" placeholder="Phone Number">
                    </div>
                </div><br>

                <div class="row">
                    <label><b>MATHER NAME</b></label><br><br>
                    <div class="col">
                        <input class="form-control" type="text" name="mathernamefirst" placeholder="FIRT">
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" name="athernamelast" placeholder="LAST">
                    </div>
                    <div class="col">
                        <input class="form-control" text="tel" name="mathertelnumber" placeholder="Phone Number">
                    </div>
                </div><br>



                <div class="row">
                    <div class="col">
                        <label><b>ADDRESS</b></label><br><br>
                        <textarea class="form-control" name="Address" placeholder="Address" id=""></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input class="form-control" type="text" name="City" placeholder="city">
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" name="Country" placeholder="Country">
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" name="pincode" placeholder="Pin code">
                    </div>
                </div>
        </div><br>

        <div class="row">
            <div class="col">
                <label><b>AADHAR CARD NO.</b></label><br><br>
                <input class="form-control" type="text" name="aadhar" placeholder="0000-0000-0000-0000">
            </div>
            <div class="col">
                <label><b>10th PERCENTAGE</b></label><br><br>
                <input class="form-control" type="text" name="tenpercentage" placeholder="10th PERCENTAGE">
            </div>
            <div class="col">
                <label><b>12th PERCENTAGE</b></label><br><br>
                <input class="form-control" type="text" name="percentage" placeholder="12th PERCENTAGE">
            </div>
        </div><br>

        <div class="row">
            <div class="col">
                <label><b>Level</b></label>
                <select class="form-select" name="level" id="level">
                    <option value="."></option>
                    <option value="ug">UG</option>
                    <option value="pg">PG</option>
                </select>
            </div>
            <div class="col">
                <label><b>course</b></label>
                <select class="form-select chosen" name="course" id="course">
                    <option value="."></option>
                    <option value="bsccs">BSC CS</option>
                    <option value="bscit">MSC CS</option>
                    <option value="others">OTHERS</option>
                </select>
            </div>

            <div class="col">
                <label><b>Semester</b></label>
                <select class="form-select" name="sem" id="sem">
                    <option value="1"></option>
                    <option value="1">Semester 1</option>
                    <option value="1">Semester 2</option>
                    <option value="1">Semester 3</option>
                    <option value="1">Semester 4</option>
                    <option value="1">Semester 5</option>
                    <option value="1">Semester 6</option>
                </select>
            </div>
        </div><br>

        <div class="row">
            <div class="col">
                <label><b>ROLL NO</b></label>
                <input class="form-control" type="text" name="rollno">
            </div>

            <div class="col">
                <label><b>DIV</b></label>
                <select class="form-select" name="div" id="div">
                    <option value="2"></option>
                    <option value="2">A</option>
                    <option value="2">B</option>
                </select>
            </div>
        </div><br>

        <div class="row">
            <div class="col">
                <label><b>Upload Aadhar Card Photo</b></label>
                <input class="form-control" type="file" name="image">
            </div>

            <div class="col">
                <label><b>Upload Marksheet</b></label>
                <input class="form-control" type="file" name="image1">
            </div><br>
        </div><br>
        <div class="row">
            <div class="col">
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </div>
        <br>

        </form>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="Assets\main.js"></script>
    <script src="Assets\qualification.js"></script>
</body>

</html>