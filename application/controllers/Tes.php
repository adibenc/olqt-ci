<?php
/*
  created 20/4/2017
  updates:
  tes untuk anggota situs
*/
  class Tes extends CI_Controller{

    public function __construct(){
      parent::__construct();
      $this->load->model('mtes');
      $this->load->library('skor');
      $this->load->library('soal');
      $this->skor->setJumlahsoal(get_cookie('jsoal'));
    }
    public function index(){
      include ('cek.php'); //cek apakah sudah login
      $data['page']='Ketentuan Tes';

      set_cookie('benar','0','200');
      set_cookie('salah','0','200');
      $data['status']="";
      // $this->skor->setBenar(0);
      // $this->skor->setSalah(0);
      $data['qbenar']=get_cookie('benar');
      $data['qsalah']=get_cookie('salah');

      //load cbbox juz
      $juz = "<option>-Juz-</option>";
      $surat = "<option>-Surat-</option>";
      $ayat = "<option>-Ayat-</option>";
      // foreach ($this->mtes->loadjuz()->result() as $r) {
      //   $juz .="<option value='".$r->juz."'>".$r->juz."</option>";
      // }
      foreach ($this->mtes->loadsurat()->result() as $r) {
        $surat .="<option value='".$r->suraid."'>".$r->suraid."</option>";
      }
      // $data['loadjuz']=$juz;
      $data['loadsurat']=$surat;
      $data['loadayat']=$ayat;

      $this->load->view('core/core',$data);
      $this->load->view('vtes');
      // $this->load->view('core/footer');
    }

    public function loadcbox(){
      // if($this->input->post('juz')&&!$this->input->post('juz2')){
      //   $juz = $this->input->post('juz');
      //   foreach ($this->mtes->loadjuz2($juz)->result() as $r) {
      //     echo "<option value='".$r->juz."'>".$r->juz."</option>";
      //   }
      // }
      // if($this->input->post('juz2')&&!$this->input->post('surat')){
      //   $juz = $this->input->post('juz');
      //   $juz2 = $this->input->post('juz2');
      //   // $juz = "<option>-Juz-</option>";
      //   foreach ($this->mtes->loadsurat($juz,$juz2)->result() as $r) {
      //     echo "<option value='".$r->suraid."'>".$r->suraid."</option>";
      //   }
      // }
      if($this->input->post('surat')&&!$this->input->post('surat2')){
        // $juz = $this->input->post('juz');
        // $juz2 = $this->input->post('juz2');
        $surat = $this->input->post('surat');
        // $juz = "<option>-Juz-</option>";
        foreach ($this->mtes->loadsurat2($surat)->result() as $r) {
          echo "<option value='".$r->suraid."'>".$r->suraid."</option>";
        }
      }
      if($this->input->post('surat2')&&!$this->input->post('ayat')){
        // $juz = $this->input->post('juz');
        // $juz2 = $this->input->post('juz2');
        $surat = $this->input->post('surat');
        $surat2 = $this->input->post('surat2');
        // $juz = "<option>-Juz-</option>";
        foreach ($this->mtes->loadayat($surat,$surat2)->result() as $r){
          echo "<option value='".$r->verseid."'>".$r->verseid."</option>";
        }
        // $data['loadjuz2']=$juz;
      }
      if($this->input->post('ayat')){
        // $juz = $this->input->post('juz');
        // $juz2 = $this->input->post('juz2');
        $surat = $this->input->post('surat');
        $surat2 = $this->input->post('surat2');//ambil combo box kedua
        // $juz = "<option>-Juz-</option>";
        foreach ($this->mtes->loadayat2($surat2)->result() as $r){
          if($surat==$surat2){
            continue;
          }else{
            echo "<option value='".$r->verseid."'>".$r->verseid."</option>";
          }
        }
        // $data['loadjuz2']=$juz;
      }

      // return $juz;
      // $this->load->view('core/footer');
    }

    public function viewtc($data){
      //load library Soal.php @ libraries/Soal.php
      $this->load->view('core/core',$data);
      $this->load->view('vtes',$data);
      // $this->load->view('core/footer');
    }

    public function mulai($nosoal = null){
      //load library Soal.php @ libraries/Soal.php
      $data['page'] = 'Tes';
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

      //ketentuan tes
      // $this->skor->setJumlahsoal(get_cookie('jsoal'));
      $jml = $this->skor->getJumlahsoal();
      $surat = $this->soal->getSurat();
      $surat = 3;
      $arrsoal;

      for ($i=1; $i <= $jml; $i++){// ke soal
        $j=$i;
        $arrsoal [$i]= $this->mtes->tes($surat)->row();
        // $this->soal->setArrsoal($this->mtes->tes_coba($j)->row())[$i];
      }
      // shuffle($arrsoal);
      $this->soal->setArrsoal($arrsoal);
      $data['jsoal'] = $jml;
      $data['ds'] = $this->soal->getArrsoal($nosoal);

      $this->viewtc($data);
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
        // set_cookie('benar',get_cookie('benar')+'1','0');
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
      //set jumlah soal
      $jml;
      if($nosoal==1){
        $surat = $this->input->post('surat');
        $surat2 = $this->input->post('surat2');
        // $ayat = $this->input->post('ayat');
        // $ayat2 = $this->input->post('ayat2');
        $surat=3;
        $surat2=3;
        $ayat = 1;
        $ayat2 = 10;
        $jml = $this->input->post('jsoal');

        $this->skor->setJumlahsoal($jml);
        $this->soal->setKetentuan($surat,$surat2,$ayat,$ayat2);
        $this->soal->setSurat($surat);
      }else{
        $jml = $this->skor->getJumlahsoal();
      }
      set_cookie('jsoal',$jml,'200');
      $jmla = $this->skor->getJumlahsoal();
      //otomatis cek saat next
      if(--$nosoal<$jmla){
        $this->cek(++$nosoal);
        redirect(base_url('tes/mulai/'.$nosoal),'refresh');
      }else{
        $this->cek(++$nosoal);
        redirect(base_url('tes/nilai'),'refresh');
      }
    }
    public function nilai(){
      $data['page']='Nilai';
      $jmlsoal = get_cookie('benar')+get_cookie('salah');
      // $data['jsoal']=get_cookie('jsoal');
      $data['jsoal']=$this->skor->getJumlahsoal();
      $data['jsoal']=$jmlsoal;
      $this->skor->setBenar(get_cookie('benar'));
      $this->skor->setSalah(get_cookie('salah'));
      if($jmlsoal==$this->skor->getJumlahsoal()){
        $data['qbenar']=$this->skor->getBenar();
        $data['qsalah']=$this->skor->getSalah();
        $data['nilai']=$this->skor->getNilai();
        $this->viewtc($data);
      }else{
        $data['qbenar']=$this->skor->getBenar();
        $data['qsalah']=$this->skor->getSalah();
        $data['nilai']="Kesalahan cookie";
        // $data['jsoal']=$this->skor->getJumlahsoal();
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
