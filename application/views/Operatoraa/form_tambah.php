<h3>Tambah Data Operator</h3>
<?php 
	echo form_open('operator/tambah');
?>
<table>
	<tr>
		<td>Nama Lengkap</td><td><input type="text" name="nama_lengkap" placeholder="Nama Lengkap"></td>
	</tr>
	<tr>
		<td>Username</td><td><input type="text" name="username" placeholder="Username"></td>
	</tr>
	<tr>
		<td>Password</td><td><input type="text" name="password" placeholder="Password"></td>
	</tr>
	<tr>
		<td colspan="2"><button type="submit" name="submit">Tambah</button></td>
	</tr>
</table>
</form>