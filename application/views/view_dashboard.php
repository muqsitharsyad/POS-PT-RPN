<ul>
	<li><?php echo anchor('kategori','Kategori Barang') ?></li>
	<li><?php echo anchor('barang','Data Barang') ?></li>
	<li><?php echo anchor('operator','Operator Sistem') ?></li>
	<li><?php echo anchor('form','Form Transaksi') ?></li>
	<li><?php echo anchor('laporan','Laporan Transaksi') ?></li>
	<li><?php echo anchor('logout','Logout') ?></li>

	<h2>Hai, <?php echo $this->session->userdata("username"); ?></h2>
</ul>