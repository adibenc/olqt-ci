<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmasuk extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function dbcek_login($username ,$password)
  {
    $query = $this->db->query("SELECT * FROM user where username = ? AND password = md5(?)",
      array($username, $password)
    );
    return $query;
    $query = null;
    unset($username ,$password);
  }
}
 ?>
