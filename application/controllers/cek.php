<?php
/*
  created 20/4/2017
  file cek login
*/
if($this->session->userdata('username')&&$this->session->userdata('password')){

}else{
  redirect('beranda');
}
 ?>
