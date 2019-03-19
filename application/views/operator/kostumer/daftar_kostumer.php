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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('kostumer/tambah') ?>"><i class="fas fa-plus"></i> Tambah Data Baru</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Lengkap</th>
										<th>Kontak</th>
										<th>Alamat Lengkap</th>
										<th>Kode Pos</th>
										<th>Operasi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1?>
									<?php foreach ($record->result() as $r): ?>
										<tr>
											<td><?php echo $no ?></td>
											<td width="150"><?php echo $r->nama_kostumer ?></td>
											<td><?php echo $r->kontak ?></td>
											<td><?php echo $r->alamat ?></td>
											<td><?php echo $r->kode_pos ?></td>
											<td width="250">
												<a href="<?php echo site_url('kostumer/ubah/'.$r->id_kostumer) ?>"
												 class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
												<a onclick="deleteConfirm('<?php echo site_url('kostumer/hapus/'.$r->id_kostumer) ?>')"
												 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
											</td>
										</tr>
										<?php $no++; ?>
									<?php endforeach; ?>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("operator/_partials/footer.php") ?>
		</div>
		<!-- /.content-wrapper -->
	</div>
	<!-- /#wrapper -->

	<?php $this->load->view("operator/_partials/scrolltop.php") ?>
	<?php $this->load->view("operator/_partials/modal.php") ?>
	<?php $this->load->view("operator/_partials/js.php") ?>

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
</body>
</html>