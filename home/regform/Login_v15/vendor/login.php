<?php
    include("../../../../src/include/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../images/bg-01.jpg);">
					<span class="login100-form-title-1">
						LogIn
					</span>
				</div>

				<form action="" class="login100-form validate-form" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="email" name="mail" placeholder="Enter Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							Login
						</button></a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="daterangepicker/moment.min.js"></script>
	<script src="daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>
    <?php
        if(isset($_POST['submit'])){
            $mail = $_POST['mail'];
            $password = $_POST['pass'];

            $query = "SELECT * FROM users where uid='$mail' and pwd= '$password' ";

            $userData = mysqli_query($con,$query);
            $totalrow = mysqli_num_rows($userData); // return the count of row
            if($totalrow == 1){
                $_SESSION['user_mail']=$mail;
                header('location: user.php');
            }else{
                $msg = "Incorrect Email or password ";
                echo "<script type='text/javascript'> alert('$msg');</script>";
            }
        }
    ?>

</body>
</html>