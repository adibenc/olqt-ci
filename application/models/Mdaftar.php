<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Mdaftar extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  // function daftaruser($table, $data)
  // {
  //   $res=$this->db->insert($table, $data);
  //   return $res;
  // }

  function daftaruser($data)
  {
    $this->db->query("insert into user (username, password) values (?,md5(?))", array($data['username'],$data['password']));


		// menghapus variabel dari memory
		unset($data);
  }
}

?>
