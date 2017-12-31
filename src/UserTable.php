<?php
namespace travelMateProject;
require_once __DIR__ . 'User.php';
require_once __DIR__ . 'TableAbstract.php';

class UserTable extends TableAbstract {
  protected $name = 'myusername_address';
  protected $primaryKey = 'id';
}
