<?php
include_once "../DataBase && class/CssCms.php";
$font=$_POST['font'];
$image=$_FILES['image'];
$color=$_POST['color'];
$height=$_POST['height'];
CssCms::InsertCss($font,$image,$color,$height);
header("location: formCss.php");