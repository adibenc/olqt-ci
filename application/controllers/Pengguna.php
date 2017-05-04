<?php
  class Pengguna extends CI_Controller{
    public function __construct(){
      parent::__construct();
      //$this->load->model('');
    }
    public function index(){
      // if($this->session->userdata('user')){
      //   redirect('beranda');
      // }else{
      include ('cek.php'); //cek apakah sudah login
      $data['page']='Pengguna';
      $this->load->view('core/core',$data);
      // $this->load->view('core/navbar');
      $this->load->view('vpengguna');
      $this->load->view('core/footer');
      // }
    }
  }
 ?>
