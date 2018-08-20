<h3>Tambah Data Kategori</h3>
<?php 
	echo form_open('kategori/post');
?>

<table class="table tableborder">
	<tr>
		<td width="130">Nama Kategori</td>
		<td><div class="col-sm-7"><input class="form-control" type="text" name="kategori" placeholder="kategori"></td></div>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" name="submit" class="btn btn-success">Simpan</button>
					<?= anchor('kategori','Batal',array('class'=>'btn btn-danger')) ?>
		</td>
	</tr>
</table>
</form>
