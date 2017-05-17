<?php
/*
  updates
  21/4/2017
  - bootstrap tampilan umum
  updates
  5/11/2017
  -<akma>
*/
  if($this->session->userdata('username')&&$this->session->userdata('password')){
?>
<h1>Beranda login</h1>
<?php  echo "Selamat datang user ".$this->session->userdata('user');?><br>
<div class="row hg-row">
  <div class="col-lg-12 col-md-12 col-sm-12 text-center">
    <a href="tes"><span class="w3-center w3-jumbo glyphicon glyphicon-play"><h2>Mulai Tes </h2></span></a>
  </div>
</div>
<!-- Tes Terakhir - Tips - Statistik Tes -->
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4" id="testerakhir">
    <h3>Tes Terakhir</h3>
    <p>
      testerakhir testerakhirtesterakhirtesterakhirtesterakhirtesterakhir
    </p>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4" id="tips">
    <h3>Tips</h3>
  </div>
</div>
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4" id="statistik">
  <h3>Statistik Tes </h3>
  </div>
</div>
<?php
  }else{
?><!--
<h1>Beranda normal</h1> -->
<header>
</header>
<body style="background-color: #00aa44;">
  <div class="jumbotron text-center hg-about">
    <div class="">
    <h1>Olqtahfidz</h1>
    <h3>Media tes hafalan al-Quran Online</h3>
    </div>
  </div>
  <div class="bg img-rounded">
  <div class="container-fluid bg-tips pd2em hg" id="tips">
    <div class="col-lg-offset-3">
    <h1>Tips</h1>
      <h3>1. Istiqomah</h3>
      <h3>2. Doa</h3>
      <h3>3. Tawakkal</h3>
      <h3>4. Cukup Tidur</h3>
      <h3>5. Cukup Makan</h3>
    </div>
  </div>
  <div class="container-fluid bg-cara text-center pd2em hg" id="coba">
    <!-- <div class="col-lg-offset-3"> -->
    <hr>
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
    <hr>
  </div>
  </div>
  <hr>
  </div>
  <div class="container-fluid bg-about pd2em hg-about" id="kami">
    <div class="col-lg-offset-3">
    <h1>Kami</h1>
    <h3>- comingsoon -</h3>
    </div>
  </div>
</body>
<?php

  }
?>
