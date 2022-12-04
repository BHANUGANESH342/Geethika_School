
<?php

$id=$_GET['id'];
include 'connect.php';
$querry="select s_no,stdNam,admClas,fname,fmob,mmob,gender,preschool from registration where  s_no=$id ";
$result=mysqli_query($con,$querry);
$row = mysqli_fetch_array($result);
$father_name=$row['fname'];
$student_name=$row['stdNam'];
$class=$row['admClas'];
$mobile=$row['mmob'];
$gender=$row['gender'];
$preschool=$row['preschool'];
$fmob=$row['fmob'];

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
<title>Student Profile</title>
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

<div class="courses-details-area pt-100 pb-70">
<div class="container">
 <div class="row">
<div class="col-lg-8">
<div class="courses-details">
<div class="courses-card">
<!-- <h2>Python Programming For Data Science</h2>
<div class="img">
<img src="../assets/images/courses/courses-4.jpg" alt="Image">
</div> -->
<div class="list">
<ul>
<li>
<div class="teacher">
<img src="../assets/images/courses/admin-1.jpg" alt="Image">
<p>posted by : <a href="#">Father name :<?php echo $father_name ?></a></p>
</div>
</li>
<li><i class="flaticon-clock"></i><span>posted on :</span>September 29, 2021</li>
</ul>
</div>
</div>


<div class="row">
<div class="instructor">
<div class="row align-items-center">
<div class="col-lg-5">
<div class="instructor-image">
<img src="../assets/images/courses/instructor.jpg" alt="Image">
</div>
</div>
<div class="col-lg-7">
<div class="instructor-content">
<div class="name">
<h3><?php echo $student_name ?></h3>
<p><?php echo $class ?></p>
</div>
<p class="mb-30"><?php echo $preschool?></p>
<div class="quick-contact">
<h4><?php echo $gender ?></h4>
<ul>
<li><i class="ri-phone-line"></i><span>Phone Number:</span><a href="tel:<?php echo $mobile?>"><?php echo $mobile ;?>
</a></li>
<li><i class="ri-phone-line"></i><span>Phone Number:</span><a href="tel:<?php echo $fmon ?>"><?php echo $fmob;?>
</a></li>
<!-- <li><i class="ri-mail-line"></i><span>Email:</span><a href="tel:8002162020"><span class="__cf_email__" data-cfemail="feb7909891be9b869f938e929bd09d9193">[email&#160;protected]</span></a></li> -->
</ul>
</div>
<!-- <div class="social">
<ul>
<li>
<a href="https://instagram.com/?lang=en" target="_blank"><i class="ri-instagram-line"></i></a>
</li>
<li>
<a href="https://linkedin.com/?lang=en" target="_blank"><i class="ri-linkedin-fill"></i></a>
</li>
<li>
<a href="https://www.facebook.com" target="_blank"><i class="ri-facebook-fill"></i></a>
</li>
<li>
<a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-fill"></i></a>
</li>
</ul>
</div> -->
</div>
</div>
</div>
</div>
</div>
</div>
<div class="description">
<div class="container p-0">
</nav>

<div class="related-download">
<h3>Documents</h3>
 <ul>
<li><a href="#"><i class="flaticon-pdf-file"></i>Brochure Department</a></li>
<li><a href="#"><i class="flaticon-pdf-file"></i>Department Details</a></li>
<li><a href="#"><i class="flaticon-pdf-file"></i>Journals Departments</a></li>
</ul>
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