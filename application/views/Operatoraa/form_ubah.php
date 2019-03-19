<h3>Ubah Data Operator</h3>
<?php 
	echo form_open('operator/ubah');
?>
<input type="hidden" name="id" value="<?php echo $record['id_operator'] ?>">
<table>
	<tr>
		<td>Nama Lengkap</td><td><input type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $record['nama_lengkap'] ?>"></td>
	</tr>
	<tr>
		<td>Username</td><td><input type="text" name="username" placeholder="Username" value="<?php echo $record['username'] ?>"></td>
	</tr>
	<tr>
		<td>Password</td><td><input type="text" name="password" placeholder="Password"></td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" name="submit">Simpan</button></td>
	</tr>
</table>
</form>