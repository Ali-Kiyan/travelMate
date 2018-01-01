<?php
namespace travelMateProject;
class User {
  protected $User_id, $username, $First_Name, $Last_Name, $password;
  public function __construct($dbrow) {
    $this->User_id = $dbrow['User_id'];
    $this->username = $dbrow['username'];
    $this->First_Name = $dbrow['First_Name'];
    $this->Last_Name = $dbrow['Last_Name'];
    $this->password = $dbrow['password'];
}
    public function insert($username, $First_Name, $Last_Name, $password)
    {
      $this->username = $username;
      $this->First_Name = $First_Name;
      $this->Last_Name = $Last_Name;
      $this->password = $password;
    }
  //accessors
  public function getUserId() { return $this->User_id;}
  public function getUsername() { return $this->username;}
  public function getFirstName() { return $this->First_Name;}
  public function getLastName() { return $this->Last_Name;}
  public function getPassword() { return $this->password;}
}
