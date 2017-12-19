<?php
include_once("../dbconn.php");

class NAW implements JsonSerializable{
  var $userid;
  var $name;
  var $role;
  var $birthday;
  var $lastblog;
  var $firstblog;
  var $accountdate;
  var $description;
  var $active;
  var $password;
  

    public function connect()   {   }
    public function disconnect()    {   }
    public function select()        {   }
    public function insert()        {   }
    public function delete()        {   }
    public function update()    {   }
}

?>
