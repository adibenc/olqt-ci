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
<!-- <h1>Beranda login</h1>
<?php  echo "Selamat datang user ".$this->session->userdata('user');?><br> -->
<div class="row hg-row">
  <div class="col-lg-12 col-md-12 col-sm-12 text-center">
    <a href="tes"><span class="w3-center w3-jumbo glyphicon glyphicon-play" style="margin-top:10%;margin-bottom:10%;"><h2>Mulai Tes </h2></span></a>
  </div>
</div>
<!-- Tes Terakhir - Tips - Statistik Tes -->
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4" id="testerakhir">
    <h3>Tes Terakhir</h3>
    <p>
      testerakhir testerakh
      irtesterakhirtesterak
      hirtesterakhirtestera
      khir
    </p>
    Waktu<br>
    Benar<br>
    Salah<br>
    Nilai<br>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4" id="tips">
    <h3>Tips</h3>
  </div>
</div>
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4" id="statistik">
  <h3>Statistik Tes </h3>
  Total Benar<br>
  Total Salah<br>
  Rata-rata Benar<br>
  Rata-rata Salah<br>
  </div>
</div>
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="beranda">OLQT</a>
      <button type="button" class="navbar-toggle collapsed" name="button" data-toggle="collapse" data-target="#mainnavbar" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="mainnavbar" aria-expanded="false">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="lnk" href="<?php echo base_url('tes')?>">Tes</a></li>
        <!-- coming soon!! <li><a href="tanyajawab">TJ</a></li> -->
        <!-- <li><a class="lnk" href="<?php echo base_url('masuk/keluar')?>">Keluar</a></li> -->
      </ul>
    </div>
  </div>
</nav>
<?php
  }else{
?><!--
<h1>Beranda normal</h1> -->
<!-- <body style="background-color: #00aa44;"> -->
<div class="jumbotron" id="header">
    <div class="vertical-center">
    <h1 class="section-heading">OLQT</h1>
    <h3>Online Quran Tahfidz Test</h3>
    <!-- <h3>Media tes hafalan al-Quran Online</h3> -->
    </div>
</div>
<!-- tips -->
<div class="container">
<div class="row" id="tips">
  <div class="col-lg-12 text-center">
    <h1>Tips</h1>
  </div>
</div>
<div class="row">
  <div class="col-lg-3">
    <h3>1. Istiqomah</h3>
  </div>
  <div class="col-lg-4">
    <h3>2. Doa</h3>
  </div>
  <div class="col-lg-4">
    <h3>3. Tawakkal</h3>
  </div>
  <div class="col-lg-4">
    <h3>4. Cukup Tidur</h3>
  </div>
  <div class="col-lg-4">
    <h3>5. Cukup Makan</h3>
  </div>
</div>


<div class="row" id="coba">
  <hr>
  <div class="container-fluid bg-cara text-center pd2em ">
    <!-- <div class="col-lg-offset-3"> -->
    <h1>Cara Tes</h1>
    <div class="col-lg-2 col-sm-offset-3">
      <a class="btn btn-lg btn-warning" href="<?php echo base_url('tesc')?>">Coba</a>
    </div>
    <div class="col-lg-2 col-sm-4">
      <h4>atau</h4>
    </div>
    <div class="col-lg-2 col-sm-4">
      <a class="btn btn-lg btn-warning" href="<?php echo base_url('daftar')?>">Daftar</a>
    </div>
    <!-- </div> -->
  </div>
  <hr>
</div>

<div class="row" id="kami">
  <hr>
  <div class="container-fluid bg-about pd2em hg-about">
    <div class="col-lg-offset-3">
    <h1>Kami</h1>
    <h3>- comingsoon -</h3>
    </div>
  </div>
</div>
</div>
</body>
<?php

  }
?>
