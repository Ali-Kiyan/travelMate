<?php
namespace travelMateProject;
require_once __DIR__ . 'User.php';
require_once __DIR__ . 'TableAbstract.php';

class UserTable extends TableAbstract {
  protected $name = 'myusername_address';
  protected $primaryKey = 'id';
  public function fetchALlUsers() {
    $results = $this->fetchAll();
    $userArray = array();
    while($row = $results->fetch()) {
      $userArray[] = new User($row);
    }
    return $userArray;
  }
}
