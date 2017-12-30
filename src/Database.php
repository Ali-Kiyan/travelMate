<?php
namespace travelMateProject;
//Singleton Design
class Database {
  protected static $instance = null;
  protected $dbh;
  public static function getInstance() {
    $username = 'sap146';
    $password = 'DBWS_2017';
    $host = 'helios.csesalford.com';
    $dbname = 'sap146_travelmatedb';
    if (self::instance === null) {
      self::$instance = new self($username, $password, $host, $dbname);
    }
    return self::$instance;
  }
}
