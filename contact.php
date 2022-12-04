<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/magnific-popup.css">

<link rel="stylesheet" href="assets/css/flaticon.css">

<link rel="stylesheet" href="assets/css/remixicon.css">

<link rel="stylesheet" href="assets/css/odometer.min.css">

<link rel="stylesheet" href="assets/css/aos.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/dark.css">

<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="icon" type="image/png" href="assets/images/favicon.png">
<title>Contact Us</title>
</head>
<body>
<?php
include'header.php';
include'connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['phone_number'];
    $subject=$_POST['msg_subject'];
    $message=$_POST['message'];
    $gridCheck=$_POST['gridCheck'];
    $pass="insert into `contact`( `Name`, `email`, `mobile`, `subject`, `message`, `accept`)  values ('$name','$email','$mobile','$subject','$message','$gridCheck');";
    $run=mysqli_query($con,$pass);
    if($run)
    {
        echo "<script>alert('Message Posted  Successfully')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
    else
    {
        echo "<script>alert('Message Posting failled')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
?>



<div class="contact-us-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="contacts-form">
<h3>Leave a message</h3>
<form id="contactForm" method="POST">
<div class="row">
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<label>Your name</label>
<input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<label>Your email</label>
<input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<label>Your phone</label>
<input type="text" name="phone_number" id="phone_number" required="" data-error="Please enter your number" class="form-control">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<label>Subject</label>
<input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-12">
<div class="form-group">
<label>Your message</label>
<textarea name="message" class="form-control" id="message" cols="30" rows="8" required="" data-error="Write your message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="form-group">
<div class="form-check">
<input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required="">
<label class="form-check-label" for="gridCheck">
I agree to the <a href="terms-conditions.html">terms</a> and <a href="privacy-policy.html">privacy policy</a>
</label>
<div class="help-block with-errors gridCheck-error"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<button type="submit" name="submit" class="default-btn">
<span>Send message</span>
</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
<div class="col-lg-6">
<div class="contact-and-address">
<h2>Write Us!</h2>
<p>Education is a comprehensive term that prepares students for life Learning is the focus of all activities undertaken Global understanding through an international approach is essential Every individual is important irrespective of his circumstances.</p>
<div class="contact-and-address-content">
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="contact-card">
<div class="icon">
<i class="ri-phone-line"></i>
</div>
<h4>Contact</h4>
<p>Mobile: <a href="tel:+8819906886">+91 90148 28382</a></p>
<p><a href="mailto:Geethikacbseschool@gmail.com"><span class="__cf_email__">Geethikacbseschool@gmail.com</span></a></p>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="contact-card">
<div class="icon">
<i class="ri-map-pin-line"></i>
</div>
<h4>Address</h4>
<p>Brahmanapalli</p>
<p>Piduguralla Mandal - HYD</p>
</div>
</div>
</div>
</div>
<div class="social-media">
<ul>
<li>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
include'footer.php';
?>

<div class="go-top">
<i class="ri-arrow-up-s-line"></i>
<i class="ri-arrow-up-s-line"></i>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/carousel-thumbs.min.js"></script>

<script src="assets/js/jquery.magnific-popup.js"></script>

<script src="assets/js/aos.js"></script>

<script src="assets/js/odometer.min.js"></script>

<script src="assets/js/appear.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/ajaxchimp.min.js"></script>

<script src="assets/js/custom.js"></script>
</body>
</html>