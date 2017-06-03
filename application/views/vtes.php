<?php

if($page=='Ketentuan Tes'){ ?>
<h3>Ketentuan Tes</h3>
<div class="row">
  <div class="col-lg-5 col-md-5 col-sm-5 col-lg-offset-3" style="background-color:#00aa44;">
    <?php echo form_open('tes/next/1','class="form-horizontal" style="margin:20px"')?>
    <?php //echo $page; ?>

      <div class="form-group">
      <label class="control-label col-sm-3">Surat</label>
      <div class="col-sm-3">
        <select class="form-control" id="surat" name="surat">
          <?php echo $loadsurat; ?>
        </select>
        </div>
        <div class="col-sm-2">
          <label for="juz2" class="control-label">-</label>
        </div>
        <div class="col-sm-3">
        <select class="form-control" id="surat2" name="surat2">
          <?php echo $loadsurat; ?>
        </select>
        </div>
      </div>
      <div class="form-group">
      <label class="control-label col-sm-3">Ayat</label>
        <div class="col-sm-3">
        <select class="form-control" id="ayat" name="ayat">
          <?php echo $loadayat; ?>
        </select>
        </div>
        <div class="col-sm-2">
          <label for="juz2" class="control-label">-</label>
        </div>
        <div class="col-sm-3">
        <select class="form-control" id="ayat2" name="ayat2">
          <?php echo $loadayat; ?>
        </select>
        </div>
      </div>
      <div class="form-group">
      <label class="control-label col-sm-3">Jumlah Soal</label>
        <div class="col-sm-8">
          <select class="form-control" name="jsoal">
            <option value="10">10</option>
            <option value="20">20</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-8">
          <input type="submit" class="form-control" name="name" value="Mulai Tes">
        </div>
      </div>
    </form>
  </div>
</div>

<?php }else if($page=='Tes'){ ?>
  <h1><?php echo $urutan." / ".$jsoal."";?></h1> <?php echo "benar = ".$qbenar; echo " salah = ".$qsalah; echo " surat ".$surat;?>
    <div class="row text-center">
    <!-- <h2>Soal</h2> -->
    <div class="" id="soal">
      <h2><?php echo $ds->soal;?></h2>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-lg-offset-3" id="jawab">
      <script async type="text/javascript">
        $(document).ready(function(){
          $("#o1").click(function(){
            $("#jawaban").val($("#o1").val());
          });
          $("#o1").click(function(){
            $("#jawaban").val($("#o1").val());
          });
          $("#o2").click(function(){
            $("#jawaban").val($("#o2").val());
          });
          $("#o3").click(function(){
            $("#jawaban").val($("#o3").val());
          });
          $("#o4").click(function(){
            $("#jawaban").val($("#o4").val());
          });
          $("#submitnext").click(function(){
            $("#urutan").val(parseInt($("#urutan").val())+1);
          });
        });
      </script>
      <?php  echo form_open('tes/next/'.++$urutan);
        $opsijawab = array(
          "<button id='o1' type='button' class='btn btn-block w3-xlarge' name='button' value='".$ds->opsia."' style='white-space:normal;'>$ds->a1</button>",
          "<button id='o2' type='button' class='btn btn-block w3-xlarge' name='button' value='".$ds->opsib."' style='white-space:normal;'>$ds->a2</button>",
          "<button id='o3' type='button' class='btn btn-block w3-xlarge' name='button' value='".$ds->opsic."' style='white-space:normal;'>$ds->a3</button>",
          "<button id='o4' type='button' class='btn btn-block w3-xlarge' name='button' value='".$ds->opsid."' style='white-space:normal;'>$ds->a4</button>"
        );
        shuffle($opsijawab);//shuffle button
        foreach ($opsijawab as $o) {
          echo $o;
        }
      ?>
        <input id="o4" type="hidden" id="submitnext" name="idopsi" value="pluss">
        <input type="button" id="submitnext" name="u" value="plus">
        <input type="hidden" id="urutan" name="urutan" value="0<?php echo $urutan;?>">
        <input type="hidden" name="idsoal" value="<?php echo $ds->idsoal;?>">
        <input type="hidden" id="jawaban" name="vjawaban" value="-">
        <input class="btn btn-success" type="submit" id="submitnext" name="submitnext" value="next">
      </form>
    </div>
    </div>
<?php }else if($page=='Nilai'){ ?>
  <div class="row text-center">
  <h2>Nilai</h2>
  <?php
    echo "benar = ".$qbenar; echo " salah = ".$qsalah."<br> Nilai ->".$nilai."<br>";
    echo "Jumlah soal ".$jsoal."";
  ?>
  </div>
<?php }?>
