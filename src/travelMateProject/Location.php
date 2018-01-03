<?php
namespace travelMateProject;
class Location {
    protected $Location_id, $Name, $Description;
    public function __construct($dbrow) {
        $this->Location_id = $dbrow['Location_id'];
        $this->Name = $dbrow['Name'];
        $this->Description = $dbrow['Description'];
    }
    //accessors
    public function getLocationId() { return $this->Location_id;}
    public function getName() { return $this->Name;}
    public function getDescription() { return $this->Description;}
}
