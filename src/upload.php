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
                    <h5 class="card-title text-center">Sign In</h5>
                    <h3 class="login-heading mb-4">Welcome back!</h3>
                    <form action="" method="post">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" name="mail" class="form-control" placeholder="Email address" required autofocus>
                            <label for="inputEmail">Email address</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                            <label for="inputPassword">Password</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" name="rememberpass" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" name="submit">Sign in</button>
                        <div class="text-center">
                            <a class="small" href="#">Forgot password?</a></div>
                        <div class="text-center">
                            Don't have account? <a class="small" href="signup.php">Register</a></div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>

