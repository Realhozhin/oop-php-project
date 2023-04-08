<?php
include_once "../DataBase && class/AjaxUser.php";
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$check=AjaxUser::Insertcomment($fullname,$email,$comment);
header("Location: ../../index.php");
