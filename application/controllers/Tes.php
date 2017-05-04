<?php
/*
  created 20/4/2017
  updates:
*/
  class Tes extends CI_Controller{
    public function __construct(){
      parent::__construct();
    }
    public function index(){
      include ('cek.php'); //cek apakah sudah login
      $data['page']='Ketentuan Tes';

      $this->load->view('core/core',$data);
      $this->load->view('vtes');
      $this->load->view('core/footer');
    }

    public function mulai(){
      include ('cek.php'); //cek apakah sudah login
      $data['page']='Tes';

      $this->load->view('core/core',$data);
      $this->load->view('vtes');
      $this->load->view('core/footer');
    }
  }
 ?>
