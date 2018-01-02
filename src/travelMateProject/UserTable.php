<?php

namespace travelMateProject;
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/TableAbstract.php';


class UserTable extends TableAbstract {
  protected $name = 'User';
  protected $primaryKey = 'User_id';

  public function fetchAllUsers() {
    $results = $this->fetchAll();
//    var_dump($results);
    $userArray = array();
    while($row = $results->fetch()) {
      $userArray[] = new User($row);
    }
    return $userArray;
  }









    //INSERT
    public function insertUser($data){
        // Converting Null value of php to null value of mysql
        $data["First_Name"] == null ? $data["First_Name"] = NULL : $data["First_Name"];
        $data["Last_Name"] == null ? $data["First_Name"] = NULL : $data["First_Name"];
        $data["Username"] == null ? $data["First_Name"] = NULL : $data["First_Name"];
        $data["Password"] == null ? $data["First_Name"] = NULL : $data["First_Name"];

        $sql = "INSERT INTO $this->name (First_Name, Last_Name,Username, Password) VALUES (:First_Name, :Last_Name, :Username, :Password)";
        $results = $this->dbh->prepare($sql);
        $response  = $results->execute(array(
            ':First_Name' => $data["First_Name"],
            ':Last_Name' => $data['Last_Name'],
            ':Username' => $data['Username'],
            ':Password' => $data['Password']
        ));
        return $response;
    }




}
