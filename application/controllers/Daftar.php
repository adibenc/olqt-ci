<?php
  class Daftar extends CI_Controller
  {

    public function __construct(){
      parent::__construct();
      $this->load->model('mdaftar');
    }

    public function index()
    {
      $data['page']='Daftar';
      $this->load->view('core/core',$data);
      $this->load->view('vdaftar');
      $this->load->view('core/footer');
      $data=array('data' => $data);
    }

    public function userdaftar(){
      $data = array(
       'username' => $this->input->post('username'),
       'password' => $this->input->post('password')
       );
       $this->mdaftar->daftaruser( $data);
       redirect();
       unset($data);
    }
  }
?>
