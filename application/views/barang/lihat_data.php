<h3>Nama Barang</h3>
<?php 
	echo anchor('barang/post','Tambah Data', array('class' => 'btn btn-success btn-sm'));

 ?>
 <hr>
<table class="table tableborder">
	<tr>
		<th>No</th>
		<th>Nama Barang</th>
		<th>Harga Barang</th>
		<th colspan="2">Operasi</th>
	</tr>
	<?php 
		$no = 1;

		foreach($record->result() as $r){
			echo "
			 <tr>
			 	<td width = '10'>$no</td>
			 	<td>$r->nama_barang</td>
			 	<td>$r->harga</td>
			 	<td>".anchor('barang/edit/'.$r->barang_id,'edit',array('class'=>'btn btn-info'))."
			 		".anchor('barang/delete/'.$r->barang_id,'delete',array('class'=>'btn btn-danger'))."</td>
			 </tr>
			";
			$no++;
		}

	 ?>
</table>

<?= $paging; ?>