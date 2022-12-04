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


<?php 

include'connect.php';
$querry="select count(*) as count from registration ";
$result=mysqli_query($con,$querry);
$row=mysqli_fetch_array($result);
$count=$row['count'];

$querry1="select count(*) as count from contact ";
$result1=mysqli_query($con,$querry1);
$row1=mysqli_fetch_array($result1);
$count1=$row1['count'];

// $querry="select count(*) as count from registration where status='0'";
// $result=mysqli_query($con,$querry);
// $row=mysqli_fetch_array($result);
// $count=$row['count'];
?>

<div class="col-lg-3">
<div class="acdemics-right-content">
<a herf="total-admissions.php"><div class="serch-content">
<h3>Total Admissions </h3>
<div class="form-group">
<p><?php echo $count ?></p>
</button>
</div></a>
</div>
<a herf="total-messages.php"><div class="category-content">
<h3>Total Messages</h3>
<p><?php echo $count1 ?></p>
</div></a>

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