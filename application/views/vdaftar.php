<h1>Daftar</h1>
<div class="row">
<div class="col-md-7 panel panel-default " style="border:none; background-color: rgba(0,0,0,0.09);">
<div class="panel-body">
<!-- <form class="form form-horizontal" action="index.html" method="post"> -->
  <?php echo form_open('daftar/userdaftar',"color:#000000;"); ?>
  <div class="form-group" >
    <label for="namalengkap">Nama Lengkap</label><input class="form-control" type="text" name="namalengkap" value="">
  </div>
  <div class="form-group" >
    <label for="username">Username</label> <input class="form-control" type="text" name="username" value="">
  </div>
  <div class="form-group" >
    <label for="email">Email</label><input class="form-control" type="email" name="email" value="">
  </div>
  <div class="form-group" >
    <label for="password">Password</label><input class="form-control" type="password" name="password" value="">
  </div>
  <div class="form-group" >
    <label for="password">Re-Password</label><input class="form-control" type="password" name="passcek" value="">
  </div>
  <div >
    <label for="daftar">Setuju?</label><input class="form-control checkbox" type="checkbox" name="daftar" value="Daftar">
  </div>
    <input class="form-control" type="submit" name="daftar" value="Daftar">
</form>
</div>
</div>
</div>
<?php
?>
