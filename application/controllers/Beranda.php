<?php

/*
  created n/a
  updates:
*/
  class Beranda extends CI_Controller{

    public function __construct(){
      parent::__construct();
    }

    public function login(){
      $this->load->view('logged-in');
    }
    public function logout(){
      $this->load->view('logged-out');
    }

    public function index(){
      $data['page']='Beranda';

      $this->load->view('core/core',$data);
      $this->load->view('vberanda',$data);
      $this->load->view('core/footer');
      // if($logg>1){
      //   $this->login();
      // }else{
      //   $this->logout();
      // }
    }

  }
?>
