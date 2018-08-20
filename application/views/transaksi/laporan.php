<h3>Laporan Transaksi</h3>
<?= form_open('transaksi/laporan') ?>

<table class="table table-bordered">
	<tr>
		<td>
			<div class="navbar-left" style="margin-right: 5px;">
				<input type="text" name="tanggal1" class="form-control" placeholder="Tanggal Mulai">
			</div>
			<div class="col-sm-2">
				<input type="text" name="tanggal2" class="form-control" placeholder="Tanggal Selesai">
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<button class="btn btn-primary btn-sm col-sm-4" type="submit" name="submit">Proses</button>
		</td>
	</tr>	
</table>

<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Tanggal Transaksi</th>
		<th>Operator</th>
		<th>Total Transaksi</th>
	</tr>
	<?php 
		$no = 1;
		$total = 0;
		foreach($record->result() as $r){
			echo "
				<tr>
					<td width='15px'>$no</td>
					<td>$r->tanggal_transaksi</td>
					<td>$r->nama_lengkap</td>
					<td>$r->total</td>
				</tr>
			";
			$no++;
			$total = $total+$r->total;
		}
	 ?>
	 <tr>
	 	<td colspan="3">Total</td>
	 	<td><?= $total; ?></td>
	 </tr>
</table>