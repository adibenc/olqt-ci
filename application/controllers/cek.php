<?php
/*
  created 20/4/2017
  file cek login
*/
if($this->session->userdata('user')&&$this->session->userdata('pass')){
  
}else{
  redirect('beranda');
}
 ?>
