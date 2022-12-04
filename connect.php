<?php

$con = new mysqli('localhost','geethika','geethika@123','geethika_school');
// $con = new mysqli('localhost','root','','central');

if(!$con)
{
    die(mysqli_error());
}

?>