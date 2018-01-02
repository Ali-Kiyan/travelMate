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
    public function fetchUser($key){
        $sql= 'SELECT * FROM ' . $this->name . ' WHERE ' . $this->primaryKey . ' = :id LIMIT 1';
        $params = array(':id' => $key);
        $results = $this->dbh->prepare($sql);
        $results->execute($params);
        return $results->fetch();
    }
    //AUTH
    public function auth($Username, $Password)
    {
        $results = $this->fetchAll();
        $userList = array();
        while($row = $results->fetch())
        {

            if($row["Username"] == $Username && $row["Password"] == $Password)
            {
                $result = 1;
            }
            else
            {
                $result = 0 ;
            }
        }
        return $result;
    }


}
