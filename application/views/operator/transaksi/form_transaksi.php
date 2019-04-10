<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("operator/_partials/head.php") ?>
</head>
<body id="page-top" onload="setInterval('displayServerTime()', 1000);">
	<?php $this->load->view("operator/_partials/navbar.php") ?>
	<div id="wrapper">
		<?php $this->load->view("operator/_partials/sidebar.php") ?>
		<div id="content-wrapper">
			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>
				
				<div class="card mb-3">
					<div class="card-header">
						<h5>FORM Kostumer</h5>
					</div>
					<div class="card-body">
						<form action="<?php base_url('transaksi') ?>" method="post" enctype="multipart/form-data">
				            <div class="form-group">
				              <div class="form-row">
				                <div class="col-md-8">
				                    <input list="nama_kostumer" name="nama_kostumer" class="form-control" placeholder="Nama Kostumer" >
				                </div>
				                <div class="col-md-3">
				                    <input type="text" name="nomor_transaksi" class="form-control" placeholder="Nomor Transaksi" >
				                </div>
							<button class="btn btn-success" type="submit" name="submit_kostumer">Tambah</button>
				              </div>
				            </div>
						</form>
					</div>
				</div>

				<div class="card mb-3">
					<div class="card-header">
						<h5>Detail Transaksi</h5>
					</div>
					<div class="card-body">
						<table class="table table-bordered" width="100%" cellspacing="0">
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Satuan</th>
								<th>Jumlah</th>
								<th>Harga</th>
								<th>Harga + PPN</th>
								<th>Sub Total</th>
								<th>Operasi</th>
							</tr>
							<tr>
								<td colspan="6"><p align="right">Total</p></td>
								<td></td>
								<td>
								</td>
							</tr>
						</table>
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