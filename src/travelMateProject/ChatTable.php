<?php

namespace travelMateProject;
session_start();
require_once __DIR__ . '/Chat.php';
require_once __DIR__ . '/TableAbstract.php';


class chatTable extends TableAbstract {
    protected $name = 'Chat';
    protected $primaryKey = 'Chat_id';

    public function fetchAllChats() {
        $results = $this->fetchAll();
//    var_dump($results);
        $ChatArray = array();
        while($row = $results->fetch()) {
            $ChatArray[] = new Chat($row);
        }
        return $ChatArray;
    }

    public function getdbh()
    {
        return $this->dbh;
    }


    //INSERT
    public function insertLocation($data){
        // Converting Null value of php to null value of mysql
        $data["Name"] == null ? $data["Name"] = NULL : $data["Name"];
        $data["Description"] == null ? $data["Description"] = NULL : $data["Description"];
        $sql = "INSERT INTO $this->name (User_id, Name, Description) VALUES (:User_id, :Name, :Description)";
        $results = $this->dbh->prepare($sql);
        $response  = $results->execute(array(
            ':User_id' => $_SESSION["User_id"],
            ':Name' => $data['Name'],
            ':Description' => $data['Description']
        ));
        return $response;
    }


    //EDIT

    public function editLocation($data)
    {

        // Converting Null value of php to null value of mysql
        $data["Name"] == null ? $data["Name"] = NULL : $data["Name"];
        $data["Description"] == null ? $data["Description"] = NULL : $data["Description"];
        if($data["Name"] != NULL && $data["Description"] != NULL )
        {
            $sql = "UPDATE  $this->name SET  Location_id = :Location_id, User_id = :User_id, Name = :Name, Description = :Description
        WHERE User_id= :User_id AND Location_id= :Location_id";
            $result = $this->dbh->prepare($sql);
            $params = array(
                ':Location_id' => $data['Location_id'],
                ':User_id' => $_SESSION['User_id'],
                ':Name' => $data['Name'],
                ':Description' => $data['Description']
            );
            $response = $result->execute($params);
            return $response;
        }
        else
        {
            return 0;
        }

    }

    //DELETE location


    public function delete($key)
    {

        $sql = 'DELETE FROM ' . $this->name . ' WHERE ' . $this->primaryKey . ' = :id LIMIT 1';
        $params = array(':id' => $key);
        $results = $this->dbh->prepare($sql);
        $response = $results->execute($params);
        return $response;
    }


}
