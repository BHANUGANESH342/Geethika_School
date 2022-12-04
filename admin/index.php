<?php

if(isset($_POST['login']))
{
    if($_POST['username'] == 'admin' && $_POST['password'] == 'admin')
    {
        header('location:dashboard.php');
    }
    else
    {
        echo "<script>alert('Invalid Username or Password')</script>";
    }
  
}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets/css/meanmenu.css">

<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="../assets/css/magnific-popup.css">

<link rel="stylesheet" href="../assets/css/flaticon.css">

<link rel="stylesheet" href="../assets/css/remixicon.css">

<link rel="stylesheet" href="../assets/css/odometer.min.css">

<link rel="stylesheet" href="../assets/css/aos.css">

<link rel="stylesheet" href="../assets/css/style.css">

<link rel="stylesheet" href="../assets/css/dark.css">

<link rel="stylesheet" href="../assets/css/responsive.css">
<link rel="icon" type="image/png" href="../assets/images/favicon.png">
<title>login</title>
</head>
<body>

<div class="preloader-area">
<div class="spinner">
<div class="inner">
<div class="disc"></div>
<div class="disc"></div>
<div class="disc"></div>
</div>
</div>
</div>





<div class="login-area pt-100 pb-70">
<div class="container">
<div class="login">
 <h3>Login</h3>
<form method="POST">
<div class="form-group">
<input type="email" id="email" class="form-control" placeholder="Username">
</div>
<div class="form-group">
<input type="password" id="password" class="form-control" placeholder="Password*">
</div>
<!-- <div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
<label class="form-check-label" for="flexCheckDefault">
Remember Me
</label>
</div> -->
<button type="submit" name="login" class="default-btn btn active">Login</button>
<!-- <a href="recover-password.html">Lost your password?</a> -->
</form>
</div>
</div>
</div>


<?php
include 'footer.php';
?>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/js/jquery.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/jquery.meanmenu.js"></script>

<script src="../assets/js/owl.carousel.min.js"></script>

<script src="../assets/js/carousel-thumbs.min.js"></script>

<script src="../assets/js/jquery.magnific-popup.js"></script>

<script src="../assets/js/aos.js"></script>

<script src="../assets/js/odometer.min.js"></script>

<script src="../assets/js/appear.min.js"></script>

<script src="../assets/js/form-validator.min.js"></script>

<script src="../assets/js/contact-form-script.js"></script>

<script src="../assets/js/ajaxchimp.min.js"></script>

<script src="../assets/js/custom.js"></script>
</body>
</html>