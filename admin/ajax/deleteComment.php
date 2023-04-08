<?php
include_once "../DataBase && class/AjaxUser.php";
$id = $_POST['id'];
$item=AjaxUser::select_Comment_by_id($id);
AjaxUser::DeleteComment($id);
header("Location: detailsComment.php");
