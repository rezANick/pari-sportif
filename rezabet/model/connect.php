<?php
/**
 * Created by PhpStorm.
 * User: Reza Opias
 * Date: 23/02/2019
 * Time: 13:04
 */

class Database{
    private static $dbHost="localhost";
    private static $dbName="bet";
    private static $dbUser="root";
    private static $db_Password="";

    private static $connection=null;

    public static function connect(){
        try{
            self::$connection=new PDO("mysql:host=".self::$dbHost.";dbname=".self::$dbName,self::$dbUser,self::$db_Password);
        }catch (PDOException $e){
            die($e->getMessage());
        }
        return self::$connection;
    }
    public static function disconnect(){
        self::$connection=null;
    }
}