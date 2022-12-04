
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

<?php include'header.php';?>
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
<img src="../assets/4s.png" alt="Images">
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