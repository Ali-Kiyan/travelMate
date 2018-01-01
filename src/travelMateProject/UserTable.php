<?php

namespace travelMateProject;
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/TableAbstract.php';


class UserTable extends TableAbstract {
  protected $name = 'User';
  protected $primaryKey = 'User_id';
  public function fetchAllUsers() {
    $results = $this->fetchAll();
    var_dump($results);
    $userArray = array();
    while($row = $results->fetch()) {
      $userArray[] = new User($row);
    }
    return $userArray;
  }
  public function insertUser($data){
      $sql = "INSERT INTO $this->name (username, First_Name, Last_Name, password) VALUES (:username, :First_Name, :Last_Name, :password)";
      $result = $this->dbh->prepare($sql);
      $result->execute(array(
         ':username' => $data['username'],
          ':First_Name' => $data['First_Name'],
          'Last_Name' => $data['Last_Name'],
          'Password' => $data['password']
      ));
      return $this->dbh->lastInsertedId();
  }
}

