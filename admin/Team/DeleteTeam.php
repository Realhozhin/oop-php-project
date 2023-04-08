<?php
include_once "../DataBase && class/TeamCms.php";
$id = $_POST['id'];
$item=TeamCms::select_Team_by_id($id);
$image=$item['image'];
unlink('../images/Team/'.$image);
TeamCms::DeleteTeam($id);
header("Location: detailsTeam.php");