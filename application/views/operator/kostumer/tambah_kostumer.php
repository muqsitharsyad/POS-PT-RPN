<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("operator/_partials/head.php") ?>
</head>
<body id="page-top">
	<?php $this->load->view("operator/_partials/navbar.php") ?>
	<div id="wrapper">
		<?php $this->load->view("operator/_partials/sidebar.php") ?>
		<div id="content-wrapper">
			<div class="container-fluid">
				<?php $this->load->view("operator/_partials/breadcumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('kostumer') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<form action="<?php base_url('kostumer/tambah') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama">Nama Lengkap*</label>
								<input class="form-control type="text" name="nama_kostumer" placeholder="Nama Lengkap"/>
							</div>

							<div class="form-group">
								<label for="harga">Kontak*</label>
								<input class="form-control type="number" name="kontak" placeholder="Kontak" />
							</div>

							<div class="form-group">
								<label for="harga">Alamat*</label>
								<input class="form-control type="text" name="alamat" placeholder="Alamat" />
							</div>

							<div class="form-group">
								<label for="harga">Kode Pos*</label>
								<input class="form-control type="number" name="kode_pos" placeholder="Kode Pos" />
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
				<?php $this->load->view('operator/_partials/footer.php') ?>
			</div>
			<!-- /.content-wrapper-->
		</div>
		<!-- /#wrapper-->

	</div>
	<?php $this->load->view('operator/_partials/scrolltop.php') ?>
	<?php $this->load->view('operator/_partials/js.php') ?>
</body>
</html>