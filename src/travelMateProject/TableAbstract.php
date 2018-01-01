<?php
// this file provide general methods that can be used to access data from any database table
namespace travelMateProject;
require_once __DIR__ . '/Database.php';

abstract class TableAbstract
{
    protected $name;
    protected $primaryKey = 'id', $dbh, $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
        $this->dbh = $this->db->getDbh();
    }

    public function fetchAll()
    {
        $sql = 'SELECT * FROM ' . $this->name;
        $results = $this->dbh->prepare($sql);
        $results->execute();
        return $results;

    }
    public function fetchByPrimaryKey($key){
        $sql= 'SELECT * FROM ' . $this->name . ' WHERE ' . $this->primaryKey . ' = :id LIMIT 1';
        $params = array(':id' => $key);
        $results = $this->dbh->prepare($sql);
        $results->execute($params);
        return $results->fetch();
    }
    //INSERT
    public function insertUser($data){
        $sql = "INSERT INTO $this->name (First_Name, Last_Name,Username, Password) VALUES (:First_Name, :Last_Name, :Username, :Password)";
        $results = $this->dbh->prepare($sql);
        $x  = $results->execute(array(
            ':First_Name' => $data['First_Name'],
            ':Last_Name' => $data['Last_Name'],
            ':Username' => $data['Username'],
            ':Password' => $data['Password']
        ));
        return $x;
    }


}
