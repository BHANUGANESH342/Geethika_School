<!DOCTYPE html>
<html lang="en">
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


    <title>Admission Form</title>
</head>
<body>
<?php
include'header.php';
?>
<?php
include'connect.php';
if(isset($_POST['submit']))
{
    $cname=$_POST['cname'];
    $admClass=$_POST['adm_class'];
    $gender=$_POST['gender'];
    $s_aadhar=$_POST['s_aadhar'];
    $fname=$_POST['fname'];
    $fjob=$_POST['fjob'];
    $f_aadhar=$_POST['f_aadhar'];
    $fmobile=$_POST['fmobile'];
    $mname=$_POST['mname'];
    $mjob=$_POST['mjob'];
    $m_aadhar=$_POST['m_aadhar'];
    $mphone=$_POST['mphone'];
    $prev_school=$_POST['prev_school'];
    $email=$_POST['email'];
    date_default_timezone_set('Asia/Calcutta');  
    $time=date('d-m-Y h:i:s');
    $query="insert into `registration` (stdNam,admClas,gender,stdAdhr,fname,foccup,fadhr,fmob,mname,moccup,madhr,mmob,email,preschool,status,time) values ('$cname','$admClass','$gender','$s_aadhar','$fname','$fjob','$f_aadhar','$fmobile','$mname','$mjob','$m_aadhar','$mphone','$email','$prev_school','0','$time');";
    $pass=mysqli_query($con,$query);
    if($pass){
        echo "<script>window.location.href='registrationsuccess.php'</script>";
    }
    else
    {
        echo "<script>alert('Applying Failled Try again')</script>";
       
    }
}
?>

<div class="register-area pt-100 pb-70">
<div class="container">
    <div class="register">
        <h3>Online Admission Form</h3>
        <div class="row">
<form method="POST">

<table align="center">
<tr>
<td align="left"><label>Enter Child's Name:</label></td>
<td>
<div class="form-group"><input type="text" id="cname" class="form-control" name="cname">
</div>
</td>
</tr>

<tr>
<td align="left"><label>Admission To Class:</label></td>
<td>
<div class="form-group"><select name="adm_class" id="adm_Class" class="form-control">
            <option></option>
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
        </select>
</div>
</td>
</tr>
<tr>
<td align="left"><label>Gender :</label></td>
<td>
<div class="form-group">
    <input type="radio" name="gender" id="male" value="male"><label for="male">&#160;&#160;MALE</label>&#160;&#160;&#160;&#160;&#160;&#160;
    <input type="radio" name="gender" id="female" Value="female"><label for="female">&#160;&#160;FEMALE</label>

</div>
</td>
</tr>
<tr>
<td align="left"><label>Student Aadhar Number : </label></td>
<td>
<div class="form-group"><input type="text" id="s_aadhar" name="s_aadhar" class="form-control">
</div>
</td>
</tr>
<tr>
<td align="left"><label>Father's Name : </label></td>
<td>
<div class="form-group"><input type="text" id="fname"  name="fname" class="form-control">
</div>
</td>
</tr>
<tr>
<td align="left"><label>Father's Occupation : </label></td>
<td>
<div class="form-group"><input type="text" id="fjob" name="fjob" class="form-control">
</div>
</td>
</tr><tr>
<td align="left"><label>Father's Aadhar Number : </label></td>
<td>
<div class="form-group"><input type="text" id="f_aadhar" name="f_aadhar" class="form-control">
</div>
</td>
</tr>

<tr>
<td align="left"><label>Father's Mobile Number : </label></td>
<td>
<div class="form-group"><input type="text" id="fmobile" name="fmobile" class="form-control">
</div>
</td>
</tr>


<tr>
<td align="left"><label>Mothe's Name : </label></td>
<td>
<div class="form-group"><input type="text" id="mname" name="mname" class="form-control">
</div>
</td>
</tr>

<tr>
<td align="left"><label>Mother's Occupation : </label></td>
<td>
<div class="form-group"><input type="text" id="mjob" name="mjob"  class="form-control">
</div>
</td>
</tr>


<tr>
<td align="left"><label>Mother's Aadhar Number : </label></td>
<td>
<div class="form-group"><input type="text" id="m_aadhar" name="m_aadhar" class="form-control">
</div>
</td>
</tr>


<tr>
<td align="left"><label>Mother's Mobile Number : </label></td>
<td>
<div class="form-group"><input type="text" id="mphone" name="mphone" class="form-control">
</div>
</td>
</tr>


<tr>
<td align="left"><label>Email Id : </label></td>
<td>
<div class="form-group"><input type="email" name="email" class="form-control">
</div>
</td>
</tr>

<tr>
<td align="left"><label>Previous School : </label></td>
<td>
<div class="form-group"><input type="text" id="prev_school" class="form-control" name="prev_school">
</div>
</td>
</tr>

<tr>
    <td>
<button type="submit" name="submit" class="default-btn btn active" align="center">Apply for Admission</button>
</td>
</tr>
</table>


</form>
        </div>
    </div>
</div>

</div>

    <?php
    include'footer.php';
        ?>
        
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        
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
        
        <!-- <script src="assets/js/custom.js"></script> -->
</body>
</html>