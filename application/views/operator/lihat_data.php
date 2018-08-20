<h3>Nama Operator</h3>
<?php 
	echo anchor('operator/post','tambah data',array('class'=>'btn btn-success'));
 ?>
<table class="table tableborder" style="margin-top: 5px;">
	<tr>
		<th>No</th>
		<th>Nama Lengkap</th>
		<th>Username</th>
		<th>Last Login</th>
		<th colspan="2">Operasi</th>
	</tr>
	<?php 
		$no = 1;

		foreach($record->result() as $r){
			echo "
			 <tr>
			 	<td>$no</td>
			 	<td>$r->nama_lengkap</td>
			 	<td>$r->username</td>
			 	<td>$r->last_login</td>
			 	<td>".anchor('operator/edit/'.$r->operator_id,'edit',array('class'=>'btn btn-info'))."
			 		".anchor('operator/delete/'.$r->operator_id,'delete',array('class'=>'btn btn-danger'))."</td>
			 </tr>
			";
			$no++;
		}

	 ?>
</table>

<?= $paging; ?>