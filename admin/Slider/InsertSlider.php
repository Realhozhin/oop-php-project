<?php
include_once "../DataBase && class/Slider.php";
$image=$_FILES['image'];
$title=$_POST['title'];
$description=$_POST['description'];
$link=$_POST['link'];
$image_name=time().$image['name'];
$directory="../images/slider/".$image_name;
move_uploaded_file($image['tmp_name'],$directory);
Slider::Insert_Slider($image_name,$title,$description,$link);
header("Location: Slider.php");