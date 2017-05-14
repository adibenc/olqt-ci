<?php
/*
  created n/a
  updates:
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    //$this->load->model('');
    $this->load->model('mmasuk');
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

  public function filter($data){
    $data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
    return $data;
    unset($data);
  }

  public function cekmasuk()
  {
    $username = $this->input->post('username');
		$username = $this->filter($username);

		$password = $this->input->post('password');
		$password = $this->filter($password);

    $cek = $this->mmasuk->dbcek_login($username, $password)->row();
    $jumlah = count($cek);
    //echo $jumlah;
    if($jumlah > 0) {
      $arrsession = array(
        'username'=> $cek->username,
        'password'=> $cek->password,
        'sukses_login' => true
      );
      $this->session->set_userdata($arrsession);
      redirect(base_url('beranda'));
    }else{
      redirect(base_url('masuk'));
    }

    unset($username, $password, $cek, $jumlah, $array_session, $data);
  }

  function keluar(){
    // if($this->session->userdata('user')){
    //   redirect('beranda');
    // }else{
      unset($_SESSION['username']);
      unset($_SESSION['password']);
      redirect('beranda');
    // }
  }

}
?>
