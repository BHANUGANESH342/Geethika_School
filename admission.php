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
<title>GEETHIKA SCHOOL CBSC </title>
</head>
<body>
    <?php
    include "header.php" ?>
    <div class="sidebar-content">

    <div class="contact-form">
        <h3>Ready to Get Started?</h3>
        <form id="contactForm">
        <div class="row">
        <div class="col-lg-12 col-md-6">
        <div class="form-group">
            <label>Enter Your Name:</label>
        <input type="text" name="name" class="form-control" required="" data-error="Please enter your name" placeholder="Your name">
        <div class="help-block with-errors"></div>
        </div>
        </div>
        <div class="col-lg-12 col-md-6">
        <div class="form-group">
        <div class="help-block with-errors"></div>
        </div>
        </div>
        <div class="col-lg-12 col-md-12">
        <div class="form-group">
        <input type="text" name="phone_number" class="form-control" required="" data-error="Please enter your phone number" placeholder="Your phone number">
        <div class="help-block with-errors"></div>
        </div>
        </div>
        <div class="col-lg-12 col-md-12">
        <div class="form-group">
        <textarea name="message" class="form-control" cols="30" rows="6" required="" data-error="Please enter your message" placeholder="Write your message..."></textarea>
        <div class="help-block with-errors"></div>
        </div>
        </div>
        <div class="col-lg-12 col-md-12">
        <button type="submit" class="default-btn">Send Message<span></span></button>
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
        </div>
        </div>
        </form>
        </div>
    </div>
        

    <table>
       <tr>
        <td>Your Email:</td>
        <td><input type="email" name="email" class="form-control"  data-error="Please enter your email" >
        </td>
       </tr>
       <tr>
        <td>NAME OF THE CHILD:</td>
        <td><input type="email" name="name" class="form-control" placeholder="Child Name "></td>
       </tr>
       <tr>
        <td>ADMISSION TO CLASS:</td>
        <td><select name="admissionClass" id="admissionClass" class="form-control"  >
            <option value="pp1">PP1</option>
            <option value="pp2">PP2</option>
            <option value="1st">1st Class</option>
            <option value="2nd">2nd Class</option>
            <option value="3rd">3rd Class</option>
            <option value="4th">4th Class</option>
            <option value="5th">5th Class</option>
            <option value="6ht">6th Class</option>
            <option value="7th">7th Class</option>
            <option value="8th">8th Class</option>
        </select></td>
       </tr>
       <tr>
        <td>DATE OF BIRTH:</td>
        <td><input type="date" name="dob" class="form-control" placeholder="Date of Birth"></td>
       </tr>
       <tr>
        <td>Gender:</td>
        <td>
            <input type="radio" name="male" id="male" ><label for="male">MALE</label>
            <input type="radio" name="female" id="female" ><label for="female">FEMALE</label>
        </td>
       </tr>
       <tr>
        <td>ADHAR NUMBER</td>
        <td><input type="text" name="adhar" id="adhar" class="form-control" placeholder="Adhar Number"></td>
       </tr>
       <tr>
        <td>FATHER</td>
        <td><input type="text" name="father" id="father" class="form-control" placeholder="Father Name"></td>
       </tr>
       <tr>
        <td>OCCUPATION</td>
        <td><input type="text" name="occupation" id="occupation" class="form-control" placeholder="Father occupation"></td>
       </tr>
       <tr>
        <td>FATHER ADHAR NUMBER</td>
        <td><input type="text" name="fadhar" id="fadhar" class="form-control" placeholder="Father Adhar Number"></td>
       </tr>
       <tr>
        <td>MOBILE NUMBER</td>
        <td><input type="tel" name="fmobile" id="fmobile" class="form-control" placeholder="Mobile Number"></td>
       </tr>
       <tr>
        <td>MOTHER NAME</td>
        <td><input type="text" name="mname" id="mname" class="form-control" placeholder="Mother Name"></td>
       </tr>
       <tr>
        <td>OCCUPATION</td>
        <td><input type="text" name="moccupation" id="moccupation" class="form-control" placeholder="Mother Occupation" ></td>
       </tr>
       <tr>
        <td>MOTHER ADHAR NUMBER</td>
        <td><input type="text" name="madhar" class="form-control" id="madhar" ></td>
       </tr>
       <tr>
        <td>MOTHER MOBILE</td>
        <td><input type="tel" name="mmobile" id="mmobile" class="form-control" placeholder="Mother Mobile"></td>
       </tr>
       <tr>
        <td>EMAIL</td>
        <td><input type="email" name="email" id="email" class="form-control" placeholder="EMAIL"></td>
       </tr>
    </table>











<?php include "footer.php"
?>
    
    
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