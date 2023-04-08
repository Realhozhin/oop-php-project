<?php
include_once "DataBase.php";
include_once "ImageSlider.php";
class CssCms extends ImageSlider
{
    private static $con;
    public static function conent() {
        self::$con=DataBase::connect();
        mysqli_set_charset(self::$con,"utf8");
    }
    public static function InsertCss($font,$image,$color,$height) {
        self::conent();
        $path="../images/interview/";
        $image_name=self::Image_Slider($image,$path);
        mysqli_query(self::$con,"INSERT INTO css (font,image,color,height) VALUES ('$font', '$image_name', '$color', '$height')");
    }
    public static function SelectCss() {
        self::conent();
        $query=mysqli_query(self::$con,"SELECT * FROM css order by id desc limit 1 offset 0");
        return $query;
    }
}