<?php
/*
  updates
  21/4/2017
  - bootstrap tampilan umum
*/
  if($this->session->userdata('user')&&$this->session->userdata('pass')){
?>
<h1><?php  echo $this->session->userdata('user');?></h1>
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
  <?php  echo "Selamat datang user ".$this->session->userdata('user');?>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4" style="background-color:#00aa44;">
    <h3>Tes Terakhir</h3>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4" style="background-color:#007744;">
    <h3>Bio</h3>
  </div>
</div>
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4">
    <h3>Statistik Tes</h3>
  </div>
</div>
<?php
  }else{
?>

<?php

  }
?>
