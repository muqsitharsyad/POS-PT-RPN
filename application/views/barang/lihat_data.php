<h3>Data Barang</h3>
<?php 
	echo anchor('barang/tambah','Tambah Data');
?>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Kategori</th>
		<th>Harga</th>
		<th colspan="2">Operasi</th>
	</tr>
	<?php 
	$no = 1;
		foreach ($record as $r) {
			echo "<tr>
					<td>$no</td>
					<td>$r->nama_barang</td>
					<td>$r->nama_kategori</td>
					<td>$r->harga</td>
					<td>".anchor('barang/ubah/'.$r->id_barang,'Ubah')."</td>
					<td>".anchor('barang/hapus/'.$r->id_barang,'Hapus')."</td>
				</tr>";
			$no++;
		}
	?>
</table>
