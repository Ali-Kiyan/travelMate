<?php

namespace travelMateProject;
session_start();
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

    //AUTH
    public function auth($Username, $Password)
    {
        $results = $this->fetchAll();
        while($row = $results->fetch())
        {

            if($row["Username"] == $Username && $row["Password"] == $Password)
            {
                $_SESSION["User_id"] = $row["User_id"];
                $_SESSION["First_Name"] = $row["First_Name"];
                $result = 1;
            }
            else
            {
                $result = 0 ;
            }
        }
        return $result;
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


    //EDIT

    public function editUser($data)
    {
        $sql = "UPDATE  $this->name SET  First_Name = :First_Name, Last_Name = :Last_Name, Username = :Username, Password = :Password
        WHERE User_id= :User_id";
        $result = $this->dbh->prepare($sql);
        $params = array(
            ':User_id' => $_SESSION['User_id'],
            ':First_Name' => $data['First_Name'],
            ':Last_Name' => $data['Last_Name'],
            ':Username' => $data['Username'],
            ':Password' => $data['Password']
        );
        $response = $result->execute($params);
        return $response;

    }


}
