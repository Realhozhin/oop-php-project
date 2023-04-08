<?php
include_once "DataBase.php";
class Like_team
{
    private static $con;
    public static function connect() {
        self::$con=DataBase::connect();
        mysqli_set_charset(self::$con,"utf8");
    }
    public static function SelectLike($idBlog,$ip) {
        self::connect();
        $query=mysqli_query(self::$con,"SELECT * from like where ip='$ip' and idBlog='$idBlog'");
        return $query;
    }
    public static function InsertLike($idBlog,$ip) {
        self::connect();
        mysqli_query(self::$con,"INSERT INTO like (idBlog,ip) VALUES ('$idBlog','$ip')");
    }
}