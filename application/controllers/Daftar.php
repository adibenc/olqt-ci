<?php
  class Daftar extends CI_Controller
  {

    public function __construct(){
      parent::__construct();
      $this->load->model('mdaftar');
    }

    public function index($vdata = null){
      $data['page']='Daftar';
      // $data['konfirmasi'];
      if($this->session->flashdata('vdata')){
        $data['konfirmasi']=$this->session->flashdata('vdata')['konfirmasi'];
      }
      $this->load->view('core/core',$data);
      $this->load->view('vdaftar',$data);
      $this->load->view('core/footer');
      // $data=array('data' => $data);
    }

    public function userdaftar(){
      $data = array(
       'namalengkap' => $this->input->post('namalengkap'),
       'username' => $this->input->post('username'),
       'email' => $this->input->post('email'),
       'password' => $this->input->post('password')
       );
      $usr = $this->mdaftar->cekuser($data)->row()->username;
      $vdata;
      if($usr==$data['username']){
         $vdata['pesan']="Username sudah dipakai";
         $vdata['konfirmasi'] = "Gagal - ".$vdata['pesan'];
      }else{
         $this->mdaftar->daftaruser($data);
         $vdata['konfirmasi'] = "Sukses Daftar!";
        //  $vdata['status']=false;
      }

      //  $this->index($vdata);
      $this->session->set_flashdata('vdata',$vdata);
      redirect('daftar');

       unset($data);
    }
  }
?>
