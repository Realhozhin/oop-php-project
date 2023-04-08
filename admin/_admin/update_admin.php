<?php
include_once "../DataBase && class/loginAdmin.php";
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$hash=sha1($password);
$salt=$hash."0905";
$final=sha1($salt);
loginAdmin::UpdateAdmin($id,$username,$final);
header("Location: adminstrator.php");