<?php
include_once "../DataBase && class/Slider.php";
$image=$_FILES['image'];
$title=$_POST['title'];
$description=$_POST['description'];
$link=$_POST['link'];
$id=$_POST['id'];
Slider::Update($id,$image,$title,$description,$link);
header("Location: details_slider.php");
