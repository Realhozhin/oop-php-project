<?php
include_once "../DataBase && class/TeamCms.php";
$image=$_FILES['image'];
$title=$_POST['title'];
$summary=$_POST['summary'];
$content=$_POST['content'];
$image_name=time().$image['name'];
$directory="../images/Team/".$image_name;
move_uploaded_file($image['tmp_name'],$directory);
TeamCms::InsertTeam($title,$image_name,$summary,$content);
header("Location: Team.php");

