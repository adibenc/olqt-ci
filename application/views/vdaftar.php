<div class="container">
	<?php
	if(isset($konfirmasi)){
		echo $konfirmasi;
	}else{}
	?>
	<div class="col-md-4 col-md-offset-8 panel panel-default" style="margin-right:-90px;margin-top: -20px; border:none; background-color: rgba(0,0,0,0.09);">
		<div class="panel-body warna">
			<!-- <form role="form" > -->
				<?php echo form_open('daftar/userdaftar');?>
				<h3>Daftar</h3>
				<hr style="margin-top: -5px;">
			  <div class="form-group">
			    <label>Nama Lengkap</label>
			    <input class="form-control" type="text" name="namalengkap" value="asds" placeholder="Nama Lengkap">
			  </div>
			  <div class="form-group">
			    <label>Username</label>
			    <input class="form-control" type="text" name="username" value="qwerdf" placeholder="Username">
			  </div>
			  <div class="form-group">
			    <label>Email</label>
			    <input class="form-control" type="email" name="email" value="qwel@gmail" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label>Password</label>
			    <input class="form-control" type="password" name="password" value="clickclick" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label>Re-Password</label>
			    <input class="form-control" type="password" name="repass" value="clickclick" placeholder="Re-Password">
			  </div>
			  <hr>
			  <div class="checkbox">
			    <label style="color: #fff"><input type="checkbox"> Apakah Anda setuju dengan kebijakan kami?</label>
			  </div>
			  <hr>
			  <button type="submit" class="btn btn-default tombol" name="daftar" value="Daftar">Daftar</button>
			</form>
		</div>
	</div>
</div>
<?php

 ?>
