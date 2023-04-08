<?php
include_once "../DataBase && class/Like_team.php";
$id=$_POST['id'];
$ip=$_SERVER['REMOTE_ADDR'];
$query=Like_team::SelectLike($id,$ip);
$flag=false;
$item=[];
while ($item=mysqli_fetch_assoc($query)) {
    $flag=true;
}
if($flag==true) {
    echo 2;
} else {
    try{
        Like_team::InsertLike($id,$ip);
        echo 1;
    }catch(Exception $e){
        echo 0;
    }
}