<?php
include_once "DataBase.php";
class loginAdmin
{
    private static $con;
    public static function DataBaseConnect() {
        self::$con=DataBase::connect();
        mysqli_set_charset(self::$con,"utf8");
    }
    public static function selectUser() {
        self::DataBaseConnect();
        $query=mysqli_query(self::$con,"select * from login");
        return $query;
    }
    public static function InsertUser($username,$password) {
        self::DataBaseConnect();
        mysqli_query(self::$con,"insert into login (username,password) values ('$username','$password')");
    }
    public static function SelectUser_id($id) {
        self::DataBaseConnect();
        $query=mysqli_query(self::$con,"select * from login where id='$id'");
        return $query;
    }
    public static function UpdateAdmin($id,$username,$password) {
        self::DataBaseConnect();
        mysqli_query(self::$con,"update login set username='$username',password='$password' where id='$id'");
    }
}