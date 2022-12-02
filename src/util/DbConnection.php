<?php

 class DbConnection {

     private static $username = "root";
     private static $password = "";
     private static $databaseName = "contactdatabase";
     private static $url = "mysql:host=localhost;dbname=" ;
 
    public static function connect() {

        try {
            return  new PDO( self::$url . self::$databaseName, self::$username, self::$password);
        }
        catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
 }