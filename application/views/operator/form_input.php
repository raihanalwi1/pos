<h3>Tambah Data Operator</h3>
<?php 
	echo form_open('operator/post');
?>

<table class="table tableborder">
	<tr>
		<td>Nama Lengkap</td>
		<td><input type="text" name="nama_lengkap" placeholder="Nama Lengkap"  class="form-control"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="username" placeholder="username" class="form-control"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" placeholder="password"  class="form-control"></td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" name="submit" class="btn btn-success">Simpan</button>
					<?= anchor('operator','Batal',array('class'=>'btn btn-danger')) ?>
		</td>
	</tr>
</table>
</form>
