<h3>Edit Data Kategori</h3>
<?php 
	echo form_open('kategori/edit');
?>

<table class="table tableborder">
	<input type="hidden" name="id" placeholder="" value="<?= $record['kategori_id'] ?>">
	<tr>
		<td width="130">Nama Kategori</td>
		<td><div class=""><input class="form-control" type="text" name="kategori" placeholder="kategori" value="<?= $record['nama_kategori'] ?>"></div></td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" name="submit" class="btn btn-success">Simpan</button>
		<?= anchor('kategori','Batal',array('class'=>'btn btn-danger')) ?></td>
	</tr>
</table>
</form>
