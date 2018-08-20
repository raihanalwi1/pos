<h3>Tambah Data Barang</h3>
<?php 
	echo form_open('barang/post');
?>

<table class="table tableborder">
	<tr>
		<td>Nama barang</td>
		<td><input class="form-control" type="text" name="barang" placeholder="barang"></td>
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
		<td>Harga barang</td>
		<td><input class="form-control" type="text" name="harga" placeholder="harga"></td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" name="submit" class="btn btn-success">Simpan</button>
		<?= anchor('barang','Batal',array('class'=>'btn btn-danger')) ?>
	</td>
	</tr>
</table>
</form>
