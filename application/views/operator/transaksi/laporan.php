<h3>Laporan Transaksi</h3>
<table border="1">
	<tr>
		<th>No</th>
		<th>tanggal TRX</th>
		<th>operator</th>
		<th>cabang</th>
		<th>total</th>
	</tr>
	<?php
	$no=1;
	$total = 0;
		foreach ($record->result() as $r) 
		{
			echo "<tr>	
					<td>$no</td>
					<td>$r->tgl_transaksi</td>
					<td>$r->nama_lengkap</td>
					<td>$r->nama_cabang</td>
					<td>$r->total</td>
				  </tr>";
				  $no++;
				  $total = $total+$r->total;
		}
	?>
	<tr>
		<td colspan="4">Total</td>
		<td><?php echo $total?></td>
	</tr>
</table>