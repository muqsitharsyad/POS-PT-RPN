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
						<a href="<?php echo site_url('operator') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<form action="<?php base_url('operator/tambah') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama">Nama Lengkap*</label>
								<input class="form-control type="text" name="nama_lengkap" placeholder="Nama Lengkap"/>
							</div>

							<div class="form-group">
								<label for="harga">Username*</label>
								<input class="form-control type="text" name="username" placeholder="Username" />
							</div>

							<div class="form-group">
								<label for="cabang">Cabang*</label><br>
								<a href="<?php echo site_url('cabang/tambah') ?>"><i class="fas fa-plus"></i> Tambah Cabang Baru</a><br>
								<div class="form-group">
				                    <input list="cabang" name="cabang" class="form-control" placeholder="Nama Cabang" >
				                </div>
								<datalist id="cabang">
										<?php
											foreach ($cabang->result() as $c) {
												echo "<option value='$c->id_cabang'>$c->nama_cabang</option>";
											}
										 ?>
								</datalist>								
							</div>

							<div class="form-group">
								<label for="harga">Password*</label>
								<input class="form-control type="text" name="password" placeholder="Password" />
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
			</div>
			<!-- /.content-wrapper-->
		</div>
		<!-- /#wrapper-->

	</div>
	<?php $this->load->view('admin/_partials/scrolltop.php') ?>
	<?php $this->load->view('admin/_partials/js.php') ?>
</body>
</html>