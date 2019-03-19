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

				<!-- DataTables -->
				<div class="row">
		            <div class="col-lg-12">
		                <div class="alert alert-success">
		                    <strong>Transaksi Berhasil Silahkan Cetak Laporan Penjualan!</strong>
		                    <?php
		                    $nmr_trx = $this->session->userdata('nomor_transaksi');
		                    echo $nmr_trx;
		                    ?>
		                    <a class="btn btn-default" href="<?php echo site_url('transaksi') ?>"><span class="fa fa-backward"></span>Kembali</a>
		                    <a class="btn btn-info" href="<?php echo site_url('transaksi/cetak_transaksi')?>" target="_blank"><span class="fa fa-print"></span>Cetak</a>
		                    <button class="btn btn-warning"><?php echo anchor('transaksi/cetak_transaksi','Cetak'); ?></button>
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