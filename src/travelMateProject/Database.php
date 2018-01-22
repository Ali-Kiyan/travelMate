<?php
namespace travelMateProject;
//Singleton Design
class Database {
  protected static $instance = null;
  protected $dbh;

  public static function getInstance() {
    $username = 'b54eec5c07941d';
    $password = '6e0febf9';
    $host = 'us-cdbr-iron-east-05.cleardb.net';
    $dbname = 'heroku_c3c73580b7e36ae';
    /*
    * checking if the db object already exists
    * if not, new $instance gets created
    */
    if (self::$instance === null) {
      self::$instance = new self($username, $password, $host, $dbname);
    }
    return self::$instance;
  }
  private function __construct($username, $password, $host, $database) {
    // database handler with connection info
    $this->dbh = new \PDO("mysql:host=$host;dbname=$database", $username, $password);
  }
  public function getDbh() {
    // returns the database handler to be used elsewhere
    return $this->dbh;
  }
  public function __destruct() {
    // destroys the database handler when it is no longer need
    $this->dbh = null;
  }
}
