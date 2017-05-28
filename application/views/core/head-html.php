<?php
  $title = $page;
  // <link href="<?php echo site_url('assets/css/style.css'); " rel="stylesheet">?>
<?php
  // <link href="<?php echo base_url('assets/css/bootstrap-responsive.css'); " rel="stylesheet">?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "-".$title."-" ;?></title>
  	<link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
  	<link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
  	<link href="<?php echo site_url('assets/css/w3.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login-layout.css'); ?>">
    <script src="<?php echo site_url('assets/js/jquery-3.2.1.min.js');?>"></script>
    <script src="<?php echo site_url('assets/js/jquery-ui.js'); ?>"></script>
  	<script src="<?php echo site_url('assets/js/bootstrap.js');?>"></script>
    <style media="screen">
      /*background*/
      .bg{
        background-color: rgba(0,0,0,0.1);
        background-color: #217844;
      }
      .bg-cara{
        background-color: #217844;
        color: #ffffff;
      }
      .bg-about{
        background-color: #217844;
        color: #ffffff;
      }
      .pd2em{
        padding:3em;
      }
      .hg{
        height: 700px;
      }
      .hg-6{
        /*height: 600px;*/
        height: 50%;
      }
      .hg-row{
        height:300px;
      }
      .hg-about{
        height: 500px;
      }
      .navbar-header .navbar-brand{
        color: #00aa44;
      }
      .lnk{
        color: #00aa44;
      }
      .vertical-center > .jumbotron .text-center{
        min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
        min-height: 100vh; /* These two lines are counted as one :-)       */

        display: flex;
        align-items: center;
      }
      #header{
        color: #000000;
        background-color: #217844;
        height: 500px;
      }
      #testerakhir{
        height: 300px;
        background-color: #217844;
      }
      #tips{
        background-color: #217844;
        color: #ffffff;
      }
      #statistik{
        height: 300px;
        background-color: #00aa44;
      }
    </style>
<?php  if($page=='Ketentuan Tes'){?>
<script type="text/javascript">
$(document).ready(function(){

    $('#surat').on('change',function(){
      var suratx = $(this).val();
      var surat2x = $('#surat2').val();
      var ayatx = $('#ayat').val();
      var ayat2x = $('#ayat2').val();
      if(suratx!="" || surat2x!="" || ayatx!="" || ayat2x!=""){
        // $('#surat').val("");
        $('#surat2').val("");
        $('#ayat').val("");
        $('#ayat2').val("");
      }
      if(surat){
          $.ajax({
              type:'POST',
              // url:'ajaxData.php',
              url:'<?php echo base_url('tes/loadcbox'); ?>',
              data:{surat:suratx},
              success:function(html){
                  $('#surat2').html(html);
                  $('#ayat').html('<option value="">Pilih surat dulu</option>');
              }
          });
      }else{
          $('#ayat').html('<option value="">Pilih juz2 dulu</option>');
      }
    });
    $('#surat2').on('change',function(){
      var suratx = $('#surat').val();
      var surat2x = $(this).val();
      if(surat){
          $.ajax({
              type:'POST',
              // url:'ajaxData.php',
              url:'<?php echo base_url('tes/loadcbox'); ?>',
              data:{surat:suratx,surat2:surat2x},
              success:function(html){
                  $('#ayat').html(html);
                  $('#ayat2').html('<option value="">Pilih surat dulu</option>');
              }
          });
      }else{
          $('#ayat').html('<option value="">Pilih juz2 dulu</option>');
      }
    });
    $('#ayat').on('change',function(){
      var suratx = $('#surat').val();
      var surat2x = $('#surat2').val();
      var ayatx = $(this).val();
      if(ayat){
          $.ajax({
              type:'POST',
              // url:'ajaxData.php',
              url:'<?php echo base_url('tes/loadcbox'); ?>',
              data:{surat:suratx,surat2:surat2x,ayat:ayatx},
              success:function(html){
                  $('#ayat2').html(html);
                  // $('#surat2').html('<option value="">Pilih surat dulu</option>');
              }
          });
      }else{
          $('#ayat2').html('<option value="">Pilih ayat2 dulu</option>');
      }
    });
});
</script>
  </script>
<?php } ?>

  </head>
  <!-- <body style="background-color: #79b79c; padding-top:100px;"> -->
  <body style="padding-top:100px; color:#000000;">
  <!-- padding-top: 70px; -->
