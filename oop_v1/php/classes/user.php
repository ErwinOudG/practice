<?php
include_once("../dbconn.php");
include_once("../console.php");

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


  // public function connect()   {   }
  // public function disconnect()    {   }

  public function select()        {   }

  public function insert()        {   }

  public function delete()        {   }

  public function update()    {   }

  function jsonSerialize(){
    return [
      "userid" => $this->$userid,
      "name" => $this->$name,
      "role" => $this->$role,
      "birthday" => $this->$birthday,
      "lastblog" => $this->$lastblog,
      "firstblog" => $this->$firstblog,
      "accountdate" => $this->$accountdate,
      "description" => $this->$description,
      "active" => $this->$active,
      "password" => $this->$password
    ];
}

}

?>
