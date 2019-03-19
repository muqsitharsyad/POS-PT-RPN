<h3>Ubah Data Kategori</h3>
<?php 
	echo form_open('kategori/ubah');
?>
<input type="hidden" name="id" value="<?php echo $record['id_kategori'] ?>">
<table>
	<tr>
		<td>Nama Kategori</td><td><input type="text" name="kategori" placeholder="kategori" 
			value="<?php echo $record['nama_kategori']?>"></td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" name="submit">Tambah</button></td>
	</tr>
</table>
</form>