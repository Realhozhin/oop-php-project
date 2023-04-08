<?php
session_start();
include_once "DataBase && class/loginAdmin.php";
$username=$_POST['username'];
$password=$_POST['password'];
$hash=sha1($password);
$salt=$hash."0905";
$final=sha1($salt);
$flag=0;
$query=loginAdmin::selectUser();
$item=[];
while($item=mysqli_fetch_assoc($query)) {
    if($item['username']==$username && $item['password']==$final) {
        $flag=1;
        $_SESSION['admin']=$username;
        $_SESSION['id']=$item['id'];
        header("Location: admin.php");
    }
}
if($flag==0) {
    $_SESSION['wrong']="username or password incorrect";
    header("Location: login.php");
}