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
						<form action="<?php base_url('barang/ubah') ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $record['id_barang'] ?>">
							<div class="form-group">
								<label for="nama">Nama Barang*</label>
								<input class="form-control type="text" name="nama_barang" value="<?php echo $record['nama_barang'] ?>" />
							</div>

							<div class="form-group">
								<label for="satuan">Satuan*</label><br>
								<input list="satuan" name="satuan" class="form-control" value="<?php echo $record['id_satuan'] ?>">
								<datalist id="satuan">
										<?php
											foreach ($satuan->result() as $s) {
												echo "<option value='$s->id_satuan'";
												echo $record['id_satuan']==$s->id_satuan?'selected':'';
												echo">$s->nama_satuan</option>";
											}
										 ?>
								</datalist>	
								<!-- <td>
									<select name="satuan">
										<?php 
											foreach ($satuan as $s) 
											{
												echo "<option value='$s->id_satuan'";
												echo $record['id_satuan']==$s->id_satuan?'selected':'';
												echo">$s->nama_satuan</option>";
											}
										?>
									</select>
								</td> -->								
							</div>	

							<div class="form-group">
								<label for="kategori">Kategori*</label><br>
								<input list="kategori" name="kategori" class="form-control" value="<?php echo $record['id_kategori'] ?>">
								<datalist id="kategori">
										<?php
											foreach ($kategori->result() as $k) {
												echo "<option value='$k->id_kategori'";
												echo $record['id_kategori']==$k->id_kategori?'selected':'';
												echo">$k->nama_kategori</option>";
											}
										 ?>
								</datalist>								
							</div>							

							<div class="form-group">
								<label for="harga">Harga*</label>
								<input class="form-control type="text" name="harga" value="<?php echo $record['harga'] ?>" />
							</div>
							<div class="form-group">
								<label for="harga">Harga + PPN*</label>
								<input class="form-control type="text" name="harga_ppn" value="<?php echo $record['harga_ppn'] ?>" />
							</div>
							<button class="btn btn-success" type="submit" name="submit">Ubah</button>
						</form>
					</div>
					<div class="card-footer small text-muted">
						* required fields
					</div>
				</div>
				<!-- /.container-fluid-->

				<!-- Sticky Footer-->
				<?php $this->load->view('admin/_partials/footer.php') ?>
			</div>
			<!-- /.content-wrapper-->
		</div>
		<!-- /#wrapper-->

	</div>
	<?php $this->load->view('admin/_partials/scrolltop.php') ?>
	<?php $this->load->view('admin/_partials/js.php') ?>
</body>
</html>