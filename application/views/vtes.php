<?php

if($page=='Ketentuan Tes'){
 ?>
<div class="row">
  <h3>Ketentuan Tes</h3>
  <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-4" style="background-color:#00aa44;">
    <?=form_open('tes/mulai')?>
      <h3>Juz</h3>
      <select class="" name="juz">
        <option value="option">1</option>
        <option value="option">2</option>
        <option value="option">3</option>
      </select>
      <h3>Surat</h3>
      <select class="" name="surat">
        <option value="option">1</option>
        <option value="option">2</option>
        <option value="option">3</option>
      </select>
      <h3>Ayat</h3>
      <select class="" name="ayat">
        <option value="option">1</option>
        <option value="option">2</option>
        <option value="option">3</option>
      </select>
      <h3>Jumlah Soal</h3>
      <select class="" name="soal">
        <option value="option">10</option>
        <option value="option">20</option>
      </select>
      <input type="submit" name="name" value="Mulai Tes">
    </form>
  </div>
</div>
<?php }else if($page=='Tes'){
?>
<h1>#nosoal</h1>
  <div class="row text-center">
  <div class="" id="soal">
    <h2>Soal</h2>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-4 col-lg-offset-4" id="jawab">
    <input class="btn btn-block w3-xlarge" type="button" name="opsi1" value="opsi1">
    <input class="btn btn-block w3-xlarge" type="button" name="opsi2" value="opsi2">
    <input class="btn btn-block w3-xlarge" type="button" name="opsi3" value="opsi3">
    <input class="btn btn-block w3-xlarge" type="button" name="opsi4" value="opsi4">
  </div>
  </div>
<?php }
?>
