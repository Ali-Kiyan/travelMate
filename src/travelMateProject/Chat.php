<?php
namespace travelMateProject;
class Chat {
    protected $Chat_id, $User_id, $Body, $Created_at;
    public function __construct($dbrow) {
        $this->Chat_id = $dbrow['Chat_id'];
        $this->User_id = $dbrow['User_id'];
        $this->Body = $dbrow['Body'];
        $this->Created_at = $dbrow['Created_at'];
        $this->Username = $dbrow['Username'];
    }
    //accessors
    public function getChatId() { return $this->Chat_id;}
    public function getUserId() { return $this->User_id;}
    public function getBody() { return $this->Body;}
    public function getCreatedAt() { return $this->Created_at;}
    public function getUsername() { return $this->Username;}
}
