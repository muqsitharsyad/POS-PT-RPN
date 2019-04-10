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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						Daftar Transaksi
					</div>
					<div class="card-body">
						<div class="form-group">
							<form action="<?php base_url('transaksi/laporan_operator') ?>" method="post" enctype="multipart/form-data">
				           <div class="form-row">
				                <div class="col-md-2">
				                    <input type="date" name="tgl1" class="form-control" placeholder="Tanggal Mulai" >
				                </div>
				                <div class="col-md-2">
				                    <input type="date" name="tgl2" class="form-control" placeholder="Tanggal Selesai" >
				                </div>
				                <button class="btn btn-primary" type="submit" name="submit">Cari</button>
				           </div>
				       		</form>
				        </div>

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th width="30px">No</th>
										<th>Tanggal Transaksi</th>
										<th>Nomor Transaksi</th>
										<th>Total</th>
										<th>Status</th>
										<th>Operasi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no = 1;
										$total = 0;
									?>
									<?php foreach ($record->result() as $r): 
										$trx = $r->nomor_transaksi;?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $r->tgl_transaksi ?></td>
											<td><?php echo $trx ?></td>
											<td><?php echo number_format($r->total) ?></td>
											<td><?php echo $r->status_bayar ?></td>
											<td><a href="<?php echo site_url('transaksi/cetak_transaksi_laporan/'.$trx) ?>"
												 target="_blank" class="btn btn-small"><i class="fas fa-print"></i> Cetak</a></td>
										</tr>
										<?php $no++; ?>
									<?php endforeach;?>								
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


<!-- <h3>Laporan Transaksi</h3>
<table border="1">
	<tr>
		<th>No</th>
		<th>tanggal TRX</th>
		<th>operator</th>
		<th>cabang</th>
		<th>total</th>
	</tr>
	<?php
	$no=1;
	$total = 0;
		foreach ($record->result() as $r) 
		{
			echo "<tr>	
					<td>$no</td>
					<td>$r->tgl_transaksi</td>
					<td>$r->nama_lengkap</td>
					<td>$r->nama_cabang</td>
					<td>$r->total</td>
				  </tr>";
				  $no++;
				  $total = $total+$r->total;
		}
	?>
	<tr>
		<td colspan="4">Total</td>
		<td><?php echo $total?></td>
	</tr>
</table> -->