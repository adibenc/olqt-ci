<?php

class Mtes extends CI_Model{
  function __construct(){
    parent::__construct();
  }
  function loadjuz(){
    //tunda
    $q = "select distinct juz from quran";
    $query = $this->db->query($q);
    return $query;
    $query = null;
  }

  function loadjuz2($juz){
    //tunda
    $q = "select distinct juz from quran where juz>=".$juz;
    $query = $this->db->query($q);
    return $query;
    $query = null;
  }
  function loadsurat($juz = null,$juz2 = null){
    // $q = "select distinct suraid from quran where juz>=".$juz." and juz<=".$juz2;
    $q = "select distinct suraid from quran";
    $query = $this->db->query($q);
    return $query;
    $query = null;
  }
  function loadsurat2($surat){
    // $q = "select distinct suraid from quran where juz>=".$juz." and juz<=".$juz2." and suraid>=".$surat;
    $q = "select distinct suraid from quran where suraid>=".$surat;
    $query = $this->db->query($q);
    return $query;
    $query = null;
  }
  function loadayat($surat,$surat2){
    // $q = "select distinct verseid from quran where juz>=".$juz." and juz<=".$juz2." and suraid>=".$surat." and suraid<=".$surat2;
    $q = "select distinct verseid from quran where suraid>=".$surat." and suraid<=".$surat2;
    $query = $this->db->query($q);
    return $query;
    $query = null;
  }
  function loadayat2($surat){
    // $q = "select distinct verseid from quran where juz>=".$juz." and juz<=".$juz2." and suraid=".$surat;
    $q = "select distinct verseid from quran where suraid=".$surat;
    $query = $this->db->query($q);
    return $query;
    $query = null;
  }

  function tes_coba($nosoal){
    $mainq = "SELECT s.idsoal,s.soal,o.ayat as a1,o2.ayat as a2,o3.ayat as a3,o4.ayat as a4,s.opsia,s.opsib,s.opsic,s.opsid,j.idopsi
    from soal s inner join quran o on s.opsia = o.ID
    inner join quran o2 on s.opsib = o2.ID
    inner join quran o3 on s.opsic = o3.ID
    inner join quran o4 on s.opsid = o4.ID
    inner join jawaban j on j.idopsi = o.ID or j.idopsi = o2.ID or j.idopsi = o3.ID or j.idopsi = o4.ID where s.idsoal=j.idjawaban and s.idsoal= ?";

    $query = $this->db->query($mainq,array($nosoal));
    return $query;

    $query=null;
  }

  function tes($surat){
    $mainq = "SELECT s.idsoal,s.soal,o.ayat as a1,o2.ayat as a2,o3.ayat as a3,o4.ayat as a4,s.opsia,s.opsib,s.opsic,s.opsid,j.idopsi
    from soal s inner join quran o on s.opsia = o.ID
    inner join quran o2 on s.opsib = o2.ID
    inner join quran o3 on s.opsic = o3.ID
    inner join quran o4 on s.opsid = o4.ID
    inner join jawaban j on j.idopsi = o.ID or j.idopsi = o2.ID or j.idopsi = o3.ID or j.idopsi = o4.ID where s.idsoal=j.idjawaban and o.suraid>=?";

    $query = $this->db->query($mainq,array($surat));
    return $query;
    // return $mainq;

    $query=null;
  }

  function cek($idsoal){
    // SELECT idsoal,q.ayat from jawaban j,quran q where idsoal= 3 and j.idopsi=q.id
    // $query = $this->db->query("SELECT * from jawaban where idsoal= ?",array($idsoal));
    $query = $this->db->query("SELECT idsoal,idopsi,q.ayat from jawaban j,quran q where idsoal= ? and j.idopsi=q.id",array($idsoal));
    return $query;
    $query=null;
  }
}
 ?>
