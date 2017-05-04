<?php
/*
  updates
  21/4/2017
  - bootstrap tampilan umum
*/
  if($this->session->userdata('user')&&$this->session->userdata('pass')){
?>
<h1>Beranda login</h1>
<?php  echo "Selamat datang user ".$this->session->userdata('user');?><br>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 text-center">
    <a href="tes"><span class="w3-center w3-jumbo glyphicon glyphicon-play"><h2>Mulai Tes </h2></span></a>
  </div>
</div>
<!-- Tes Terakhir - Tips - Statistik Tes -->
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
    <h3>Tes Terakhir</h3>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4">
    <h3>Tips</h3>
  </div>
</div>
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
  <h3>Statistik Tes </h3>
  </div>
</div>
<?php
  }else{
?>
<h1>Beranda normal</h1>
<header>

</header>

<div class="jumbotron text-center">
  <div class="">
  <h1>Olqtahfidz</h1>
  <h3>Media tes hafalan al-Quran Online</h3>
  </div>
</div>
<br>
<div class="container-fluid bg-tips pd2em" id="tips">
  <div class="col-lg-offset-3">
  <h1>Tips</h1>
    <h3>1. Istiqomah</h3>
    <h3>2. Doa</h3>
    <h3>3. Tawakkal</h3>
    <h3>4. Cukup Tidur</h3>
    <h3>5. Cukup Makan</h3>
  </div>
</div>
<br>
<div class="container-fluid bg-cara text-center pd2em" id="coba">
  <!-- <div class="col-lg-offset-3"> -->
  <h1>Cara Tes</h1>
  <div class="row col-lg-offset-4 ">
    <div class="col-lg-2">
      <a class="btn btn-lg btn-warning" href="<?php echo base_url('tesc')?>">Coba</a>
    </div>
    <div class="col-lg-2 col-sm-4">
      <h4>atau</h4>
    </div>
    <div class="col-lg-2 col-sm-4">
      <a class="btn btn-lg btn-warning" href="<?php echo base_url('daftar')?>">Daftar</a>
    </div>
  </div>
  <!-- </div> -->
</div>
<br>
</div>
<div class="container-fluid bg-coba pd2em" id="kami">
  <div class="col-lg-offset-3">
  <h1>Kami</h1>
  <h3>- comingsoon -</h3>
  </div>
</div>
<br>

<?php

  }
?>
