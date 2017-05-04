<?php
/*
  created n/a
  updates:
*/
  class Daftar extends CI_Controller {
    public function index(){
      $data['page']='Daftar';

      $this->load->view('core/core',$data);
      $this->load->view('vdaftar');
      $this->load->view('core/footer');
    }
    public function userdaftar(){
      include ('cek.php'); //cek apakah sudah login
    }
  }
?>
