<?php
include_once "DataBase.php";
include_once "ImageSlider.php";
class TeamCms extends ImageSlider
{
    private static $con;
    private static function Connect() {
        self::$con=DataBase::connect();
        mysqli_set_charset(self::$con,"utf8");
    }
    public static function InsertTeam($title,$image_name,$summary,$content) {
        self::Connect();
        mysqli_query(self::$con,"INSERT INTO team (title,image,summary,content) VALUES('$title','$image_name','$summary','$content')");
    }
    public static function SelectTeam() {
        self::Connect();
        $query=mysqli_query(self::$con,"SELECT * FROM team");
        return $query;
    }
    public static function Select_Team() {
        self::connect();
        $query=mysqli_query(self::$con,"SELECT * FROM team");
        return $query;
    }
    public static function select_Team_by_id($id) {
        self::connect();
        $query=mysqli_query(self::$con,"select * from team where id=$id");
        $item=mysqli_fetch_assoc($query);
        return $item;
    }
    public static function DeleteTeam($id) {
        self::connect();
        mysqli_query(self::$con,"DELETE FROM team WHERE id=$id");
    }
    public static function selectTeam_id($id) {
        self::Connect();
        $query=mysqli_query(self::$con,"select * from team where id=$id");
        return $query;
    }
    public static function Update($id,$title,$image,$summary,$content){
        $path="../images/Team/";
        $image_name=self::Image_Slider($image,$path);
        if($image_name==null) {
            $query=self::selectTeam_id($id);
            $item=[];
            $item=mysqli_fetch_assoc($query);
            $image_name=$item['image'];
        }
        self::Connect();
        mysqli_query(self::$con,"update team set  title='$title', image='$image_name', summary='$summary', content='$content' where id=$id");
    }
}