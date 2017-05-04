<?php
/*
  created 20/4/2017
  updates:
*/

  class Tanyajawab extends CI_Controller{
    public function __construct(){
      parent::__construct();

    }
    public function index(){
      include ('cek.php');
      $data['page']='Tanya Jawab';

      $this->load->view('core/core',$data);
      $this->load->view('vtanyajawab');
    }
  }
 ?>
