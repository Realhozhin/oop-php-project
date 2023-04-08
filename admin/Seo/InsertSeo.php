<?php
include_once "../DataBase && class/SeoWebSite.php";
$title=$_POST['title'];
$author=$_POST['author'];
$keywords=$_POST['keywords'];
$description=$_POST['description'];
SeoWebSite::InsertSeo($title,$author,$keywords,$description);
header("Location: ../admin.php");