<?php
    session_start();
    include("./include/db.php");
//
//    if(isset($_POST['submit'])){
//        $doc_name = $_POST['doc_name'];
//        $file_name = $_FILES['file']['name'];
//        $file_type = $_FILES['file']['type'];
//        $file_size = $_FILES['file']['size'];
//        $tmp_loc = $_FILES['file']['tmp_name'];
//
//        $file_store = '../uploads/';
//        move_uploaded_file($tmp_loc,$file_store.$file_name);
//
//
//    }


//    $target_dir = "uploads/";
//    $target_file = $target_dir . basename($_FILES['file']["name"]);
//    $uploadOk = 1;
//    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//    // Check if image file is a actual image or fake image
//    if (isset($_POST["submit"])) {
//        $check = getimagesize($_FILES['file']["tmp_name"]);
//        if ($check !== false) {
//            echo "File is an image - " . $check["mime"] . ".";
//            $uploadOk = 1;
//        } else {
//            echo "File is not an image.";
//            $uploadOk = 0;
//        }
//    }

//    $doc_name = $_POST['doc_name'];



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
        <a class="navbar-brand logo" href="../src/index.php">
            <img src="nkd.png" class="img-fluid " alt="">
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
                <li class="nav-item ">
                    <a class="nav-link" href="download.php">Downloads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center"><u>Notes Ki Duniya</h5></u>
                    <h3 class="login-heading mb-4">Upload File</h3>
                    <form action="?" method="post" class="form-control" enctype="multipart/form-data"><br>
                        <div class="form-label-group">
                        <input type="text" id="doc_name" name="doc_name" class="form-control" placeholder="Subject Name" required autofocus>
                        <label for="doc_name"></label>
                    </div>
                    <hr>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFile">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file"
                                   aria-describedby="file" name="file">
                            <label class="custom-file-label" for="file">Choose file</label>
                        </div>
                    </div><hr>
                    <button type="submit" name="submit" class="btn btn-md btn-primary btn-block text-uppercase"  >Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php


    if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
        $targetDir = "uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        $doc_name = $_POST['doc_name'];
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $insert = $con->query("INSERT into notes (nname,path) VALUES ('$doc_name','$targetFilePath')");
                if($insert){
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                }else{
                    $statusMsg = "File upload failed, please try again.";
                }
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
    }else{
        $statusMsg = '';
    }

    // Display status message
    echo $statusMsg;
?>


<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

</body>
</html>


