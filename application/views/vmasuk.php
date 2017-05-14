<?php
/*
	updates
	-5/11/2017
*/
?>
<h1>Halaman Masuk</h1>
<?php echo form_open('masuk/cekmasuk','name="login" '); ?>
	<div class="container">
	<div class="col-md-4 col-md-offset-4 panel panel-default" style="border:none; background-color: rgba(0,0,0,0.09);">
		<div class="panel-body">
			<form role="form">
			  <div class="form-group">
			    <label style="color: #fff">Username:</label>
			    <input type="username" class="form-control" name="username" value="admin" placeholder="Username" style="height: 50px;">
			  </div>
			  <div class="form-group">
			    <label style="color: #fff">Password:</label>
			    <input type="password" class="form-control" name="password" value="admin" placeholder="Password" style="height: 50px;">
			  </div>
			  <div class="checkbox">
			    <label style="color: #fff"
			    ><input type="checkbox"> Remember me</label>
			  </div>
			  <button type="submit" class="btn btn-default tombol" name="submit" value="Login">login</button><br>
			  <p style="color: #fff">Belum punya akun? silahkan daftar <button type="submit" class="btn btn-default tombol">signup</button></p>
			</form>
		</div>
		</div>
	</div>
