<?php
include_once "DataBase.php";
class AjaxUser
{
    private static $con;

    public static function connect()
    {
        self::$con = DataBase::connect();
        mysqli_set_charset(self::$con, "utf8");
    }

    public static function Insertcomment($fullname, $email, $comment)
    {
        self::connect();
        try {
            mysqli_query(self::$con, "insert into ajax (fullname,email,comment) values ('$fullname', '$email', '$comment')");
            return 1;
        } catch (exception $e) {
            return 0;
        }
    }

    public static function Select_comment()
    {
        self::connect();
        $query = mysqli_query(self::$con, "SELECT * FROM ajax");
        return $query;
    }
    public static function select_Comment_by_id($id) {
        self::connect();
        $query=mysqli_query(self::$con,"select * from ajax where id=$id");
        $item=mysqli_fetch_assoc($query);
        return $item;
    }
    public static function DeleteComment($id) {
        self::connect();
        mysqli_query(self::$con,"DELETE FROM ajax WHERE id=$id");
    }
}