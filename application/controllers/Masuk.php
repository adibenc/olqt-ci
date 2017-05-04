<?php
/*
  created n/a
  updates:
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
  public function __construct(){
    parent::__construct();
    //$this->load->model('');
  }
  public function index(){
    // if($this->session->userdata('user')){
    //   redirect('beranda');
    // }else{
    //include ('cek.php'); //cek apakah sudah login
    $data['page']='Masuk';
    $this->load->view('core/core',$data);
    // $this->load->view('core/navbar');
    $this->load->view('vmasuk');
    $this->load->view('core/footer');
    // }
  }

  public function cek(){
    $user = $this->input->post('user');
    $pass = $this->input->post('passwd');
    $usr = 'adib';
    $pss = 'glekgleki';

    $arrsession = array('user'=>$user,'pass'=>$pass);
    if($user==$usr&&$pass==$pss){
      $this->session->set_userdata($arrsession);
      // $_SESSION['user']=$user;
      // $_SESSION['pass']=$pass;
      redirect('beranda');
      //$this->session->user=$user;
    }else{
      redirect('masuk');
    }
  }
  public function keluar(){
    // if($this->session->userdata('user')){
    //   redirect('beranda');
    // }else{
      unset($_SESSION['user']);
      unset($_SESSION['pass']);
      redirect('beranda');
    // }
  }

}
?>
