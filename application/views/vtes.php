<?php

if($page=='Ketentuan Tes'){
 ?>
<div class="row">
  <h3>Ketentuan Tes</h3>
  <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-4" style="background-color:#00aa44;">
    <?=form_open('tes/next/1','class="form"')?>
    <?php echo $page; ?>
      <h3>Juz</h3>
      <select class="form-group" name="juz">
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
  <!-- <div class="row text-center">
  <div class="" id="soal">
    <h2>Soal</h2>
  </div>
  <div class="col-sm-4 col-md-4 col-lg-4 col-lg-offset-4" id="jawab">
    <input class="btn btn-block w3-xlarge" type="button" name="opsi1" value="opsi1">
    <input class="btn btn-block w3-xlarge" type="button" name="opsi2" value="opsi2">
    <input class="btn btn-block w3-xlarge" type="button" name="opsi3" value="opsi3">
    <input class="btn btn-block w3-xlarge" type="button" name="opsi4" value="opsi4">
  </div>
  </div> -->
  <h1>#<?php echo $urutan;?></h1> <?php echo "benar = ".$qbenar; echo " salah = ".$qsalah;?>
    <div class="row text-center">
    <h2>Soal</h2>
    <div class="" id="soal">
      <h2 id="soal"><?php echo $ds->soal;?></h2>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-lg-offset-3" id="jawab">
      <script async type="text/javascript">
        var soal;
        $(document).ready(function(){
          $("#btopsi").click(function(){
            $("#jawaban").val($("#o1").val());
          });
          $("#btopsi2").click(function(){
            $("#jawaban").val($("#o2").val());
          });
          $("#btopsi3").click(function(){
            $("#jawaban").val($("#o3").val());
          });
          $("#btopsi4").click(function(){
            $("#jawaban").val($("#o4").val());
          });
          $("#submitnext").click(function(){
            $("#urutan").val(parseInt($("#urutan").val())+1);
          });
        });
      </script>
      <?php //$urutan+=1;
      //echo form_open('tesc/mulai/'.$urutan);
      echo form_open('tes/next/'.++$urutan); ?>
        <input class="btn btn-block w3-xlarge" id="btopsi" type="button" name="idopsi" value="<?php echo $ds->a1;?>">
        <input class="btn btn-block w3-xlarge" id="btopsi2" type="button" name="idopsi" value="<?php echo $ds->a2;?>">
        <input class="btn btn-block w3-xlarge" id="btopsi3" type="button" name="idopsi" value="<?php echo $ds->a3;?>">
        <input class="btn btn-block w3-xlarge" id="btopsi4" type="button" name="idopsi" value="<?php echo $ds->a4;?>">
        <input id="o1" type="hidden" name="idopsi" value="<?php echo $ds->opsia;?>">
        <input id="o2" type="hidden" name="idopsi" value="<?php echo $ds->opsib;?>">
        <input id="o3" type="hidden" name="idopsi" value="<?php echo $ds->opsic;?>">
        <input id="o4" type="hidden" name="idopsi" value="<?php echo $ds->opsid;?>">
        <input id="o4" type="hidden" id="submitnext" name="idopsi" value="pluss">
        <input type="button" id="submitnext" name="u" value="plus">
        <input type="hidden" id="urutan" name="urutan" value="0<?php echo $urutan;?>">
        <input type="hidden" name="idsoal" value="<?php echo $ds->idsoal;?>">
        <input type="hidden" id="jawaban" name="vjawaban" value="-">
        <input class="btn btn-success" type="submit" id="submitnext" name="submitnext" value="next">
      </form>
    </div>
    </div>
<?php }else if($page=='Nilai'){
?>
  <div class="row text-center">
  <h2>Nilai</h2>
  <?php echo "benar = ".$qbenar; echo " salah = ".$qsalah."<br> Nilai ->".$nilai;?>
  </div>
<?php }?>
