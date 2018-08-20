<h3>Edit Data operator</h3>
<?php 
	echo form_open('operator/edit');
?>
	
<table class="table tableborder">
	<input type="hidden" name="id" placeholder="" value="<?= $record['operator_id'] ?>">
	<tr>
		<td>Nama Lengkap</td>
		<td><input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="<?= $record['nama_lengkap'] ?>"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input class="form-control" type="text" name="username" placeholder="username" value="<?= $record['username'] ?>"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input class="form-control" type="password" name="password" placeholder="isi jika ingin di ubah"></td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" name="submit" class="btn btn-success">Simpan</button>
					<?= anchor('operator','Batal',array('class'=>'btn btn-danger')) ?>
		</td>
	</tr>
</table>
</form>
