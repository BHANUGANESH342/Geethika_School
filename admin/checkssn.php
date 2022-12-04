<?php session_start(); 
include 'connect.php';
if ($_SESSION['user'] != 'admin') {
   header('location:index.php');
}

?>