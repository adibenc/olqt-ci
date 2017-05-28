<?php
/*
  //26/4/2017
  Soal.php == Model Pertanyaan
  set function get variabel yg dibutuhkan
*/

class Soal {
    private $idsoal;
    private $idjawab;
    private $idopsi;//array
    private $soal;
    private $opsi;
    private $arrsoal;//array
    private $urutansoal=0;//array

    //ketentuan
    private $surat;
    private $surat2;
    private $ayat;
    private $ayat2;

    public function setKetentuan($surat,$surat2,$ayat,$ayat2){//all integer
      $this->surat =$surat;
      $this->surat2=$surat2;
      $this->ayat =$ayat;
      $this->ayat2=$ayat2;
    }

    public function setSurat($surat){//integer
      $this->surat=$surat;
    }
    public function getSurat(){//integer
      return $this->surat;
    }
    public function getSurat2(){//integer
      return $this->surat2;
    }
    public function getAyat(){//integer
      return $this->ayat;
    }
    public function getAyat2(){//integer
      return $this->ayat2;
    }
//end ketentuan
    public function getIdsoal() {
        return $this->idsoal;
    }

    public function setIdsoal($idsoal) {
        $this->idsoal = $idsoal;
    }

    public function getSoal() {
        return $this->soal;
    }

    public function setSoal($soal) {
        $this->soal = $soal;
    }

    public function getOpsijawab() {
        return $this->idjawab;
}

    public function setOpsijawab($idjawab) {
        $this->idjawab = $idjawab;
    }

    public function getIdopsi() {
      //return $this->array
        return $this->idopsi;
    }

    public function setIdopsi($idopsi) {
      //input array
        $this->idopsi = $idopsi;
    }

    public function getOpsi() {
      //return $this->array
        return $this->opsi;
    }

    public function setOpsi($opsi) {
      //input array
        $this->opsi = $opsi;
    }
    public function getArrsoal($nosoal = null) {
      //return $this->array
        return $this->arrsoal[$nosoal];
    }

    public function setArrsoal($arrsoal = null) {
      //input array
        $this->arrsoal = $arrsoal;
    }

    public function getUrutansoal() {
      // $this->urutansoal += $urutansoal;
        return $this->urutansoal;
    }
    public function setUrutansoal($urutansoal) {
        $this->urutansoal += $urutansoal;
    }
}
 ?>
