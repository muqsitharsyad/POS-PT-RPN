<h3>Data Operator</h3>
<?php 
	echo anchor('operator/tambah','Tambah Data');
?>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama Lengkap</th>
		<th>Username</th>
		<th>Login Terakhir</th>
		<th colspan="2">Operasi</th>
	</tr>
	<?php
	$no = 1;
	foreach ($record->result() as $r) 
	{
		echo "<tr>
				<td>$no</td>
				<td>$r->nama_lengkap</td>
				<td>$r->username</td>
				<td>$r->login_terakhir</td>
				<td>".anchor('operator/ubah/'.$r->id_operator,'Ubah')."</td>
				<td>".anchor('operator/hapus/'.$r->id_operator,'Hapus')."</td>
			</tr>";
			$no++;
	}
	?>
</table>
