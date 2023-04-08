<?php
include_once "../DataBase && class/SeoWebSite.php";
$title=$_POST['title'];
$author=$_POST['author'];
$keywords=$_POST['keywords'];
$description=$_POST['description'];
$id=$_POST['id'];
SeoWebSite::UpdateSeo($id,$title,$author,$keywords,$description);
header("Location: details_Seo.php");