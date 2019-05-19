<?php
    session_start();
    include("./include/db.php");

    if(isset($_POST['submit'])){
        $doc_name = $_POST['doc_name'];
        $file_name = $_FILES['myfile']['name'];
        $file_type = $_FILES['myfile']['type'];
        $file_size = $_FILES['myfile']['size'];
        $file_tmp_loc = $_FILES['myfile']['tmp_name'];

        $file_store ="/home/aditya/Desktop/".$file_name;
        move_uploaded_file($file_tmp_loc,$file_store);


    }
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
<!--    <script src=""></script>-->
    <title>Notes | Upload</title>

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
                <li class="nav-item ">
                    <a class="nav-link" href="user.php">
                        <?php
                            $userName = $_SESSION['user_mail'];
                            if ($userName == true){

                            }else{
                                header('location: login.php');
                            }
                            $query = "SELECT * FROM users where uid='$userName' ";
                            $userData = mysqli_query($con,$query);
                            $result = mysqli_fetch_assoc($userData);  // result in the form of array
                            echo $result['fname']; // fetching the first name
                        ?>
                    </a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link" href="upload.php">Upload</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<form action="" method="post" enctype="multipart/form-data">
    <label>Document name</label>
    <input type="text" name="doc_name">
    <input type="file" name="myfile">
    <input type="submit" name="submit" value="Upload">
</form>



<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

</body>
</html>


