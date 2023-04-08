<?php
include_once "DataBase.php";
include_once "ImageSlider.php";
class Slider extends ImageSlider
{
    private static $con;
    public static function connect() {
        self::$con=DataBase::connect();
        mysqli_set_charset(self::$con,"utf8");
    }
    public static function Insert_Slider($image_name,$title,$description,$link) {
        self::connect();
        //$path="../images/Slider/".time()."";
        //$image_name=self::Image_Slider($image,$path);
        mysqli_query(self::$con,"INSERT INTO Slider (image,title,description,link) values ('$image_name', '$title', '$description', '$link')");
    }
    public static function SelectSlider() {
        self::connect();
        $query=mysqli_query(self::$con,"SELECT * FROM Slider order by id desc limit 3 offset 0");
        return $query;
    }
    public static function Select_Slider() {
        self::connect();
        $query=mysqli_query(self::$con,"SELECT * FROM Slider");
        return $query;
    }
    public static function DeleteSlider($id) {
        self::connect();
        mysqli_query(self::$con,"DELETE FROM Slider WHERE id=$id");
    }
    public static function select_slider_by_id($id) {
        self::connect();
        $query=mysqli_query(self::$con,"select * from slider where id=$id");
        $item=mysqli_fetch_assoc($query);
        return $item;
    }
    public static function selectSlider_id($id) {
        self::Connect();
        $query=mysqli_query(self::$con,"select * from Slider where id=$id");
        return $query;
    }
    public static function upload_file_slider($image) {
        $image_name=time().$image['name'];
        $directory="../images/slider/".$image_name;
        move_uploaded_file($image['tmp_name'],$directory);
        return $image_name;
    }
    public static function Update($id,$image,$title,$description,$link){
        $path="../images/Slider/";
        $image_name=self::Image_Slider($image,$path);
        if($image_name==null) {
            $query=self::selectSlider_id($id);
            $item=[];
            $item=mysqli_fetch_assoc($query);
            $image_name=$item['image'];
        }
        self::Connect();
        mysqli_query(self::$con,"update Slider set image='$image_name', title='$title', description='$description', link='$link' where id=$id");
    }

}