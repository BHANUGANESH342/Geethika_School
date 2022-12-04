<?php
include 'checkssn.php';

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
<title>Dashboard</title>
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

<?php include'header.php'; ?>

<?php 

include'connect.php';
$querry="select count(*) as count from registration where status='0'";
$result=mysqli_query($con,$querry);
$row=mysqli_fetch_array($result);
$count=$row['count'];

$querry1="select count(*) as count from contact where status='0'";
$result1=mysqli_query($con,$querry1);
$row1=mysqli_fetch_array($result1);
$count1=$row1['count'];

// $querry="select count(*) as count from registration where status='0'";
// $result=mysqli_query($con,$querry);
// $row=mysqli_fetch_array($result);
// $count=$row['count'];
?>


<div class="academics-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-9">
<div class="academics-left-content">
<div class="row justify-content-center">
<div class="col-lg-4 col-sm-6">
<div class="single-academics-card3">
<div class="icon">
<i class="flaticon-pc"></i>
</div>
<a href="admissions.php"><h3>New Admissions</h3></a>
<p>New Admissions:<?php echo $count ?></p>
<a href="admissions.php" class="read-more-btn">Read More<i class="flaticon-next"></i></a>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="single-academics-card3">
<div class="icon">
<i class="flaticon-art"></i>
</div>
<a href="messages.php"><h3>Messages</h3></a>
<p>New Messages :<?php echo $count1 ?></p>
<a href="messages.php" class="read-more-btn">Read More<i class="flaticon-next"></i></a>
</div>
</div>
<!-- <div class="col-lg-4 col-sm-6">
<div class="single-academics-card3">
<div class="icon">
<i class="flaticon-auction"></i>
</div>
<a href="academics-details.html"><h3>Querrys</h3></a>
<p>new Querrys</p>
<a href="academics-details.html" class="read-more-btn">Read More<i class="flaticon-next"></i></a>
</div>
</div> -->


</div>
</div>
</div>
<div class="col-lg-3">
<div class="acdemics-right-content">
<div class="serch-content">
<h3>Search</h3>
<div class="form-group">
<input type="text" class="form-control" placeholder="Find Your Course">
<button type="submit" class="src-btn">
<i class="flaticon-search"></i>
</button>
</div>
</div>
<div class="category-content">
<h3>Select a Category</h3>
<select class="form-select form-control" aria-label="Default select example">
<option selected="">Select a Category</option>
<option value="1">Business</option>
<option value="2">Fashion</option>
 <option value="3">writing</option>
<option value="3">Development</option>
<option value="3">Marketing</option>
</select>
</div>
<div class="location-type">
<h3>Location Type</h3>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
<label class="form-check-label" for="flexCheckDefault">
On Campus
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
<label class="form-check-label" for="flexCheckChecked">
Online
</label>
</div>
</div>
<div class="program-level">
<h3>Program Level</h3>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
<label class="form-check-label" for="flexCheckDefault2">
Graduate
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked="">
<label class="form-check-label" for="flexCheckChecked1">
Undergraduate
</label>
</div>
</div>
</div>
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
<li><a href="/cdn-cgi/l/email-protection#ef8e8b828681af9c8e819ac18a8b9a"><span class="__cf_email__" data-cfemail="e9888d848087a99a88879cc78c8d9c">[email&#160;protected]</span></a></li>
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