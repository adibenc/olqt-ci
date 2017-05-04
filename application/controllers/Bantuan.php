<?php
/*
  created 20/4/2017
  updates:
*/
  class Bantuan extends CI_Controller{
    public function __construct(){
      parent::__construct();
    }
    public function index(){
      include ('cek.php');
      $data['page']='Bantuan';

      $this->load->view('core/core',$data);
      $this->load->view('vbantuan');
      $this->load->view('core/footer');
    }
  }
 ?>
