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
						<a href="<?php echo site_url('cabang') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<form action="<?php base_url('cabang/tambah') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama">Nama*</label>
								<input class="form-control type="text" name="nama_cabang" placeholder="Nama Cabang"/>
							</div>
							<div class="form-group">
								<label for="nama">Alamat*</label>
								<input class="form-control type="text" name="alamat" placeholder="Alamat"/>
							</div>
							<div class="form-group">
								<label for="nama">Nomor Telepon*</label>
								<input class="form-control type="text" name="no_telp" placeholder="Nomor Telepon"/>
							</div>
							<div class="form-group">
								<label for="nama">Fax*</label>
								<input class="form-control type="text" name="fax" placeholder="Nama Fax"/>
							</div>
							<div class="form-group">
								<label for="nama">E-mail*</label>
								<input class="form-control type="text" name="email" placeholder="E-Mail"/>
							</div>
							<div class="form-group">
								<label for="nama">Website*</label>
								<input class="form-control type="text" name="web" placeholder="Website"/>
							</div>
							<div class="form-group">
								<label for="nama">Rekening*</label>
								<input class="form-control type="text" name="rek" placeholder="Nama Rekening"/>
							</div>
							<div class="form-group">
								<label for="nama">Nomor Rekening*</label>
								<input class="form-control type="text" name="no_rek" placeholder="Nomor Rekening"/>
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