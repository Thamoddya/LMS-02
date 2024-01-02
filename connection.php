<?php
class Database{
    private static $connection;
    private static function setUpConnection(){
        if(!isset(self::$connection)){
            self::$connection = new mysqli("localhost","root","1234","students-lms","3306");
        }
    }
    public static function iud($q){
        self::setUpConnection();
        self::$connection->query($q);
    }
    public static function search($q){
        self::setUpConnection();
        $resultset = self::$connection->query($q);
        return $resultset;
    }
}
?>