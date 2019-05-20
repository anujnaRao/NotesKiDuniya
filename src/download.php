<?php
    session_start();
    include("./include/db.php");
//    include("../home/regform/Login_v15/vendor/login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="./jquery-3.4.0.slim.min.js"></script>
    <script src="./bootstrap.js"></script>
    <script src="./popper.min.js"></script>
    <script src="./tooltip.min.js"></script>
    <title>Login</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top container-fluid">
    <div class="container">
        <a class="navbar-brand logo" href="index.html">
            <img src="ll.png" class="img-fluid " alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto text-center text-justify">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="user.php">
                        <?php
                            $userName = $_SESSION['user_mail'];
                            if ($userName == true){

                            }else{
                                header('location: ../home/regform/Login_v15/vendor/login.php');
                            }
                            $query = "SELECT * FROM users where uid='$userName' ";
                            $userData = mysqli_query($con,$query);
                            $result = mysqli_fetch_assoc($userData);  // result in the form of array
                            echo $result['fname']; // fetching the first name
                        ?>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="upload.php">Upload</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="download.php">Downloads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section>
    <div class="container-fluid">
        <div class="col">
            <div class="col-md-12 col-lg-12 text-justify">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h4 class="card-title text-center">Recently uploaded notes.We filter the best notes for you.</h4>
                        <?php
                            $queryShow = "select * from notes";
                            $resultShow = mysqli_query($con,$queryShow);
                            if($resultShow -> num_rows>0){
                                echo "<table class='table table-responsive-md table-bordered'><tr><th>Subject</th><th>Download from here</th></tr>";
                                while ($row = $resultShow->fetch_assoc()){
                                    echo "<tr><td>".$row['nname']."</td>";
                                    echo "<td class='te'><a href='download.php?id='>Download $row[nname]</a>"." </td></tr>";
                                    echo "</table";
                                }

                            }


                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
    include("include/footer.php");
?>
</body>
</html>
