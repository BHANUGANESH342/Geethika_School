
<?php
include 'connect.php';
$id=$_GET['id'];

if(isset($_POST['review']))
{
    $q="update contact set status='1' where s_no=$id";
    $result=mysqli_query($con,$q);
    if($result)
    {
        echo "<script>alert('Message Readed succesfully')</script>";
        echo "<script>window.location.href='messages.php'</script>";
    }
    else
    {
        echo "<script>alert('Student Admitted Failed')</script>";
        echo "<script>window.location.href='messages.php'</script>";

    }
}


?>