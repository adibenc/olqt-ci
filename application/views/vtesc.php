<h1>Coba Tes</h1>

<?php
if($page=='Coba Tes'){
 ?>
 <?php echo "benar = ".$qbenar; echo " salah = ".$qsalah;?>
 <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 text-center">
     <a href="<?php echo base_url('tesc/next/1')?>"><span class="w3-center w3-jumbo glyphicon glyphicon-play"><h2>Mulai Tes </h2></span></a>
   </div>
 </div>
<?php
}else if($page=='Mulai'){
?>
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
    echo form_open('tesc/next/'.++$urutan); ?>
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
<?php
}else if($page=='Cek'){
?>
<h1>#nosoal</h1>
  <div class="row text-center">
  <h2>Soal</h2>
  <?php echo $status."<br>" ;
    echo "idsoal = ".$idsoal."<br>";
    echo "jawabanmu = ".$vjawaban."<br>";
    echo "jawaban = ".$jawaban."<br>";
  ?>
<?php }else if($page=='Nilai'){
?>
  <div class="row text-center">
  <h2>Nilai</h2>
  <?php echo "benar = ".$qbenar; echo " salah = ".$qsalah."<br> Nilai ->".$nilai;?>
  </div>
<?php }?>
