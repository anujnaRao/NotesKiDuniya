<?php
    include("../src/include/db.php");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Notes ki Duniya</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrapmin.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jqueryui.css">
    <link rel="stylesheet" href="../css/carousalmin.css">
    <link rel="stylesheet" href="../css/defaultmin.css">
    <link rel="stylesheet" href="../css/style.css"/>

</head>
<body>

<header class="site-navbar py-4 bg-white" role="banner">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-11 col-xl-2">
                <h1 class="mb-0 site-logo"><a href="#" class="text-black h2 mb-0">Notes ki Duniya</a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="view.php">View</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../home/regform/Login_v15/vendor/login.php">Login</a>
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>

    </div>

</header>

<!--url(images/design2.jpeg);" data-stellar-background-ratio="0.5"-->


<div class="site-blocks-cover overlay">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-12">

                <div class="row justify-content-center mb-4">
                    <div class="col-md-8 text-center">
                        <h1>We Make Notes Useful!<span class="typed-words"></span></h1>
                        <p></p>
                        <p></p>
                        <p></p>
                        <div><a href="../home/regform/register.php" class="btn btn-primary btn-md">SignUp!</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<?php
    include("include/footer.php");
?>
</body>
</html>