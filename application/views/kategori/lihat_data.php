<h3>Kategori Barang</h3>
<?php 
	echo anchor('kategori/post','Tambah Data', array('class' => 'btn btn-success btn-sm'));
 ?>
 <hr>
<table class="table tableborder">
	<tr>
		<th>No</th>
		<th>Nama kategori</th>
		<th colspan="2">Operasi</th>
	</tr>
	<?php 
		$no = 1;

		foreach($record->result() as $r){
			echo "
			 <tr>
			 	<td width='10'>$no</td>
			 	<td>$r->nama_kategori</td>
			 	<td width='10'>".anchor('kategori/edit/'.$r->kategori_id,'Edit', array('class'=>'btn btn-info'))."</td>
			 	<td width='10'>".anchor('kategori/delete/'.$r->kategori_id,'Delete', array('class'=>'btn btn-danger'))."</td>
			 </tr>
			";
			$no++;
		}

	 ?>
</table>

<?= $paging; ?>