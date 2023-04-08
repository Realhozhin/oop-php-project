<?php
include_once "../DataBase && class/TeamCms.php";
$title=$_POST['title'];
$image=$_FILES['image'];
$summary=$_POST['summary'];
$content=$_POST['content'];
$id=$_POST['id'];
TeamCms::Update($id,$title,$image,$summary,$content);
header("Location: detailsTeam.php");
