<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top" onload="setInterval('displayServerTime()', 1000);">
	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">
		<?php $this->load->view("admin/_partials/sidebar.php") ?>
		<div id="content-wrapper">
			<div class="container-fluid">
				<?php $this->load->view("admin/_partials/breadcumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('barang') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<form action="<?php base_url('barang/tambah') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama">Nama Barang*</label>
								<input class="form-control type="text" name="nama_barang" placeholder="Nama Barang"/>
							</div>

							<div class="form-group">
								<label for="kategori">Satuan*</label><br>
								<a href="<?php echo site_url('satuan/tambah') ?>"><i class="fas fa-plus"></i> Tambah Satuan Baru</a><br>
								<div class="form-group">
				                    <input list="satuan" name="satuan" class="form-control" placeholder="Satuan" >
				                </div>
								<datalist id="satuan">
										<?php
											foreach ($satuan->result() as $s) {
												echo "<option value='$s->id_satuan'>$s->nama_satuan</option>";
											}
										 ?>
								</datalist>									
							</div>

							<div class="form-group">
								<label for="kategori">Kategori*</label><br>
								<a href="<?php echo site_url('kategori/tambah') ?>"><i class="fas fa-plus"></i> Tambah Kategori Baru</a><br>
								<div class="form-group">
				                    <input list="kategori" name="kategori" class="form-control" placeholder="Nama Kategori" >
				                </div>
								<datalist id="kategori">
										<?php
											foreach ($kategori->result() as $k) {
												echo "<option value='$k->id_kategori'>$k->nama_kategori</option>";
											}
										 ?>
								</datalist>	
								<!-- <td>
									<select name="kategori">
										<?php 
											foreach ($kategori as $k) 
											{
												echo "<option value='$k->id_kategori'>$k->nama_kategori</option>";
											}
										?>
									</select>
								</td> -->								
							</div>						

							<div class="form-group">
								<label for="harga">Harga*</label>
								<input class="form-control type="text" name="harga" placeholder="Harga Produk" />
							</div>
							<div class="form-group">
								<label for="harga">Harga + PPN*</label>
								<input class="form-control type="text" name="harga_ppn" placeholder="Harga + PPN" />
							</div>
							<button class="btn btn-success" type="submit" name="submit">Tambah</button>
						</form>
					</div>
					<div class="card-footer small text-muted">
						* required fields
					</div>
				</div>
				<!-- /.container-fluid-->

				<!-- Sticky Footer-->
				<?php $this->load->view('admin/_partials/footer.php') ?>
				<datalist id="satuan">
					<?php
						foreach ($satuan->result() as $s) {
							echo "<option value='$s->nama_satuan'></option>";
						}
					?>
				</datalist>
			</div>
			<!-- /.content-wrapper-->
		</div>
		<!-- /#wrapper-->

	</div>
	<?php $this->load->view('admin/_partials/scrolltop.php') ?>
	<?php $this->load->view('admin/_partials/js.php') ?>
</body>
</html>