<h3>Edit Data barang</h3>
<?php 
	echo form_open('barang/edit');
?>
	
<table class="table tableborder">
	<input type="hidden" name="id" placeholder="" value="<?= $record['barang_id'] ?>">
	<tr>
		<td width="50%">Nama barang</td>
		<td width="50%"><input  class="form-control" type="text" name="barang" placeholder="barang" value="<?= $record['nama_barang'] ?>"></td>
	</tr>
	<tr>
		<td>Kategori barang</td>
		<td>
			<select name="kategori" class="form-control">
				<?php foreach ($kategori as $k) {
					echo "<option value='$k->kategori_id'>$k->nama_kategori</option>";
				} ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input class="form-control" type="text" name="harga" placeholder="harga" value="<?= $record['harga'] ?>"></td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" name="submit" class="btn btn-success">Simpan</button>
		<?= anchor('barang','Batal',array('class'=>'btn btn-danger')) ?>
	</td>
	</tr>
</table>
</form>
