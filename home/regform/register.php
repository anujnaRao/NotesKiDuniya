<?php
 include("../../src/include/db.php");
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">


<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration Page</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Registration Form</h2>
                </div>
                <div class="card-body">
                    <form action="register.php" method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="fname">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="lname">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="addr">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="phone">
                                    <label class="label--desc">Phone Number</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="uid" required>
                                </div>
                            </div>
                        </div>


                        <div class="form-row m-b-55">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="pwd" required>
                                            <label class="label--desc">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="cpwd" required>
                                            <label class="label--desc">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit">Register</button></a>
                        </div>
                        <div>
<!--                            <hr>-->
<!--                            <hr><br>-->
<!--                            <br>-->
<!--                          <a href="Login_v15/vendor/login.php">  <input type="text" class="card"  name="login">Login</input></a>-->
<!--                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

<!--php code -->
    <?php
        if(isset($_POST['submit'])) {
            $userid = $_POST['uid'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $phone= $_POST['phone'];
            $addr = $_POST['addr'];
            $pass = $_POST['pwd'];
            $conpass = $_POST['cpwd'];


            $query = "INSERT INTO users(uid, fname, lname, address,phone, pwd)
                values('$userid','$fname','$lname','$addr',$phone,'$pass')";


            $queryCheckId = mysqli_query($con, "select uid from users where uid = '$userid' ");

            if (mysqli_num_rows($queryCheckId) >= 1) {
                $msg = "$userid is already existed, Try for new user id";
                echo "<script type='text/javascript'> alert('$msg');</script>";
            } elseif ($pass == $conpass) {

                $data = mysqli_query($con, $query);
                echo '<script language="javascript">';
                echo "alert('$fname is successfully registered')";
                echo '</script>';
            } else {
                $msg = "Password not match";
                echo "<script type='text/javascript'> alert('$msg');</script>";
            }


        }



    ?>

</body>
</html>
<!-- end document-->