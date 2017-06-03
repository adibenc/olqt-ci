<?php
/*
  created 20/4/2017
  updates:
   - nambah library soal.php
*/

  class Tesc extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('mtes');
      $this->load->library('skor');
      $this->load->library('soal');
      $jml = 10;
      $this->skor->setJumlahsoal($jml);
    }
    public function index(){
      $data['page']='Coba Tes';
      if($this->session->userdata('user')&&$this->session->userdata('pass')){
        redirect(base_url('tes'));
      }else{
        set_cookie('benar','0','200');
        set_cookie('salah','0','200');
        $data['status']="";
        // $this->skor->setBenar(0);
        // $this->skor->setSalah(0);
        $data['qbenar']=get_cookie('benar');
        $data['qsalah']=get_cookie('salah');
        $this->viewtc($data);
      }
    }
    public function viewtc($data){
      //load library Soal.php @ libraries/Soal.php
      $this->load->view('core/core',$data);
      $this->load->view('vtesc',$data);
      // $this->load->view('core/footer');
    }

    public function mulai($nosoal = null){
      //load library Soal.php @ libraries/Soal.php
      $data['page'] = 'Mulai';
      $data['urutan'] = 0;

      if($this->input->post('urutan')){
        $data['urutan'] = $nosoal+1;
      }else{
        $data['urutan'] = $nosoal;
      }
      set_cookie('benar',get_cookie('benar'),'0');
      set_cookie('salah',get_cookie('salah'),'0');
      $data['qbenar']=get_cookie('benar');
      $data['qsalah']=get_cookie('salah');

      if(!$this->session->userdata('user')&&!$this->session->userdata('pass')){
        // $jml = 10;
        // $this->skor->setJumlahsoal($jml);
        $jml = $this->skor->getJumlahsoal();
        $arrsoal;
        for ($i=1; $i <= $jml; $i++){// ke soal
          $j=$i+rand(6100,6200);
          // $j=$i+6100;
          $arrsoal [$i]= $this->mtes->tes_coba($j)->row();
          // $this->soal->setArrsoal($this->mtes->tes_coba($j)->row())[$i];
        }
        // shuffle($arrsoal);
        $this->soal->setArrsoal($arrsoal);
        $data['jsoal'] = $jml;
        $data['ds'] = $this->soal->getArrsoal($nosoal);

        $this->viewtc($data);
      }else {
        redirect(base_url('tes'));
      }
    }

    public function cek($nosoal){
      $idsoal = $this->input->post('idsoal');
      $vjawaban = $this->input->post('vjawaban');
      $jawaban = $this->mtes->cek($idsoal)->row_array();
      // $data['page']='Cek';

      if($vjawaban==$jawaban['idopsi']){
        // $data['status'] = "Jawaban Benar";
        $data['status'] = true;
        $data['idsoal'] = $idsoal;
        $data['vjawaban'] = $vjawaban;
        $data['jawaban'] = $jawaban['ayat'];
        set_cookie('benar',get_cookie('benar')+'1','0');
        if($nosoal==1){
          set_cookie('benar',get_cookie('benar'),'0');
        }
      }else{
        // $data['status'] = "Jawaban Salah";
        $data['status'] = false;
        $data['idsoal'] = $idsoal;
        $data['vjawaban'] = $vjawaban;
        $data['jawaban'] = $jawaban['ayat'];
        set_cookie('salah',get_cookie('salah')+'1','0');
      }
    }

    public function next($nosoal){
      $jml = $this->skor->getJumlahsoal();
      if(--$nosoal<$jml){
        $this->cek(++$nosoal);
        redirect(base_url('tesc/mulai/'.$nosoal),'refresh');
      }else{
        $this->cek(++$nosoal);
        redirect(base_url('tesc/nilai'),'refresh');
      }
      // $this->mulai($nosoal);
    }
    public function nilai(){
      $data['page']='Nilai';
      $jmlsoal = get_cookie('benar')+get_cookie('salah');

      if($jmlsoal==$this->skor->getJumlahsoal()){
        $this->skor->setBenar(get_cookie('benar'));
        $this->skor->setSalah(get_cookie('salah'));
        $data['qbenar']=$this->skor->getBenar();
        $data['qsalah']=$this->skor->getSalah();
        $data['nilai']=$this->skor->getNilai();
        $this->viewtc($data);
      }else{
        $data['qbenar']=$this->skor->getBenar();
        $data['qsalah']=$this->skor->getSalah();
        $data['nilai']="Kesalahan cookie";
        // if(){
        //   redirect(base_url('tesc'),'refresh');
        // }
        $this->viewtc($data);
      }
      // $this->mulai($nosoal);
    }
    public function __destruct(){

    }
  }


 ?>
