<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Page</title>
    <link rel="stylesheet" href="../design/bootstrapmin.css">
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrapmin.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../design/bootstrapmin.css">
    <script src="../design/jquerymin.js"></script>
    <script src="../design/bootstrapmin.js"></script>
    <script src="../design/poppermin.js"></script>
    <link rel="stylesheet" href="../css/jqueryui.css">
    <link rel="stylesheet" href="../css/carousalmin.css">
    <link rel="stylesheet" href="../css/defaultmin.css">
    <link rel="stylesheet" href="../css/style.css"/>


</head>
<body>
<section class="card-header">
    <header class="site-navbar py-4 bg-white" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-11 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="#" class="text-black h2 mb-0 ">Notes ki Duniya</a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>


                        </ul>
                    </nav>
                </div>

                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>

        </div>

    </header>
</section>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Notes Ki Duniya</h5>
                    <h3 class="login-heading mb-4">Upload File</h3>
                    <div class="form-label-group">
                        <input type="text" id="subname" name="subname" class="form-control" placeholder="Subject Name" required autofocus>
<!--                        <label for="subname">Subject Name</label>-->
                    </div>
                    <hr>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFile">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                   aria-describedby="inputGroupFile">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>

