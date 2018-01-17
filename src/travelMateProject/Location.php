<?php
namespace travelMateProject;
class Location {
    protected $Location_id, $Name, $Description;
    public function __construct($dbrow) {
        $this->Location_id = $dbrow['Location_id'];
        $this->User_id = $dbrow['User_id'];
        $this->Name = $dbrow['Name'];
        $this->Description = $dbrow['Description'];
        $this->getdate = $dbrow['Created_at'];
    }
    //accessors
    public function getLocationId() { return $this->Location_id;}
    public function getUserId() { return $this->User_id;}
    public function getName() { return $this->Name;}
    public function getDescription() { return $this->Description;}
    public function getdate() { return $this->getdate;}
}
