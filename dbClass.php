<?php
  class Database {
    // database credentials
    public static $host = "localhost";
    public static $dbName ="travelMate";
    public static $username = "root";
    public static $password ="root";
    // connecting to database and accessing to the error with error variable
       private static function conncet () {
          try{
           $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$username, self::$password);
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           return $pdo;
          }
          // firing error in PDO
          catch(PDOException $error){
            echo $error->getMessage();
          }

       }
       //  for 'select' query fetchall method is used and for other query prepare method is used
       public static function query($query, $params = array()) {
             $statement = self::conncet()->prepare($query);
             $statement->execute($params);
             if (explode(' ', $query)[0] == 'SELECT'){
               $data = $statement->fetchAll();
               return $data;
             }
       }

  }


?>
