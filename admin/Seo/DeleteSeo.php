<?php
include_once "../DataBase && class/SeoWebSite.php";
$id = $_POST['id'];
SeoWebSite::DeleteSeo($id);
header("Location: details_Seo.php");