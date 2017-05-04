<?php
/*
  //29/4/2017
  Skor.php == Model Skor

*/
class Skor {
  private $jumlahsoal;//integer
  private $benar;//integer
  private $salah;//integer
  private $nilai;//integer, double

  function __construct(){

  }
  public function getJumlahsoal() {
      return $this->jumlahsoal;
  }
  public function setJumlahsoal($jumlahsoal) {
      $this->jumlahsoal = $jumlahsoal;
  }

  public function getBenar() {
      return $this->benar;
  }
  public function setBenar($benar) {
      $this->benar += $benar;
  }
  public function getSalah() {
      return $this->salah;
  }
  public function setSalah($salah) {
      $this->salah += $salah;
  }
  public function getNilai() {
    $this->nilai = ($this->getBenar()/$this->getJumlahsoal())*100;
      return $this->nilai;
  }
  public function setNilai($nilai) {
      $this->nilai = $nilai;
  }
}
?>
