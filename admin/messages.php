
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
<title>Messages</title>
</head>
<body>


<div class="news-details-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-8">

<div class="comments">
<h3>2 Messages</h3>
<?php
include'connect.php';
$querry="SELECT `S_NO`, `Name`, `email`, `mobile`, `subject`, `message`, `accept` FROM `contact`  where status='0'";
$result=mysqli_query($con,$querry);
while($row = mysqli_fetch_array($result))
{
    $name=$row['Name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $subject=$row['subject'];
    $message=$row['message'];
    $accept=$row['accept'];
    $sno=$row['S_NO'];

    echo'


<div class="single-comments-box">
<img src="../assets/images/courses/review-1.png" alt="Images">
<h4>'.$name.'</h4>
<div class="date">
<p>'.$email.'</p>
</div>
<div class="reply">
<a href="checked.php?id='.$sno.'">Reply</a>
</div>
<p>Subject : '.$subject.' </p>

<p>'.$message.'</p>
</div>';

} 
?>


</div>
</div>
</div>
</div>


<div class="footer-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-4 col-sm-6">
<div class="footer-logo-area">
<a href="index.html"><img src="../assets/images/white-logo.png" alt="Image"></a>
<p>Sanu University was established by J.H Merthon in 1810 for the public benefit. Afterwards, it is recognized globally</p>
<div class="contact-list">
<ul>
<li><a href="tel:+01987655567685">+01-9876-5556-7685
</a></li>
<li><a href="/cdn-cgi/l/email-protection#f091949d999eb083919e85de959485"><span class="__cf_email__" data-cfemail="7b1a1f1612153b081a150e551e1f0e">[email&#160;protected]</span></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="footer-widjet">
<h3>Campus Life</h3>
<div class="list">
<ul>
<li><a href="campus-life.html">Accessibility</a></li>
<li><a href="campus-life.html">Financial Aid</a></li>
<li><a href="campus-life.html">Food Services</a></li>
<li><a href="campus-life.html">Housing</a></li>
<li><a href="campus-life.html">Information Technologies</a></li>
<li><a href="campus-life.html">Student Life</a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="footer-widjet">
<h3>Our Campus</h3>
<div class="list">
<ul>
<li><a href="campus-life.html">Acedemic</a></li>
<li><a href="campus-life.html">Planning & Administration</a></li>
<li><a href="campus-life.html">Campus Safety</a></li>
 <li><a href="campus-life.html">Office of the Chancellor</a></li>
<li><a href="campus-life.html">Facility Services</a></li>
<li><a href="campus-life.html">Human Resources</a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-2 col-sm-6">
<div class="footer-widjet">
<h3>Academics</h3>
<div class="list">
<ul>
<li><a href="academics.html">Canvas</a></li>
<li><a href="academics.html">Catalyst</a></li>
<li><a href="academics.html">Library</a></li>
<li><a href="academics.html">Time Schedule</a></li>
<li><a href="academics.html">Apply For Admissions</a></li>
<li><a href="academics.html">Pay My Tuition</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="shape">
<img src="../assets/images/shape-1.png" alt="Image">
</div>
</div>
</div>


<div class="copyright-area">
<div class="container">
<div class="copyright">
<div class="row">
<div class="col-lg-6 col-md-4">
<div class="social-content">
<ul>
<li><span>Follow Us On</span></li>
<li>
<a href="https://www.facebook.com" target="_blank"><i class="ri-facebook-fill"></i></a>
</li>
<li>
<a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-fill"></i></a>
</li>
<li>
<a href="https://instagram.com/?lang=en" target="_blank"><i class="ri-instagram-line"></i></a>
</li>
<li>
<a href="https://linkedin.com/?lang=en" target="_blank"><i class="ri-linkedin-fill"></i></a>
</li>
</ul>
</div>
</div>
<div class="col-lg-6 col-md-8">
<div class="copy">
<p>© Sanu is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="go-top">
<i class="ri-arrow-up-s-line"></i>
<i class="ri-arrow-up-s-line"></i>
</div>


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