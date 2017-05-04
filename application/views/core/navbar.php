<?php
  /*
  navbar.php navigasi di atas
  updates
  21/4/2017
    - bootstrap navbar
  */
?>
<!-- navbar -->
<?php
  if($this->session->userdata('user')&&$this->session->userdata('pass')){
?>
<!-- <h1>Beranda login</h1> -->
nblogin
<!-- navbar lawas <a href="beranda">Beranda</a>|<a href="tes">Tes</a>|<a href="bantuan">Bantuan</a>|<a href="tanyajawab">TJ</a>|<a href="masuk/keluar">Keluar</a> -->
<nav class="col-md-12 navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="beranda">OLQT</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('beranda')?>">Beranda</a></li>
        <li><a href="<?php echo base_url('tes')?>">Tes</a></li>
        <li><a href="<?php echo base_url('bantuan')?>">Bantuan</a></li>
        <!-- coming soon!! <li><a href="tanyajawab">TJ</a></li> -->
        <li><a href="<?php echo base_url('pengguna')?>"><?php echo $this->session->userdata('user');?><span class="glyphicon glyphicon-user"></span></a></li>
        <li><a href="<?php echo base_url('masuk/keluar')?>">Keluar</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
  }else{
?>
<!-- <h1>Beranda </h1> -->
nbnormal
<!-- navbar lawas  <a href="beranda">Beranda</a>|<a href="daftar">Daftar</a>|<a href="masuk">Masuk</a> -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">OLQT</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('beranda#tips')?>">Tips</a></li>
        <li><a href="<?php echo base_url('beranda#coba')?>">Coba</a></li>
        <li><a href="<?php echo base_url('beranda#kami')?>">Kami</a></li>
        <li><a href="<?php echo base_url('daftar')?>">Daftar</a></li>
        <li><a href="<?php echo base_url('masuk')?>">Masuk</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
  }
?>
