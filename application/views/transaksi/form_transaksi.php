<h3>FORM Transaksi</h3>
<?php 
	echo form_open('transaksi');
 ?>
<table border="1">
	<tr>
		<td><input list="barang" name="barang" placeholder="Masukan Nama Barang"></td>
	</tr>
	<tr>
		<td><input type="text" name="jumlah" placeholder="Masukan Jumlah Barang"></td>
	</tr>
	<tr><td>
		<button type="submit" name="submit">SIMPAN</button>
		<?php echo anchor('transaksi/selesai','Selesai'); ?>
	</td></tr>

</table>
</form>
<table border="1">
	<tr><th>Detail Transaksi</th></tr>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Jumlah</th>
		<th>Harga</th>
		<th>Sub Total</th>
		<th>Operasi</th>
	</tr>
	<?php
		$no=1;
		$total=0;
		foreach ($detail as $d) {
			echo "<tr>
					<td>$no</td>
					<td>$d->nama_barang</td>
					<td>$d->jumlah</td>
					<td>$d->harga</td>
					<td>".$d->jumlah*$d->harga."</td>
					<td>".anchor('transaksi/hapus/'.$d->id_detailtrx,'hapus')."</td>
				  </tr>";
			$total = $total+($d->jumlah*$d->harga);
			$no++;
		}
	?>
	<tr>
		<td colspan="4"><p align="right">Total</p></td>
		<td><?php echo $total;?></td>
	</tr>
</table>

<datalist id="barang">
	<?php
		foreach ($barang->result() as $b) {
			echo "<option value='$b->nama_barang'></option>";
		}
	 ?>
</datalist>