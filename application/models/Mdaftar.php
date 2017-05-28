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

  function daftaruser($data){
    $q = "insert into user (username,password,namalengkap,email) values (?,md5(?),?,?)";
    $query = $this->db->query($q, array($data['username'],$data['password'],$data['namalengkap'],$data['email']));

    return $query;
    // menghapus variabel dari memory
		unset($data);
  }
  function cekuser($data){
    $q = "select username from user where username=?";
    $query = $this->db->query($q, array($data['username']));

    return $query;
    // menghapus variabel dari memory
		unset($data);
  }
}

?>
