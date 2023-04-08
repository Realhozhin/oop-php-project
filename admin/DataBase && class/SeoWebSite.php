<?php
include_once "DataBase.php";
class SeoWebSite
{
    public static $con;
    public static function Connect(){
        self::$con=DataBase::connect();
        mysqli_set_charset(self::$con,"utf8");
    }
    public static function SelectSeo(){
        self::Connect();
        $query=mysqli_query(self::$con,"SELECT * FROM Seo order by id desc limit 1 offset 0");
        return $query;
    }
    public static function InsertSeo($title,$author,$keywords,$description){
        self::Connect();
        mysqli_query(self::$con,"INSERT INTO Seo(title,author,keywords,description) VALUES ('$title','$author','$keywords','$description')");
    }
    public static function Select_Seo() {
        self::Connect();
        $query=mysqli_query(self::$con,"SELECT * FROM Seo");
        return $query;
    }
    public static function DeleteSeo($id) {
        self::Connect();
        mysqli_query(self::$con,"delete from Seo where id=$id");
    }
    public static function selectSeo_id($id) {
        self::Connect();
        $query=mysqli_query(self::$con,"select * from Seo where id=$id");
        return $query;
    }
    public static function UpdateSeo($id,$title,$author,$keywords,$description) {
        self::Connect();
        mysqli_query(self::$con,"update Seo set title='$title', author='$author',keywords='$keywords',description='$description' where id=$id");
    }
}