
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
<title>Admissions</title>
</head>
<body>


<?php include'header.php';?>



<div class="courses-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="courses-left-content">
<div class="row">
<div class="col-lg-6 col-md-6">

<!-- <a href="courses-details.html"><img src="../assets/images/courses/courses-1.jpg" alt="Image"></a> -->
</div>
<div class="courses-content"><?php
include'connect.php';
$querry="select s_no,stdNam,admClas,fname,mmob,gender from registration where status='0'";
$result=mysqli_query($con,$querry);
while($row = mysqli_fetch_array($result))
{
    $father_name=$row['fname'];
    $student_name=$row['stdNam'];
    $class=$row['admClas'];
    $mobile=$row['mmob'];
    $gender=$row['gender'];
    $id=$row['s_no'];

    echo'
    
<div class="single-courses-card style4">
<div class="courses-img">
    <div class="courses-content">
    <div class="admin-profile">
    <img src="../assets/4s.png" alt="Image">
    <p>by '.$father_name.'</p>
    </div>
    <a href="stdprofile.php?id='.$id.'"><h3>'.$student_name.'</h3></a>
    <div class="bottom-content">
    <ul class="d-flex justify-content-between">
    <li>
    <ul>
    <li><i class="flaticon-graduation"></i>Class : '.$class.'</li>
    <li><i class="flaticon-bubble-chat"></i>Mobile No: '.$mobile.'</li>
    </ul>
    </li>
    <li><a href="#">Gender : '.$gender.'</a></li>
    </ul>
    </div>
    </div>
';
}

?>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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

<!-- <script src="../assets/js/custom.js"></script> -->
</body>
</html>