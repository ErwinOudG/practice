<?php
private db_host = ‘loclhost’;
private db_user = ‘root’;
private db_pass = ‘root’;
private db_name = ‘blogdb’;

public function connect() {
  if(!$this->con) {
    $myconn = @mysql_connect($this->db_host,$this->db_user,$this->db_pass);
    if($myconn) {
      $seldb = @mysql_select_db($this->db_name,$myconn);
      if($seldb) {
        $this->con = true;
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
  } else {
    return true;
  }
}
public function disconnect()
  {
    if($this->con) {
      if(@mysql_close()) {
        $this->con = false;
        return true;
      } else {
        return false;
      }
    }
  }
?>
