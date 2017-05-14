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
  if($this->session->userdata('username')&&$this->session->userdata('password')){
?>
<nav class="col-md-12 navbar navbar-default" data-spy="affix">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="beranda">OLQT</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right  ">
        <li><a class="lnk" href="<?php echo base_url('beranda')?>">Beranda</a></li>
        <li><a class="lnk" href="<?php echo base_url('tes')?>">Tes</a></li>
        <li><a class="lnk" href="<?php echo base_url('bantuan')?>">Bantuan</a></li>
        <!-- coming soon!! <li><a href="tanyajawab">TJ</a></li> -->
        <li><a class="lnk" href="<?php echo base_url('pengguna')?>"><?php echo $this->session->userdata('user');?><span class="glyphicon glyphicon-user"></span><?php echo " ".$this->session->userdata('username')." "; ?></a></li>
        <li><a class="lnk" href="<?php echo base_url('masuk/keluar')?>">Keluar</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
  }else{
?>
<!-- nbnormal -->
<nav class="navbar navbar-default" data-spy="affix">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url('beranda');?>">OLQT</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('beranda#tips')?>">Tips</a></li>
        <li><a href="<?php echo base_url('beranda#coba')?>">Coba</a></li>
        <li><a href="<?php echo base_url('beranda#kami')?>">Kami</a></li>
        <li><a href="<?php echo base_url('daftar')?>"><span class="glyphicon glyphicon-user"></span>Daftar</a></li>
        <li><a href="<?php echo base_url('masuk')?>">Masuk</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
  }
?>
