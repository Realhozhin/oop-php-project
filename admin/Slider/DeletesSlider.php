<?php
include_once "../DataBase && class/Slider.php";
$id = $_POST['id'];
$item=Slider::select_slider_by_id($id);
$image=$item['image'];
unlink('../images/Slider/'.$image);
Slider::DeleteSlider($id);
header("Location: details_slider.php");