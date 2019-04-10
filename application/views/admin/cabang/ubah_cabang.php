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
						<a href="<?php echo site_url('cabang') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<form action="<?php base_url('cabang/ubah') ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $record['id_cabang'] ?>">
							<div class="form-group">
								<label for="nama">Nama Cabang*</label>
								<input class="form-control type="text" name="nama" value="<?php echo $record['nama_cabang']?>" />
							</div>
							<div class="form-group">
								<label for="nama">Alamat*</label>
								<input class="form-control type="text" name="alamat" value="<?php echo $record['alamat']?>"/>
							</div>
							<div class="form-group">
								<label for="nama">Nomor Telepon*</label>
								<input class="form-control type="text" name="no_telp" value="<?php echo $record['no_telp']?>"/>
							</div>
							<div class="form-group">
								<label for="nama">Fax*</label>
								<input class="form-control type="text" name="fax" value="<?php echo $record['fax']?>"/>
							</div>
							<div class="form-group">
								<label for="nama">E-mail*</label>
								<input class="form-control type="text" name="email" value="<?php echo $record['email']?>"/>
							</div>
							<div class="form-group">
								<label for="nama">Website*</label>
								<input class="form-control type="text" name="web" value="<?php echo $record['website']?>"/>
							</div>
							<div class="form-group">
								<label for="nama">Rekening*</label>
								<input class="form-control type="text" name="rek" value="<?php echo $record['rekening']?>"/>
							</div>
							<div class="form-group">
								<label for="nama">Nomor Rekening*</label>
								<input class="form-control type="text" name="no_rek" value="<?php echo $record['no_rek']?>"/>
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