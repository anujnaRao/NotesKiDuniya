<?php
    session_start();
    include("./include/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Notes ki Duniya</title>
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
                        <li class="nav-item  active">
                            <a class="nav-link" href="#">Username</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="upload.php">Upload</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>

    </div>

</header>
</section>
<section class="py-5">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card-body">
                    <h4 class="card-title text-center">User name</h4>




                </div>
                </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
    <div class="col">
            <div class="col-md-12 col-lg-12 text-justify">
                <div class="card card-signin my-5">
                <div class="card-body">
                    <h4 class="card-title text-center">View Notes</h4>
                    <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="card-body">
                            <h4 class="card-title text-left">Java Notes</h4>
                        <br><button type="submit" name="submit" class="btn btn-sm btn-primary btn-group-sm text-uppercase"  >Download Pdf</button>
                        &emsp;<button type="submit" name="submit" class="btn btn-sm btn-primary btn-group-sm text-uppercase"  >View Pdf</button>
                    </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="card-body">
                            <h4 class="card-title text-left">Python Notes</h4>
                        <br><button type="submit" name="submit" class="btn btn-sm btn-primary btn-group-sm text-uppercase"  >Download Pdf</button>
                        &emsp;<button type="submit" name="submit" class="btn btn-sm btn-primary btn-group-sm text-uppercase"  >View Pdf</button>
                    </div>
                </div>

                    <div class="col-md-4 col-lg-4">
                        <div class="card-body">
                            <h4 class="card-title text-left">Javascript Notes</h4>
                            <br><button type="submit" name="submit" class="btn btn-sm btn-primary btn-group-sm text-uppercase"  >Download Pdf</button>
                            &emsp;<button type="submit" name="submit" class="btn btn-sm btn-primary btn-group-sm text-uppercase"  >View Pdf</button>
                        </div>
                    </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="card-body">
                                <h4 class="card-title text-left">Java Notes</h4>
                                <br><button type="submit" name="submit" class="btn btn-sm btn-primary btn-group-sm text-uppercase"  >Download Pdf</button>
                                &emsp;<button type="submit" name="submit" class="btn btn-sm btn-primary btn-group-sm text-uppercase"  >View Pdf</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="card-body">
                                <h4 class="card-title text-left">Python Notes</h4>
                                <br><button type="submit" name="submit" class="btn btn-sm btn-primary btn-group-sm text-uppercase"  >Download Pdf</button>
                                &emsp;<button type="submit" name="submit" class="btn btn-sm btn-primary btn-group-sm text-uppercase"  >View Pdf</button>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <div class="card-body">
                                <h4 class="card-title text-left">Javascript Notes</h4>
                                <br><button type="submit" name="submit" class="btn btn-sm btn-primary btn-group-sm text-uppercase"  >Download Pdf</button>
                                &emsp;<button type="submit" name="submit" class="btn btn-sm btn-primary btn-group-sm text-uppercase"  >View Pdf</button>
                            </div>
                        </div>
                    </div><hr>

            </div>
            </div>
            </div>
    </div>
    </div>
</section>
<!-- /.row -->
<!-- /.container -->



</div>
<!-- /.row -->

</div>
<?php
    include("include/footer.php");
?>
</body>
</html>
