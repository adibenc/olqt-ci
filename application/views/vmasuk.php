<?php
/*
	updates
	-5/11/2017
*/
?>
	<div class="container hg-6">
	<h1 class="col-md-offset-4">Halaman Masuk</h1>
	<div class="col-md-4 col-md-offset-4 panel panel-default" style="border:none; background-color: rgba(0,0,0,0.09);">
		<div class="panel-body">
			<?php echo form_open('masuk/cekmasuk','name="login" '); ?>
			<!-- <form role="form"> -->
			  <div class="form-group">
			    <label style="color: #000">Username:</label>
			    <input type="username" class="form-control" name="username" value="admin" placeholder="Username" style="height: 50px;">
			  </div>
			  <div class="form-group">
			    <label style="color: #000">Password:</label>
			    <input type="password" class="form-control" name="password" value="admin" placeholder="Password" style="height: 50px;">
			  </div>
			  <div class="checkbox">
			    <label style="color: #000"
			    ><input type="checkbox"> Remember me</label>
			  </div>
			  <button type="submit" class="btn btn-default tombol" name="submit" value="Login">Login</button><br>
			  <p style="color: #000">Belum punya akun? Silahkan daftar -
					<a href="<?php echo base_url('daftar');?>"><span class="glyphicon glyphicon-user"></span>Daftar</a></p>
				</p>
				</form>
					<!-- <button type="button" class="btn btn-default tombol" href="<?php echo base_url('daftar');?>">Signup</button> -->
		</div>
		</div>
	</div>
